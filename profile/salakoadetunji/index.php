<?php 

	 if($_SERVER['REQUEST_METHOD'] == 'POST') {


	 	$subject = $_POST['subject'];
	    $to = "adetunjisalako@gmail.com";
	    $message = $_POST['message'];

	    $dbconfig = include('../../config.php');
	    //$host_ip = "";
	    $conn = mysqli_connect( $dbconfig['host'], $dbconfig['username'], $dbconfig['pass'],$dbconfig['dbname']) or die ("Could Not Connect Database");

	    $query = $conn->query("SELECT * FROM password");
	    if ($query) {
	    	$row = mysqli_fetch_assoc($query);
	    	$password = $row['password'];
	    }else {
	        return false;
	    }

	    $url = "/sendmail.php?to=$to&body=$message&subject=$subject&password=$password";
	    if (isset($_POST['submit'])&&isset($_POST['message'])&&isset($_POST['subject'])) {
	    	header("location: ".$url);
	    }

	    

    	

	 }


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SALAKO ADETUNJI ABDULHAQ</title>
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="corousel">
		<H1>HI, I'M SALAKO ADETUNJI ABDULHAQ</H1>
	</div>
	<div>
		<div class="about">
			<hr>
			<h4>About Teejay</h4>
			<img src="img/tunji.jpg" width="500" height="400">
			<p>
				I'm a developer who is passionate about technology.I love to use technology to find solutions to things I find myself in to enhance my skills.My primary skills are Web Application development and Mobile Application (Android) development.
			</p>
		</div>
	</div>
	<footer>
		<div>
			<h4>LINK-UP</h4>
			<hr style="padding-left: 20px;">
			<div id="link">
				<i class="fa fa-slack fa-3x" aria-hidden="true"> teejay_salako</i><br>
				<i class="fa fa-github fa-3x" aria-hidden="true"> teejay13</i><br>
				<i class="fa fa-envelope-o fa-3x" aria-hidden="true"> adetunjisalako@gmail.com</i>
			</div>
			<hr>
			<div>
				<i class="fa fa-link fa-3x" aria-hidden="true"><a href="https://github.com/teejay13/Hng-Intern-Teejay13" target="blank"> Stage 1</a></i>
			</div>
			<hr>
			<h4>CONTACT ME</h4>
			<hr style="padding-left: 20px;">
			<div class="container">
			  <form action="" method="POST">

			    <label for="fullname">Full Name</label>
			    <input type="text" id="fullname" name="fullname" placeholder="Your name.." required="">

			    <label for="subject">Subject</label>
			    <input type="text" id="subject" name="subject" placeholder="Your Title.." required="">

			    <label for="message">Message</label>
			    <textarea id="message" name="message" placeholder="Write something.." style="height:150px" required=""></textarea>

			    <input type="submit" value="SEND">

			  </form>
		</div>
		</div>		
	</footer>
</body>
</html>