<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (
        $login === 'admin'
        &&
        $password === '123456'
    ) {

        $_SESSION['admin'] = true;

        header('Location: index.php');

        exit;
    }

    $error = 'Неверный логин или пароль';
}

?>

<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>Вход</title>

</head>

<body>

    <h1>Вход в админку</h1>

    <?php if (isset($error)): ?>

        <p>
            <?= htmlspecialchars($error) ?>
        </p>

    <?php endif; ?>

    <form method="POST">

        <input
            type="text"
            name="login"
            placeholder="Логин"
        >

        <input
            type="password"
            name="password"
            placeholder="Пароль"
        >

        <button type="submit">
            Войти
        </button>

    </form>

</body>

</html>