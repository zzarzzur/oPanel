<?php
session_start();
include("/usr/local/oPanel/config.phpdb");
$checked = false;
$active = $_SESSION['active'];
//if($_SESSION['active'] == "false") {
if($_data['username'] == $_oPanel['username']) {
if($_data['pass'] == $_oPanel['password']) {
	$checked = true;
	//session_start();
	$_SESSION['timestamp'] = time();
	$_SESSION['active'] = true;
	$_SESSION['pass'] =  base64_decode(base64_decode(md5(base64_encode(md5(base64_decode($_data['pass']))))));
	$_SESSION['username'] = $_data['username'];
	$_SESSION['usermame'] = md5(base64_decode(md5($_data['username'])));	
	echo "Signed in";	
} else echo "Password Error";
} else echo "Username Error";
session_write_close();
