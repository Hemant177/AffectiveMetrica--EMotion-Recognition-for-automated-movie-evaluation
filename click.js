// Function to sign out the user
function signOut() {
    localStorage.clear();  // Clear the localStorage to log the user out
    window.location.href = 'index.html';  // Redirect to index page after sign out
}

// Function to handle movie name input and show reference
function addMovieToWatchlist() {
    var movieInput = document.getElementById('movie-input').value; // Get the input movie name
    var movieReference = document.getElementById('movie-reference'); // Get the reference element

    // Check if the user has entered a movie name
    if (movieInput.trim() !== '') {
        movieReference.textContent = 'You added: ' + movieInput; // Show the movie reference
        document.getElementById('movie-input').value = ''; // Clear the input field
    } else {
        movieReference.textContent = 'Please enter a movie name.'; // Fallback message if input is empty
    }
}

// Function to load user information (username)
window.onload = function() {
    var userName = localStorage.getItem('username'); // Get username from localStorage

    if (userName) {
        document.getElementById('user-name').textContent = userName; // Display username
    } else {
        document.getElementById('user-name').textContent = 'Guest'; // Fallback if no username
    }
};
