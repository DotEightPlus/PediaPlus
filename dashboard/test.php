<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a id="opener">Open Window</a>

	<script type="text/javascript">
		
		var a = document.getElementById('opener'), w;
		a.onclick = function() {
			if (!w || w.closed) {

				w = window.open("https://dotaccount.doteightinc.com/apiput","_blank","menubar = 0, scrollbars = 0"); 
			} else {
				console.log('wndow')
			}
			w.focus();
		}

	</script>


</body>
</html>