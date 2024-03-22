// Function to fetch book reviews via AJAX
function fetchBookReviews(bookTitle) {
    // Make an AJAX request to fetch reviews for the specified book
    fetch('review.php?title=' + encodeURIComponent(bookTitle))
        .then(response => response.json())
        .then(reviews => {
            // Process the fetched reviews and update the UI
            displayBookReviews(reviews);
        })
        .catch(error => {
            console.error('Error fetching reviews:', error);
        });
}

// Function to display book reviews on the page
function displayBookReviews(reviews) {
    // Clear previous reviews
    const reviewContainer = document.getElementById('reviewContainer');
    reviewContainer.innerHTML = '';

    // Display the fetched reviews on the page
    reviews.forEach(review => {
        const reviewElement = document.createElement('div');
        reviewElement.classList.add('review');
        reviewElement.innerHTML = `
            <h4>${review.title}</h4>
            <p><strong>Rating:</strong> ${review.rating}</p>
            <p><strong>Comment:</strong> ${review.comment}</p>
        `;
        reviewContainer.appendChild(reviewElement);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Fetch book reviews when the page loads
    fetchBookReviews('Book Title');
});