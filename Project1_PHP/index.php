<?php
// Thay thông tin từ Somee của bạn vào đây
$host = "your_server.somee.com"; 
$dbname = "your_db_name";
$user = "your_username";
$pass = "your_password";

try {
    $conn = new PDO("sqlsrv:Server=$host;Database=$dbname", $user, $pass);
    $stmt = $conn->prepare("SELECT * FROM Products");
    $stmt->execute();
    $data = $stmt->fetchAll();
} catch(Exception $e) {
    $error = "Chưa kết nối được DB: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head><title>Project 1 - PHP</title></head>
<body style="font-family: Arial; padding: 20px;">
    <h1>📚 Cửa hàng Manga (PHP)</h1>
    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <ul>
        <?php foreach($data as $item): ?>
            <li><?php echo $item['name']; ?> - $<?php echo $item['price']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>