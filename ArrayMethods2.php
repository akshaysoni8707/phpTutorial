<?php
$fname=array('Akshay','Sumit');
$lname=array('Soni','More');
$fullName = array_combine($fname,$lname);
print_r($fullName);
var_dump($fullName);
$animal = array('cat','dog','cat','lion');
print_r(array_count_values($animal));
var_dump(array_count_values($animal));
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);
var_dump($result);
$result=array_diff_assoc($a1,$a2,$a3);
print_r($result);
var_dump($result);
$result=array_diff_key($a1,$a2,$a3);
print_r($result);
var_dump($result);

function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");
$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
var_dump($result);
$result=array_diff_ukey($a2,$a1,"myfunction");
print_r($result);
var_dump($result);
?>