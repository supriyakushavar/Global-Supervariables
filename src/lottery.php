<?php
if( isset($_POST['submit']) ){
    echo "<p>".$_POST['emoji']."</p>";
    if($_POST['emoji'] == "You Won"){
        echo 'Do You Want to play Again ?';
        echo "<a href='index.php'>Yes</a>";
        echo "/";
        echo "<a href='lottery.php'>No</a>";
       
    }
   
}
?>