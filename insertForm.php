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
        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
        <form action="insertData" method="post">
            <div class="form-groub">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>

            <div class="form-groub">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>

            <div class="form-groub">
                <label for="gender">เพศ</label>
                <input type="radio" name="gender" value="male">ชาย
                <input type="radio" name="gender" value="female">หญิง
                <input type="radio" name="gender" value="other">อื่นๆ
            </div>

            <div class="form-groub">
                <label for="">ทักษะ</label>
                <input type="checkbox" name="skill[]" value="java">java
                <input type="checkbox" name="skill[]" value="php">php
                <input type="checkbox" name="skill[]" value="python">python
                <input type="checkbox" name="skill[]" value="html">html
            </div>

            <br><input class="btn btn-success" type="submit" value="บันทึกข้อมูล">
            <input class="btn btn-danger" type="reset" value="ล้างข้อมูล">
            <a href="index" class="btn btn-primary">กลับหน้าแรก</a>

        </form>



    </div>
</body>

</html>