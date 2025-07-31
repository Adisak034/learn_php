<?php
require_once 'W07_01_connectDB.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql); // ใช้ query() เพื่อรันคำสั่ง sql และรับผลลัพธ์

if ($result->rowCount() > 0) {
    // output data of each row
    echo "<h2>พบข้อมูลในตาราง Product</h2>";
    $data = $result->fetchAll(PDO::FETCH_NUM);
    print_r($data); // แสดงข้อมูลที่ดึงมา
    } else {
    echo "<h2>ไม่พบข้อมูลในตาราง Product</h2>";
}
?>