// script2.js

// Function to open the popup
function openPopup() {
    const popup = document.getElementById('popupCard');
    if (popup) {
        popup.style.display = 'block';

        // Close the popup automatically after 5 seconds
        setTimeout(() => {
            closePopup();
        }, 5000);
    }
}

// Function to close the popup
function closePopup() {
    const popup = document.getElementById('popupCard');
    if (popup) {
        popup.style.display = 'none';
    }
}

// Add any additional functionality you need for the pop-up in this file
