<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);

if (mail("cuminby@mail.ru", "Заявка с сайта", "Имя:  ".$name. " | Телефон:  ".$phone." | Сообщение: ".$massage." \r\n"))
 {     header("Location: /thanx.html");
       exit;
} else {
    echo "Возникла ошибка, перезвоните нам, пожалуйста 8 029 768 93 18 ";
}?>
