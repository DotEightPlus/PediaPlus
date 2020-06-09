<?php
session_start();
include("functions/init.php"); 

  if(isset($_GET['email'])) {

    $emai    =  $_GET['email'];
    $user    =  $_GET['user'];

  $_SESSION['verify']       = md5(rand(0, 99999999999999));
  $verify                   = $_SESSION['verify'];

  $sql = "UPDATE `signup` SET `activator` = '$verify' WHERE `email` = '$emai'";
  $result = query($sql);
  confirm($result);

$sqll = "INSERT INTO pdfcredit(`amt`, `username`)";
$sqll.= " VALUES('5', '$user')";
$resultl = query($sqll);
confirm($resultl);

  if(!isset($verify)) {
   echo '<script>window.location.href ="./opps"</script>';
  } else {

    $to     = $emai;
    $from   = "pdf@pediaplus.com.ng";

  $headers = "From: $from";
  $headers = "From: " . $from . "\r\n";
  $headers .= "Reply-To: ". $from . "\r\n";
  $headers .= "X-Priority: 1 (Highest)\r\n";
  $headers .= "X-MSMail-Priority: High\r\n";
  $headers .= "Importance: High\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "PediaPlus - Account Activation";

    $logo = 'https://pediaplus.com.ng/images/logo.png';
    $url  = 'https://pediaplus.com.ng';
    $link = 'https://pediaplus.com.ng/./verified?id='.$verify;

  $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>PediaPlus</title></head><body style='text-align: center;'>";
  $body .= "<section style='margin: 30px; margin-top: 50px ; background: white; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
  $body .= "<img style='margin-top: 35px' src='{$logo}' alt='PediaPlus'>";
  $body .= "<h1 style='margin-top: 45px; color: black; width: 100%'>Email Verification</h1>
    <br/>";
  $body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello! <br><b>{$to},</b><br/></p>";
  $body .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>Thank you for creating an account on <b>PediaPlus</b>.</p>
    <br/>"; 
  $body .= "<p style='margin-left: 45px; text-align: left;'>You will be awarded <b>5 free PDF Credit</b> to get started on <b>PediaPlus</b><br/> once your account is activated.</p>
    <br/>";
  $body .= "<p style='margin-left: 45px; text-align: left;'>Kindly use the link below to verify this email address</p>
    <br/>"; 
  $body .= "<p style='margin-left: 45px; text-align: left;'><a style='color: red; text-decoration: none;' href='{$link}'>Click here verify this email.</a></p>";  
  $body .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: <a style='color: blue; text-decoration: none;' href='tel: +2348103171902'>+234 810 317 1902</a></p>";  
  $body .= "<p style='margin-left: 45px; text-align: left;'>or write to: <a style='color: blue; text-decoration: none;' href='mailto: pdf@pediaplus.com.ng'>pdf@pediaplus.com.ng</a></p>
    <br/>"; 
  $body .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";  
  $body .= "<p style='margin-left: 45px; text-align: left; padding-bottom: 50px;'><i>PediaPlus</i></p>";  
  $body .= "</section>";  
  $body .= "</body></html>";

    $send  = mail($to, $subject, $body, $headers);
    header("location: ./verify");
 }
 } else {
  header("location: ./opps");
}
?>