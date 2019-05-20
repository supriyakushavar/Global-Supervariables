<?php

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
</head>
<body>

';
?>

<?php 
echo '
<h2>Select the Emoji to play !!</h2>
<form action="lottery.php" method="post">';


echo "<input type='checkbox' name='emoji' value='You Lost' class='emoji' >\u{1F355}</input>";
echo "<input type='checkbox' name='emoji' value='You Won' class='emoji'>\u{1F354}</input>";
echo "<input type='checkbox' name='emoji' value='You Lost' class='emoji'>\u{1F35F}</input>";

echo '<br><input type="submit" name="submit" />
</form>';

?>

<?php
echo ' 
</body>
</html>
';
?>