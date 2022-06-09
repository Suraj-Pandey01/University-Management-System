<?php include("includes/header.php");
include("includes/db_connect.php");
//  include("../includes/functions.php");
if(isset($_REQUEST['st_id']))
{
global $con;
$sql="select * from students where st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_array($rs);
}
else{
global $con; 
$sql = "select * from students order by st_id";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_array($rs);
}
?>
<form  method="post" enctype="multipart/form-data" action="lib/student.php">
  <table width="600" height="200" border="1">
  
    <tr colspan="4"><div align="center"><font size="+4" color="red">Fee Module</font></div></tr>
    <tr>
     <td>ID</td>
     <td><input type="text" id="st_id" name="st_id" readonly value="<?=$data['st_id']?>">
    <input type="hidden" name="st_id" value="<?=$data['st_id']?>">
    </td>
     </tr>
     <tr>
     <td>Name</td>
     <td><input type="text" id="st_name" name="st_name" value="<?=$data['st_name']?>"></td>
     </tr>
     <tr>
     <td>Course</td>
     <td>
        <?=get_value("courses","course_id","course_name",$data['st_course']) ?>
        <input type="hidden" name="st_course" value="<?=$data['st_course']?>">
        <input type="hidden" name="course_id" value="<?php if(isset($data['course_id'])) echo $data['course_id']; ?>">
      </td>
     </tr>
     <td>Total Fee</td>
     <td id="total_fee"><?=get_value("courses","course_id","total_fee",$data['st_course']) ?>
     <input type="hidden" name="total_fee" value="<?=get_value("courses","course_id","total_fee",$data['st_course'])?>">
    </td>
     </tr>
     <tr>
     <td>Pay Amount</td>
     <td><input type="number" id="paid_amount" min="1000" max="<?=get_value("fee","fee_id","st_balance",$data['st_id'])  ?>" name="paid_amount" ></td>
     </tr>
     <tr>
     <td>Description</td>
     <td>
     <textarea name="description" id="description" cols="20" rows="3"></textarea>
     </td>
    </tr>
    <!-- <?=get_value("fee","fee_id","date",$data['fee_id']) ?> -->
    <input type="hidden" name="act" id="act" value="fee_view" />
    <tr>
      <td colspan="4"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
          <input name="reset" type="reset" id="reset" value="Reset" />
        </div>
        <input type="hidden" name="act" id="act" value="pay_fee" />
      </label></td>
    </tr>
    </table>
</form>
