<?php
require('dbconn.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($con , $sql);

$count = mysqli_num_rows($result);

for($i=0; $i<$count; $i++){
    $row = mysqli_fetch_object($result);
        echo "รหัส =" .$row->id."<br>";
        echo "ชื่อ =" .$row->fname."<br>";
        echo "นามสกุล =" .$row->lname."<br>";
        echo "เพศ =" .$row->gender."<br>";
        echo "ทักษะ =" .$row->skill."<br>";
        echo "<hr>";
}
?>