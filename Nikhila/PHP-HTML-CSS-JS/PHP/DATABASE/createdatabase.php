<?php

$con=mysqli_connect("localhost",'root',""); //new mysqli("localhost",'root',"")
if($con->connect_error)
    die("Connection failed");
else
    echo "Connected Successfully";


$sql="create database MCA";
if(mysqli_query($con,$sql))

    echo "\nDatabase Created successfully";
else
     echo " Failed";

?>
