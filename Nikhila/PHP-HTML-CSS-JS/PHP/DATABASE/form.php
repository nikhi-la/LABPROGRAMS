<?php
//$password='';
$con=new mysqli('localhost','root','','MCA');
if($con->connect_error)
    die("Connection failed\n");

?>
<html>
    
    <body>
    <center>
        <form id="form1" method="post">
            <br><br><br>
            <table border="1">
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"></td> 
                </tr>
                                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td> 
                </tr>
                                <tr>
                    <td>Mark</td>
                    <td><input type="text" name="mark"></td> 
                </tr>
                <tr>
                
                    <td colspan="2"><center><input type="submit" name="submit" value="Submit"></center></td> 
                
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
        
        $insQue="insert into student(stud_id,stud_name,stud_mark)values($id,'$name',$mark)";
        //echo $insQue;
        if(mysqli_query($con,$insQue))
             echo "\nInserted successfully\n";
      
        
        else
                echo " Failed";
        
    }

?>