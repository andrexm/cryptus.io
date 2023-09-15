<?php
define('BASE', __DIR__);
define('URL', "http://localhost:8100");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptus.io</title>
    <link rel="stylesheet" href="<?= URL . '/assets/css/' ?>style.css">
    <link rel="stylesheet" href="<?= URL . '/assets/css/' ?>lunar.min.css">
</head>
<body>
    <?php require_once(BASE . "/partials/navbar.php") ?>
    <script src="<?= URL . '/assets/js/lunar.min.js' ?>"></script>
    <script src="<?= URL . '/assets/js/script.js' ?>"></script>
</body>
</html>