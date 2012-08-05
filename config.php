<?php
//Array Definitions
$_oPanel = array();
$_oPanelServices = array();

//Plain Text Username
	$_oPanel['username'] = "Username";
//Plain Text Password
	$_oPanel['password'] = "Password";
//Login Timeout
	$_oPanel['timeout'] = 1.25;
//Main Network Card
	$_oPanel['networkcard'] = "eth1";




//Service Definitions
//Syntax follows `$_oPanelServices['SERVICENAME'] = PORT;`
//Service name can be anything

//HTTP Definition
	$_oPanelServices['Web Server'] = 80;
//SSH Definition
	$_oPanelServices['SSH'] = 21;
