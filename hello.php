<?php
include("connection.php");
$query="insert into student values('5','ishmam ali khan','bs se')";
    $data=mysqli_query($con,$query);
if($data){
    echo "data inserted into database";
}
else{
    echo "Data not inserted";
}
?>