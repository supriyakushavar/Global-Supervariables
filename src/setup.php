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
echo '<form action="result.php" method="post">

<h2>Top 5 TV Shows :</h2><br>
<input type="text" name="show1" /><br>
<input type="text" name="show2" /><br>
<input type="text" name="show3" /><br>
<input type="text" name="show4" /><br>
<input type="text" name="show5" /><br>
<br><br>

<h2>Top 5 Movies :<h2><br>
<input type="text" name="movie1" /><br>
<input type="text" name="movie2" /><br>
<input type="text" name="movie3" /><br>
<input type="text" name="movie4" /><br>
<input type="text" name="movie5" /><br>
<br><br>
<input type="submit" name="submit">
</form>';
?>

<?php
echo ' 
</body>
</html>
';
?>
