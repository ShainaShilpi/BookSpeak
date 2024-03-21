<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Register</h2>
    <form action="" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="register">Register</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
