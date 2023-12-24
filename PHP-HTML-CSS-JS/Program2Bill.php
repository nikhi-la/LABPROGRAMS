<html>
    
    <head>
        <title>BILL</title>

        </head>
    
    <style>
        input[ type='submit']{
            
            background-color: coral;
            border-radius: 20% ;
            width: 50;
            height: 30;
            
        }
        
    </style>
    
    <body>
    <center>
        <br><br> 
        <form id="form1" method='post' action="Program2Output.php">
            
            <h1 style='color: crimson' ><u>OLIVE FAMILY MART</u></h1>
            <h3 style='color: darkred'>Fill your Cart</h3>
            <br>
            
            <table border='1' height='250' cellpadding='5'>
                
                <tr >
                    <th width='100'  >Items</th>
                    <th width='50'>Quantity</th>
                    
                </tr>
                
                <tr>
                    <td>Pen</td>
                    <td><input type='number' name='item1'></td>
                    
                </tr>
                <tr>
                    <td>Pencil</td>
                    <td><input type='number' name='item2'></td>
                    
                </tr>
                <tr>
                    <td>Marker</td>
                    <td><input type='number' name='item3'></td>
                    
                </tr>
                <tr>
                    <td>Scale</td>
                    <td><input type='number' name='item4'></td>
                    
                </tr>
                <tr>
                    <td>Box</td>
                    <td><input type='number' name='item5'></td>
                    
                </tr>
                
                <tr>
               
                    <td colspan="2" > <center><input type='submit' name='pay' value="Pay"></center></td>
                
                </tr>
                
            </table>
            
        </form>
    </center>
    </body>
    
</html>
