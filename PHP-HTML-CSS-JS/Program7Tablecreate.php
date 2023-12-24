<?php

$con=mysqli_connect('localhost','root','');
if($con->connect_error)
    echo "Connection Failed";
else
    echo "Connected Successfully";

    $sql='create database Product';
    if(mysqli_query($con,$sql))
        echo "Database Created";
    else
        echo "Database Failed to create";
    
    $con=mysqli_connect('localhost','root','','product');
    $sql1="create table tbl_product(pro_id varchar(20) primary key, pro_name varchar(20),pro_quantity int,pro_price int)";
    if(mysqli_query($con,$sql1))
        echo "Table Created";
    else
        echo "Table Failed to create";

?>