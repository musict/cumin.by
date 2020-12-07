<?php
if (isset($_POST['g-recaptcha-response'])) $captcha_response = $_POST['g-recaptcha-response'];
else die('На форме нет капчи! Обратитесь к администратору!');
$url = 'https://www.google.com/recaptcha/api/siteverify';
$params = [
    'secret' => '6LfMSfUZAAAAAHLC4Q00D5QD1yrhzWwlp1EZDg8T',
    'response' => $captcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
if(!empty($response)) $decoded_response = json_decode($response);
$success = false;
if ($decoded_response && $decoded_response->success)
{
    $success = $decoded_response->success;
}

if ($result = $success)
	{
	  	$name = $_POST['name'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$name = htmlspecialchars($name);
		$phone = htmlspecialchars($phone);
		$name = urldecode($name);
		$phone = urldecode($phone);
		$name = trim($name);
		$phone = trim($phone);

		if (mail("cuminby@mail.ru", "Заявка с сайта", "Имя:  ".$name. " | Телефон:  ".$phone." | Сообщение: ".$message." \r\n"))
		 {     header("Location: /thanks.html");
		       exit;
		} else {
		    echo "Возникла ошибка, перезвоните нам, пожалуйста 8 029 768 93 18 ";
		}
	}
else die('Вы не прошли проверку "Я не робот"');