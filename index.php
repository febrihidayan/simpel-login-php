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
    <nav>
        <div class="start">
            <a href="index.php">Home</a>
        </div>
        <div class="end">
            <?php if (!isset($_SESSION['login'])) : ?>
                <a href="login.php">Login</a>
            <?php else : ?>
                <a href="logout.php">Logout</a>
            <?php endif; ?>
        </div>
    </nav>
    <main>
        <h1>Hai semuanya, saya Febri Hidayan</h1>
    </main>
</body>

</html>