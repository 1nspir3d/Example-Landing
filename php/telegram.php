<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name']." ".$_POST['user_last-name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "1394589144:AAFuXdo_j6_MVYC-IICOI-yKsEzpf2gLQBk";
$chat_id = "-1001435213968";
$arr = array(
  'ФИО: ' => $name,
  'Телефон: ' => $phone,
  'Message: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>