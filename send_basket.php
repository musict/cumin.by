<?php
$gr100 = $_POST['gr100'];
$ml100 = $_POST['ml100'];
$ml250 = $_POST['ml250'];
$ml500 = $_POST['ml500'];

$index = $_POST['index'];
$oblast = $_POST['oblast'];
$city = $_POST['city'];
$street = $_POST['street'];
$d = $_POST['d'];
$kv = $_POST['kv'];
$phone = $_POST['phone'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];


$gr100 = htmlspecialchars($gr100);
$ml100 = htmlspecialchars($ml100);
$ml250 = htmlspecialchars($ml250);
$ml500 = htmlspecialchars($ml500);

$index = htmlspecialchars($index);
$oblast = htmlspecialchars($oblast);
$city = htmlspecialchars($city);
$street = htmlspecialchars($street);
$d = htmlspecialchars($d);
$kv = htmlspecialchars($kv);
$phone = htmlspecialchars($phone);
$name1 = htmlspecialchars($name1);
$name2 = htmlspecialchars($name2);


$gr100 = urldecode($gr100);
$ml100 = urldecode($ml100);
$ml250 = urldecode($ml250);
$ml500 = urldecode($ml500);

$index = urldecode($index);
$oblast = urldecode($oblast);
$city = urldecode($city);
$street = urldecode($street);
$d = urldecode($d);
$kv = urldecode($kv);
$phone = urldecode($phone);
$name1 = urldecode($name1);
$name2 = urldecode($name2);

$gr100 = trim($gr100);
$gr100 = trim($gr100);
$ml250 = trim($ml250);
$ml500 = trim($ml500);

$index = trim($index);
$oblast = trim($oblast);
$city = trim($city);
$street = trim($street);
$d = trim($d);
$kv = trim($kv);
$phone = trim($phone);
$name1 = trim($name1);
$name2 = trim($name2);


if (mail("cuminby@mail.ru", "Заявка с сайта", "Семена :  ".$gr100. " | 100ml :  ".$ml100. " | 250ml :  ".$ml250. " | 500ml :  ".$ml500. " \r\n
Индекс :  ".$index." | Область :  ".$oblast." | Город :  ".$city." | Улица :  ".$street." | Дом :  ".$d." | Квартира :  ".$kv." | \r\n
 Телефон :  ".$phone." | Фамилия :  ".$name1." | Имя :  ".$name2." |  \r\n"))
 {     header("Location: /thanks.html");
       exit;
} else {
    echo "Возникла ошибка, перезвоните нам, пожалуйста 8 029 768 93 18 ";
}?>
