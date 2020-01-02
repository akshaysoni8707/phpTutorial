<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="fname" id="fname">
    <input type="submit" value="send">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
if(empty($_REQUEST['fname'])){
    echo "<br>NAME REQUIRED";
}
else{
    echo "<br>NAME is ",$_REQUEST['fname'];
}

    }
    
    ?>
</body>
</html>