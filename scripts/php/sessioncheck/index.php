<?php
session_start();
include("/usr/local/oPanel/config.php");
$checked = false;
//session_start();
//echo (time() - $_SESSION['timestamp']) . ">" . (60*$_oPanel['timeout']);
if($_SESSION['active'] == true) {
if( (time() - $_SESSION['timestamp']) < (60*$_oPanel['timeout'])) {
if($_SESSION['username'] == $_oPanel['username']) {
if($_SESSION['usermame'] == md5(base64_decode(md5($_oPanel['username'])))) {
if($_SESSION['pass'] == base64_decode(base64_decode(md5(base64_encode(md5(base64_decode($_oPanel['password']))))))) {
	$checked = true;
	$_SESSION['timestamp'] = time();
} else { echo "Password Error"; $_SESSION['active'] = false; }
} else { echo "Username Error"; $_SESSION['active'] = false; }
} else { echo "Username1 Error"; $_SESSION['active'] = false; }
} else { echo "Login Timedout"; $_SESSION['active'] = false; }
} else echo "Unactive";
session_write_close();
if($checked == false) exit();
