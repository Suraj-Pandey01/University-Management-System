<?php 
include("../includes/db_connect.php"); 
include("../includes/functions.php"); 
$sql = "select * from students order by st_id";
global $con; 
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fee module</title>
  <style>
    *{
      background-color:black;
      color:aqua;
      padding: 5px;
    }
  </style>
</head>
<body>
<form action="fee_add.php" method="post" name="student_view" id="student_view">
    <table width="1310" border="1">
    <tr>
      <td colspan="6"><div align="center"><font size="+4" color="red">Fee module</font></div></td>
    </tr>
<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Action</th>
</tr>
<?php
  $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_array($rs))
{ ?>
<tr align="center" bgcolor="#FFFFFF">
        <td><?=$data['st_id']?></td>
        <td><?=$data['st_name']?></td>
        <td><?=$data['st_father']?></td>
        <td><?=$data['st_gen']?></td>
        <td>
        <?=get_value("courses","course_id","course_name",$data['course_id']) ?>
        </td>
        <td><a href="../Fees_add.php?st_id=<?=$data['st_id']?>">Pay Fees</a></td>
        <input type="hidden" name="st_id" id="st_id" />
        <?php } ?>
</table>
</form>
</body>
</html>