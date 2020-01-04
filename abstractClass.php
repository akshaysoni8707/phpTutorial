<?php
trait traitor{
     public function Msg(){
         echo "<br> I AM THE TRAITOR<br>";
     }
}
abstract class Person{
    use traitor;
    public $name;
    public $age;
    public function __construct($name,$age){
$this->name = $name;
$this->age = $age;
    }
    abstract public function disp():string;
}
class teacher extends Person{
public function disp():string{
    return "Name is $this->name my age is $this->age";
}
}
$a = new teacher('Akshay',24);
echo $a->disp();
$a->Msg();

?>