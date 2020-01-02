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
    $x = 5;
    $y = 6;
    function addition(){
        $x = 3;
        $y = 2;
        $z = $x + $y;
        return $z;
    }
    echo "<br><br>",addition(),"<br><br>";
    function globalAddition(){
       $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    globalAddition();
    echo "<br><br>",$z,"<br><br>";
    ?>
</body>
</html>