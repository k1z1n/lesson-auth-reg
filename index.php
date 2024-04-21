<?php
session_start();
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Главная страница</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
    <div class="main-container">
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php
            $stmt = $pdo->prepare("SELECT username FROM users WHERE id = :user_id");
            $stmt->execute(['user_id' => $_SESSION['user_id']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <h1>Добро пожаловать, <?php echo $user['username']; ?>!</h1>
        <?php else: ?>
            <h1>Главная страница</h1>
        <?php endif; ?>
    </div>
</div>
</body>
</html>