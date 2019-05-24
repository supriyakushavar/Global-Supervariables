<?php
session_start();
include 'functions.php';
require 'security.php';

if ($_POST['check'] == 'Yes') {
    nickname_generate("someName");
}
else if (($_POST['check'] == 'No') || (isset($_POST["name"])) || (isset($_POST["GenerateObject"])) || (isset($_POST["RevertObject"])))  {
    showPage();
} else{
    security();
}

function showPage(){
    print<<< home1
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Php Functions</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <div class="box1">
                <form action="#" method="POST">
                    <button type="submit" name="GenerateObject">Generate object</button>
                </form>
            </div>
            <div class="box2">
                <form action="#" method="POST">
                    <button type="submit" name="RevertObject">Revert object</button>
                </form>
            </div>
            <div class="box3">
                <form action="#" method="POST">
                <button type="submit" name="submit">Get a nickname</button><br>
                <input type="text" name="name">
                </form>
            </div>
        </div>
        </body>
        </html>
home1;
}


if(isset($_POST["submit"])){
    $str = $_POST["name"];
    nickname_generate($str);
}

$GLOBALS['newuser'];
if(isset($_POST["GenerateObject"])){
    $newuser = object_generate();
    echo "<pre>";
    print_r($newuser);
    echo "</pre>";
    $_SESSION["generatedOject"] = $newuser; 
}

if(isset($_POST["RevertObject"])){
    $newObject = $_SESSION["generatedOject"];
    if(!($newObject)){
        object_generate();
    }else{
        object_revert($newObject);
    }
}

?>
