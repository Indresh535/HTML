
<?php
                   
                       $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'database');
                   
   $name=$_GET['name'];                 

                        $query="select * from step5 where name='$name'";
                        $result = mysqli_query($con,$query);
                        while($rows = mysqli_fetch_assoc($result))
            
            {
            ?>


<?php echo '<img src="data:image;base64,'.base64_encode($rows['PU']).' ">';?>


<?php
}
?>