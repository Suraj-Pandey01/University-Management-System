<?php
$con = mysqli_connect("localhost","root","") or die('Error connection Occur.');
// if($con)
// echo "connect!";
$db = mysqli_select_db($con,"university") or die(mysqli_error($con));
// if($db)
//echo "database selected!"; 
?>