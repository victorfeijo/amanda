<?php
$send_email= new class_email_sender($name,$from,$to,$subject,$message);
$send_email->send_email();
?>

