<?php
?>
<html>
<head>
</head>
<body>

<?php
// Is Apache Running
function iar() {
echo "<div hidden>";
	$list = system("ps -A | grep apache2");
echo "</div>";
	if($list != null && $list != "") return true; 
	else return false;
}
// Start Apache
function sa() {
echo "<div hidden>";
	if(iar() == false) {
		$fail = system("sudo /etc/init.d/apache2 start");
echo "</div>";
		return true;
	}
	if(iar() == true) return false;

}
// Stop Apache
function sta() {
echo "<div hidden>";
	if(iar() == true) {
		$fail = system("apachectl stop");
		return true;
		echo $fail;
	}
echo "</div>";
	if(iar() == false) return false;
}
// Restart Apache
function ra() {
echo "<div hidden>";
	if(iar() == true) $fail = system("apachectl restart");
		
	if(iar() == false) $fail = system("apacehctl start");
echo "</div>";
	return true;
}
// Is Mysql Running
function imr() {
echo "<div hidden>";
		$list = system("ps -A | grep mysqld");
echo "</div>";
	if($list != null && $list != "") return true; 
	else return false;

}
if(imr() == true) echo "Mysql Running<br>";
if(imr() == false) echo "Mysql Not Running<br>";
if(iar() == true) echo "Apache Running<br>";
if(iar() == false) echo "Apache Not Running<br>";
if(sa() == true) echo "Apache Started<br>";
?>
