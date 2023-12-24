<?php
if(isset($_POST['submit']))
{
?>
<html>
    <body>
        <center>
            <br><br><br>
            <h1>Product Details</h1>
            <br>
            <table border="1" width="700" height="200" cellpadding="20">
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Manufacture-Date</th>
                    <th>Expiry-Date</th>
                </tr>
                <tr>
                    <td><?php echo $_POST["pro_name"];?></td>
                    <td><?php echo $_POST["pro_qty"];?></td>
                     <td><?php echo $_POST["pro_price"];?></td>
                    <td><?php echo $_POST["pro_mandate"];?></td>
                    <td><?php echo $_POST["pro_expdate"];?></td>
               </tr>
                
            </table>

    </center>
    </body>
</html>

<?php
}
?>