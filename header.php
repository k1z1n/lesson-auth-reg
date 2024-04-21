<header>
    <div class="logo">
        <a href="index.php">logo</a>
    </div>
    <div class="menu">
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="logout.php">выйти</a>
        <?php else: ?>
            <a href="register.php">регистрация</a>
            <a href="login.php">авторизация</a>
        <?php endif; ?>
    </div>
</header>