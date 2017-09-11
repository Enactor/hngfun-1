<?php
//Connect to database
  $config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
?>

<!DOCTYPE html>
<html>
<head>

<title> HNG Internship</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	#container{
		width: 1300px;
		height: 1400px;
		background-color: gold;
	}
	#content{
		width: 1300px;
		height: 50px;
		background-color: red;
		text-align: center;
	}
	#form{
    	background-color: rgba(193, 193, 193, 0.54);
      	padding: 20px;
       	text-align: center;
      	position: relative;
      	margin: 64px auto;
      	border-radius: 45px;
    	max-width:400px;
    }
    .img-circle {
    border-radius: 50%;
	}
   	
</style>
</head>

<body>

<div id="container">

	<div id="content"> 

		<h1> MY PROFILE</h1>
		<img class= "img-circle" src= "http://res.cloudinary.com/ddzwebxdh/image/upload/v1504805624/cyn_emdmn4.jpg" alt="cyn" width="400" height="500">

		<h2> <b>Name : Cynthia Nkechi Emenike<br> Slack Username : damssel2000</b></h2>
	
	
		<h3> Cynthia is a highly experienced and motivated administration specialist, with over 11years expereince in Human Resources and administration.<br> I use to think that computer programming can only be done by a man but after undergoing 5weeks coding boot camp, <br>it widened my horizon and broadened my knowledge and I realised that women can also make a difference in technology. <br>I really want to learn more about programming and I hope to be part of women in tech making a difference.<br>
		I am a dedicated individual with strong work ethics and ability to build lasting client relationship, <br>good verbal and written communicative skill, strong analytical, problem solving and organizational skills, <br>sincerity, ability to multi-task, decency, ability to operate with minimal guidance,<br> good PC skills particularly with Microsoft Office applications, CorelDraw and photoshop, <br>self-motivated, confident, a fast learner and a team player.
		</h3>
	

		<button><a href="https://github.com/nwadaigbo/hng" target="_blank style="font-family: arial">#STAGE 1</a></button>
		<button><a href="http://hng.fun/profile/damssel2000.html" target="_blank style="font-family: arial">#STAGE 2</a></button>
		<button><a href="http://hng.fun/profile/damssel2000/damssel2000.php" target="_blank style="font-family: arial">#STAGE 3</a></button>
		<button><a href="https://www.dropbox.com/s/f1oouuisvan8ex3/Profile.apk?dl=0" target="_blank style="font-family: arial">#STAGE 4</a></button>
		<br><br><!-- Add social media icons -->
		<a href="https://github.com/nwadaigbo" target="_blank" class="fa fa-github social github" style="font-size:48px;color:black"></a>
        <a href="https://web.facebook.com/NwadaMuonso" target="_blank" class="fa fa-facebook social facebook" style="font-size:48px;color:blue"></a>
        <a href="https://twitter.com/damssel2000" target="_blank" class="fa fa-twitter social twitter" style="font-size:48px;color:skyblue"></a>
        <a href="https://www.linkedin.com/in/cynthia-emenike-693ba3b3" target="_blank" class="fa fa-linkedin social linkedin" style="font-size:48px;color:#0077B5"></a>
	
<!-- Begin contact form --> 
	<div id="form">

      <h3>CONTACT ME</h3>
    <form action="../../sendmail.php" method="get">
          <fieldset>
              <input placeholder="Your Full Name" type="text" tabindex="1" required="" autofocus="">
          </fieldset>
          <fieldset>
           <input placeholder="Your Phone Number" type="tel"  required="">
          </fieldset>
        
          <fieldset>
            <input type="email" id="to" name="to" placeholder="Your Email Address Here">
          </fieldset>

          <fieldset>
            <input type="text" id="subject" name="subject" placeholder="Your Subject Here">
         </fieldset>

          <fieldset>
           <textarea placeholder="Type your Message Here...." tabindex="5" id="body" name="body" required=""></textarea>
          </fieldset>  

          <input type="hidden" name="password" value="<?= $password; ?>" />          
        
          <fieldset>
            <button type="submit" value="Submit">Submit </button>
          </fieldset>
        </form>
 	</div>    
 	   	
</div>
</div>
</body>
</html>
