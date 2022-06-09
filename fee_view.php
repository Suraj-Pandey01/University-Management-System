<?php include("includes/db_connect.php");
include("includes/header.php");
$R=$_REQUEST;
$sql = "select * from fee order by fee_id";
$rs=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($rs)){
    echo "$data[course_id]";
 ?>
 <form>
     <table border="1px">
         <tr>
             <th>Student Id</th>
             <th>Student Name</th>
             <!-- <th>Student course</th> -->
             <th>Course Id</th>
             <th>Total Fee</th>
             <th>Paid Fee</th>
             <th>Balence</th>
             <th>Date&Time</th>
         </tr>
         <tr>
             <td><?=$data['st_id']?></td>
             <td><?=$data['st_name']?></td>

             <td><?=$data['course_id']?></td>
             <td><?=$data['total_fee']?></td>
             <td><?=$data['paid_amount']?></td>
             <td><?=$data['st_balance']?></td>
             <td><?=$data['st_date']?></td>
         </tr>
     </table>
    <?php
}
    ?>
