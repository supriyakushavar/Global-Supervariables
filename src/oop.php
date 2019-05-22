<?php session_start();

if( isset($_POST['submit']) ){

class person{
    private $firstName;
    private $lastName;
    private $phoneNumber;
    //setting private properties as public 
    public function __construct($fname , $lname , $pName){
        $this-> firstName = $fname;
        $this-> lastName = $lname;
        $this-> phoneNumber = $pName;
    }
    //get the public properties
    public function getFullName(){
        return $this-> firstName . " " . $this-> lastName ." ". $this->phoneNumber; 
    }
}

    $someone = new person($_POST['firstname'] , $_POST['lastname'] ,$_POST['phoneNumber']);

    // without constructor 
    // $someone->setFirstName("supriya" , "kushavar" , 9964153778);


    // If its public , can access directly as below 
    // $someone ->firstName = 'supriya';
    // echo $someone -> firstName;


    echo $someone -> getFullName();
    // var_dump($someone);
}
?>