<?php

include 'config.php';

if (!isset($_SESSION['login'])) {
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Febri Hidayan</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <?php require_once 'header.php' ?>
    <main>
        <h1>Hai semuanya, saya Febri Hidayan</h1>
    </main>
</body>

</html>