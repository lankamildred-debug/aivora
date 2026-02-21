<?php
// config.php - 数据库配置文件
session_start();

// 数据库配置
define('DB_HOST', 'localhost');
define('DB_USER', 'root');      // XAMPP默认用户名
define('DB_PASS', '');          // XAMPP默认密码为空
define('DB_NAME', 'user_system');

// 创建数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 检查连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

// 设置字符集
mysqli_set_charset($conn, "utf8mb4");
?>