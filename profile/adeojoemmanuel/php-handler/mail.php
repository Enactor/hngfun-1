<?php
function load($class){
	require  $class .".php";
}
load('IOhander');

$subject = mysql_escape_string($_POST['subject']);
$email = mysql_escape_string($_POST['email']);
$phone = mysql_escape_string($_POST['phone']);
$message = mysql_escape_string($_POST['message']);
$to = "emmanuel.adeojo@yahoo.com";

$IO = new IOhandler;
$getone = $IO->getAll('password');
$password = $getone['password'];

// $url = "";

header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");

?>
