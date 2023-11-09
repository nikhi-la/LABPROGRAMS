
<html>
    
    <body>
        
    <center>
        
        <form id="form1" action="exampleGET.php" method="get" >
            <br><br>
            <h2><u>Simple Calculator</u></h2>
            <br>
            <label> Number 1  </label>
            <input type='number' name='num1'><br><br>
            <label> Number 2  </label>
                <input type='number' name='num2'><br><br>
            
                <input type='submit' name='add' value='Add'>&nbsp;&nbsp;<input type='submit' name='diff' value='Subtract'>
                &nbsp;&nbsp;<input type='submit' name='pro' value='Multiply'>&nbsp;&nbsp;<input type='submit' name='quo' value='Divide'><br><br>
            
            <?php
                if(isset($_GET['add']))
                {
                    $num1=$_GET['num1'];
                    $num2=$_GET['num2'];
                    
                    $sum=$num1+$num2;
                    ?>
                <label> Sum </label>
                    <input type='number' name='total' value='<?php echo $sum; ?>'><br><br>
                    <?php
                    
                    
                }
                if(isset($_GET['diff']))
                {
                    $num1=$_GET['num1'];
                    $num2=$_GET['num2'];
                    
                    $diff=$num1-$num2;
                    ?>
                <label> Difference </label>
                    <input type='number' name='total' value='<?php echo $diff; ?>'><br><br>
                    <?php
                    
                    
                }
                if(isset($_GET['pro']))
                {
                    $num1=$_GET['num1'];
                    $num2=$_GET['num2'];
                    
                    $pro=$num1*$num2;
                    ?>
                <label> Product </label>
                    <input type='number' name='total' value='<?php echo $pro; ?>'><br><br>
                    <?php
                    
                    
                }
                if(isset($_GET['quo']))
                {
                    $num1=$_GET['num1'];
                    $num2=$_GET['num2'];
                    
                    $div=$num1/$num2;
                    ?>
                <label> Quotient </label>
                    <input type='number' name='total' value='<?php echo $div; ?>'><br><br>
                    <?php
                    
                    
                }
            
            ?>
        </form>
        
        
        
        
        
    </center>
        
    </body>
    
</html>
