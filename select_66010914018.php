<?php
// เชื่อมต่อฐานข้อมูล (เปลี่ยน username, password ถ้ามี)
$conn = mysqli_connect("localhost", "root", "", "66010914018_db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "SET NAMES utf8");

// ดึงข้อมูล (ข้อ 4)
$sql = "SELECT * FROM tb_66010914018";
$rs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>แสดงข้อมูล (select)</title>
</head>
<body>

    <!-- แสดงข้อมูลเป็นตารางง่ายๆ ไม่ตกแต่งตามที่ขอ -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ชื่อ-สกุล</th>
            <th>ที่อยู่</th>
            <th>เพศ</th>
        </tr>
        <?php while ($data = mysqli_fetch_array($rs)) { ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['fullname']; ?></td>
            <td><?php echo $data['address']; ?></td>
            <td><?php echo $data['gender']; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
