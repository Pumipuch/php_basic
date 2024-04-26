<?php
require('dbconn.php');
$muti_arr = $_POST['idcheckbox'];
$muti_id = implode(",",$muti_arr);

$sql = "DELETE FROM employees WHERE id in ($muti_id)";

$result = mysqli_query($con , $sql);
    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo "เยสแม่";
    }
?>