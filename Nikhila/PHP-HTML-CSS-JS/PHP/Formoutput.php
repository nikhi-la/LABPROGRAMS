<html>
    <style>
        td{
            align-content: center;
            height: 30;
        }
    </style>
    <body>
    <center>
        <h2 style="color: red" >ACCOUNT DETAILS</h2>
        <?php
        if (isset($_POST["signup"])) {

            $fname = $_POST["firstname"];
            $lname = $_POST["lastname"];
            $course = $_POST["course"];
            $gender = $_POST["radioname"];
            $dob = $_POST["dob"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $guardian = $_POST["guardian"];
          //$hobby = $_POST["hobby"];
            $activity = $_POST["activity"];
            $password = $_POST["password"];
            ?><table  >

                <tr ><td width='200' >
                        Name
                    </td>
                    <td width='300'><?php echo  $fname, ' ', $lname,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Course
                    </td>
                    <td><?php echo  $course,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Gender
                    </td>
                    <td><?php  echo $gender,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        DOB
                    </td>
                    <td><?php echo $dob,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Address
                    </td>
                    <td><?php  echo  $address,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Phone
                    </td>
                    <td><?php echo  $phone,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Guardian
                    </td>
                    <td><?php echo  $guardian,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Extra-Curricular Activity
                    </td>
                    <td><?php echo $activity,'<br>'; ?></td>
                </tr>
                 <tr ><td >
                        Password
                    </td>
                    <td><?php   echo $password,'<br>'; ?></td>

           
        </table>

<?php
        }
        ?>
    </center>
    </body>
</html>
