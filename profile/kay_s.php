<?php
    echo $_POST['processing'];
    if(isset($_POST['processing']) && $_POST['processing'] == true){
        if(!(isset($_POST['subject']) && isset($_POST['body']))){
            exit;
        }
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $config = require('./config.php');
        $host = $config['host'];
        $dbname = $config['dbname'];
        // Get Password from database
        $db = new PDO("mysql:host=$host;dbname=$dbname", $config['user'], $config['pass']);
        $query = $db->prepare('SELECT * from passwords');
        $query->execute();
        $passwords = $query->fetchAll(PDO::ATTR_DEFAULT_FETCH_MODE);
        foreach($passwords as $record);
        $password = $record['password'];
        echo $password;
        exit;
        header("Location: hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=ksagoe@gmail.com");
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kay Sagoe</title>
        <style type="text/css">
            @font-face {
                font-family: Apple;
                src: url(/fonts/Apple.ttf);
            }

            div {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
    
            }

            body {
                background: #ECF0F1;
                font-family: Apple, monospace; 
            }

            h1 {
                text-align: center;
                color: #ADEFFF;
                font-size: 58px;
            }

            img {
                display: block;
                width:300px;
                height:300px;
            }

            p {
                color: #57777F;
                line-height: 1.3;
                
            }

            h2 {
                color: #57777F;
            }

            input[type=submit] {
                display: block;
                width : 200px;
                height: 50px;
                background: #57777F;
                font-family: Apple, monospace;
                font-size: 16px;
                margin-left: auto;
                margin-right: auto;
                border: none;
                margin-top: 10px;
                color: #C8CBCC;

            }

            .textbox{
                -moz-box-sizing: padding-box;
                -webkit-box-sizing: padding-box;
                box-sizing: padding-box;
                width: 80%;
                background: transparent;
                border: 4px solid #C8CBCC;
                margin-left: 10%;
                margin-right: 10%;
                font-size: 16px;
                font-family: Apple, monospace;
                color:#57777F;
                padding-left: 10px;
                padding-right: 10px;
            }

            .container {
                padding: 16px;
            }

            .infobox {
                width: 30%;
                float:left;
                margin-top: 10px;
            }

            .profile {
                margin: auto;
                border-radius: 50%;
  
            }

            .slack_box {
                text-align: left ;
                float: left;
                width: 50%;
                color: #C8CBCC;
                
            }

            .git_box {
                text-align: right;
                float: left;
                width: 50%;
                color: #C8CBCC;
            }

            .contact {
                width: 70%;
                float: left;
                margin-top: 10px;
                padding-left: 10px;
                
            }

            .subject {
                height: 50px;
            }

            .body {
                margin-top: 10px;
                height: 300px;
                resize: none;
                line-height: 1.3;
            }

        </style>
    </head>
    <body>
            <div class="container">
                    <h1>Kay Sagoe</h1>
                    <div class="infobox">
                      <img src="https://orig03.deviantart.net/b7ee/f/2017/128/1/1/profile_picture_by_pixelsparkz-db8kdf3.png" alt="profile" class="profile">
                      <p>
                        I'm a student studying Computer Science at university. I enjoy backend development, API development and database design. My preferred framework is Laravel and my preferred language for web development is PHP
                      </p>
                      <div>
                            <div class="slack_box">Slack: kay_s</div>
                            <div class="git_box">Github: kaysagoe</div>
                        </div>
                    </div>
                    <div class="contact">
                        <h2>Contact Me</h2>
                        <form action="./kay_s.php" method="post">
                            <input type="hidden" name="processing" value=true />
                            <input type="text" class="textbox subject" name="subject" placeholder="Subject" /> 
                            <textarea class="textbox body" name="body" placeholder="Message"></textarea>
                            <input type="submit" value="Send" />
                            <? if(isset($_POST['processing'])) : ?>
                                <p>The Subject or Body field has not been entered</p>
                            <? endif; ?>
                        </form>
                    </div>
                    
            </div>      
    </body>
</html>