<?php
session_start();
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
$array = [
    "\u{1F355}",
    "\u{1F354}",
    "\u{1F35F}"
];
$_SESSION['output'] = $array;


echo '
<h2>Select the Emoji to play !!</h2>
<form action="lottery.php" method="post">';


for($i =0 ; $i< count($array) ; $i++){

    echo "<input type='checkbox' value='$i' name='emoji'>";
    echo  $array[$i];
}

echo '<br><input type="submit" name="submit" />
</form>';

?>

<?php
echo ' 
</body>
</html>
';
?>




