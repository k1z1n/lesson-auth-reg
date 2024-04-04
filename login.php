<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Форма регистрации</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
    <div class="form-container">
        <h2>Авторизация</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Логин:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>
</body>
</html>