<?php
include("connection.php");
$rollno=$_GET['rn'];
 $query="delete from student where rollno='$rollno'";
$data=mysqli_query($con,$query);
if($data){
    echo "<font color='green'>Record Deleted successfully";
}
else{
    echo "sorry delete process failed";
}
?>