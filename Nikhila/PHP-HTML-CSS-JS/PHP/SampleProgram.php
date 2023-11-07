<html>
    <body>
        
    <center>
        
        <form action="SampleProgram.php" method="POST">
            
            First Name : <input type="text" name="firstname" autocomplete="off">
            <input type="submit" name="button1">
            
        </form>
        
        
    </center>
    
</body>

</html>

<?php
if(isset($_POST['button1'])){
$name=$_POST['firstname'];
echo 'First name : ',$name;
}
?>
