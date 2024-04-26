<?php
require('dbconn.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($con , $sql);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo "รหัส =" .$row[0]."<br>";
echo "ชื่อ =" .$row[1]."<br>";
echo "นามสกุล =" .$row[2]."<br>";
echo "เพศ =" .$row[3]."<br>";
echo "ทักษะ =" .$row[4]."<br>";
echo "<hr>";

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "รหัส =" .$row['id']."<br>";
echo "ชื่อ =" .$row["fname"]."<br>";
echo "นามสกุล =" .$row['lname']."<br>";
echo "เพศ =" .$row['gender']."<br>";
echo "ทักษะ =" .$row['skill']."<br>";
echo "<hr>";

?>