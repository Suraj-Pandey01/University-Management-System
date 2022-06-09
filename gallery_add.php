<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        *{
            padding:0;
            background-color:black;
            color:aqua;
        }
    </style>
</head>
<body>
    <table align="center" border="2" height="300" width="500">
        <tr>
            <th><b>Gallery</b></th>
        </tr>
        <form action="gallery_view.php" method="post" enctype="multipart/form-data" >
         <tr>
             <th>
                 Gallery Title : <input type="text" name="gal_title" id="gal_title" /></br></br>
                 Choose Files : <input type="file" name="gallery[]" id="gallery[]" multiple="multiple">
                 <input type="submit" name="submit" value="upload">
             </th>
         </tr>
        </form>
    </table>
</body>
</html>
<center>
<?php
include("includes/footer.php");
?>
</center>