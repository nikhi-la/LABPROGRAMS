<?php
    $con=new mysqli('localhost','root','','MCA');
if($con->connect_error)
    die("Connection failed\n");
else
   // echo "Connected Successfully\n";

$sel="select * from student";
$data=mysqli_query($con,$sel);
if(mysqli_num_rows($data)>0)
{
                    
?>
<html>
    
    <body>
    <center>
        <form id="form1" method="get">
            <br><br><br>
            <table border="1">
                <tr>
                    <td>Id</td>
                    <td>Student Name</td> 
                    <td>Mark</td>
                </tr>   
                <?php
                while($row=mysqli_fetch_assoc($data))
                {
                ?>
                     <tr>
                    <td><?php echo $row["stud_id"]; ?></td>
                    <td><?php echo $row["stud_name"]; ?></td> 
                    <td><?php echo $row["stud_mark"]; ?></td>
                    <td><a href="formoutput.php?sid=<?php echo $row['stud_id']?>">Delete</a></td>
                    <td><a href="form.php?uid=<?php echo $row['stud_id']?>">Update</a></td>
                   
                </tr>   
                <?php
                }
                ?>
            </table>
            
        </form>
    </center>
    </body>
</html>
<?php
}

else
{
    echo "Table Empty";
}
if(isset($_GET["sid"]))
{
    $id=$_GET["sid"];
    //echo $_GET["sid"];
    $del="delete from student where stud_id=$id ";
    echo $del;
    if(mysqli_query($con,$del))
    {
             echo "\nDeleted successfully\n";
              header("Location: formoutput.php");
    }  
        
        else
                echo " Failed";
        
}
?>