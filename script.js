// script.js

document.addEventListener('DOMContentLoaded', function() {
    const companyNameElement = document.getElementById('companyName');
    const companyName = 'Aetherix.';

    function typeCompanyName() {
        let i = 0;
        const typingInterval = setInterval(function() {
            companyNameElement.textContent += companyName[i];
            i++;

            if (i === companyName.length) {
                clearInterval(typingInterval);
                setTimeout(function() {
                    companyNameElement.textContent = ''; // Clear the content
                    i = 0;
                    typeCompanyName(); // Start typing again
                }, 1500); // Adjust the delay before starting again (milliseconds)
            }
        }, 300); // Adjust the typing speed (milliseconds per character) as needed
    }

    // Start typing animation
    typeCompanyName();
});
