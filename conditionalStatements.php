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
    $marks = 30;
    if($marks<=100 && $marks>=0){
if($marks>80){
    echo "GRADE A <br>";
}
else if($marks>50){
    echo "GRADE B <br>";
}
else if($marks>35){
    echo "PASS <br>";
}
else{
    echo "FAIL <br>";
}
    }
    else{
        echo "Invalid marks";
    }    
    $a = 51;
    $b = 10;
    $op = '*';
    switch($op){
case '+':
    echo "a + b = ",($a+$b);
break;
case '-':
    echo "a - b = ",($a-$b);
break;
case '*':
    echo "a * b = ",($a*$b);
break;
case '/':
    echo "a / b = ",($a/$b);
break;
default:
echo "INVALID OPERATOR";
break;
    }
    ?>
</body>
</html>