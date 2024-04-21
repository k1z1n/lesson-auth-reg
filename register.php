<?php

require_once 'config.php';
unset ($_SESSION[ 'errors']);
$_SESSION[ 'errors'] = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $user = $pdo->query("SELECT email FROM users WHERE email = \"$email\"")->fetch(2);

    if(empty($username) || empty($password) || empty($email)) {
        $_SESSION[ 'errors' ][] = 'Заполните все поля';
    }elseif (!empty($user)){
        $_SESSION['errors'][] = 'уже зарегестрирован';
    }
    else{
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        header('Location: login.php');
    }
}

?>
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
                <label for="username">Имя:</label>
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
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>
</body>
</html>