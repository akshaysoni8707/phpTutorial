<?php declare(strict_types=1);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php  
    function hello(){
        echo "Hello Akshay<br><br>";
    }
    hello();
    $call = "hello";
    $call();
    function addNum($a,$b){
        echo "<br> Sum is ",($a+$b),"<br><br>";
    }
    addNum(10,20);
function add5($num){
$num += 5;
}
function add6(&$num){
    $num += 6;
    }
$originalNum = 10;
add5($originalNum);
echo "<br> Num is ",$originalNum,"<br><br>";
add6($originalNum);
echo "<br> Num is ",$originalNum,"<br><br>";
    function subNum(int $a, int $b){
        return $a/$b;
    }
    //echo "<br><br>",subNum(10,'3 day'),"<br><br>";
    function defaultValue($height = 'Nothing entered'){
        echo "<br><br>height = ",$height,"<br><br>";
    } 
defaultValue(50.5);
defaultValue();
defaultValue(101);
function specificReturn(float $a,float $b):int{
    return (int)($a+$b);
}
function specificReturnFloat(int $a,int $b):float{
    return $a+$b;
}
echo "<br><br>",specificReturn(1.23,5.45),"<br><br>";
echo "<br><br>",specificReturnFloat(1,5),"<br><br>";
    ?>
</body>
</html>