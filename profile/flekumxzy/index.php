<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = array();
    $subject = $_POST['subject'];
    $to  = 'flekumxzy@gmail.com';
    $body = $_POST['commentbox'];
    if($body == '') {
        $error[] = 'You have to TYPE in something to tell me something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
    }
    if(empty($error)) {
        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Schoolbell" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nsikan's Profile</title>
</head>
<style>
    body{
        background-color: darkslategray;
    }
    .top{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:70px;
        width: 500px;
        height:130px;
        background: deepskyblue;
        border-radius: 30px;
        margin: auto;
        text-align:center;
        padding:20px 0px 0px 0px;
        color:darkslategray;
    }
    .her{
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        width: 500px;
        margin: auto;
        margin-top: 15px;
        text-align:center;
        color: STEELblue;
        background:black;
        font-size:25px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
    }
    .ref{
        position: relative;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        width:500px;
        height: 35px;
        margin:auto;
        background: steelblue;
        margin-top:5px;
        z-index:1;
        text-align:center;
    }

    a{
        color: black;
        margin:auto;
        text-decoration: none;
    }

    .boNx{
        position: relative;
        height: 600px;
        width:500px;
        background:lightblue;
        margin:auto;
        margin-top: 10px;
        border-radius: 30px;
        border-bottom: 8px solid blue;
    }
    .img{
        position: relative;
        margin-top: 20px;
        margin-left: 600px;
        border: 6px solid STEELblue;
        border-radius: 50em;
        width:300;
        height:300;
        z-index:1;

    }
    .bod{
        position: relative;
        font-family:  Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        margin:auto;
        margin-top:30px;
        height:100px;
        width:500px;
        background-color: bLACK;
        text-align:center;
        border-radius:40px;
        padding-top: 10px;
        padding-bottom: 10px;
        z-index:1;
        color:white;
    }
    
    .container{
        background-color: black;
        padding: 15px;
    }

    .etuk{
        background-color: gray;
    }
</style>
<body>
    <h1 class="top">MY PROFILE</h1>
    <h1 class="her"> I AM NSIKAN ETUKUDOH </h1>
    <div class="ref"> <a href= "https://www.github.com/flekumxzy"><strong>GITHUB</strong></a> 
         <strong>| SLACK @flekumxzy</strong> </div>
      <div class="box"></div>
     <img class="img" src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/20604414_711951335671654_7796040218626145065_n.jpg?oh=1e3b34a669b0a6c4520b8be54c7003f8&oe=5A5D62A3" width ="400" height= "400" </br> </pre>
     <p class="bod"> I'm based in Uyo, Akwa Ibom. </br> A Civil Engineering Student</br> Currently Undergoing hotels.ng internship Program</p> 
    
     <p>

     </p>
     <p>
     </p>
     <div class="container" align="center">
         <form action="<?= $_SERVER['PHP_SELF']; ?>" class="etuk">

            <p><label for="fname">Name</label>
            <input type="text" id="fname" class="soc" name="firstname"
            placeholder="Your name is.."></p>

           <p><label for="email">Email</label>
            <input type="text" id="email" class="soc" name="email"
            placeholder="Your email address is.."></p>

            <p><label for="subject">Subject</label>
            <textarea id="subject" class="nsik" name="subject" placeholder="Type your message here.."
            style="height: 100px"></textarea></p>

           <p><input type="submit" value="Submit"></p>

         </form>
     </div>
</body>
</html>
