<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST['subject'];
    $to  = $_POST['to'];
    $body = $_POST['message'];
    $config = include('../../config.php');
    $server = $config['host'];
    $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
    if (!$con) {
      die("Connection failed: ".mysqli_connect_error());
  }
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($con, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "#";
    }
    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");
  }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   
   
  <title>EMJAY EKANEM HNG INTERNSHIP</title>
 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="index.css" rel="stylesheet">
 </head>
 <body>
   <div class="container">
     <div class="col-12 col-sm-8 col-lg-8 offset-sm-2 offset-md-2">
       <img class="profile photo" src="https://scontent.flos5-1.fna.fbcdn.net/v/t1.0-9/1972455_10202185344929806_753062081_n.jpg?oh=fc267d405d6d2303e3644b86327c313e&oe=5A601FC1" alt="">
       <h2 class="display-4">EMJAY EKANEM</h2>
       <hr>
       <p class="lead">My name is Emmanuel Godswill Ekanem, i am a Graduate of Information And Computer Technology from Akwa Ibom State, Nigeria. Technology is nothing. 
	   whats important is that you have faith in people, that they're basically good and smart.</p>
       <hr>
       <div>
         <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> emjayekanem</a>
      
         <a class="links" href="https://github.com/Emjayekanem/hng-php-task"><i class="fa fa-github"></i> #Stage-1</a>
      <a class="links" href="mailto:emjayekanem@gmail.com"><i class="fa fa-envelope"></i> emjayekanem@gmail.com</a>
       </div>
     </div>
	  <div id="contact-section">
                            <center><h3>Send a message</h3>
                            <div class="form-container">
                        <form action=" " method="POST">
                            <!--<input type="hidden" name="password" class="form-input" value="<?php echo $password; ?>">-->
                
                           <input type="hidden" name="to" value="emjayekanem@gmail.com">
                
                           <input type="text" name="subject" placeholder="Subject " class="form-input" required="text"><p>
                            <!--<input type="email" name="to" placeholder="Email" class="form-input" required="text">-->
                
                           <textarea name="message" placeholder="Message" class="form-input form-textarea" required=""></textarea><p>
                            <input type="submit" name="submit" value="SEND" class="form-submit" required="">
                            </form></center>  <br>  
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>
<!--/#contact--> 
   </div>
 </body>


<style>
 .container {
 text-align: center;
 padding: 1.5em 0;
}
img {
 width: 40%;
 height: auto;
}
a {
 color: #7B68EE ;
 text-decoration: none;
}
.links {
padding: 1em;
}
</style>
</html>
