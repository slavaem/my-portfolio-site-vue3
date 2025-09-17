<?php
session_start();
header('Content-Type: application/json');

// ХОНЕЙПОТ: если поле заполнено — бот
if (!empty($_POST['website'])) {
    http_response_code(403);
    echo json_encode(['status' => 'error', 'message' => 'Bot detected']);
    exit;
}

// TIME TRAP: если форма отправлена слишком быстро — бот
if (!isset($_POST['form_time']) || (time() - (int)$_POST['form_time']) < 3) {
    http_response_code(429);
    echo json_encode(['status' => 'error', 'message' => 'Submitted too fast']);
    exit;
}

// Безопасное извлечение и очистка данных
function clean($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}

$name = clean($_POST['name'] ?? '');
$email = clean($_POST['email'] ?? '');
$message = clean($_POST['message'] ?? '');
$act = $_POST['act'] ?? '';

// Проверка на обязательные поля
if ($act !== 'order' || !$name || !$email || !$message) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
    exit;
}

// Простая валидация email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'Invalid email format']);
    exit;
}

// TELEGRAM API
$token = "5020297952:AAGAqDqa-azVojcUiQd62BrlnORVdOvwG68";
$chat_id = "406857883";

// Подготовка текста
$txt = "<b>New Message:</b>%0A";
$txt .= "<b>Name:</b> $name%0A";
$txt .= "<b>Email:</b> $email%0A";
$txt .= "<b>Message:</b> $message";

// Отправка в Telegram
$api_url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}";
$response = file_get_contents($api_url);
$responseData = json_decode($response, true);

// Проверка ответа Telegram
if (!empty($responseData['ok']) && $responseData['ok'] === true) {
    echo json_encode(['status' => 'success', 'message' => 'Message sent']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Server error. Message not sent']);
}
?>