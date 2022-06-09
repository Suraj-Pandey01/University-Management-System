<?php include("db_connect.php"); ?>
<?php include("functions.php");  ?>
<html>
<head>
  <title>University Management</title>
  <style>
  *{
  background-color:black;
  color:aqua;
  }
  </style>
     <!-- for CALENDER -->
<link type="text/css" href="plugins/calendar/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="plugins/calendar/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="plugins/calendar/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#st_dob").datepicker({changeMonth: true,changeYear: true,startYear:1900,EndYear:2000});
$("#st_doa").datepicker({changeMonth: true,changeYear: true});
});
</script>


  <script src="js/validation.js"></script>
</head>
<body>
<center>
<table width="1100" height="50" border="1">
  <tr>
    <td height="44"><div align="center"><a href="#">Home</a></div></td>
    <td><div align="center"><a href="student_view.php">Student</a></div></td>
    <td><div align="center"><a href="lib/fee.php">Fees</a></div></td>
    <td><div align="center"><a href="course.php">Courses</a></div></td>
    <td><div align="center"><a href="#">Exam</a></div></td>
    <td><div align="center"><a href="#">About us </a></div></td>
    <td><div align="center"><a href="gallery_add.php">Gallery</a></div></td>
    <td><div align="center"><a href="#">Logout</a></div></td>
  </tr>
</table>
   <div><img src="images/cambridge.jpg" alt="cambridge University" height="350px" width="100%" /></div>