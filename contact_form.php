<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "popescumianda@gmail.com";
$subject = "Mesaje Formular 2myblog";
$txt ="Nume : ". $name . "\r\nEmail : " . $email . "\r\nMesaj : \r\n" . $message;
$headers = "From: $email" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>