<?php

include 'config.php';

if (isset($_SESSION['login'])) {
    header("Location:index.php");
}

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT username FROM users WHERE username = '$user'";

    $username = $conn->query($query);

    if (!$username->fetch_object()) {

        $query = "INSERT INTO users(username, password) VALUES('$user', '$pass')";

        if ($conn->query($query)) {
            $_SESSION['login'] = $user;
            header("Location:index.php");
        } else {
            $message = 'Gagal register akun.';
        }

    } else {
        $message = 'Nama pengguna sudah ada.';
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Febri Hidayan</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <?php require_once 'header.php' ?>
    <main>
        <h1>Register</h1>
        <br>
        <?php if (isset($message)) : ?>
            <p><mark><?= $message ?></mark></p>
        <?php endif; ?>
        <form action="" method="post">
            <p>
                <label>Username: </label>
                <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
            </p>
            <p>
                <label>Password: </label>
                <input type="password" name="password">
            </p>
            <p>
                <button name="submit" type="submit">Register</button>
            </p>
        </form>
    </main>
</body>

</html>