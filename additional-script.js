// additional-script.js

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to handle the scrolling effects
function handleScrollAnimation() {
    const sections = document.querySelectorAll('.scroll-animation');
    sections.forEach((section) => {
        if (isInViewport(section)) {
            section.classList.add('animate');
        } else {
            section.classList.remove('animate');
        }
    });
}

// Listen for scroll events and call the function
document.addEventListener('scroll', handleScrollAnimation);

// Initial check on page load
window.addEventListener('load', handleScrollAnimation);
