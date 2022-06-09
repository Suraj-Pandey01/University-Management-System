<?php include("includes/header.php"); 
 if(isset($_REQUEST['st_id'])){
   global $con;
   $sql="select * from students where st_id='$_REQUEST[st_id]'";
   $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
   $data=mysqli_fetch_array($rs);
 }
 else{
   $sql="select * form students order by st_name";
 }
 ?>
 <form id="student_add" name="student_add" method="post" enctype="multipart/form-data" action="lib/student.php" onsubmit="return validation(this);" >
  <table width="985" height="420" border="1">
  
    <tr colspan="4"><div align="center"><font size="+4" color="red">Student Details</font></div></tr>
    <tr>
     <td>Image</td>
     <td> <a href="uploads/<?=$data['st_image']?>"><img src="uploads/<?=$data['st_image']?>" height="50" width="100" border="1px" /></td>
     </tr> 
    <tr>
     <td>ID</td>
     <td><?=$data['st_id']?></td>
     </tr>
     <tr>
     <td>Name</td>
     <td><?=$data['st_name']?></td>
    </tr>
     <tr>
     <td>Father</td>
     <td><?=$data['st_father']?></td>
     </tr>
     <tr>
     <td>Gender</td>
     <td><?=$data['st_gen']?></td>
     </tr>
     <tr>
     <td>Phone</td>
     <td><?=$data['st_phone']?></td>
     </tr>
     <tr>
     <td>Email</td>
     <td><?=$data['st_email']?></td>
     </tr>
     <tr>
     <td>DOB</td>
     <td><?=$data['st_dob']?></td>
     </tr>
     <tr>
     <td>DOA</td>
     <td><?=$data['st_doa']?></td>
     </tr>
     <tr>
    <td>Local Address</td>
    <td><?=$data['st_address1']?></td>
    </tr>
     <tr>
      <td>Permanent Address</td>
      <td><?=$data['st_address2']?></td>
      </tr>
     <tr>
     <td>Pincode</td>
     <td><?=$data['st_pincode']?></td>
     </tr>
     <tr>
     <td>Course</td>
     <td>
       <?=get_value("courses","course_id","course_name",$data['st_course']) ?>
     </td>
     </tr>
     <tr>
     <td>City</td>
     <td>
       <?=get_value("city","city_id","city_name",$data['st_city']) ?>
     </td>
      </tr>
      <tr>
     <td>State</td>
     <td>
       <?=get_value("state","state_id","state_name",$data['st_state']) ?>
     </td>
      </tr>
      <tr>
     <td>Country</td>
     <td>
       <?=get_value("country","country_id","country_name",$data['st_country']) ?>
     </td>
      </tr>
      <tr>
     <td>Qualification</td>
     <td>
       <?=get_multi_value("qualification","qual_id","qual_name",$data['st_qual']) ?>
     </td>
      </tr>
    </table>
    <button id="b1" style="float:left; font-size:+20;" onclick="history.back();" >Back</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id="b1" style="float:right; font-size:+20;" onclick="print();" >Print</button>
 </form>  