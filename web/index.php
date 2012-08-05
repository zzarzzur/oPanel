<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title id='title' name='title' data-oPanel='main-title'>Home - oPanel on `<?php echo $_SERVER['SERVER_NAME']; ?>`</title>
		<link href="files/css/main.css" rel='stylesheet'></link>
		<script type="text/javascript" src="files/scripts/javascript/jquery.js"></script>
		<script type="text/javascript" src="files/scripts/javascript/main.js"></script>
	</head>
	<body>
		<div id='header' name='header'>
			<h3> oPanel on `<?php echo $_SERVER['SERVER_NAME']; ?>` </h3>
			<hr>
			<bindlink class="bindlink" id="bindlink-home" name="bindlink-home" data-oPanel="bindlink">Home</bindlink>
		</div>
		<iframe src="files/scripts/php/login/" id="sideiframe" data-opanel="target"></iframe>
		<iframe src="files/places/" id="mainiframe" data-opanel="target"></iframe>
	</body>
</html>
