<nav>
    <div class="start">
        <a href="index.php">Home</a>
    </div>
    <div class="end">
        <?php if (!isset($_SESSION['login'])) : ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php else : ?>
            <a href="logout.php">Logout</a>
        <?php endif; ?>
    </div>
</nav>