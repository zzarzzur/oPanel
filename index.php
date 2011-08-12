<?php
// Is Apache Running
function iar() {
	$list = system("ps -A | grep apache2");
	if($list != null && $list != "") return true; 
	else return false;
}
// Start Apache
function sa() {
	if(iar() == false) {
		system("apachectl start");
		return true;
	}
	if(iar() == true) return false;
}
// Stop Apache
function sta() {
	if(iar() == true) {
		system("apacehctl stop");
		return true;
	}
	if(iar() == false) return false;
}
if(iar() == true) echo "yay";
if(sa() == false) echo "Apaceh Already Started";
?>

