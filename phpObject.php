<?php
class student{
public $name;
public $rollno;

function __construct($name='xyz'){
    $this->name = $name;
    $this->rollno = 23;
}

function set_name($name){
    $this->name = $name;
}
function get_name(){
    return $this->name;
}
function set_rollno($rollno){
    $this->rollno = $rollno;
}
function get_rollno(){
    return $this->rollno;
}
function display(){
    echo "<br>NAME : ",$this->get_name(),"<br>ROLL NO : ",$this->get_rollno();
}
}
$akshay = new student();
$sumit = new student('sumit');
$akshay->set_rollno(52);
$akshay->set_name('AKKI');
$akshay->display();
$sumit->display();

?>