<?php
-    if(isset($_POST['subject'])){
-        $config = [
-            'dbname' => 'hng',
-            'pass' => '@hng.intern1',
-            'username' => 'intern',
-            'host' => 'localhost'
-        ];
-        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
-        $con = new PDO($dsn, $config['username'], $config['pass']);
-        $result = $con->query('SELECT * FROM password');
-        $data = $result->fetch();
-        $password = $data['password'];
-        $subject = $_POST['subject'];
-        $body = $_POST['message'];
-        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=silassilasm@gmail.com");
-    
-    }else{
-        header("location: Silas.html");
-    }
-?>
   


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Silas Profile</title>
	<style type="text/css">
	#bck{background-image: url(http://res.cloudinary.com/siazo/image/upload/v1504241837/gnd_px5ijj.png);}
	.img{height: 200px;

				width:200px;
				border-radius:105px;
				border:8px solid #aaa;}
	#center{text-align: center;}
	#body{
		border-radius: 20px;
		background-color: #f2d9a4; 
		width:500px;
		height:260px;
		margin:0px auto;
		margin-top: 10px;
		margin-bottom: 10px;
		padding:10px;
		border:5px solid #AAAAAA ;
		text-align: center;
	}
	button{background-color: #aaa;
            font-size:20px;
            border-radius: 5px;
	}
	li{float: center;
		}
	.fa{font-size: 40px;
		color: black;
		padding: 7px;
		background-color: #F2D9A4;
		border:4px solid #aaa;
		border-radius: 5px;
	}
	#social{text-align: center;

	}
	
	#form{
		text-align: center;

	}
	#body1{border-radius: 20px;
		background-color: #f2d9a4; 
		width:500px;
		height:450px;
		margin:0px auto;
		margin-top: 20px;
		margin-bottom: 10px;
		padding:1px;
		border:5px solid #AAAAAA ;
		text-align: center;
	}
	.textform{
		margin: 0 auto 10px auto;
	}
	.textform{
			width: 70%;
			margin: auto;
			padding: 10px;
			color: black;
			box-sizing: border-box;
			margin-top: 20px;
		}
	</style>
</head>
<body id="bck">	
	<div id="center" >
		<div><img class="img" src="http://res.cloudinary.com/siazo/image/upload/v1504242053/Silas_mrfpzd.png" alt="profile picture"></div><br>
		<H1>SILAS SILAS</H1>
	</div>
	<h3 id="body"><br>I am a full-stack Web Developer, currently doing my internship with<b>    Start Innovation Hub </b>Uyo <br><br>
					I am open minded and enjoy work that challenges me to learn new things and expand my horizon<br><br>
					<a href="https://github.com/silassilasm/hng-stage1">
						<button class=" btn-lg " id="AboutMe">Stage1 Task</button>
					</a>
					<div id="social">
		        <P><a href="https://github.com/silassilasm" target="_blank" class="fa fa-github social github"></a>
                  <a href="https://twitter.com/silassilasm" target="_blank" class="fa fa-twitter social twitter"></a>
		          </P>		</div>
	</h3>
	
			
		    <h3 id="body1">
				 <div class="containerform">
		<form class="form-vertical" action="silas.php" method="POST">
			<h2 class="htext">Contact Me</h2>
			<input type="text" class="textform" name="full_name" placeholder="Fullname" required><br>
			<input type="email" class="textform" name="to" placeholder="Email" required><br>

            <input type="text" class="textform" name="subject" placeholder="subject" required><br>
			<textarea name="body" cols="10" rows="6" class="textform" required></textarea><br><br>

          		<textarea name="body" cols="10" rows="6" class="textform" required></textarea><br><br>

			<button class="submit btnform" name="submit" value="submit">Submit</button>
		</form>
	</div>

			</h3>


		          
</body>
</html>

