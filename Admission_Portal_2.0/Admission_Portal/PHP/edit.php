<html>

<body>
    <table align="center" border="2px" style="width: 1000px;
    height: 40px">
        <tr style=" background-color: blue">
            <td colspan="3">
                <h3>Education Qualification: (Field with <p6 style="color:red">*</p6> are mandatory)</h3>
            </td>
        </tr>
        <tr>
            <td>Qualification Type<br>
                <select name="qualification">
                    <option>Select Qualification Type</option>
                    <option>sslc</option>
                    <option>puc</option>
                </select></td>
            <td>Name of Institute:<br><input type="text" name="institute"></td>
            <td>Subject
                <select name="sub">
                    <option>Subject</option>
                    <option>sslc subjects</option>
                    <option>puc</option>
                </select></td>
        </tr>
        <tr>
            <td>
                State :<select name="state">
                    <option>select</option>
                    <option>Karnataka</option>
                </select>
            </td>
            <td>
                Board/University:<select name="board">
                    <option>select</option>
                    <option>State</option>
                    <option>CBSE</option>
                    <option>ICSE</option>
                    <option>bangalore</option>
                </select>
            </td>
            <td>
                Taluk:<select name="taluk">
                    <option>select</option>
                    <option>Karnataka</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Course Duration:<select name="duration">
                    <option>select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </td>
            <td colspan="2">Date of Decalaration of Result:<input type="date" name="resultdate"></td>
        </tr>
        <tr>
            <td>Register/Roll Number:<input type="text" name="rollno" required>
            </td>

    </table>
    <br><input type="submit" value="Update" name="update">

</body>

</html>










<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'database');


if(isset($_POST['update']))
{
    $id=$_GET['ID'];
    $qualificationtype=$_POST['qualification'];
    $institutename=$_POST['institute'];
    $subject=$_POST['sub'];
    $state=$_POST['state'];
    $board=$_POST['board'];
    $taluk=$_POST['taluk'];
    $courseduration=$_POST['duration'];
    $resultdate=$_POST['resultdate'];
    $rollno=$_POST['rollno'];
    
$s="update step3 set ID=$id, qualification='$qualificationtype', institute='$institutename', sub='$subject', state='$state', board='$board', taluk='$taluk', duration='$courseduration', resultdate='$resultdate', rollno='$rollno' where ID=$id ";
 
mysqli_query($con,$s);
 header('location:/Admission_Portal/step3.php');
}
     ?>
