<?php
function validate($word){
	$word = htmlentities($word);
	$word = strip_tags($word);
	$word = trim($word);
	$word = htmlspecialchars($word);
	return $word;
}
$http_origin = $_SERVER['HTTP_ORIGIN'];

/*if ($http_origin == "http://duetid.ru")
{  */
    // header("Access-Control-Allow-Origin: *");
// }
	print_r($_POST);
	$name = validate($_POST['name']);
	$phone = validate($_POST['phone']);
	// // $message1 = "Ура, пидорасы! У нас заказ от ".$name.". Скорее звоните по номеру  ".$phone;
	$to_email_address = "duetID@yandex.ru";
	$subject = "Новый отклик на сайте";
	$message = "У нас новый отклик от ".$name.". Перезвоните по номеру ".$phone;
	// // echo $message;
	// $result = mail($to_email_address,$subject,$message,"From: info@duetid.ru");
	// echo $result;
	$rsult = mail($to_email_address, $subject, $message, "From: info@duetid.ru");
	echo($rsult);
?>