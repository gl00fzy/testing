-- ข้อ 1: สร้างฐานข้อมูล (นำไปวางรันที่ phpMyAdmin ทีเดียวจบ)
CREATE DATABASE IF NOT EXISTS 66010914018_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE 66010914018_db;

-- ข้อ 2: สร้างตารางตามคอลัมน์ที่คุณระบุ
CREATE TABLE IF NOT EXISTS tb_66010914018 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    song_name VARCHAR(100) NOT NULL,
    artist TEXT NOT NULL,
    gerne VARCHAR(50) NOT NULL
);

-- ข้อ 3: เพิ่มข้อมูลตัวอย่าง 5 แถว (ข้อมูลเพลงฮิต)
INSERT INTO tb_66010914018 (song_name, artist, gerne) VALUES
('ผู้ถูกเลือกให้ผิดหวัง (ดอกไม้ฤดูหนาว)', 'เรนิษรา', 'ป็อป'),
('เลือดกรุ๊ปบี', 'เอิ้ก ชาลิสา', 'ป็อป'),
('ทรงอย่างแบด (Bad Boy)', 'Paper Planes', 'ร็อค'),
('สลักจิต', 'ป๊อบ ปองกูล x ดา เอ็นโดรฟิน', 'ป็อป'),
('ธาตุทองซาวด์', 'YOUNGOHM', 'ฮิปฮอป');
