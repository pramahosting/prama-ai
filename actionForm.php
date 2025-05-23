<?php

if(isset($_POST['submit'])){

$name = $_POST[‘name’];
$email = $_POST[’email’];
$phone = $_POST[‘phone’];
$message = $_POST[‘message’];

$mailTo = "pramod.singh@prama-ai.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;

mail($mailTo, $txt, $message);
header("Location: index.php?mailsend");
}