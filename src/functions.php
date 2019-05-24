<?php
function nickname_generate($fname){
    $str =  $fname;
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

function object_generate(){
    $object= json_decode($_SESSION["myObject"]);
    return $object;
}

function object_revert($obj){
    $combinedArray = [];
    foreach($obj as $arr => $value){
        unset($arr-> $value);
        if(is_array($value)){
            foreach($value as $val => $key){
                array_push( $combinedArray , $key); 
            }
        }
        elseif(is_object($value)){
            $asscArray =  (array) $value;
            echo "<pre>";
            print_r($asscArray);
            echo "</pre>";
        }else{
            echo "<p>" .$arr. "  is " .$value."</p>";
        }
    }
    echo "<pre>";
    print_r($combinedArray);
    echo "</pre>";
   
}


 
?>