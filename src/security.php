<?php 
session_start();

function security(){
print <<< securityContent

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Security</title>
</head>
<body>
    <form  action="homeFunction.php" method="post">
    Are You bothered from the future coming to exterminate the human race or 
    Are you just here for a cool nickname
    <input type="radio" value="Yes" name="check">Yes
    <input type="radio" value="No" name="check">No
    <input type="submit" value="submit" name="security">
    </form>
</body>
</html>
securityContent;
}
?>
