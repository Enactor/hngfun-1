<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'artofofiare@yahoo.com';
    $body = $_POST['commentbox'];
    if($body == '' || $body == ' ') {
        $error[] = 'You have to TYPE in something to tell me something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
    }
    if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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

<!-- after php summon -->

<DOCTYPE! html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nteps Profile</title>
</head>
<body>

	<div class="re"></div>
	<center><img  src="https://scontent.flos5-1.fna.fbcdn.net/v/t1.0-9/10440919_1400016173620315_8652607904093312520_n.jpg?oh=bc35ce478a104e4c3c0761ae2e117d08&oe=5A4E8570" alt="profile image" width="400px" height="400px"></center>
	<p> My name is Ntep Okon Robert</br>
	i am an intern at Hotels.ng learning to become a web and android app developer </p>
	<div class="link">
		Slack: @ntep  |  <a href="https://github.com/nteprobert/nteprob">Stage 1</a>
	</div>


               <div class="r">
                <form action="#" method="POST">
          
                  
                        <div class="space">
                            <input type="text" id="name" name="name" required="required" placeholder="Your Name" /> </br>
                        

                            <input type="email" id="email" name="email" required="required" placeholder="Your Email" /></br>
                       

                    
                            <input type="text" id="subject" name="subject" required="required" placeholder="Subject" /></br>
                    

                        
                            <textarea name="commentbox" placeholder="Tell me anything..." cols="34" rows="9"></textarea></br>
                 
                       
                           	<input id="send" type="submit" value="send" />
                       
                           </div>
                         
                </form>    
                </div>           
        </div>

        <div id="footer">
</body>

 <style type="text/css">
 	body{
 		background-color: grey;
 		color: black;
 	}
 	p{
 		margin:auto;
 		width: 400px;
 		height:120px;
 		font-family: cursive;
 		background-color: white;
 		text-align: center;
 		font-size: 20px;
 		padding-top: 50px;
 	}
 	
 	.link{
 		width: 400px;
 		height: 50px;
 		margin:auto;
 		background-color: black;
 		color:white;
 		text-align: center;
 		font-size: 20px;
 		font-family: cursive;
 		text-decoration-color: white;
 	}
 	.re{
 		width:400px;
 		height:30px;
 		margin: auto;
 		background-color: black;
 	}
 	.r{
 		margin: auto;
 		width: 400px;
 		height:280px;
 		font-family: cursive;
 		font-size: 19px;
 		margin: auto;
 		text-align: center;
 		background-color: black;
 	}
 	.space{
 		display: inline-block;
 		width:400px;
 		height:150px;
 	}

 	}
 </style>
</html>