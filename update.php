<?php
include("connection.php");
error_reporting(0);
//echo $_GET['rn'];
//echo $_GET['sn'];
//echo $_GET['cl'];
?>
<html>
    <head></head>
    <body>
        <h1>Welcome</h1>
        <form action="" method="GET">
            Roll No:<input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"><br><br>
             Student Name:<input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"><br><br>
             Class:<input type="text" name="class" value="<?php echo $_GET['cl']; ?>"><br><br>
            <input type="submit" name="submit" value="UpDate">
        </form>
        <?php
        if($_GET['submit']){
            $rollno=$_GET['rollno'];
             $name=$_GET['studentname'];
             $class=$_GET['class'];
            $query="update student set name='$name', class='$class' where rollno='$rollno'";
            $data=mysqli_query($con,$query);
            if($data){
                echo "record updated successfully";
            }
            else{
                echo "record not update";
            }
            
        }
        else{
            echo "click on update button to save the changes";
        }
        ?>
    </body>
</html>