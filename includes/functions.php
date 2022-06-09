<?php
include("db_connect.php");
///////Dynamic dropdown list //////
function get_option_list($table,$col_id,$col_name,$sel){
    global $con;
    $sql="select * from $table order by $col_id";
    $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
    $optiom_list="<option value='0'>Plz Select</option>";
    while($data=mysqli_fetch_array($rs)){
    if($data[$col_id]==$sel){
     $optiom_list.="<option value='$data[$col_id]' selected> $data[$col_name]</option>";
    }
    else{
        $optiom_list.="<option value='$data[$col_id]'> $data[$col_name]</option>";
    }
    }
    return $optiom_list;
}
//////////Dynamic checkbox ///////////
function get_checkbox_list($table,$col_id,$col_name,$name,$sel){
    global $con;
    $sql="select * from $table order by $col_id";
    $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
    $check_list="";
    $sel=explode(",",$sel);
    while($data=mysqli_fetch_array($rs)){
        if(in_array($data[$col_id],$sel))
        $check_list.="<input type='checkbox' name='$name' id='$name' value='$data[$col_id]' checked>$data[$col_name]";
        else
        $check_list.="<input type='checkbox' name='$name' id='$name' value='$data[$col_id]'>$data[$col_name]";
    }
    return $check_list;
}
////////////////Get single_value/////////////////
function get_value($table,$col_id,$col_name,$sel){
    global $con;
    $sql="select * from $table where $col_id='$sel'";
    $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
    $data=mysqli_fetch_array($rs);
    return $data[$col_name];
}
////////////////Get multiple_value/////////////////
function get_multi_value($table,$col_id,$col_name,$sel){
    global $con;
    $sql="select * from $table where $col_id in($sel)";
    $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
    $multi_value="";
    while($data=mysqli_fetch_array($rs)){
    $multi_value.=$data[$col_name].",";
    }
    return $multi_value;
}
///////////////////////
?>