<?php
require('dbconn.php');

$fname = $_POST['empname'];

$sql = "DELETE FROM employees WHERE fname = '$fname'";
$result = mysqli_query($con, $sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "พัง";
}
?>
