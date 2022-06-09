<?php
   include("../includes/db_connect.php");
   if($_REQUEST['act']=="save-student"){
       save_student();
   }
   if($_REQUEST['act']=="delete_student"){
     delete_student();
   }
   if($_REQUEST['act']=="delete_multi_student"){
     delete_multi_student();
   }
   if($_REQUEST['act']=="pay_fee"){
    paid_fee();
  }
///////////save student information/////////
   function save_student(){
    global $con;
    $R = $_REQUEST;
    $st_image = $_FILES['st_image']['name'];
    if($st_image){
      $st_arr_image=explode(".",$st_image);
      $st_image=$st_arr_image[0].time().".".$st_arr_image[1];
      move_uploaded_file($_FILES['st_image']['tmp_name'],"../uploads/".$st_image);
    }
    else {
       $st_image=$R['st_image'];
       echo $st_image;
    }
    $st_qual = implode(",",$R['st_qual']);  
     if($_REQUEST['st_id']>0){

      $sql="UPDATE `students` SET `st_name`='$R[st_name]',`st_father`='$R[st_father]',`st_gen`='$R[st_gen]',`st_phone`='$R[st_phone]',
      `st_qual`='$st_qual',`st_email`='$R[st_email]',`st_dob`='$R[st_dob]',`st_doa`='$R[st_doa]',`st_address1`='$R[st_address1]',
      `st_address2`='$R[st_address2]',`st_pincode`='$R[st_pincode]',`st_image`='$st_image',`st_course`='$R[st_course]',
      `st_city`='$R[st_city]',`st_state`='$R[st_state]',`st_country`='$R[st_country]' WHERE `st_id`='$R[st_id]'";
      $msg="Record has been updated";  
  } 
    else{ 
  $sql = "INSERT INTO `students` (`st_name`, `st_father`, `st_gen`, `st_phone`, `st_qual`, `st_email`, 
    `st_dob`, `st_doa`, `st_address1`, `st_address2`, `st_pincode`, `st_image`, `st_course`, `st_city`, `st_state`,
     `st_country`) VALUES ('$R[st_name]', '$R[st_father]', '$R[st_gen]', '$R[st_phone]', '$st_qual', '$R[st_email]', 
     '$R[st_dob]', '$R[st_doa]', '$R[st_address1]', '$R[st_address2]', 
     '$R[st_pincode]', '$st_image', '$R[st_course]', '$R[st_city]', '$R[st_state]', '$R[st_country]')";
     $msg="record has been saved"; 
   }
    $rs = mysqli_query($con,$sql) or die(mysqli_error($con));
     if($rs){
       header("location:../student_view.php? msg=$msg");
     }  
    }
       
      //////////Delete student information//////////
   function delete_student(){
     global $con;
     $sql="select st_image from students where st_id='$_REQUEST[st_id]'";
     $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
     $data=mysqli_fetch_array($rs);
     if($data['st_image']){
       unlink("../uploads/".$data['st_image']);
     }
     $sql="delete from students where st_id='$_REQUEST[st_id]'";
     $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
     if($rs){
       header("location:../student_view.php?msg=Record has been Deleted!!");
     }
   }
    ///////delete multi student ////////
    function delete_multi_student(){
      global $con;
      $st_multi_id=$_REQUEST['st_multi_id'];
      if($st_multi_id==0){
        header("location:../student_view.php?msg=Plz First Select Records to Delete!!");
        die;
      }
      foreach($st_multi_id as $st_id){
        $sql="select st_image from students where st_id='$st_id'";
        $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
        $data=mysqli_fetch_array($rs);
        if($data['st_image']){
          unlink("../uploads/".$data['st_image']);
        }
        $sql="delete from students where st_id='$st_id'";
        $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
      }
      if($rs){
        header("location:../student_view.php?msg=Delete all student!!");
      }
    }
    function paid_fee(){
      global $con;
      $R = $_REQUEST;
      // if($R['fee_id']){
      // $gpay=$_REQUEST['total_fee']+$_REQUEST['paid_amount'];
      // $bal=$_REQUEST['total_fee']-$gpay;



      // }
      // else{
      $bal= $_REQUEST['total_fee'] - $_REQUEST['paid_amount'];
      $sql=" INSERT INTO `fee` (`st_id`, `st_name`, `course_id`, `total_fee`, `paid_amount`, `st_balance`, `st_date`, `st_description`) VALUES ( '$R[st_id]', '$R[st_name]', '$R[course_id]', '$R[total_fee]', '$R[paid_amount]', '$bal', current_timestamp(), '$R[st_description]') ";
      $msg ="fee has been paid";
      $rs = mysqli_query($con,$sql) or die(mysqli_error($con));
      if($rs){
        header("location:../fee_view.php? msg=$msg");
      }
    // }
  }
?>