<?php
    $to = 'pdf@pediaplus.com.ng';
    $fullname = $_POST['fname']." ".$_POST['lname'];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= "X-Priority: 1 (Highest)\r\n";
    $headers .= "X-MSMail-Priority: High\r\n";
    $headers .= "Importance: High\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $body ='<table style="width:100%">
        <tr>
         <td>'.$fullname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>subject: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

     $send  = mail($to, $subject, $body, $headers);
     header("location: ./contacted");

?>
