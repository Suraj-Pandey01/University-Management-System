<?php include("includes/header.php");
  include("includes/db_connect.php"); 
   if(isset($_REQUEST['st_id'])){
   global $con;
   $sql="select * from students where st_id='$_REQUEST[st_id]'";
   $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
   $data=mysqli_fetch_array($rs);
 }
  ?>
 <form id="student_add" name="student_add" method="post" enctype="multipart/form-data" action="lib/student.php" onsubmit="return validation(this);" >
  <table width="985" height="420" border="1">
    <tr>
      <td colspan="4"><div align="center"><font size="+4" color="red">Student Registration Form</font></div></td>
    </tr>
    <tr>
      <td>Enter Name: </td>
      <td><label>
        <input name="st_name" type="text" id="st_name" value="<?php if(isset($data['st_name'])) echo $data['st_name']; ?>" />
      </label></td>
      <td>Enter Father Name: </td>
      <td><input name="st_father" type="text" id="st_father" value="<?php if(isset($data['st_father'])) echo $data['st_father']; ?>" /></td>
    </tr>
    <tr>
      <td>Select Gender: </td>
      <td><label>
        <input name="st_gen" type="radio" value="male" <?php if(isset($data['st_gen'])=='male') { echo "checked"; } ?> />
        male</label> <label>
      <input name="st_gen" type="radio" value="female" <?php if(isset($data['st_gen'])=='female') { echo "checked"; } ?>/>
       female</label></td>
      <td>Enter Phone: </td>
      <td><input name="st_phone" type="text" id="st_phone" size="10" maxlength="10" value="<?php if(isset($data['st_phone'])) echo $data['st_phone']; ?>" /></td>
    </tr>
    <tr>
      <td>Select Qualification: </td>
      <td><label>
      <?php echo get_checkbox_list("qualification","qual_id","qual_name","st_qual[]",isset($data['st_qual'])); ?>  
      </label></td>
      <td>Enter Email: </td>
      <td><input name="st_email" type="text" id="st_email" value="<?php if(isset($data['st_email'])) echo $data['st_email']; ?>"/></td>
    </tr>
    <tr>
      <td>Enter DOB: </td>
      <td><input name="st_dob" type="text" id="st_dob" value="<?php if(isset($data['st_dob'])) echo $data['st_dob']; ?>" /></td>
      <td>Enter DOA: </td>
      <td><input name="st_doa" type="text" id="st_doa" value="<?php if(isset($data['st_doa'])) echo $data['st_doa']; ?>"/></td>
    </tr>
    <tr>
      <td>Enter Local Address: </td>
      <td><textarea name="st_address1" id="st_address1"><?php if(isset($data['st_address1'])) echo $data['st_address1']; ?></textarea></td>
      <td>Enter Permanent Address: </td>
      <td><textarea name="st_address2" id="st_address2"><?php if(isset($data['st_address2'])) echo $data['st_address2']; ?></textarea></td>
    </tr>
    <tr>
      <td>Enter Pincode: </td>
      <td><input name="st_pincode" type="text" id="st_pincode" maxlength="6" value="<?php if(isset($data['st_pincode'])) echo $data['st_pincode']; ?>"/></td>
      <td>Select Image: </td>
      <td><input type="file" id="st_image" name="st_image" />
      <a href="uploads/<?=$data['st_image']?>"><img src="uploads/<?php if(isset($data['st_image'])) echo $data['st_image']; ?>" height="50" width="100" border="1px" />
      </td>
    </tr>
    <tr>
      <td>Select Course:</td>
      <td><label>
      <select name="st_course" id="st_course">
      <?php echo get_option_list("courses","course_id","course_name",isset($data['st_course'])); ?>    
      </select>
      </label></td>
      <td>Select City:</td>
      <td><label>
        <select name="st_city" id="st_city">
        <?php echo get_option_list("city","city_id","city_name",isset($data['st_city'])); ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Select State:</td>
      <td><label>
      <select name="st_state" id="st_state">
      <?php echo get_option_list("state","state_id","state_name",isset($data['st_state'])); ?>  
      </select>
      </label></td>
      <td>Select Country:</td>
      <td><label>
      <select name="st_country" id="st_country">
      <?php echo get_option_list("country","country_id","country_name",isset($data['st_country'])); ?>  
      </select>
      </label></td>
    </tr>
    <tr>
      <td colspan="4"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
          <input name="reset" type="reset" id="reset" value="Reset" />
        </div>
      </label></td>
    </tr>
	<input type="hidden" name="act" id="act" value="save-student" />
  <input type="hidden" name="st_id" id="st_id" value="<?php if(isset($data['st_id'])) echo $data['st_id']; ?>"/>
  <input type="hidden" name="st_image" id="st_image" value="<?=$data['st_image']?>" />
</table>
</form>
<?php include("includes/footer.php"); ?>
