<?php 


    //starting a  session
    session_start();
    if(isset($_SESSION['visits'])){
        $_SESSION['visits'] = $_SESSION['visits'] + 1;
    }else{
        $_SESSION['visits'] = 1 ;
    }
    echo "<p>You have been here <strong> " . $_SESSION['visits'] ." </strong> times.</p>";

 ?>