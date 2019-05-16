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


$array = [
	["tv-show" => "Naruto", "rating" => 4],
	["tv-show" => "Firefly", "rating" => 5],
	["tv-show" => "Big bang theory", "rating" => 4],
    ["tv-show" => "Family Guy", "rating" => 5],
    ["tv-show" => "GOT" , "rating" => 5],
    ["tv-show" => "You" , "rating" => 4],
    ["tv-show" => "Black Panter" , "rating" => 3]
];
echo "<h2>Top TV Shows :</h2>"
?>

<table>
<?php foreach($array as $arr): ?>

<tr>
    <td>
        <a href="https://www.google.com/search?q=<?php echo $arr["tv-show"]; ?>">
            <?php echo $arr["tv-show"]; ?>
        </a>
    </td>
	<td>
    <?php
        $rating = $arr["rating"];
         for( $i = 0; $i< $rating; $i++ ) {
            echo '<span class="fas fa-star"></span>';
         }
      ?>
    </td>
</tr>

<?php endforeach; ?>
</table> 

<?php
echo ' 
</body>
</html>
';
?>




