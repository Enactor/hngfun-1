<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
<head><title>Profile for Ugo Nwokorobia</title></head>
<body>
<div class='container'>
    <img src = "assets/img/profile.jpg">
    <h1 id='header'>Hi I am Ugo</h1>
    <h3> I am a beginner frontend designer.I know HTML, CSS, basic Javascript and PHP.<br>
        I enjoy using python and have worked with the django framework.<br>
        I also use photoshop for my graphical/designing need<br> 
            I am always ready to learn something new.<br>
            slack username: uhexos
                
        <hr>
    </h3>
    <div class="social">
        <a href="https://github.com/uhexos/stage1.git" class="icon icons8-External-Link"></a>
        <a href="https://github.com/uhexos" class="icon icons8-GitHub"></a>   
    </div>
<div>
    <form>
    <ul class="form-style-1">
    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="field3" class="field-long" />
    </li>
    <li>
        <label>Your Message <span class="required">*</span></label>
        <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>
</div>

<?php
$server = "46.101.104.14";
$user = "intern";
$password = "@hng.intern1";
$database = "hng";
$table = "password";
$connection = mysqli_connect($server, $user, $password,$database);
if ($connection->connect_error) {
die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT * FROM TABLE";
$output = $connection->query($sql);


if ($output->num_rows > 0) {
// output data of each row
while($row = $output->fetch_assoc()) {
    echo $row;
}
} else {
echo "0 results";
} 
?>
    
</body>

</html>
