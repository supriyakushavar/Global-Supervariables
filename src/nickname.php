<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nick Name</title>
</head>
<body>
    <form action="#" method="post">
       Enter Your Name : <input type="text" name="name"><br><br>
       <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        $str = $_POST["name"];
        $strLength = strlen($str);
        if($strLength > 1){
            $strRev = strrev($str);
            $strUp = strtoupper($strRev);
            $charFront = substr_replace($strUp, '--', 0 , 0);
            $charEnd = substr_replace($charFront , '--', strlen($charFront) , 0);
            $charX = substr_replace($charEnd, 'x', 0 , 0);
            // $letter1 = chr(65 + rand(0, 25));
            $chrRandom = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), rand(58, 60)); 
            $strRandom =   "[".$chrRandom . $charX."]";
            $color = rand(0 , 360);
            for($i=0 ; $i< strlen($strRandom) ; $i++){
                $textColor = $color + $i * 10;
                if(ctype_upper($strRandom[$i])){
                    echo "<span style='font-size :50px; color : hsl($textColor , 100% , 50%);'>".strtolower($strRandom[$i])."</span>";
                    // For text gradient background: -webkit-linear-gradient(#eee, #333);
                    // -webkit-background-clip: text;
                    // -webkit-text-fill-color: transparent;
                }else{
                    echo "<span style='font-size :50px;  color : hsl($textColor , 100% , 50%);'>".strtoupper($strRandom[$i])."</span>";
                }
            }
        }
        else{
            echo "Enter Valid Name";
        }
    }
    ?>
</body>
</html>