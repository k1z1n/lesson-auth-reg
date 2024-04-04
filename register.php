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
        <h2>Регистрация</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="firstName">Имя:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Фамилия:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="middleName">Отчество:</label>
                <input type="text" id="middleName" name="middleName" required>
            </div>
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
            <div class="form-group">
                <label for="confirmPassword">Повторите пароль:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="form-group-rule">
                <input type="checkbox" id="agree" name="agree" required>
                <label for="agree">Я согласен с правилами</label>
            </div>
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>
</body>
</html>