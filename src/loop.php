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

?>
<table>
<?php foreach($array as $arr): ?>

<tr>
    <td>
    <a href="https://www.google.com/search?q=<?php echo $arr["tv-show"]; ?>">
         <?php echo $arr["tv-show"]; ?>
    </a>
    </td>
	<td><?php echo $arr["rating"]; ?></td>
</tr>

<?php endforeach; ?>
</table>


