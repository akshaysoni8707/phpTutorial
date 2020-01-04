<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"purple");

$result=array_intersect($a2,$a1);
print_r($result);
var_dump($result);
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","c"=>"blue");

$result=array_intersect_assoc($a2,$a1);
print_r($result);
var_dump($result);
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","f"=>"green","c"=>"pink");

$result=array_intersect_key($a2,$a1);
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
    
    $a1=array("a"=>"red","b"=>"green","d"=>"blue");
    $a2=array("a"=>"red","b"=>"green","d"=>"blue");
    $a3=array("e"=>"yellow","a"=>"red","d"=>"blue");
    
    $result=array_intersect_uassoc($a1,$a2,$a3,"myfunction");
    print_r($result);
    var_dump($result);
    $a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"black","b"=>"yellow","d"=>"brown");
$a3=array("e"=>"purple","b"=>"white","a"=>"gold");

$result=array_intersect_ukey($a1,$a2,$a3,"myfunction");
print_r($result);
var_dump($result);
?>