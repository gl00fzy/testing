<?php
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "66010914018_db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "SET NAMES utf8");

// ดึงข้อมูลรายชื่อ (ข้อ 4)
$sql = "SELECT * FROM tb_66010914018";
$rs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>แสดงรายชื่อ (select)</title>
</head>
<body>

    <h2>แสดงข้อมูลจากตาราง MySQL</h2>
    <!-- แสดงข้อมูลเป็นตารางง่ายๆ ไม่ตกแต่งตามที่ขอ -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ชื่อเพลง (song_name)</th>
            <th>ศิลปิน (artist)</th>
            <th>แนวเพลง (gerne)</th>
        </tr>
        <?php while ($data = mysqli_fetch_array($rs)) { ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <!-- ดึงขื่อตัวแปรให้ตรงกับในฐานข้อมูล MySQL ที่คุณบอก -->
            <td><?php echo $data['song_name']; ?></td>
            <td><?php echo $data['artist']; ?></td>
            <td><?php echo $data['gerne']; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
