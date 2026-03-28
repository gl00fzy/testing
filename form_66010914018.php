<?php
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "66010914018_db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "SET NAMES utf8");

// บันทึกข้อมูลเมื่อกดปุ่ม (ข้อ 7)
if (isset($_POST['Submit'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO tb_66010914018 (fullname, address, gender) VALUES ('$fullname', '$address', '$gender')";
    if (mysqli_query($conn, $sql)) {
        echo "บันทึกข้อมูลสำเร็จ!<br><br>";
    } else {
        echo "มีข้อผิดพลาด: " . mysqli_error($conn) . "<br><br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>เพิ่มข้อมูล (form)</title>
    <!-- โหลดเฉพาะ Bootstrap CSS เพื่อนำมาใช้ทำปุ่มสีฟ้าตามข้อ 6 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- ข้อ 5: สร้างฟอร์ม Textbox, Textarea, Radio button, Submit button -->
    <form method="post" action="">
        Textbox (ชื่อ-สกุล): 
        <input type="text" name="fullname" required><br><br>
        
        Textarea (ที่อยู่): 
        <textarea name="address" required></textarea><br><br>
        
        Radio button (เพศ): 
        <input type="radio" name="gender" value="ชาย" required> ชาย
        <input type="radio" name="gender" value="หญิง" required> หญิง<br><br>
        
        <!-- ข้อ 6: ตกแต่ง Submit button เป็นสีฟ้าด้วยคลาส btn btn-info ของ Bootstrap -->
        <button type="submit" name="Submit" class="btn btn-info">บันทึกข้อมูล (Submit)</button>
    </form>

</body>
</html>
