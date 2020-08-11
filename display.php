<style>
    td{
        padding:5px;
    }
</style>
<?php
include("connection.php");
error_reporting(0);
$query="select * from student";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
//$result=mysqli_fetch_assoc($data);
//echo $result['rollno']." ". $result['name']." ". $result['class'];
?>
<table style="border:solid black 3px">
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Class</th>
        <th colspan=2>Operation</th>
    </tr>
    
    <?php
while($result=mysqli_fetch_assoc($data))
{
   echo " <tr>
        <td>". $result['rollno']."</td>
        <td>".$result['name']."</td>
        <td>".$result['class']."</td>
        <td> <a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
        <td> <a href='delete.php?rn=$result[rollno]'>delete </a></td>
    </tr>";
    
}
?>
        </table>