<?php
// dashboard.php - 登录成功后的页面
require_once 'config.php';

// 检查是否已登录
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户仪表盘</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .welcome {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .logout-btn {
            background: #f44336;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .logout-btn:hover {
            background: #da190b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>欢迎访问仪表盘</h1>
        <div class="welcome">
            欢迎您，<?php echo htmlspecialchars($_SESSION['username']); ?>！
        </div>
        <a href="logout.php" class="logout-btn">退出登录</a>
    </div>
</body>
</html>