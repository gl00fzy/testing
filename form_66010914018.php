<?php
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "66010914018_db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "SET NAMES utf8");

// บันทึกข้อมูลเมื่อกดปุ่ม (ข้อ 7)
if (isset($_POST['Submit'])) {
    $song_name = $_POST['song_name'];
    $description = $_POST['description'];
    $genre = $_POST['genre'];
    
    // บันทึกลงตารางที่ฟิลด์ตรงกับเรื่องเพลงฮิต
    $sql = "INSERT INTO tb_66010914018 (song_name, description, genre) VALUES ('$song_name', '$description', '$genre')";
    if (mysqli_query($conn, $sql)) {
        echo "บันทึกข้อมูลเพลงสำเร็จ!<br><br>";
    } else {
        echo "มีข้อผิดพลาด: " . mysqli_error($conn) . "<br><br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>เพิ่มข้อมูลเพลงฮิต (form)</title>
    <!-- โหลดเฉพาะ Bootstrap CSS เพื่อนำมาใช้ทำปุ่มสีฟ้าตามข้อ 6 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h2>เพิ่มข้อมูลเพลงฮิต</h2>
    <!-- ข้อ 5: สร้างฟอร์ม Textbox, Textarea, Radio button, Submit button -->
    <!-- ให้ชื่อตัวแปรตรงกับตาราง MySQL (song_name, description, genre) -->
    <form method="post" action="">
        Textbox (ชื่อเพลง): 
        <input type="text" name="song_name" required><br><br>
        
        Textarea (รายละเอียด/ท่อนฮุค): 
        <textarea name="description" required></textarea><br><br>
        
        Radio button (แนวเพลง): 
        <input type="radio" name="genre" value="ป็อป" required> ป็อป (Pop)
        <input type="radio" name="genre" value="ร็อค" required> ร็อค (Rock)
        <input type="radio" name="genre" value="ฮิปฮอป" required> ฮิปฮอป (Hip Hop)
        <input type="radio" name="genre" value="ลูกทุ่ง" required> ลูกทุ่ง<br><br>
        
        <!-- ข้อ 6: ตกแต่ง Submit button เป็นสีฟ้าด้วยคลาส btn btn-info ของ Bootstrap -->
        <button type="submit" name="Submit" class="btn btn-info">บันทึกข้อมูลเพลง (Submit)</button>
    </form>

</body>
</html>
