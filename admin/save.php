<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/../includes/db.php';

if (!isset($_POST['content'])) {
    header('Location: index.php');
    exit;
}

$stmt = $db->prepare("
    UPDATE content
    SET value = :value
    WHERE code = :code
");

foreach ($_POST['content'] as $code => $value) {

    $stmt->execute([
        'value' => $value,
        'code' => $code
    ]);

}

header('Location: index.php');

exit;