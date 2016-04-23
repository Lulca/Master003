<?php
 
$sendto   = "Anatolkruv@gmail.com"; // почта, на которую будет приходить письмо
$last_name = $_POST['last-name']; // сохраняем в переменную фамилию
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['mail']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
 
// Формирование заголовка письма
$subject  = "Registration fo treaning";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Регистрация нового человечка!</h2>\r\n";
$msg .= "<p><strong>Фамилия:</strong> ".$last_name."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<h1>Спасибо вы успешно зарегистрировались на тренинг!<h1>";
} else {
    echo "<h1>Случилась кака-то ошибка.<h1>";
}
 
?>