<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/../includes/db.php';

$stmt = $db->query("
    SELECT code, value
    FROM content
    ORDER BY id
");

$content = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>Админка GreenSpace</title>

    <style>

        body {
            margin: 0;
            padding: 40px;

            background: #111;
            color: #fff;

            font-family: Arial, sans-serif;
        }

        .admin {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 40px;
        }

        .field {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;

            color: #aaa;
        }

        textarea {
            width: 100%;
            min-height: 100px;

            padding: 15px;

            box-sizing: border-box;

            background: #222;
            color: #fff;

            border: 1px solid #444;
            border-radius: 10px;

            resize: vertical;
        }

        button {
            padding: 15px 30px;

            border: 0;
            border-radius: 30px;

            background: #91b95b;
            color: #111;

            cursor: pointer;
        }

    </style>

</head>

<body>

<div class="admin">

    <h1>Админка GreenSpace</h1>

    <form action="save.php" method="POST">

        <?php foreach ($content as $item): ?>

            <div class="field">

                <label>
                    <?= htmlspecialchars($item['code']) ?>
                </label>

                <textarea
                    name="content[<?= htmlspecialchars($item['code']) ?>]"
                ><?= htmlspecialchars($item['value']) ?></textarea>

            </div>

        <?php endforeach; ?>

        <button type="submit">
            Сохранить
        </button>

    </form>

</div>

</body>

</html>