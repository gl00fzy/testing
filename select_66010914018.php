<?php
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "66010914018_db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "SET NAMES utf8");

// ดึงข้อมูลเพลงฮิตรายชื่อ (ข้อ 4)
$sql = "SELECT * FROM tb_66010914018";
$rs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>แสดงรายชื่อเพลงฮิต (select)</title>
</head>
<body>

    <h2>รายชื่อเพลงฮิตทั้งหมด</h2>
    <!-- แสดงข้อมูลเป็นตารางง่ายๆ ไม่ตกแต่งตามที่ขอ -->
    <table border="1">
        <tr>
            <th>ลำดับ (ID)</th>
            <th>ชื่อเพลง</th>
            <th>รายละเอียด</th>
            <th>แนวเพลง</th>
        </tr>
        <?php while ($data = mysqli_fetch_array($rs)) { ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <!-- ดึงขื่อตัวแปรให้ตรงกับในฐานข้อมูล MySQL -->
            <td><?php echo $data['song_name']; ?></td>
            <td><?php echo $data['description']; ?></td>
            <td><?php echo $data['genre']; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
