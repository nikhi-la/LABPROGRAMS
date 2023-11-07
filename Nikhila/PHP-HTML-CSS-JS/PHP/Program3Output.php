<?php

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $roll_no=$_POST["rollno"];
    $mfc=$_POST["MFC"];
    $ase=$_POST["ASE"];
    $dfcs=$_POST["DFCS"];
    $ads=$_POST["ADS"];
    
    for($i =0;$i<5;$i++){
        
    $total[$i]=$mfc[$i]+$ase[$i]+$dfcs[$i]+$ads[$i];
    if($total[$i]>=40)
        $status[$i]='Pass';
    else
        $status[$i]='Fail';
        
    }
    
    $internal= array(
                        array( $roll_no[0], $name[0], $mfc[0], $ase[0], $dfcs[0], $ads[0], $total[0], $status[0]),
                        array( $roll_no[1], $name[1], $mfc[1], $ase[1], $dfcs[1], $ads[1], $total[1], $status[1]),
                        array( $roll_no[2], $name[2], $mfc[2], $ase[2], $dfcs[2], $ads[2], $total[2], $status[2]),
                        array( $roll_no[3], $name[3], $mfc[3], $ase[3], $dfcs[3], $ads[3], $total[3], $status[3]),
                        array( $roll_no[4], $name[4], $mfc[4], $ase[4], $dfcs[4], $ads[4], $total[4], $status[4])                   
       
                    );
?>

<html>
    <body>
    <center>
        <h1>MAR ATHANASIUS COLLEGE OF ENGINEERING ,KOTHAMANGALAM</h1>
             <h1>Master of Computer Applications</h1>
             <h2>INTERNAL MARKS</h2>
             <h2>Semester One</h2>
            <table border='1'  cellpadding='5' width='500' height='400'>
                
                <tr >
                    <th rowspan="2">Roll No</th>
                    <th rowspan="2">Name</th>
                    <th colspan='4'>Internal Mark</th>
                    <th rowspan='2'>Total</th>
                    <th rowspan='2'>Status</th>
                    
                </tr>
                <tr>
                    <th>MFC</th>
                    <th>ASE</th>
                     <th>DFCS</th>
                    <th>ADS</th>
                    
                </tr>
               <?php
                for($i=0;$i<5;$i++)
                {
               ?>
                <tr>
                    
                    <?php
                        for($j =0;$j<8;$j++)
                        {
                    ?>
                    <td><?php echo $internal[$i][$j]; ?></td>
                    <?php
                        }
                    ?>
                    
                    
                </tr>
                <?php
                }?>
                
            </table>
    </center>
    </body>
    
</html>

<?php
}
?>
