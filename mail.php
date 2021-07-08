<?php
 	$to 		= $email;
   $from 		= "noreply@dotpedia.com.ng";
   $cmessage 	= "Best Regards<br/> <i>Team DotPedia</i>";

 $headers  = "From: " . $from . "\r\n";
 $headers .= "Reply-To: ". $from . "\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
   $headers .= "X-Priority: 1 (Highest)\n";
   $headers .= "X-MSMail-Priority: High\n";
   $headers .= "Importance: High\n";

   $subject = $subj;

   $logo = 'https://dotpedia.com.ng/images/cover.png';
   $url  = 'https://dotpedia.com.ng';

 $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>DotLive from DotEightPlus</title></head><link rel='stylesheet' href='https://dotpedia.com.ng/css/bootstrap.min.css'><body style='text-align: center;'>";
 $body .= "<section style='margin: 30px; margin-top: 50px ; background: #FFE9E6; color: #000;'>";
 $body .= "<img style='margin-top: 35px; width: 280px; height: 105px;' src='{$logo}' alt='DotLive'>";
 $body .= "<h1 style='margin-top: 45px; color: #ff0000'>Recover Your Password</h1>
   <br/>";
 $body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> You requested for a password reset</p><br/>";
 
 $body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #ff0000; text-decoration: none'><b>Click here to activate your email Address</b></a></p>
   <br/>";
 $body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Kindly ignore this mail if this wasn't from you.</p>";	
   $body .= "<p text-align: center;'><a href='https://dotpedia.com.ng/contact'><img src='https://dotpedia.com.ng/images/6.png'></a>";
   $body .= "<p style='text-align: center;'>Email.: <span style='color: #ff0000'>pdf@dotpedia.com.ng</span></p>";	
 $body .= "<p style='text-align: center;'>Call/Chat.: <span style='color: #ff0000'>+234(0) 810 317 1902</span></p>";	
 $body .= "<p style='text-align: center; padding-bottom: 50px;'>DotPedia from DotEightPlus</p>";	
 $body .= "<script src='https://dotpedia.com.ng/js/bootstrap.min.js'></script>";
 $body .= "</section>";	
 $body .= "</body></html>";
  echo $body;	

?>