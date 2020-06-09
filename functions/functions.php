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

	$sql = "SELECT * FROM signup WHERE email = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function username_exist($usname) {

	$sql = "SELECT * FROM signup WHERE usname = '$usname'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function activated($username) {

	$sql = "SELECT * FROM signup WHERE `usname` = '$username' AND `active` = '0'" ;
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

							/******End of Helper Functions********/

							/******Validation User Reg *****/


$errors = [];
$min = 4;

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['user']) || isset($_POST['pword']) && isset($_POST['cpword'])) {

$fname 			= clean($_POST['fname']);
$lname	 		= clean($_POST['lname']);
$email	 		= clean($_POST['email']);
$uname	 		= clean($_POST['user']);
$pword    		= clean($_POST['pword']);
$cpword 		= clean($_POST['cpword']);

if(email_exist($email)) {

			$errors[] = "Sorry! That email already has an account";
		} else {

if(username_exist($uname)) {

			$errors[] = "That username has been taken!";
		} else {


if($pword != $cpword) {

			$errors[] = "Password doesn`t match!";
		}
	}
	}


		if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validator($error); 

			}

		} else {

			if(register($fname, $lname, $email, $uname, $pword, $cpword)) {

				echo validator($error); 

							} else {

				echo "Loading...Please wait!";												
				echo '<script>window.location.href ="./okk?email='.$email.'&user='.$uname.'"</script>';
							}

		}


	} // post request

/****register user*****/
function register($fname, $lname, $email, $uname, $pword, $cpword) {

	$fnam = escape($lname)." ".escape($fname);
	$emai = escape($email);
	$unam = escape($uname);
	$pwor = md5($pword);

	$datereg = date("Y-m-d");
	
$sql = "INSERT INTO signup(`id`, `fname`, `usname`, `email`, `pword`, `datereg`, `active`)";
$sql.= " VALUES('1', '$fnam', '$unam', '$emai', '$pwor', '$datereg', '0')";
$result = query($sql);
confirm($result);


	 }


								/******End of Validation reg********/

					/************************validate user login functions**********/

	$errors = [];

 	if(isset($_POST['username']) && isset($_POST['password'])) {

			$username        = clean($_POST['username']);
			$password   	 = clean($_POST['password']);

			if(empty($username)) {

				$errors[] = "Username cannot be empty";
			} else {


			if(empty($password)) {

				$errors[] = "Password cannot be empty";
			}
		}


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validator($error); 

				}

			} else {

				if(login_user($username, $password)) {
					echo validator("Loading...Please wait!");												
				 echo '<script>window.location.href ="dashboard/./"</script>';

				} else {

					echo validator("Invalid login!");
				}
			} 

		}


/************************ user login functions**********/

function login_user($username, $password) {

	$pword  	= md5($password);
	$usrname 	= escape($username);
	
$sql = "SELECT * FROM `signup` WHERE `usname` = '$usrname' AND `pword` = '$pword'";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user = $row['usname'];
	$active =  $row['active'];
	$email 	= $row['email'];

	if ($active == 0) {
		echo '<script>window.location.href ="./active?email='.$email.'"</script>';
	} else {

	if($usrname == $user) {
		session_start();
		$_SESSION['login'] = $usrname;
		return true;
	}
}
}

} //end of function 

	
	/************************ sverified **********/

function sverified() {

	if(isset($_POST['login'])) {
	session_start();
	
	$id = $_SESSION['verify'];	
	
$sql = "SELECT * FROM `signup` WHERE `activator` = '$id'";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$use = $row['activator'];
	$log = $row['usname'];

	if($id == $use) {
		
		$_SESSION['login'] = $log;
		unset($_SESSION['verify']);
		redirect("dashboard/./");
		return true;
	}
}
}

} //end of function 



/****forgot*****/
if(isset($_POST['emailer'])) {

		$email = $_POST['emailer'];

		if(empty($email)) {

				$errors[] = "Email cannot be empty";
			} else {

	if(!email_exist($email)) {

			$errors[] = "Sorry! That email is not registered.";
		}
		}

		if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validator($error); 

				}
		}  else {

			if(forgot($email)) {

				echo validator($error); 

							} else {

				echo "Loading...Please wait!";												
				echo '<script>window.location.href ="./retrieve"</script>';
							}

		}


	} // post request

