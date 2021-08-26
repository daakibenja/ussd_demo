<?php
// variables 
$session_id = $_POST['sessionId'];
$service_code = $_POST['serviceCode'];
$phone_number = $_POST['phoneNumber'];
$text = $_POST['text'];
if($text == ""){
    // First request from user.
    $response = "CON What would you want to check\n";
    $response .= "1. My Account\n";
    $response .= "2. My phone Number";

}
else if($text=="1"){
    $response = "CON Choose account information you want to view\n";
    $response .= "1. Account Number\n";
    $response .= "2. Account Balance";
}
else if($text == 2){
    $response = "END Your phone number is ".$phone_number;
}
else if($text == "1*1"){
    $account_number = "ACC1001";
    $response = "END Your account Number is ".$account_number;
}
else if($text == "1*2"){
    $balance = "UGX 10,000";
    $response = "END Your balance is ".$balance;
}

header('Content-Type: text/plain');
echo $response;
?>