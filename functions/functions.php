<?php

/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}

function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="col-md-12 close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}

function validator($error_message) {

$error_message = <<<DELIMITER
<div style="background: rgba(234, 114, 140, 0.9); color: white;" class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" style="color: white;" class="col-md-12 close sucess-op" data-dismiss="modal" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}



									/****** Helper Functions********/

function email_exist($email) {

	$sql = "SELECT * FROM signup WHERE `email` = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function username_exist($usname) {

	$sql = "SELECT * FROM signup WHERE `usname` = '$usname'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}





/** VALIDATE USER REGISTRATION **/

if(isset($_POST['fname']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['pword']) && isset($_POST['cpword']) && isset($_POST['inst'])) {

$fname 			= clean($_POST['fname']);
$tel	 		= clean($_POST['tel']);
$email	 		= clean($_POST['email']);
$uname	 		= clean($_POST['user']);
$pword    		= clean($_POST['pword']);
$cpword 		= clean($_POST['cpword']);
$inst			= clean($_POST['inst']);

if(email_exist($email)) {

			echo "Sorry! That email already has an account";
		} else {

if(username_exist($uname)) {

			echo "That username has been taken!";
		} else {


if($pword != $cpword) {

			echo "Password doesn`t match!";
			
		} else {
			register($fname, $tel, $email, $uname, $pword, $inst);
		}
	}
	}
	} // post request


	

/** REGISTER USER **/
function register($fname, $tel, $email, $uname, $pword, $inst) {

	$fnam = escape($fname);
	$emai = escape($email);
	$unam = escape($uname);
	$inst = escape($inst);
	$pwor = md5($pword);

	$datereg = date("Y-m-d");

	$activator = token_generator();
	
$sql = "INSERT INTO signup(`id`, `fname`, `usname`, `email`, `pword`, `datereg`, `active`, `tel`, `inst`, `activator`)";
$sql.= " VALUES('1', '$fnam', '$unam', '$emai', '$pwor', '$datereg', '0', '$tel', '$inst', '$activator')";
$result = query($sql);

//redirect to verify function
$subj = "VERIFY YOUR EMAIL";
$link = "https://dotpedia.com.ng/./activate?vef=".$activator;

$_SESSION['usemail'] = $email;

mail_mailer($email, $activator, $subj, $link);

//redirect to verify page
echo 'Loading...Please Wait!';
echo '<script>window.location.href ="./verify"</script>';
	 }



/* MAIL VERIFICATIONS */
function mail_mailer($email, $activator, $subj, $link) {

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
$body .= "<img style='margin-top: 35px; width: 280px; height: 105px;' src='{$logo}' alt='DotPedia'>";
$body .= "<h1 style='margin-top: 45px; color: #ff0000'>Activate your email to continue</h1>
<br/>";
$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> Thank you for signing up.;</p>";
$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>We've credited you free 5 PDFs Credit to get started.;</p>
<br/>";
$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #ff0000; text-decoration: none'><b>Click here to activate your email Address</b></a></p>
<br/>";
$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this email. This is a virtual email</p>";	
$body .= "<p text-align: center;'><a href='https://dotpedia.com.ng/contact'><img src='https://dotpedia.com.ng/images/6.png'></a>";
$body .= "<p style='text-align: center;'>Email.: <span style='color: #ff0000'>pdf@dotpedia.com.ng</span></p>";	
$body .= "<p style='text-align: center;'>Call/Chat.: <span style='color: #ff0000'>+234(0) 810 317 1902</span></p>";	
$body .= "<p style='text-align: center; padding-bottom: 50px;'>DotPedia from DotEightPlus</p>";	
$body .= "<script src='https://dotpedia.com.ng/js/bootstrap.min.js'></script>";
$body .= "</section>";	
$body .= "</body></html>";
$send = mail($to, $subject, $body, $headers);
}



/** SIGN IN USER **/
 	if(isset($_POST['username']) && isset($_POST['password'])) {

			$username        = clean(escape($_POST['username']));
			$password   	 = md5($_POST['password']);

			$sql = "SELECT * FROM `signup` WHERE `usname` = '$username' AND `pword` = '$password'";
			$result = query($sql);
			if(row_count($result) == 1) {

				$row 	= mysqli_fetch_array($result);
				$user 	= $row['usname'];
				$active = $row['active'];
				$email 	= $row['email'];

				if ($active == 0) {

					$activator = token_generator();

					//redirect to verify function
					$subject = "VERIFY YOUR EMAIL";
					$link 	 = "https://dotpedia.com.ng/./activate?vef=".$activator;

					mail_mailer($email, $activator, $subj, $link);

					//redirect to verify page
					echo '<script>window.location.href ="./verify"</script>';	
					
				}  else {

					if($username == $user) {
						
						$_SESSION['login'] = $username;

						echo 'Loading...Please Wait';	

						echo '<script>window.location.href ="./pdf"</script>';	
					} else {

						echo "This username doesn't have an account.";
					}

			} 

		}else {

			echo "Invalid Login";
		}
	}



/** FORGOT PASSWORD **/
if(isset($_POST['fgeml'])) {
	
	$email  = clean(escape($_POST['fgeml']));

	if(!email_exist($email)) {

		echo "Sorry! This email doesn't exit";
		
	} else {

	$activator = token_generator();

	//redirect to verify function
	$subj = "RESET YOUR PASSWORD";
	$link = "https://dotpedia.com.ng/./reset?vef=".$activator;

	$_SESSION['usemail'] = $email;

	fgmail_mailer($email, $activator, $subj, $link);

	//redirect to verify page
	echo 'Loading...Please Wait!';
	echo '<script>window.location.href ="./recover"</script>';

	}
}


/** FORGOT PASSWORD EMAIL **/
function fgmail_mailer($email, $activator, $subj, $link) {
	
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
$body .= "<img style='margin-top: 35px; width: 280px; height: 105px;' src='{$logo}' alt='DotPedia'>";
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
$send = mail($to, $subject, $body, $headers);
}
?>