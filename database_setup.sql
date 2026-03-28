-- ข้อ 1: สร้างฐานข้อมูล
CREATE DATABASE IF NOT EXISTS 66010914018_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE 66010914018_db;

-- ข้อ 2: สร้างตาราง (เพิ่ม lyrics และ release_year ตามที่แนะนำ)
CREATE TABLE IF NOT EXISTS tb_66010914018 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    song_name VARCHAR(100) NOT NULL,
    artist VARCHAR(100) NOT NULL,
    gerne VARCHAR(50) NOT NULL,
    lyrics TEXT NOT NULL,
    release_year INT(4) NOT NULL
);

-- ข้อ 3: เพิ่มข้อมูลตัวอย่าง 5 แถว (ข้อมูลเพลงฮิตที่สมจริงยิ่งขึ้น)
INSERT INTO tb_66010914018 (song_name, artist, gerne, lyrics, release_year) VALUES
('ผู้ถูกเลือกให้ผิดหวัง (ดอกไม้ฤดูหนาว)', 'เรนิษรา', 'ป็อป', 'รู้ฉันรู้... ว่าในที่สุดแล้ว เธอคงต้องเดินจากไป...', 2022),
('เลือดกรุ๊ปบี', 'เอิ้ก ชาลิสา', 'ป็อป', 'เอ๊ะ หรือว่าเราเลือดกรุ๊ปบี หรือเปล่า... ที่บอกว่าโสดจนตาย', 2023),
('ทรงอย่างแบด (Bad Boy)', 'Paper Planes', 'ร็อค', 'ทรงอย่างแบด แซดอย่างบ่อย เธอไม่อินกับผู้ชาย bad boy...', 2022),
('สลักจิต', 'ป๊อบ ปองกูล x ดา เอ็นโดรฟิน', 'ป็อป', 'สลักจิตเอาไว้ ในหัวใจส่วนขวา ว่ารักแท้อาจเป็นได้แค่ความทรงจำ...', 2022),
('ธาตุทองซาวด์', 'YOUNGOHM', 'ฮิปฮอป', 'โย่วๆ อีกี้มันเป็นสก๊อย ไปกับผู้บ่อย ผู้พาไป skrt...', 2023);
