<?php
//$password='';
$con=new mysqli('localhost','root','','MCA');
if($con->connect_error)
    die("Connection failed\n");

$eid="";
$id="";
$name="";
$mark="";
if(isset($_GET["uid"]))
{
    $eid=$_GET["uid"];
    
    $sel="select * from student where stud_id=$eid";
    $data=mysqli_query($con,$sel);
    $row=mysqli_fetch_assoc($data);
    $id=$row['stud_id'];
    $name=$row['stud_name'];
    $mark=$row['stud_mark'];
           
}

    
?>
<html>
    
    <style>
        
        body{
            background-color: beige;
        }
        table{
            background-color: azure;
        }
       input[ type="submit" ]
       {
           background-color: honeydew;
       }
       a{
           text-decoration: none;
           color: orangered;
       }

        
    </style>
    
    <body>
    <center>
        <form id="form1" method="post">
            <br> 
            <h1 style="color:crimson">Internal Marks For PHP</h1>
            <br><br>
            <table border="1" width="300" height="200" cellpadding="15">
                <tr>
                    <td>Id</td>
                    <td><input type="hidden" name="id" value="<?php echo $eid ?>">
                        <input type="text" name="id" value="<?php echo $id ?>"></td> 
                </tr>
                                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $name ?>"></td> 
                </tr>
                                <tr>
                    <td>Mark</td>
                    <td><input type="text" name="mark" value="<?php echo $mark ?>"></td> 
                </tr>
                <tr>
                
                    <td colspan="2"><center><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></center></td> 
                
                </tr>
                <tr>
                
                    <td colspan="2"><center> <a href="formoutput.php">Display Table</a></center></td> 
                
                </tr>
                
            </table>
            
        </form>
    </center>
    </body>
</html>
    
<?php
    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $mark=$_POST['mark'];
        
        if(isset($_GET["uid"]))
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $mark=$_POST['mark'];
        
            $updateQue="update student set stud_id=$id,stud_name='$name',stud_mark=$mark where stud_id=$eid";
            //echo $insQue;
            if(mysqli_query($con,$updateQue))
                echo "\nUpdated successfully\n";
            else
                echo " Failed";
        }
        else
        {   
            $insQue="insert into student(stud_id,stud_name,stud_mark)values($id,'$name',$mark)";
            //echo $insQue;
            if(mysqli_query($con,$insQue))
                echo "\nInserted successfully\n";
            else
                echo " Failed";
        } 
    }
    
?>