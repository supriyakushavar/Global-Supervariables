<?php
session_start();
$output2 = $_SESSION['output'];

if( isset($_POST['submit']) ){
    $winner = rand(0 , 2);
    if($_POST['emoji'] == $winner){
        echo '<p>You Won!!!!</p> ';
        echo 'Do You Want to play Again ?';
        echo "<a href='index.php'>Yes</a>";
        echo "/";
        echo "<a href='lottery.php'>No</a>";
       
    }else{
        echo '<p>You Lost</p>';
    }
    echo "<p>Winning Emoiji :".$output2[$winner]."</p>";
    echo "<p>Emoiji you selected :" .$output2[$_POST['emoji']]."</p>";
}
?>