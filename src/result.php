<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <?php 
 if(isset($_POST['submit'])){
    echo '<h2>Top 5 TV shows : </h2>';
    $show1 = $_POST["show1"];
    $show2 = $_POST["show2"];
    $show3 = $_POST["show3"];
    $show4 = $_POST["show4"];
    $show5 = $_POST["show5"];

    echo "<p>$show1</p>";
    echo "<p>$show2</p>";
    echo "<p>$show3</p>";
    echo "<p>$show4</p>";
    echo "<p>$show5</p>";
    echo "<br>";
    echo "<br>";

    echo "<h2>Top 5 Movies :  </h2>";
    $movie1 = $_POST["movie1"];
    $movie2 = $_POST["movie2"];
    $movie3 = $_POST["movie3"];
    $movie4 = $_POST["movie4"];
    $movie5 = $_POST["movie5"];

    echo "<p>$movie1</p>";
    echo "<p>$movie2</p>";
    echo "<p>$movie3</p>";
    echo "<p>$movie4</p>";
    echo "<p>$movie5</p>";

    echo readfile("setup.php");
 }
 
?>


<!-- Your email address is: <?php echo $_POST["email"]; ?> -->

</body>
</html>