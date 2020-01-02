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
    $i = 0;
    $num = 5;
    for ($i=0; $i <12 ; $i++) { 
        if($i<1){
            continue;
        }
        if($i>10){
        break;
        }
        echo "$num * $i = ",($num*$i),"<br>";
    }
    $number = 64325;
    echo "number is $number <br>";
$revnumber = 0;
    while((int)$number>0){
$revnumber*=10;
$revnumber+=(int)$number%10;
(int)$number=(int)$number/10;
    }
    echo "reverse of number is $revnumber <br>";
    $x = 5;
    do{
        echo "answer is printed without checking conndition<br>";
    }while($x<3);
    ?>
</body>
</html>