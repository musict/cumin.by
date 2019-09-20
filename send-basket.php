<?php
$phone = $_POST['phone'];
$name = $_POST['name'];
$time = $_POST['time'];
//
//
// $phone = htmlspecialchars($phone);
// $name = htmlspecialchars($name);
// $time = htmlspecialchars($time);
//
//
// $phone = urldecode($phone);
// $name = urldecode($name);
// $time = urldecode($time);
//
// $phone = trim($phone);
// $name = trim($name);
// $time = trim($time);


if (mail("cuminby@mail.ru", "Заявка с сайта", "Имя:  ".$name. " | Телефон:  ".$phone." | Сообщение: ".$time." "))
 {     header("Location: /thanks.html");
       exit;
} else {
    echo "Возникла ошибка, перезвоните нам, пожалуйста 8 029 768 93 18 ";
}?>
