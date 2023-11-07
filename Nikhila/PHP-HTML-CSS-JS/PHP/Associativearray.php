<?php

$class=array('name'=>'Nikhila','rollno'=>44,'Branch'=>'MCA'); 

echo '( ';
foreach($class as $c=>$c_value){
    
    echo $c,' : ',$c_value,' , ';
}

echo ' )<br><br>  Values :- ';
echo $class['name'],' , ' ;
echo $class['rollno'],' , ';
echo $class['Branch'],'<br>';
echo 'Number of elements : ',count($class);


echo '<br><br><br>Add one more element to class<br> ';
$class['Marks']=90;

 echo '<br>Key : Value<br>';
foreach($class as $c=>$c_value){
    
    echo $c,' : ',$c_value,'<br>';
}

?>