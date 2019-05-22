<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Manipulation</title>
</head>
<body>
    <?php
        $array = [
            "Maths",
            "Chemistry",
            "Physics"
        ];

        $associativeArray = [
            "Maths" => 95 ,
            "Chemistry" => 80,
            "Physics" => 76,
            "Computer" => 68
        ];

        $object = (object) [
            'title' => 'xyz',
            'Author' => 'abc'
        ];

        echo "<h1>Looping Using Normal Array:</h1>";
        array_push( $array , 'Computer'); 
        foreach($array as $arr) {
            echo "<p>".$arr."</p>";
        }

        echo "<h2>Looping Using Associative Array :</h2>";
        $associativeArray['Bio'] = '88';
        foreach($associativeArray as $arr => $marks){
            echo "<p><b>" .$arr. " </b>marks obtained <b>" .$marks."</b></p>";
        }

        echo "<h3>Looping Using Object :</h3>";
        $object->{"price"} = '1234';
        foreach( $object as $arr => $value){
            echo "<p><b>" .$arr. " </b> is <b>" .$value."</b></p>";
        }

    ?>
</body>
</html>