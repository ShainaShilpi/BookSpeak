<?php
// Backend logic to fetch books from database or external API
$books = array(
    array("title" => "Book 1", "author" => "Author 1", "description" => "Description 1"),
    array("title" => "Book 2", "author" => "Author 2", "description" => "Description 2"),
    array("title" => "Book 3", "author" => "Author 3", "description" => "Description 3")
);
?>

<?php foreach ($books as $book): ?>
<div class="book">
    <h3><?php echo $book['title']; ?></h3>
    <p>Author: <?php echo $book['author']; ?></p>
    <p><?php echo $book['description']; ?></p>
    <a href="review.php?title=<?php echo urlencode($book['title']); ?>">Write a Review</a>
</div>
<?php endforeach; ?>