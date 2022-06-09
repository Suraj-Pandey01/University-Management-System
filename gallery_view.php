<?php
include("includes/db_connect.php");
include("includes/header.php");
//////Check if form was subbmited//////////
if(isset($_POST['gal_title'])){
    $total = count($_FILES['gallery']['name']);
    /////Loop through each file in files[] ARRAY///////////////
    foreach($_FILES['gallery']['tmp_name'] as $key => $value){
        $file_tmpname=$_FILES['gallery']['tmp_name'][$key];
        $file_name=$_FILES['gallery']['name'][$key];
        $file_size=$_FILES['gallery']['size'][$key];
        $file_type=$_FILES['gallery']['type'][$key];
   // echo $file_tmpname."<br>";
         move_uploaded_file($file_tmpname,"gallery/".$file_name);
        $sql="insert into gallery(gallery,gal_title,img_size,img_type) values('$file_name','{$_POST['gal_title']}','$file_size','$file_type')";
         $rs=mysqli_query($con,$sql);
    }
}
?>
<?php

$sql1 = "SELECT distinct gal_title FROM gallery";
$rs1 = mysqli_query($con,$sql1);
?>
<ul>
    <?php
while($data1=mysqli_fetch_array($rs1)){
    ?>
    <li><a href="gallery_view.php?title=<?=$data1['gal_title']?>"><?=$data1['gal_title']?></a></li>
<?php
}
?>
</ul>

<table>
    <tr>
    <?php 
    if(isset($_REQUEST['title'])){
    $c=0;
    $sql = "SELECT * FROM gallery where gal_title='$_REQUEST[title]'";
    $rs = mysqli_query($con,$sql);
    while($data = mysqli_fetch_assoc($rs)){
        $c++;
        ?>
        <th> <a href="gallery/<?= $data['gallery'] ?>" rel="lightbox[z]"> <img src="gallery/<?= $data['gallery'] ?>" height="200" width="200"></a></th>
        <th>
        
        <?php if($c==4){
            echo "</tr>";
            $c=0;
        }
        
    } }?>
</table>
<link rel="stylesheet" href="plugins/Lightbox/lightbox/css/lightbox.css" type="text/css" media="screen"/>
<script src="plugins/Lightbox/lightbox/js/prototype.js" type="text/javascript"></script>
<script src="plugins/Lightbox/lightbox/js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="plugins/Lightbox/lightbox/js/lightbox.js" type="text/javascript"></script>
<?php include("includes/footer.php"); ?>
