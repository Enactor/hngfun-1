<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'victorumonto@gmail.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
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



<!DOCTYPE html>
<html>
<head>
  <title>victorumonto</title>
  <style type="text/css">
    
    body{
      background-color: lightgrey;

   }

     a{
      text-decoration: none;
      text-align: center ;
     }

   .top{
    text-align: center;
    font-size: 70px;
    background-color: DodgerBlue;
    padding: 50px;
    color: white;
   }
   .img{
    border-radius: 80px;
    width : 400px;
    border:10px solid white;
    margin-top: -400px;
   }
  .footer{
      text-align: center;
      background-color: dodgerblue ;
      color: white;
      padding-bottom: 20px;
  }
  .Bio{
text-align: center;
  }
   input[type=submit]:hover {background-color: dodgerblue;}
   .input {
     width: 50%;
     min-height: 10px;
     font-family: 'Montserrat', sans-serif;
     margin: 5px;
     border-radius: 0px;
     border: solid 3px black;
     padding: 5px;
     background-color: dodgerblue;
    }
  
  </style>
</head>
<body>
  <h1 class="top">HNGFUN Profile</h1>

<img src="https://scontent.flos1-1.fna.fbcdn.net/v/t1.0-9/17800124_886539538152746_292205513639073564_n.jpg?oh=512fabe3be74cf0368ed5d607fa83483&oe=5A53B38F" alt="some_text" width="1350px" height="500px" style="margin-top: -30px">
<center><img class="img" src="https://scontent.flos5-1.fna.fbcdn.net/v/t1.0-9/14713693_782148288591872_8091797767328013676_n.jpg?oh=8c1f1a4e88c79c0247deebd51704c410&oe=5A56126C" alt="some_text" width="300px" height="400px"></center>

<div>
<div class="Bio">
  <h2>Name: Victor Ephraim Umonto #Vento</h2>
  <h2>
      <p>BIO:
      </h2>
      <p> A student of computer science at Cross River State University of science and thecnology,<br>
        A Confluence of Music,Technology & Entrepreneur <br>A Clairvoyant Thinker & Eruptive Creator.
        Currently undergoing internship programe on <a href= "http://www.hotels.ng">Hotels.ng</a></p>
                <h3>Address:</h3>Ikot Ekpene, Akwa Ibom State, Nigeria 
       <a href="https://hnginterns.slack.com/team/victorumonto"
        href="https://hnginterns.github.com/ogarnisation/victorumonto"></a>
</head>
<body>
<hr>
<h2>leave a note
 <br/><div>
 <?php if(isset($error) && !empty($error)): ?>
          <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </blockquote>
        <?php endif; ?>
    <form action="#" method="POST">
   
    <input placeholder="subject" class="input" type="text" name="subject"/>
      <br></br>
    <textarea placeholder="message" class="input" name="body" rows="5" cols="30"></textarea>
        </br>
      <input type="submit" class="col-btnSL"/>
  </form>
      <div style="text-align: center; margin-top: 20px; width: 15%; margin-left: auto; margin-right: auto; padding: 2px; display:inline;">
      <p style="color: #0d89a8; margin-bottom: 0;">social!</p>
  <p>  <button class="col-btnSR" type="reset" name="button"><i class="fa fa-refresh" aria-hidden="true"></i>contact me:</button>
   <button class="col-btnSR" type="reset" name="button"><i class="fa fa-refresh" aria-hidden="true"></i>victorumonto@gmail.com</button>
   <button class="col-btnSR" type="reset" name="button"><i class="fa fa-refresh" aria-hidden="true"></i>slack:@vento</button>
   <button class="col-btnSR" type="reset" name="button"><i class="fa fa-refresh" aria-hidden="true"> <a style="margin-right: 20px;" href="https://github.com/victorumonto">github</button><button class="col-btnSR" type="reset" name="button"><i class="fa fa-refresh" aria-hidden="true">  <a style="margin-right: 20px;" href="https://www.facebook.com/victor.umonto">    
        <i class="fa fa-facebook"></i>
</i>facebook</button>
<div class="col-btnSR"> 
    <a href="https://github.com/victorumonto" target="_blank">#stage1</a>
    <a href="http://hng.fun/profile/vento.html"target=_blank=">#stage2</a>
  </div>
                                                              
<p><a class="btn btn-primary" href="https://www.google.com/url?q=https://drive.google.com/open?id=0B3BCRUenaCq8SWd6b2Zrd0lGMjQ">Download mobile app</a></p>
                                                                                                                               
   </form>
    </h2> 
    <hr> <p>POWERED BY <a href= "http://www.hotels.ng">hotels.ng</a><div class="footer">
     <h4>HNGfun&copy2017</h4>
</div>    



</body>
</html>
