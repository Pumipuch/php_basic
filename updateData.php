<?php
require('dbconn.php');
$id_edit = $_POST['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$emskill = implode("," ,$_POST['skill']);

$sql = "UPDATE employees SET fname='$fname' , lname='$lname' , gender='$gender' , skill='$emskill' WHERE id=$id_edit";

$result = mysqli_query($con , $sql);
if($result){
    header('location:index.php');
}else{
    echo "เยสแม่".mysqli_error($con);
}

?>