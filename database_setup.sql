-- ข้อ 1: สร้างฐานข้อมูล (นำไปวางรันที่ phpMyAdmin ทีเดียวจบ)
CREATE DATABASE IF NOT EXISTS 66010914018_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE 66010914018_db;

-- ข้อ 2: สร้างตาราง
CREATE TABLE IF NOT EXISTS tb_66010914018 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    gender VARCHAR(10) NOT NULL
);

-- ข้อ 3: เพิ่มข้อมูลตัวอย่าง 5 แถว
INSERT INTO tb_66010914018 (fullname, address, gender) VALUES
('สมชาย ใจดี', '123 ซอย 1 กรุงเทพฯ', 'ชาย'),
('สมหญิง สุดสวย', '456 ซอย 2 เชียงใหม่', 'หญิง'),
('John Doe', '789 Main St, London', 'ชาย'),
('Jane Smith', '321 Elm St, New York', 'หญิง'),
('มานี มีนา', '111 หมู่บ้านเสรี ขอนแก่น', 'หญิง');
