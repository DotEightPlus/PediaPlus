<?php
include("functions/init.php");

								/******Validation User Reg *****/
$errors = [];

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['user']) || isset($_POST['pword']) && isset($_POST['cpword'])) {

$fname 			= clean($_POST['fname']);
$lname	 		= clean($_POST['lname']);
$email	 		= clean($_POST['email']);
$uname	 		= clean($_POST['user']);
$pword    		= clean($_POST['pword']);
$cpword 		= clean($_POST['cpword']);

if(email_exist($email)) {

			$errors[] = "Sorry! That email already has an account.";
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
		
                echo validation_errors($error); 

			}

		} else {

			if(register($fname, $email, $uname, $pword, $cpword)) {

				echo validation_errors($error); 

							} else {
								
				redirect("./okk?id=$uname");
							}

		}


	} // post request

/****register user*****/
function register($fname, $email, $uname, $pword, $cpword) {

	$fnam = escape($fname);
	$emai = escape($email);
	$unam = escape($uname);
	$pwor = md5($pword);

	$datereg = date("Y-m-d");


$sql = "INSERT INTO signup(`id`, `fname`, `usname`, `email`, `pword`, `datereg`, `active`)";
$sql.= " VALUES('1', '$fnam', '$unam', '$emai', '$pwor', '$datereg', '0')";
$result = query($sql);
confirm($result);
	 }


?>