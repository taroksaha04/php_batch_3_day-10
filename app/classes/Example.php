<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index(){
       // echo 'Hello World';
        //$x= true;
        //echo gettype($x);
//        $firstName='Rohim';
//        $lastName='Khan';
//        $this->firstName = 'Rohim';
//        $this->lastName  = 'Khan';
//        echo "Full name is ".$this->firstName." ".$this->lastName;
        /*
         * Arithmetic operator
            *Binary operator(+,-*,/,%)
            *unary operator(++,--,(-)
         * Binary operator
         * Assignment operator
         * conditional operator
         * logical operator
         */
//        $this->x = 10;
//        $this->y = 20;
//        $this->z=30;


//        conditional statement
//        $this->x=100;
//        if($this->x>20){
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello world';
//        }


        //else if
//        if($this->x > 200){
//            echo 'BITM';
//        }
//        elseif ($this->x<200){
//            echo 'hello world';
//        }
//        else{
//            echo'bangladesh';
//        }

        //switchCase
       // $this->x=100;
//        switch ($this->x){
//            case 10:
//                echo 'hello world';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello BITM';
//        }

        //Repeated Statement
//
//        for($this->y = 10; $this->y <= 15; $this->y++){
//                  echo 'Hello world<br/>';
//
//        }
//        for($this->y = 99; $this->y >= 76; $this->y--){
//            echo $this->y. ' ';
//
//        }
        //while loop
//
//        $this->x = 100;
//        while ($this->x < 110){
//            echo 'Hello World<br/>';
//            $this->x++;
//        }

//Do While loop
//        $this->x = 100;
//        do{
//            echo 'hello world<br/>';
//            $this->x++;
//        }while($this->x<110);

        //Array
        $this->data= [10,20,30,'BITM',100.200,true];
       // echo $this->data;
        foreach ($this->data as $item){
            echo $item;
        }






//logical operator

//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>...<br/>';
//
//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>...<br/>';



//        conditional operator
//        echo $this->x >$this->y;
//        echo '<br/>';
//        echo $this->x != $this->y;
//        echo '<br/>';
//        echo $this->x === $this->y;
//        echo '<br/>';





//      Assignment operator
//        echo $this->x +=$this->y; //this->x = $this->x + $this->y 30
//        echo '<br/>';
//        echo $this->x -=$this->y;//10
//        echo '<br/>';
//        echo $this->x *=$this->y;//200
//        echo '<br/>';
//        echo $this->x /=$this->y;//10
//        echo '<br/>';
//        echo $this->x %=$this->y;//10
//        echo '<br/>';
//        echo $this->x .=$this->y;//1020(concatanation)
//        echo '<br/>';



//        unary operator

//        echo $this->x--;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo --$this->x;
//        echo '<br/>';
//        echo -$this->x;



//        Binary operator

//        echo $this->x +$this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;


    }
}