/****register user*****/
function forgot($email) {
	session_start();
	$emai = escape($email);
	
  $_SESSION['retrieve']    =    md5(rand(0, 99999999999999));
  $retrieve         	   =    $_SESSION['retrieve'];

  if(!isset($retrieve)) {
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

    $subject = "PediaPlus - Forgot Password";

    $logo = 'https://pediaplus.com.ng/images/logo.png';
    $url  = 'https://pediaplus.com.ng';
    $link = 'https://pediaplus.com.ng/./reset?id='.$retrieve.'&email='.$to;

  $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>PediaPlus</title></head><body style='text-align: center;'>";
  $body .= "<section style='margin: 30px; margin-top: 50px ; background: white; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
  $body .= "<img style='margin-top: 35px' src='{$logo}' alt='PediaPlus'>";
  $body .= "<h1 style='margin-top: 45px; color: black; width: 100%'>Reset Password</h1>
    <br/>";
  $body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello! <br><b>{$to},</b><br/></p>";
  $body .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>You requested to reset your password</b>.</p>
    <br/>"; 
  $body .= "<p style='margin-left: 45px; text-align: left;'>Kindly disregard this message if the reset wasn`t from you/</p>
    <br/>";
  $body .= "<p style='margin-left: 45px; text-align: left;'>Kindly use the link below to reset your password</p>
    <br/>"; 
  $body .= "<p style='margin-left: 45px; text-align: left;'><a style='color: red; text-decoration: none;' href='{$link}'>Click here to reset your password.</a></p>";  
  $body .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: <a style='color: blue; text-decoration: none;' href='tel: +2348103171902'>+234 810 317 1902</a></p>";  
  $body .= "<p style='margin-left: 45px; text-align: left;'>or write to: <a style='color: blue; text-decoration: none;' href='mailto: pdf@pediaplus.com.ng'>pdf@pediaplus.com.ng</a></p>
    <br/>"; 
  $body .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";  
  $body .= "<p style='margin-left: 45px; text-align: left; padding-bottom: 50px;'><i>PediaPlus</i></p>";  
  $body .= "</section>";  
  $body .= "</body></html>";

    $send  = mail($to, $subject, $body, $headers);

}

	 } 	


	/****forgot*****/
if(isset($_POST['passworder']) || isset($_POST['cpassword']) || isset($_POST['emailr'])) {

			$pword           = md5($_POST['passworder']);
			$cpword      	 = md5($_POST['cpassword']);
			$email 			 = clean($_POST['emailr']);

if(empty($_POST['passworder'])) {

				$errors[] = "Please input a new password";
			} else {
	if(empty($_POST['cpassword'])) {

				$errors[] = "Confirm your Password";
			} else {			
if($pword != $cpword) {

			$errors[] = "Password doesn`t match!";
		}
	}
}

			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validator($error); 

				}

			} else {

				if(updte($pword, $cpword, $email)) {
					
					echo validator($error);
				} else {
					echo validator("Your Password has been Updated Successfully");
					echo '<script>window.location.href ="./updated?email='.$email.'"</script>';
					
				}
			} 

		}

/************************ update reset**********/

function updte($pword, $cpword, $email) {
	
	
$sqll = "UPDATE signup SET `pword` ='$pword' WHERE `email`= '$email'";
$res = query($sqll);
	session_start();
	$_SESSION['updte']    =    $email;
	}

/****/			


	/************************ sreset **********/

function sreset() {

	if(isset($_POST['reset'])) {
	session_start();
	
	$id = $_SESSION['updte'];	
	
$sql = "SELECT * FROM `signup` WHERE `email` = '$id'";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$use = $row['email'];
	$log = $row['usname'];

	if($id == $use) {
		
		$_SESSION['login'] = $log;
		unset($_SESSION['updte']);
		redirect("dashboard/./");
		return true;
	}
}
}

} //end of function 




						/**********username***********/
function username() {

$sql = "SELECT * FROM signup WHERE `usname` = '".$_SESSION['login']."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["fname"];
return true;
		} 
	}


						/**********user***********/
function user() {

$sql = "SELECT * FROM signup WHERE `usname` = '".$_SESSION['login']."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["usname"];
return true;
		} 
	}	



						/**********pdf credit***********/
function pdfcredit() {

$sql = "SELECT * FROM pdfcredit WHERE `username` = '".$_SESSION['login']."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["amt"];
return true;
		} 
	}		
?>