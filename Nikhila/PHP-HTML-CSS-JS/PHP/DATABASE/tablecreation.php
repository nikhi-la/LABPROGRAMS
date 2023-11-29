<?php
//$password='';
$con=new mysqli('localhost','root','','MCA');
if($con->connect_error)
    die("Connection failed\n");
else
    echo "Connected Successfully";

$sql="create table student(stud_id int primary key,stud_name varchar(20),stud_mark int)";
if(mysqli_query($con,$sql))

    echo "\nTable Created successfully";
else
     echo " Failed";
?>