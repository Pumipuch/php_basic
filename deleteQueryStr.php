<?php
require('dbconn.php');

$id = $_GET['idemp'];

$sql = "DELETE FROM employees WHERE id=$id";

$result = mysqli_query($con , $sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เยสแม่";
}

?>