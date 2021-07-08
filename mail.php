<?php
 	$to 		= $sbmail;
     $from 		= "noreply@teensyouths.com.ng";
 
     $headers  = "From: " . $from . "\r\n";
     $headers .= "Reply-To: ". $from . "\r\n";
     $headers .= "MIME-Version: 1.0\r\n";
     $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
     $headers .= "X-Priority: 1 (Highest)\n";
     $headers .= "X-MSMail-Priority: High\n";
     $headers .= "Importance: High\n";
 
     $subject = "You Joined the Revolution";
 
     $logo = 'https://teensyouths.com.ng/img/2.png';
     $url  = 'https://teensyouths.com.ng';
     $link = 'https://teensyouths.com.ng/./';
 
     $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>TeensYouths.. Let the revolution begin</title></head><link rel='stylesheet' href='https://teensyouths.com.ng/css/bootstrap.min.css'><body style='text-align: center;'>";
     $body .= "<section style='margin: 30px; margin-top: 50px ; background: #c92f2f; color: white;'>";
     $body .= "<img style='margin-top: 35px' src='{$logo}' alt='TeensYouths'>";
     $body .= "<h1 style='margin-top: 45px; color: #fbb710'>You joined the revolution</h1>
         <br/>";
     $body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> Thank you for joining the revolution. You will start receiving blog updates;</p>
         <br/>";
     $body .= '<table class="text-center" style="width:90%; margin-left: 45px; color: white; border: 1px solid #f9f9ff;">
    <tr>
     <th style="border: 1px solid #f9f9ff;">Email</th>
     <th style="border: 1px solid #f9f9ff;">Date</th>
   </tr>
   <tr style="border: 1px solid #f9f9ff;">
     <td style="border: 1px solid #f9f9ff;">'.$to.'</td>
     <td style="border: 1px solid #f9f9ff;">'.date('D, M d, Y h:i:sa', strtotime($date)).'</td>
   </tr>
 </table><br/>';
     $body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this email. This is a virtual email</p>";
     $body .= "<p style='text-align: center; padding-bottom: 50px;'></p>";	
     $body .= "<script src='https://teensyouths.com.ng/js/bootstrap/bootstrap.min.js'></script>";
     $body .= "</section>";	
     $body .= "</body></html>";
    echo $body;

?>