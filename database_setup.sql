-- ข้อ 1: สร้างฐานข้อมูล (นำไปวางรันที่ phpMyAdmin ทีเดียวจบ)
CREATE DATABASE IF NOT EXISTS 66010914018_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE 66010914018_db;

-- ข้อ 2: สร้างตารางเรื่อง "เพลงฮิต" ตามโจทย์ที่ได้รับมอบหมาย
CREATE TABLE IF NOT EXISTS tb_66010914018 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    song_name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    genre VARCHAR(50) NOT NULL
);

-- ข้อ 3: เพิ่มข้อมูลตัวอย่าง 5 แถว (ข้อมูลเพลงฮิต)
INSERT INTO tb_66010914018 (song_name, description, genre) VALUES
('ผู้ถูกเลือกให้ผิดหวัง (ดอกไม้ฤดูหนาว)', 'เพลงเศร้าอกหักสุดฮิตจาก เรนิษรา', 'ป็อป'),
('เลือดกรุ๊ปบี', 'เพลงฮิตไวรัลที่เนื้อหาโดนใจคนโสด', 'ป็อป'),
('ทรงอย่างแบด (Bad Boy)', 'เพลงร็อคขวัญใจวัยรุ่นฟันน้ำนม', 'ร็อค'),
('สลักจิต', 'เพลงฮิตตลอดกาลจาก ป๊อบ ปองกูล', 'ป็อป'),
('ธาตุทองซาวด์', 'เพลงแร็ปจังหวะมันส์ๆ โดนใจวัยรุ่น', 'ฮิปฮอป');
