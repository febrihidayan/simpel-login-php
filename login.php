<?php

include 'config.php';

if (isset($_SESSION['login'])) {
    header("Location:index.php");
}

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT username FROM users WHERE username = '$user' AND password = '$pass'";

    $user = $conn->query($query);

    if ($result = $user->fetch_object()) {
        $_SESSION['login'] = $result->username;
        header("Location:index.php");
    } else {
        $message = 'Username atau Password salah.';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Febri Hidayan</title>
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
        <?php if (isset($message)) : ?>
            <p><mark><?= $message ?></mark></p>
        <?php endif; ?>
        <form action="" method="post">
            <p>
                <label>Username: </label>
                <input type="text" name="username">
            </p>
            <p>
                <label>Password: </label>:
                <input type="password" name="password">
            </p>
            <p>
                <button name="submit" type="submit">Login</button>
            </p>
        </form>
    </main>
</body>

</html>