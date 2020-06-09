$(document).ready(function() 
{

	//signup
	$("#sub").click(function() 
	{
		var fname	 = $("#fname").val();
		var lname 	 = $("#lname").val();
		var email 	 = $("#email").val();
		var user 	 = $("#user").val();
		var pword  	 = $("#pword").val();
		var cpword 	 = $("#cpword").val();
		$("#exampleModalCenter").modal();

	var a = document.forms["myForm"]["fname"].value;
	var b = document.forms["myForm"]["lname"].value;
	var c = document.getElementById("email");
	var g = document.forms["myForm"]["email"].value;
	var d = document.forms["myForm"]["user"].value;
	var e = document.forms["myForm"]["pword"].value;
	var f = document.forms["myForm"]["cpword"].value;

    if (a == null || a == "") {
    document.getElementById("msg").innerHTML = "Please Input your First Name";
        return false;
    } else {

    	 if (b == null || b == "") {
    document.getElementById("msg").innerHTML = "Your Last Name can`t be empty";
        return false;
    } else {

    	  if (g == null || g == "") {
    document.getElementById("msg").innerHTML = "Please Input your Email Address";
        return false;
    } else {

    	 if (!c.checkValidity()) {
    document.getElementById("msg").innerHTML = c.validationMessage;
        return false;
    } else {

    	 if (d == null || d == "") {
    document.getElementById("msg").innerHTML = "Create a username";
        return false;
    } else {

    	 if (e == null || e == "") {
    document.getElementById("msg").innerHTML = "Create a secured Password";
        return false;
    }
    }
    }
}
}
}
		/*$.post("process.php",{name:username,uemail:email},function(data)
		{
			$("#msg").html(data);
		})*/

	$.ajax
	(
	{
		type 		:  'post',
		url			:  'https://pediaplus.com.ng/functions/init.php',
		data 		:  {fname:fname,lname:lname,email:email,user:user,pword:pword,cpword:cpword},
		success 	:  function(data)
		{
			$('#msg').html(data);
		}
	}
		)	
	})



	//signin
	$("#sign").click(function() 
	{
		var username	 = $("#username").val();
		var password 	 = $("#password").val();
$("#ModalCenter").modal();

	$.ajax
	(
	{
		type 		:  'post',
		url			:  'https://pediaplus.com.ng/functions/init.php',
		data 		:  {username:username,password:password},
		success 	:  function(data)
		{
			$('#msg').html(data);
		}
	}
		)

})

	//forgot
	$("#forgot").click(function() 
	{
		var emailer	 = $("#emailer").val();
		$("#forgotModalCenter").modal();

	$.ajax
	(
	{
		type 		:  'post',
		url			:  'https://pediaplus.com.ng/functions/init.php',
		data 		:  {emailer:emailer},
		success 	:  function(data)
		{
			$('#msg').html(data);
		}
	}
		)

})

		//reset
	$("#reset").click(function() 
	{
		var passworder	 = $("#passworder").val();
		var cpassword	 = $("#cpassword").val();
		var emailr  	 = $("#emailr").val();
		$("#resetModalCenter").modal();

	$.ajax
	(
	{
		type 		:  'post',
		url			:  'https://pediaplus.com.ng/functions/init.php',
		data 		:  {passworder:passworder, cpassword:cpassword, emailr:emailr},
		success 	:  function(data)
		{
			$('#msg').html(data);
		}
	}
		)

})

})