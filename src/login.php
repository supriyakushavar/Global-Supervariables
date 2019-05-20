<?php session_start(); 
 $array = [
    ["username" => "Supriya" , "password" => 123],
    ["username" => "Shri" , "password" => 456],
    ["username" => "Sachi" , "password" => 789]
];
if( isset($_POST['submit']) ){
    foreach($array as $arr){
        $uname = $arr['username'];
        $upass = $arr['password'];
        if($_POST['name'] == $uname && $_POST['password'] == $upass ){
            echo "<p>Hello " . $_POST['name'] ." </p>";
            exit;
        }else{
            echo "<p>Wrong password or username</p>";
            exit;
        }
    }
}
?>


<?php
echo ' 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
</head>
<body>

';
?>


<?php 
echo '
<h2>Enter your login details</h2>
<form action="#" method="post">
<p>Enter Username : <input type="text" name="name" /></p>
<p>Enter Password : <input type="password" name="password" /><p>
<input type="submit" name="submit" />
</form>';
?>

 



<?php
echo ' 
</body>
</html>
';
?>