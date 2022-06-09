<?php 
include("includes/db_connect.php");
include("includes/header.php");
global $con;
$sql= "SELECT * FROM `courses` ";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_array($rs);
// print_r($data);

?>
  <details>
  <summary>BCA</summary>
  <table border="1px">
      <tr>
          <td>Course Name:-</td>
          <td><?=$data['course_name']?></td>
        </tr>
        <tr>
          <td>Course Duration:-</td>
          <td>3 year</td>
        </tr>
        <tr>
          <td>Course Fee:-</td>
          <td>60000</td>
        </tr>
        <tr>
          <td>Eligibility:-</td>
          <td>10+2</td>
        </tr>
  </table>
</details>
<details>
  <summary>MCA</summary>
  <table border="1px">
      <tr>
          <td>Course Name:-</td>
          <td>MCA</td>
        </tr>
        <tr>
          <td>Course Duration:-</td>
          <td>2 year</td>
        </tr>
        <tr>
          <td>Course Fee:-</td>
          <td>40000</td>
        </tr>
        <tr>
          <td>Eligibility:-</td>
          <td>10+2,Graduation</td>
        </tr>
  </table>
</details>
<details>
  <summary>PGDCA</summary>
  <table border="1px">
      <tr>
          <td>Course Name:-</td>
          <td>PGDCA</td>
        </tr>
        <tr>
          <td>Course Duration:-</td>
          <td>1 year</td>
        </tr>
        <tr>
          <td>Course Fee:-</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>Eligibility:-</td>
          <td>10+2,Graduation,Master-Graduation</td>
        </tr>
  </table>
</details>
<details>
  <summary>B-tech</summary>
  <table border="1px">
      <tr>
          <td>Course Name:-</td>
          <td>B-tech</td>
        </tr>
        <tr>
          <td>Course Duration:-</td>
          <td>4 year</td>
        </tr>
        <tr>
          <td>Course Fee:-</td>
          <td>140000</td>
        </tr>
        <tr>
          <td>Eligibility:-</td>
          <td>10+2</td>
        </tr>
  </table>
</details>
<details>
  <summary>M-tech</summary>
  <table border="1px">
      <tr>
          <td>Course Name:-</td>
          <td>M-tech</td>
        </tr>
        <tr>
          <td>Course Duration:-</td>
          <td>2 year</td>
        </tr>
        <tr>
          <td>Course Fee:-</td>
          <td>100000</td>
        </tr>
        <tr>
          <td>Eligibility:-</td>
          <td>10+2,Graduation</td>
        </tr>
  </table>
</details>
<form method="post" enctype="multipart/form-data" action="fee.php">
  <input type="text" placeholder="Type Course"><br>
  <input type="submit" value="submit">
</form>