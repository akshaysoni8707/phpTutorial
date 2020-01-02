<?php
class person{
    protected $name;
    protected $age;
    const WELCOME ="Hello Guys";
    function __construct($name,$age){
$this->name = $name;
$this->age =$age;
    }
    protected function welcomeMsg(){
        echo self::WELCOME,"<br>";
    }

}
class teacher extends person{
    private $salary;
    function __construct($name,$age,$salary=100000.55){
        $this->name = $name;
        $this->age =$age;
        $this->salary = $salary;
            }
        public function display(){
            $this->welcomeMsg();
            echo "Name : ",$this->name," age : ",$this->age," salary : ",$this->salary;
        }
}
$t = new teacher('Akshay',24,120000.66);
$t->display();
?>