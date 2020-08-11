<?php
include("connection.php");
error_reporting(0);
?>
<html>
    <head></head>
    <body>
        <h1>Welcome</h1>
        <form action="" method="GET">
            Roll No:<input type="text" name="rollno" value=""><br><br>
             Student Name:<input type="text" name="studentname" value=""><br><br>
             Class:<input type="text" name="class" value=""><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if($_GET['submit'])
        {
              $rn=$_GET['rollno'];
              $sn=$_GET['studentname'];
            $cl=$_GET['class'];
             if($rn!="" && $sn!="" && $cl!="")
             {
                      $query="insert into student values('$rn','$sn','$cl')";
                     $data=mysqli_query($con,$query);
                     if($data){
                   echo "data inserted into database";
                }  
             }
            else
            {
                echo "ALL FIELDS ARE REQUIRED";
            }
            
        } 
        ?>
    </body>
</html>