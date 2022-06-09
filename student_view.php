<!DOCTYPE html>
<?php
include("includes/header.php");
if(isset($_REQUEST['student_search'])){
    $sql="select * from students where st_name like '%$_REQUEST[student_search]%' or st_gen like '$_REQUEST[student_search]' or st_father like '$_REQUEST[student_search]'";
}
else{
$sql = "select * from students order by st_name";
}
// $sql="select * from students order by st_name";
// global $con; 
// $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
?>
<div style="background-color:#99CC33; font-size:24px;" align="center">
<?php
if(isset($_REQUEST['msg'])){
echo $_REQUEST['msg'];
}
?>
</div>
<form action="#" method="get" name="search_form">
    Enter Text To Search:<input type="text" name="student_search"/>
    <input type="submit" value="Search" />
</form>
<form action="lib/student.php" method="post" name="student_view" id="student_view">
    <table width="1310" border="1">
            <tr align="right" <th colspan="19"><a href="student_add.php">Student Add</a></th>&nbsp;&nbsp;
            <a href="javascript:delete_multi_student();">Delete All</a>&nbsp;&nbsp;<a href="javascript:printOut();">PrintOut</a></th></tr>
            <tr align="center" bgcolor="#99ff66">
            <th><input type="checkbox" onclick="check_all(this);" name="check" id="check"></th>
            <th>ID</th>
            <th>Name</th>
            <th>Father</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
            <th>DOB</th>
            <th>DOA</th>
            <th>Local Address</th>
            <th>Permanent Address</th>
            <th>Pincode</th>
            <th>Image</th>
            <th>Action</th>
</tr>
<?php
  $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_array($rs))
{
    ?>
    <tr align="center" bgcolor="#FFFFFF">
        <td><input type="checkbox" name="st_multi_id[]" value="<?=$data['st_id'] ?>" /></td>
        <td><?=$data['st_id']?></td>
        <td><?=$data['st_name']?></td>
        <td><?=$data['st_father']?></td>
        <td><?=$data['st_gen']?></td>
        <td><?=$data['st_phone']?></td>
        <td><?=$data['st_email']?></td>
        <td><?=$data['st_dob']?></td>
        <td><?=$data['st_doa']?></td>
        <td><?=$data['st_address1']?></td>
        <td><?=$data['st_address2']?></td>
        <td><?=$data['st_pincode']?></td>
        <td><a href="uploades/<?=$data['st_image']?>"><img src="uploads/<?=$data['st_image']?>" height="70" width="100" border="1"></a></td>
        <td><a href="javascript:delete_student(<?=$data['st_id']?>);"><img src="images/delete.png" alt="delete" height="50" width="40"></a><a href="student_add.php?st_id=<?=$data['st_id'] ?>"><img src="images/edit.png" alt="edit" height="50" width="40"></a>||<a href="student_details.php?st_id=<?=$data['st_id']?>"><img src="images/details.jpg" alt="details" height="50" width="40"></a></td>
</tr>
<?php } ?>
</table>
<!-- <input type="hidden" name="st_id" id="st_id" /> -->
<input type="hidden" name="act" id="act" />
</form>
<?php include("includes/footer.php"); ?>
