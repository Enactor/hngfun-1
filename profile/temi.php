<?php

 
	$config = include('../config.php');

	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);

	$result = $con->query('SELECT * FROM password LIMIT 1');

	$data = $result->fetch();
	password = $data['password'];

    $to = $_POST['mail'];
    $subject = $_POST['Subject'];
    $body = $_POST['message'];
	header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);

?>