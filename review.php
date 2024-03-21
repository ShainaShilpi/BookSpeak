<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Write a Review</h2>
    <?php
    // Retrieve book title from query parameter
    $book_title = $_GET['title'] ?? '';
    ?>
    <h3>Reviewing: <?php echo $book_title; ?></h3>
    <form action="" method="POST">
        <div>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>
        <div>
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
        </div>
        <button type="submit" name="submit">Submit Review</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
