<title>hey</title>

<?php
session_start();

$_SESSION['me'] = '<script type="text/javascript">console.log(document.title)</script>';

echo $_SESSION['me'];

?>
<input type="text" name="msgs" id="dd" onload="chc();">

<script type="text/javascript">
		function chc() {
			document.title;
		}
		
	</script>