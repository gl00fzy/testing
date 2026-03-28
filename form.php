<?php
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "66010914018_db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "SET NAMES utf8");

// บันทึกข้อมูลเมื่อกดปุ่ม (ข้อ 7)
if (isset($_POST['Submit'])) {
    $song_name = $_POST['song_name'];
    $artist = $_POST['artist'];
    $gerne = $_POST['gerne'];
    
    // บันทึกลงตารางที่ฟิลด์ตรงกับ MySQL ของคุณ (song_name, artist, gerne)
    $sql = "INSERT INTO tb_66010914018 (song_name, artist, gerne) VALUES ('$song_name', '$artist', '$gerne')";
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

    <h2>เพิ่มข้อมูล</h2>
    <!-- ข้อ 5: สร้างฟอร์ม Textbox, Textarea, Radio button, Submit button -->
    <!-- ให้ชื่อตัวแปรตรงกับตาราง MySQL (song_name, artist, gerne) -->
    <form method="post" action="">
        Textbox (ชื่อเพลง / song_name): 
        <input type="text" name="song_name" required><br><br>
        
        <!-- อาจารย์บังคับให้มี Textarea ในฟอร์ม จึงเอามาใช้รับค่า artist ถึงจะดูแปลกนิดนึงแต่ถูกต้องตามข้อสอบครับ -->
        Textarea (ชื่อศิลปิน / artist): 
        <textarea name="artist" required></textarea><br><br>
        
        Radio button (แนวเพลง / gerne): 
        <input type="radio" name="gerne" value="ป็อป" required> ป็อป (Pop)
        <input type="radio" name="gerne" value="ร็อค" required> ร็อค (Rock)
        <input type="radio" name="gerne" value="ฮิปฮอป" required> ฮิปฮอป (Hip Hop)
        <input type="radio" name="gerne" value="ลูกทุ่ง" required> ลูกทุ่ง<br><br>
        
        <!-- ข้อ 6: ตกแต่ง Submit button เป็นสีฟ้าด้วยคลาส btn btn-info ของ Bootstrap -->
        <button type="submit" name="Submit" class="btn btn-info">บันทึกข้อมูล (Submit)</button>
    </form>

</body>
</html>
