<?php
session_start();
if($_SESSION['active'] == true) include('/var/bwww/oPanel/scripts/php/sessioncheck/index.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Main </title>
	</head>
	<body>
		<?php if($_SESSION['active'] != true) echo "Welcome To oPanel, Please Login To Continue"; else ?>
	</body>
</html>
