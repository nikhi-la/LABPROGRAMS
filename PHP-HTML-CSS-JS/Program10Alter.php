<?php

$con=mysqli_connect('localhost','root','','product');
if($con->connect_error)
    echo "Connection Failed";
else
    echo "Connected Successfully";

$sql='alter table tbl_product add pro_manufacture varchar(20)';
    if(mysqli_query($con,$sql))
        echo "Column Added Successfully";
    else
        echo "Failed";

?>