<?php
$salary=array('Akshay'=>100000,'Sumit'=>150000);
print_r($salary);
var_dump($salary);
print_r(array_change_key_case($salary,CASE_UPPER));
var_dump(array_change_key_case($salary,CASE_UPPER));
$cars = array('BMW','PORSCHE',"AUDI",'VOLVO','MERCEDES');
print_r(array_chunk($cars,2));
var_dump(array_chunk($cars,2));
$sudent = array(
    array(
        'id'=>101,
        'name'=>'Akshay',
        'salary'=>100000.55
    ),
    array(
        'id'=>102,
        'name'=>'Sumit',
        'salary'=>105000.55
    ),
    array(
        'id'=>103,
        'name'=>'Vikas',
        'salary'=>205000.55
    )
);
$names = array_column($sudent,'name','id');
print_r($names);
var_dump($names); 
?>