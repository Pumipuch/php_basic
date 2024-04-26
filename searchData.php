<?php
require('dbconn.php');
$name = $_POST['emp_name'];

$sql = "SELECT * FROM employees WHERE fname LIKE '%$name%' ORDER BY fname ASC";

$result = mysqli_query($con , $sql);

$count = mysqli_num_rows($result);
$order = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ข้อมูลพนักงาน</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">ข้อมูลพนักงาน</h1>
        <hr>

        <?php if ($count > 0) {
        ?>
            <div>
                <form action="searchData.php" class="form-group" method="POST">
                    <label for="">ค้นหา</label>
                    <input type="text" placeholder="ป้อนชื่อพนักงาน" class="form-control my-2" name="emp_name">
                    <input type="submit" value="ค้นหา" class="btn btn-dark my-2">
                </form>
            </div>
            <hr>

            <div>
                <form action="deleteTextField.php" class="form-group" method="POST">
                    <label for="">รหัส</label>
                    <input type="text" placeholder="ป้อนรหัสพนักงาน" class="form-control my-2" name="idemp">
                    <input type="submit" value="ลบข้อมูล" class="btn btn-danger my-2" onclick="return confirm('sure?')">
                </form>
            </div><br>

            <div class="table-responsive w-auto">
                <table border="2" class="table table-striped table-hover table-borderless table-primary align-middle text-center">
                    <thead class="table-light">
                        <caption></caption>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>เพศ</th>
                            <th>ทักษะ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                            <th>ลบ (checkbox)</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr class="table-primary">
                                <td><?php echo $order++ ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><?php if ($row['gender'] == "male") { ?> ช <?php } else if ($row['gender'] == "female") { ?> ญ <?php } else { ?> ฯลฯ <?php } ?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><a href="edit_form.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">แก้ไข</a></td>
                                <td><a href="deleteQueryStr.php?idemp= <?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('sure?')">ลบ</a></td>
                                <form action="mutiDel.php" method="POST">
                                    <td>
                                        <input type="checkbox" name="idcheckbox[]" class="form-groub" value="<?php echo $row["id"]; ?>">
                                    </td>
                            </tr><?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>

        <?php } else { ?>

            <div class="alert alert-danger">
                <h1 class="text-center">EMPTY !!</h1>
            </div>

        <?php } ?>


        <center><a href="index" class="btn btn-success">กลับหน้าแรก</a>
            <?php if ($count > 0) { ?>
                <input type="submit" value="ลบ (checkbox)" class="btn btn-danger">
            <?php } ?>

            </form>
            <?php if ($count > 0) { ?>
                <button class="btn btn-info" onclick="checkAll()">เลือกทั้งหมด</button>
                <button class="btn btn-warning" onclick="UncheckAll()">ยกเลิก</button><?php } ?>
        </center>
    </div>

</body>

<script>
    function checkAll() {
        let form_ele = document.forms[1].length;
        for (i = 0; i < form_ele - 1; i++) {
            document.forms[1].elements[i].checked = true;
        }
    }

    function UncheckAll() {
        let form_ele = document.forms[1].length;
        for (i = 0; i < form_ele - 1; i++) {
            document.forms[1].elements[i].checked = false;
        }
    }
</script>

</html>