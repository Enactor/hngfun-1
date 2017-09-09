 <?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $error = []; 
    $subject = $_POST['subject']; 
    $to = 'anietieessien360@gmail.com'; 
    $body = $_POST['message']; 
    if($body == '' || $body == ' ') { 
        $error[] = 'Message cannot be empty.'; 
        } 
        if($subject == '' || $subject == ' ')  { 
            $error[] = 'Subject cannot be empty.'; 
            } 
            if(empty($error)) { 
                $config = include(dirname(dirname(dirname(__FILE__))).'/config.php'); 
                $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname']; 
                $con = new PDO($dsn, $config['username'], $config['pass']); 
                $exe =$con->query('SELECT * FROM password LIMIT 1'); 
                    $data = $exe->fetch(); 
                    $password = $data['password']; 
                    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password"; header("location: $uri"); } 
                    } ?>
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Anietie Essien HNG Internship Profile</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<style>
		body {
		       color:black;
		}<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $error = []; 
    $subject = $_POST['subject']; 
    $to = 'udohimo@gmail.com'; 
    $body = $_POST['message']; 
    if($body == '' || $body == ' ') { 
        $error[] = 'Message cannot be empty.'; 
        } 
        if($subject == '' || $subject == ' ')  { 
            $error[] = 'Subject cannot be empty.'; 
            } 
            if(empty($error)) { 
                $config = include(dirname(dirname(dirname(__FILE__))).'/config.php'); 
                $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname']; 
                $con = new PDO($dsn, $config['username'], $config['pass']); 
                $exe =$con->query('SELECT * FROM password LIMIT 1'); 
                    $data = $exe->fetch(); 
                    $password = $data['password']; 
                    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password"; header("location: $uri"); } 
                    } ?>
		#photo {
			width: 400px;
			height: 400px;
			margin-left: 40%;
			border-radius: 100%;

		}

		#one{
			text-align: center;
			margin-top:40px;
			font-size: 30px;
		}

			
		#two{
			text-align: center;
			margin-top: 30px;
			
		}
	</style>

</head>

<body>
	<div>
		<img id="photo" src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/20228783_1816764081672514_8468916518596813139_n.jpg?_nc_eui2=v1%3AAeHC7eVGLuVvDM4XNJAn0DSrdVgJUSRkKmjDAZPPKfTkdw3XjKUDZT-EVsMKEBwPIHwF3J4TJC9N60Jqkm60z0YZSI5bVkiEgbxffOjvM_8jVg&oh=97224b2e5fc37732ff13f2ef1d168c7a&oe=5A2272C9"/>
		<hr/>
		<h2 id="one"> Anietie Essien</h2>
		<hr/>
	</div>
	<div>
		<hr><p id="two">Bio: Hi i'm Anietie Essien.<br/> I'm a computer geek who has a lot of interest in the development  of websites .</p><hr>

	</div>

	<div>
		
  		<a href="https://github.com/" class="fa fa-github fa-3x"></a>
  		<a href="https://hnginterns.slack.com/team/anietiejessien" class="fa fa-slack fa-3x"></a>
  		<a href="https://web.facebook.com/anietie.essien.98?ref=bookmarks" class="fa fa-facebook fa-3x"></a>

	</div>

	<div>
	  <form class="contact-form" action="#" method="post">
			    <h4>Leave a message</h4>
			    <input name="to" type="email" placeholder="Enter your email"/><br>
			    <input name="subject" type="text" placeholder="Subject" required/><br>
			    <textarea name="body" id="message" cols="40" rows="10" placeholder="Write your message here" required></textarea><br>
			    <input type="submit" name="submit" value="Submit">
		    </form>
	</div>

</body>
</html>


