<?php

$con=mysqli_connect('localhost','root','','product');
if($con->connect_error)
    echo "Connection Failed";
else
{
?>
<html>
    <body>
        <center>
        <form id="form1" method="POST" action="Program8Insert.php">
            <br><br><br>
            <h1>Product Details</h1>
            <br>
            <table border="1" width="400" height="300" cellpadding="20">
                <tr>
                    <th>Product Id</th>
                    <td><input type="text" name="pro_id"></td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td><input type="text" name="pro_name"></td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td><input type="text" name="pro_qty"></td>
                </tr>
                <tr>
                    <th>Unit Price</th>
                    <td><input type="text" name="pro_price"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" name="submit" value="Add">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></center></td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $id=$_POST['pro_id'];
        $name=$_POST['pro_name'];
        $qty=$_POST['pro_qty'];
        $price=$_POST['pro_price'];
        $insQuery="insert into tbl_product(pro_id,pro_name,pro_quantity,pro_price)values('$id','$name',$qty,$price)";
        //echo $insQuery;
        if(mysqli_query($con,$insQuery))
        {
            ?>
            <script>
                window.alert("Inserted Successfully");
            </script>
            <?php
        }
        else
        {
        ?>
        <script>
                windows.alert("Insertion Failed");
        </script>
        <?php
        }
    }
}
?>