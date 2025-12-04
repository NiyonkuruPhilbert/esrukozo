document.addEventListener('DOMContentLoaded', function() {
    // Get the button and the content div by their IDs
    const button = document.getElementById('announcements-btn');
    const content = document.getElementById('announcements-content');

    // Add a click event listener to the button
    button.addEventListener('click', function() {
        // Toggle the 'hidden' class on the content div
        content.classList.toggle('hidden');

        // Change the button text based on the content visibility
        if (content.classList.contains('hidden')) {
            button.textContent = 'Show Latest Announcements';
        } else {
            button.textContent = 'Hide Announcements';
        }
    });
});