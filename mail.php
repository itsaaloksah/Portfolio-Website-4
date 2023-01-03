<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$msg= $_POST['msg'];
$to = "aalok.sah25@gmail.com";
$subject = "Mail From Contact Form - Aalok";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone = " . $phone . "\r\n Message =" . $msg;
$headers = "From: noreply@aaloksah.com.np";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>