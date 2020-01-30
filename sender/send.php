<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];


$fio = urldecode($fio);
$email = urldecode($email);

$fio = trim($fio);
$email = trim($email);

// echo $name;
// echo "<br>";
// echo $mail;
// echo "<br>";
// echo $message;
if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>