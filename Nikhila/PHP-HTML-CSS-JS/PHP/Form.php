<html>

    <head>

        <title>Form</title>

       <style>

                    input[type="submit"]{
                        background-color: rgb(87, 87, 219);
                        width: 80;
                        height: 35;
                        border-radius: 1cqb; 
                    }
                    input[type="reset"]{
                        width: 80;
                        height: 35;
                        border-radius: 1cqb; 
                    }

                    .req{
                        color: red;
                    }

                    a{
                        text-decoration: none;
                        color: blue;
                    }

            </style>
        <script type="text/javascript">

            function validation() {

                if (document.forms.form1.firstname.value == "") {

                    window.alert("Enter Firstname");
                    document.forms.form1.firstname.focus();
                    return false;

                } else if (document.forms.form1.lastname.value == "") {

                    window.alert("Enter Lastname");
                    document.forms.form1.lastname.focus();
                    return false;

                } else if (document.forms.form1.course.value == "") {

                    window.alert("Enter Course");
                    document.forms.form1.course.focus();
                    return false;

                } else if (document.forms.form1.radioname.value == "") {

                    window.alert("Enter Gender");
                    document.forms.form1.radioname.focus();
                    return false;

                } else if (document.forms.form1.dob.value == "") {

                    window.alert("Enter DOB");
                    document.forms.form1.dob.focus();
                    return false;

                } else if (document.forms.form1.phone.value == "") {

                    window.alert("Enter Phone Number");
                    document.forms.form1.phone.focus();
                    return false;

                } else if (document.forms.form1.address.value == "") {

                    window.alert("Enter Address");
                    document.forms.form1.address.focus();
                    return false;

                } else if (document.forms.form1.guardian.value == "") {

                    window.alert("Select guardian");
                    document.forms.form1.guardian.focus();
                    return false;

                }
//          else if (document.forms.form1.hobby.value == "") {
//             
//             window.alert("Select hobby");
//             document.forms.form1.hobby.focus();
//             return false;
//    
//          }


                else if (document.forms.form1.email.value == "") {

                    window.alert("Enter Email");
                    document.forms.form1.email.focus();
                    return false;

                } else if (document.forms.form1.activity.value == "") {

                    window.alert("Enter activity");
                    document.forms.form1.activity.focus();
                    return false;

                } else if (document.forms.form1.password.value == "") {

                    window.alert("Enter Password");
                    document.forms.form1.password.focus();
                    return false;

                } else {

                    window.alert("Login Successful");

                    return true;

                }

            }



        </script>

    </head>

    <body bgcolor="grey">

        <form id="form1" onsubmit="return validation()" action="Formoutput.php" method='post'>

            <center>

                &nbsp&nbsp&nbsp

                <h2><u>REGISTRATION</u></h2>

                &nbsp

                <table border="5" height="400" width="450" bgcolor="lightgrey"  cellpadding="15">

                    <tr>

                        <td  width="125" >First Name<span class="req"> *</span></td>
                        <td><input type="text" name="firstname" placeholder="Enter firstname" /></td>

                    </tr>

                    <tr>

                        <td>Last Name<span class="req"> *</span></td>
                        <td><input type="text" name="lastname" placeholder="Enter lastname"  /></td>

                    </tr>

                    <tr>

                        <td>Course<span class="req"> *</span></td>
                        <td>
                            <select name="course" >
                                <option selected value="">---SELECT---</option>
                                <option name="BA">BA</option>
                                <option name="BCA">BCA</option>
                                <option name="BSC">BSC</option>
                            </select>
                        </td>

                    </tr>

                    <tr>

                        <td>Gender<span class="req"> *</span></td>
                        <td><input type="radio" name="radioname" value="Male"/>Male&nbsp&nbsp<input type="radio" name="radioname" value="Female"/>Female&nbsp&nbsp
                            <input type="radio" name="radioname" value="Others"/>Others</td>

                    </tr>

                    <tr>

                        <td>DOB<span class="req"> *</span></td>
                        <td><input type="date" name="dob" /></td>

                    </tr>

                    <tr>

                        <td>Address<span class="req"> *</span></td>
                        <td><textarea rows="4" name="address"></textarea></td>

                    </tr>

                    <tr>

                        <td>Phone<span class="req"> *</span></td>
                        <td><input type="number" name="phone" placeholder="Enter phone" /></td>

                    </tr>

                    <tr>

                        <td>Guardian<span class="req"> *</span></td>
                        <td>
                            <select name="guardian" >
                                <option selected>---SELECT---</option>
                                <option name="father">Father</option>
                                <option name="mother">Mother</option>
                                <option name="others">Others</option>
                            </select>
                        </td>
                    </tr>

                    <tr>

                        <td>Hobbies<span class="req"> *</span></td>
                        <td><input type="checkbox" name="hobby" value="singing"/>Singing&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="hobby" value="dancing"/>Dancing&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <br><br><input type="checkbox" name="hobby" value="reading"/>Reading&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="hobby" value="others"/>Others
                        </td>
                    </tr>

                    <tr>

                        <td>Extra-curricular Activites<span class="req"> *</span></td>
                        <td><textarea rows="4"  name="activity"></textarea></td>

                    </tr>

                    <tr>

                        <td>Password<span class="req"> *</span></td>
                        <td><input type="password" name="password" placeholder="Enter password"/></td>

                    </tr>

                    <tr align="center">

                        <td colspan="2"><input type="submit" name="signup" value="Sign Up" />&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="Reset" /></td>

                    </tr>

                    <tr align="center">

                        <td colspan="2"><a href="table.html">Go To Homepage</a></td>

                    </tr>

                </table> 

            </center> 

        </form>
   
</body>

</html>

