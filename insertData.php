<?php

require('dbconn.php');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$emskill = implode(",",$_POST["skill"]);

$sql = "INSERT INTO employees(fname,lname,gender,skill) VALUES('$fname' , '$lname' , '$gender' , '$emskill')";

$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error($con);
}
?>