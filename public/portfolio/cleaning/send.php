<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1926926444:AAEX5nhQjlqviJirilbi2LbOycNL3rHhMeU";

//Сюда вставляем chat_id
$chat_id = "-1001539544573";
if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $phone = ($_POST['phone']);
    $address = ($_POST['address']);
    $datetime = ($_POST['datetime']);
    $message = ($_POST['message']);
//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone,
        'Адрес:' => $address,
        'Дата:' => $datetime,
        'Сообщение:' => $message
    );

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
// отправляем данные боту в телеграмм
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
// проверяем условия отправки.
if ($sendToTelegram) {
  header('Location: modalorderRUS.php');
} else {
  echo "No data has been sent.  Error.";
}
}
?>