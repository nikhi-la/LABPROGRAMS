<?php

$arr=array(1,2,3,4,5);
echo 'Minimum : ',min($arr),'<br>';
echo 'Maximum : ',max($arr),'<br>';
echo 'Minimum : ',min('a','b','c'),'<br>';
echo 'Maximum : ',max('a','b','c'),'<br>';
echo 'Random : ',rand(10,30),'<br>';
echo rand(100000,999999),'<br>';
$format='D-M-Y';
echo date($format),'<br>';
const a=10;
echo a; 
echo constant("a"),'<br>';
date_default_timezone_set("Asia/Kolkata");
echo date("h:i:s a");
?>