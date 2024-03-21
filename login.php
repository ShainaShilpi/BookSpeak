<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Login</h2>
    <form action="" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="login">Login</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
