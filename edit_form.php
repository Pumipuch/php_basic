<?php
require('dbconn.php');
$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = $id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$skill_arr = array("java", "php", "python", "html");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
        <form action="updateData.php" method="post">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
            <div class="form-groub">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control" value="<?php echo $row['fname']; ?>">
            </div>

            <div class="form-groub">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control" value="<?php echo $row['lname']; ?>">
            </div>

            <div class="form-groub">
                <label for="gender">เพศ</label>
                <?php
                if ($row['gender'] == 'male') {
                    echo "<input type='radio' name='gender' value='male' checked >ชาย";
                    echo "<input type='radio' name='gender' value='female' >หญิง";
                    echo "<input type='radio' name='gender' value='other' >อื่นๆ";
                } else if ($row['gender'] == 'female') {
                    echo "<input type='radio' name='gender' value='male' >ชาย";
                    echo "<input type='radio' name='gender' value='female' checked >หญิง";
                    echo "<input type='radio' name='gender' value='other' >อื่นๆ";
                } else {
                    echo "<input type='radio' name='gender' value='male' >ชาย";
                    echo "<input type='radio' name='gender' value='female' >หญิง";
                    echo "<input type='radio' name='gender' value='other' checked >อื่นๆ";
                }
                ?>
            </div>

            <div class="form-groub">
                <label for="">ทักษะ</label>
                <?php
                   $skill = explode("," ,$row["skill"]);
                   foreach($skill_arr as $value){
                    if(in_array($value , $skill)){
                        echo "<input type='checkbox' name='skill[]' value='$value' checked> $value";
                    }else{
                        echo "<input type='checkbox' name='skill[]' value='$value' > $value";
                    }
                   }
                ?>
                
            </div>

            <br><input class="btn btn-success" type="submit" value="บันทึกข้อมูล">
            <input class="btn btn-danger" type="reset" value="ล้างข้อมูล">
            <a href="index" class="btn btn-primary">กลับหน้าแรก</a>

        </form>



    </div>
</body>

</html>