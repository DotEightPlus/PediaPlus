$(document).ready(function() 
{

	//signup
	$("#sub").click(function() 
	{
		var fname	 = $("#fname").val();
		var tel  	 = $("#tel").val();
		var email 	 = $("#email").val();
		var inst 	 = $("#inst").val();
		var user 	 = $("#usname").val();
		var pword  	 = $("#pword").val();
		var cpword 	 = $("#cpword").val();
		
		if (fname == "" || fname == null) {

			$('#msg').html("Input your full name please");

		} else {

		if(tel == "" || tel == null) {

			$('#msg').html("Telephone number cannot be empty");

		} else {

			if(email == "" || email == null) {

				$('#msg').html("Invalid email address");

			} else {

			if(inst == "" || inst == null) {

				$('#msg').html("Fill in your institution name");

			}else {

			if(user == "" || user == null) {

				$('#msg').html("Create a username");

			}else {
			
				if(pword == "" || pword == null) {

					$('#msg').html("Create a secured password");

				}else {

				if(cpword == "" || cpword == null) {

					$('#msg').html("Confirm your password");

				}else {

					if(pword != cpword) {

						$('#msg').html("Password does not match");

					} else {

						$('#msg').html("Loading...Please Wait");

						$.ajax
(
{
    type        :  'post',
    url         :  'functions/init.php',
    data        :  {fname:fname,tel:tel,email:email,user:user,pword:pword,cpword:cpword},
    success     :  function(data)
    {
        $('#err').text(data);
    }
}
    )
					}

				}
				}

			}
			}
			}
		}


				}
		$("#exampleModalCenter").modal();
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