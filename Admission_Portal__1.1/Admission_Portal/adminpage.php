<!DOCTYPE html>
<html lang="en">

<head></head>

<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<img style="padding:20px 10px 10px 20px" width="120" height="120" src="images/images-1.jpeg">
<br>


<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

</script>



<center>
    <h2 style="font-family: Vineta BT">Government Science College<br>(Autonomus) Bangalore.</h2>
    <h3 style="font-family: algerian"><u>Admission Portal</u></h3><br>
    <div class="h2">
        <h3 style="color: #3b7687">abc</h3>
    </div><br>
</center>
<button style="border-radius:10px;background-color:red; margin-left:1200px"><a href="logout.php">Log Out</a></button>



<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if($_SESSION['adminname']==true)                                    //checks user's session is same or not
{
      
     $name=$_SESSION['adminname'];
    echo " <h2 align='center'>Welcome: <p6 style='color:#cc6600'>$name</p6><hr></h2>";

}else{
   header('location:adminlogin.php');//after logout don't come back

}
?>

<body style="background: linear-gradient(-45deg,#238bd52e,#199ce685,#199ce685)">
    <script src="js/script.js"></script>
    <form action="" method="post">
        <br><br><br>


        <!-- Display Data in Database -->
        <center>
            <h2>Student Registered</h2><br><br><br>
            <b>Search:</b> <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">
            <br><br>
            <table id="myTable" align="center" border="3px" style="width: 600px; line-height: 40px;">
                <tr>
                    <th colspan="6">
                        <h2>Students Records</h2>
                    </th>
                </tr>
                <tr>
                    <th>name</th>
                    <th>phone no</th>
                    <th>email id</th>
                    <th>Photo</th>
                    <th>View Profile</th>
                </tr>




                <?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                                

                        $query="select * from student";
                        $result = mysqli_query($con,$query);
                    
  
        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>

                <center>
                    <tr>
                        <!-- names given in the table-->
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['phno']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo '<img src="data:photo;base64,'.base64_encode($rows['photo']).' "alt=Image" style="width:100px; height:100px;">';?></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;<button><a href="PHP/adminview.php?name=<?php echo $rows['name']; ?>">View</a></button>
                            <!-- when admin clicks particular view button it POST that student name to PHP/viewadmin page  -->
                        </td>
                           <?php
    }

     ?>
                       

                    </tr>
                </center>
            </table>
            <style>
                button {

                    text-align: center;
                    width: 90px;
                    height: 35px;
                    background-color: deepskyblue;
                    border: 2px solid black;
                    border-radius: 5px;
                    font-weight: bold;
                    font-size: 18px;
                    font-family: serif;
                }

                button:hover {
                    background-color: aqua;
                }

                button:active {
                    background-color: cornflowerblue;
                    transform: scale3d(1.1, 1.1, 1.1);
                }

                a {
                    color: darkblue;
                    font-family: Bahnschrift;
                    font-size: 20px;
                }

                a:hover {
                    color: darkorchid;
                }

            </style>
        </center>

        <br> <br>
        <div class="h2">
            <h3 style="color: #3b7687">abc</h3>
        </div>
        <br><br>

    </form>
</body>

</html>
