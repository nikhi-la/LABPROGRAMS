<?php
$con=mysqli_connect("localhost",'root',"",'mca'); //new mysqli("localhost",'root',"")
if($con->connect_error)
    die("Connection failed");


if(isset($_POST['search']))
{
    $id=$_POST['searchroll'];
    
    $selQry="select * from student where stud_id=$id";
    //echo $selQry;

        $data=mysqli_query($con,$selQry);
        $row=mysqli_fetch_assoc($data);
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
            <form>
               <br><br>
            <h1 style="color:crimson">Search Result</h1>
            <br>
                <table border='1' width='500'  cellpadding='20'>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mark</th>
                    </tr>
                    <tr>
                        <td><?php echo $row['stud_id'] ?></td>
                        <td><?php echo $row['stud_name'] ?></td>
                        <td><?php echo $row['stud_mark'] ?></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
<?php

    
}
else
{
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
        <form method='post' action='formsearch.php'>
           <br><br>
           <center>
            <h1 style="color:crimson">Search</h1>
            <br>
                <table>
                    <tr height="100">
                        <th>Roll No</th>
                        <td><input type="text" name="searchroll" required></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" height="50"><center><input type="submit" name="search" value="Search"></center></td>
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>
<?php
}
?>