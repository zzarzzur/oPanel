<?php

$_data = array();
$_data['username'] = $_POST['user'];
$_data['pass'] = $_POST['pass'];
if($_GET['Login'] || $_POST['Login']) include("/usr/local/oPanel/scripts/php/sessionnew/index.php");
else {
session_start();if($_SESSION['active'] != true && $checked == false) {  echo "<html><head><title>Log into oPanel</title></head><body><form action='' method='POST'> <table><tr><td><p>Username:</p></td><td><input type='text' name='user' id='user'></td></tr><tr><td><p>Password:</p></td><td><input type='password' name='pass' id='pass'></td></tr><tr><td><input type='submit' name='Login' value='Login!'>
</td></tr></table</body></html>"; exit; session_write_close();} }
echo '<div id="replace">';
ob_clean();
echo "<script type='text/javascript'>parent.pageRefresh(parent.document.getElementById('mainiframe'));</script>";
include("/usr/local/oPanel/web/files/scripts/php/serverstatus/index.php");

