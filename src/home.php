<?php
session_start();
setcookie ("myObject"); 
?>
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
            "Physics",
            "Economics"
        ];

        $associativeArray = [
            "Maths" => 95 ,
            "Chemistry" => 80,
            "Physics" => 76,
            "Computer" => 68
        ];

        // $object = (object) [
        //     'title' => 'xyz',
        //     'Author' => 'abc'
        // ];

        $object = new stdClass(array('first','second','third'));
        $object->title = 'xyz';
        $object->Author = 'abc';

        echo "<h1>Looping Using Normal Array:</h1>";
        array_push( $array , 'Newly Added Subject'); 
        
        for($i = 0 ; $i < count($array) ; $i++) {
            if(rand(0 , 5) == 1){
                $array[rand(0, 3)] = "Edit Subject";
            }
            echo "<p>".$array[$i]."</p>";
        }
        if(count($array) % 2 !== 0){
            echo "<b>Remove Item if array is un even:</b>";
            unset($array[0]);
            for($i = 0 ; $i <= count($array) ; $i++) {
                echo "<p>".$array[$i]."</p>";
            }
        }

        echo "<h2>Looping Using Associative Array :</h2>";
        $associativeArray['Bio'] = '88';
        foreach($associativeArray as $arr => $marks){
            echo "<p><b>" .$arr. " </b>marks obtained <b>" .$marks."</b></p>";
        }
        
        array_pop($associativeArray);
        
        var_dump($associativeArray);

        echo "<h3>Looping Using Object :</h3>";
        $object->{"price"} = '1234';
        foreach( $object as $arr => $value){
            echo "<p><b>" .$arr. " </b> is <b>" .$value."</b></p>";
        }

        // var_dump($array);

        $slice1 = array_slice($array , 0 , 2);
        // var_dump($arr1);

        $slice2 = array_slice($array , -2 , 2);
        // var_dump($arr2);

        $object-> arr1 = $slice1;
        $object-> arr2 = $slice2;
        $object-> assoArr = $associativeArray;
        // var_dump($object);
        echo "<pre>";
        print_r ($object);
        echo "</pre>";
        foreach( $object as $arr => $value){
            if(is_array($value)){
                foreach($value as $val){
                    echo "<p>".$val."</p>";
                }
            }else{
                echo "<p><b>" .$arr. " </b> is <b>" .$value."</b></p>";
            }
        }
        $_SESSION["myObject"]= json_encode($object); 
        var_dump($_SESSION["myObject"]);
        echo $_COOKIE["myObject"];
    ?>
</body>
</html>