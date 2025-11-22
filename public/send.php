<?php
header('Content-Type: application/json');
session_start();

/* ---------------------------------------------
    1. Загрузка переменных окружения
--------------------------------------------- */
$envPath = __DIR__ . '/.env';
if (!file_exists($envPath)) { 
    echo json_encode(['status' => 'error', 'message' => 'Missing .env file']);
    exit;
}

$env = parse_ini_file($envPath);

// ИСПРАВЛЕНИЕ ПРОБЕЛОВ
$token = $env['TELEGRAM_TOKEN'] ?? null;
$chat_id = $env['TELEGRAM_CHAT'] ?? null;

if (!$token || !$chat_id) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid configuration']);
    exit;
}

/* ---------------------------------------------
    2. Honeypot (анти-бот)
--------------------------------------------- */
if (!empty($_POST['website'])) {
    echo json_encode(['status' => 'error', 'message' => 'Bot detected']);
    exit;
}

/* ---------------------------------------------
    3. Time Trap — защита от моментальной отправки
    (Критическое исправление: деление на 1000)
--------------------------------------------- */
if (!isset($_POST['form_time'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing form time']);
    exit;
}

// Клиентский таймстамп (в миллисекундах) преобразуется в секунды
$client_time_sec = intval($_POST['form_time'] / 1000);

// Проверка: прошло ли менее 3 секунд (или время клиента сильно отличается от сервера)
if ((time() - $client_time_sec) < 3) {
    echo json_encode(['status' => 'error', 'message' => 'Sent too fast (Time Trap)']);
    exit;
}

/* ---------------------------------------------
    4. Rate limit — запрет спама (10 сек)
--------------------------------------------- */
if (!empty($_SESSION['last_submit']) && time() - $_SESSION['last_submit'] < 10) {
    echo json_encode(['status' => 'error', 'message' => 'Wait 10 seconds']);
    exit;
}

/* ---------------------------------------------
    5. Валидация данных
--------------------------------------------- */
function clean($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}

// ИСПРАВЛЕНИЕ ПРОБЕЛОВ
$name = clean($_POST['name'] ?? '');
$email = clean($_POST['email'] ?? '');
$message = clean($_POST['message'] ?? '');
$act = $_POST['act'] ?? '';

if ($act !== 'order' || !$name || !$email || !$message) {
    echo json_encode(['status' => 'error', 'message' => 'Missing fields or invalid action']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email format']);
    exit;
}

/* ---------------------------------------------
    6. Отправка в Telegram (через cURL)
--------------------------------------------- */
$text =
"<b>New Message</b>\n" .
"<b>Name:</b> $name\n" .
"<b>Email:</b> $email\n" .
"<b>Message:</b> " . str_replace("\n", " ", $message); // Убираем перенос строки

// ИСПРАВЛЕНИЕ ПРОБЕЛОВ
$params = [
    'chat_id' => $chat_id,
    'parse_mode' => 'HTML',
    'text' => $text
];

$url = "https://api.telegram.org/bot{$token}/sendMessage?" . http_build_query($params);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 5,
    CURLOPT_CONNECTTIMEOUT => 3, // Таймаут на подключение
]);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Проверка на ошибку cURL
if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    curl_close($ch);
    echo json_encode(['status' => 'error', 'message' => "cURL failed: $error_msg"]);
    exit;
}

curl_close($ch);

$data = json_decode($response, true);

if ($http_code === 200 && !empty($data['ok'])) {
    $_SESSION['last_submit'] = time();
    echo json_encode(['status' => 'success']);
} else {
    $err = $data['description'] ?? 'Unknown Telegram API error';
    echo json_encode([
        'status' => 'error',
        'message' => "Telegram API error: $err"
    ]);
}
?>