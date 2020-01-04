<?php
$x = 1;
$a = array_fill(0,3,$x+=2);
print_r($a);
var_dump($a);
$key = array('a','b','c');
$ar = array_fill_keys($key,'blue');
print_r($ar);
var_dump($ar);
function test_odd(int $var)
  {
  return($var%2);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
$map = array('Akshay'=>'Soni','Sumit'=>'More');
var_dump($map);
var_dump(array_flip($map));
?>