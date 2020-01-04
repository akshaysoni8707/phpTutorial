<?php
class pi{
    public static $value =  3.14;
}
class x extends pi{
    public function disp(){
        echo "<br> From parent ",parent::$value,"<br>";
        echo "<br> From self ",self::$value,"<br>";
    }
}

echo x::$value;
$y = new x();
$y->disp();

?>