<?php
require('dbconn.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($con , $sql);

$row = mysqli_fetch_assoc($result);
echo "รหัส =" .$row['id']."<br>";
echo "ชื่อ =" .$row['fname']."<br>";
echo "นามสกุล =" .$row['lname']."<br>";
echo "เพศ =" .$row['gender']."<br>";
echo "ทักษะ =" .$row['skill']."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "รหัส =" .$row['id']."<br>";
echo "ชื่อ =" .$row['fname']."<br>";
echo "นามสกุล =" .$row['lname']."<br>";
echo "เพศ =" .$row['gender']."<br>";
echo "ทักษะ =" .$row['skill']."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "รหัส =" .$row['id']."<br>";
echo "ชื่อ =" .$row['fname']."<br>";
echo "นามสกุล =" .$row['lname']."<br>";
echo "เพศ =" .$row['gender']."<br>";
echo "ทักษะ =" .$row['skill']."<br>";
echo "<hr>";

?>