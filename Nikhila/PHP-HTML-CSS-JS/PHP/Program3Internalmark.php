<html>
    
    <head></head>
   
    <body>
    <center>
       
        <form id="form1" method='post' action="Program3Output.php">
            
            <h1>MAR ATHANASIUS COLLEGE OF ENGINEERING ,KOTHAMANGALAM</h1>
             <h1>Master of Computer Applications</h1>
             <h2>INTERNAL MARKS</h2>
             <h2>Semester One</h2>
            <table border='1'  cellpadding='5'>
                
                <tr >
                    <th rowspan="2">Sl.No</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Roll No</th>
                    <th colspan='4'>Internal Mark</th>
                    
                </tr>
                <tr>
                    <th>MFC</th>
                    <th>ASE</th>
                     <th>DFCS</th>
                    <th>ADS</th>
                    
                </tr>
               <?php
                for($i =0;$i<5;$i++){
               ?>
                <tr>
                    
                    <td><?php echo $i+1?></td>
                    <td><input type='text' name='name[<?php $i ?>]' ></td>
                    <td><input type='text' name='rollno[<?php $i ?>]' size='4'></td>
                    <td><input type='text' name='MFC[<?php $i ?>]' size='4' ></td>
                    <td><input type='text' name='ASE[<?php $i ?>]' size='4' ></td>
                    <td><input type='text' name='DFCS[<?php $i ?>]' size='4' ></td>
                    <td><input type='text' name='ADS[<?php $i ?>]' size='4' ></td>
                    
                </tr>
                <?php
                }?>
               
                <tr>
                    
                    <td colspan="7"><center><input type='submit' name='submit' value='Submit'>&nbsp&nbsp<input type='reset' name='reset' value='Reset'></center></td>
                    
                </tr>
                
                
                
            </table>
            
        </form>
    </center>
    </body>
    
</html>


