/**<?php?>**/
/**
 * Created by PhpStorm.
 * User: UNIGLOBE MALABO1
 * Date: 04-Sep-17
 * Time: 05:06 PM
 */

/**$config = include('../config.php');
$dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
$connect = new PDO($dsn, $config['username'], $config['pass']);
$exe = $connect->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];
?>**/
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Ogbonna Destiny (dsparkle)</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        body{
            text-align: center;
            background-color: #555555;
        }
        img{
            margin-top: 20px;
            height:350px;
            width:350px;
            border-radius:50px;
        }

        p{
            text-align: center;
            color: white;
        }
        #slack :hover{
            color:black;
        }
        #slack{
            font-size: 50px;
        }
        #facebook{
            font-size: 50px;
        }
        #instagram {
            font-size: 50px;
        }
        #twitter{
            font-size: 50px;
        }
        #github{
            font-size: 50px;
        }
        a :hover{
            color: #ffffff;

        }
        input {
            font-size: 20px;
            width:800px;
            margin-bottom: 10px;
        }
        textarea{
            font-size: 20px;
            width:800px;
            height:150px;
        }



    </style>
</head>
<body>
<div class="container">
    <h1>Dsparkle's Profile</h1>

    <img src="https://avatars1.githubusercontent.com/u/30692180?v=4&u=b7ee8f2fc91c2f389bd58fa06c430db35af912e9&s=400" alt="Loading">
    <p>I am Ogbonna Destiny Uchechukwu from Abia State. Am  a software developer am good at html and css.<br>
        I just finished studying MMS(Master  Mind Series) at Niit Port-Harcourt.<br> My hobbies are playing football, Movies,
        and listening to music.<br> I started programing in the year 2016. My aim is to make a difference in today's IT world</p>

    <p>MY HNG Stage 1 RESULT <a href="https://github.com/Dsparkle/testing" style="font-size: x-large">click here</a></p>
    <div>
        <a href="https://hnginterns.slack.com/team/dsparkle"> <span class="pl-sl fa fa-slack" id="slack"></span></a>

        <a href="https://twitter.com/Destiny71715053" class="profile-link" target="_blank" id="twitter"><span
                class="pl-tw fa fa-twitter"></span></a>
        <a href="https://www.instagram.com/egbulonu" class="profile-link" target="_blank" id="instagram"><span
                class="pl-ig fa fa-instagram"></span></a>
        <a href="https://www.facebook.com/ogbonna.destiny.10 " class="profile-link" target="_blank" id="facebook"><span
                class="pl-fb fa fa-facebook"></span></a>
        <a href="https://github.com/Dsparkle" class="profile-link" target="_blank" id="github"><span
                class="pl-gh fa fa-github"></span></a>
    </div>
</div>
<div>
    <h1>
        To contact me please drop your message(s) below
    </h1>
    <form id="contact-form">
    <div> <input type="text" placeholder="Enter your name"  id="name" name="Uname" required></div>
    <div> <input type="email" placeholder="Enter your Email" id="uemail" name="uemail" required ></div>
        <div><input type="hidden" name="password"  value="<? echo $password; ?> id=password"></div>
    <div> <input type="text" placeholder="Enter your Subject" id="Subject" name="Subject" required></div>
        <div> <textarea placeholder="Enter your Message" id="messageArea" name="messageArea"> </textarea></div>

    <div><button type="submit" name="Submit" value="submit" onclick="sendMessage(event)"> Send Message </button></div>
    </form>
</div>

<script>
    function sendMessage(event) {
        event.preventDefault();
        nameField = document.getElementById("name");
        emailField = document.getElementById("uemail");
        subjectField = document.getElementById("Subject");
        bodyField = document.getElementById("messageArea");
        pwd = document.getElementById("password").value;
        nameValue = nameField.value;
        emailValue = emailField.value;
        subjectValue = subjectField.value;
        bodyValue = bodyField.value;
        if (nameValue.trim() == "" || emailValue.trim() == "" || subjectValue.trim() == "" || bodyValue.trim() == "") {
            alert("Please fill all input fields thank you");
        } else {
            bodyValue = ("From: " + emailValue + " ( " + nameValue + " ) " + "\n" + "\nMessage: " + bodyValue);
            prot_host = location.protocol + '//' + location.host;
            url = prot_host + "/sendmail.php?password=" + pwd + "&subject=" + subjectValue + "&body=" + bodyValue + "&to=destinyogbonna49@yahoo.com";
            window.location = url;
        }
    }
</script>

</body>
</html>
