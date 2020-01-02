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
    // Index array
    $languages = array('php','Java','python');
    for ($i=0; $i <count($languages) ; $i++) { 
        echo "language ".$i." is ".$languages[$i]."<br>";
    }
    // Index array
    $designingLang[0]="HTML";
    $designingLang[1]="CSS";
    $designingLang[2]="JS";
    foreach($designingLang as $l){
        echo "designing language is ",$l,"<br>";
    }
    // Associative array
    $salaries = array('sumit'=>100000.00,'akshay'=>10000.00,'jay'=>205000.55);
    foreach($salaries as $s_key => $s_value){
echo "salary of ",$s_key," is ".$s_value,"<br>";
    }
    echo "salary of Akshay is ",$salaries['akshay'],"<br>";
    // Multidimensional array
$marks = array('akshay'=>array('name'=>'akshay','physics'=>88,'maths'=>66),'sumit'=>array('name'=>'sumit','physics'=>79,'maths'=>89));
echo "marks of sumit in maths are ",$marks['sumit']['maths'],"<br>";
echo "forloop in multidimensional array<br>";
$age = array(array('akshay',24),array('sumit',25));
for ($i=0; $i <2 ; $i++) { 
    echo "Age of ";
    for ($j=0; $j <2 ; $j++) { 
        echo " ",$age[$i][$j],"  ";
    }
    echo "<br>";
}
    ?>
</body>
</html>