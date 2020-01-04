<?php
class staticCreator{
    public static function Msg(){
        echo "<br>Hello i am Static<br>";
    }    
}
class greet{
    public function display(){
        echo "<br>GREETINGS<br>";
        staticCreator::Msg();        
    }
}
class greeting{
    public function __construct(){
        echo "<br>GREETINGS EVERYBODY<br>";
        staticCreator::Msg();
    }
}
staticCreator::Msg();
$a = new greet();
$a->display();
new greeting();
?>