<?php
//$password='';
$con=new mysqli('localhost','root','','MCA');
if($con->connect_error)
    die("Connection failed\n");
else
    echo "Connected Successfully\n";

//Insertion into table

$insQue="insert into student(stud_id,stud_name,stud_mark)values(1,'Nikhila',25),(2,'Akhila',30)";
if(mysqli_query($con,$insQue))

    echo "\nInserted successfully\n";
else
     echo " Failed";

//Retreiving data

$selQry="select * from student";
$data=mysqli_query($con,$selQry);
while($row=mysqli_fetch_assoc($data))
{
    echo 'Id : '.$row['stud_id'],'<br>','Name : '.$row['stud_name'],'<br>','Mark : '.$row['stud_mark'],'<br>';
    
}
?>