// Example JavaScript to change the header style dynamically
const header = document.getElementById('header');
const infolesson = document.getElementsByClassName('lessoninfo');

document.addEventListener('DOMContentLoaded', () => {
    const navbarItems = document.querySelectorAll('.navbar-item'); // Fixed selector

    navbarItems.forEach(item => {
        item.addEventListener('mouseover', () => {
            item.classList.add('hover');
        });

        item.addEventListener('mouseout', () => {
            item.classList.remove('hover');
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Convert HTMLCollection to array to use forEach
    Array.from(infolesson).forEach(item => {
        item.addEventListener('mouseover', () => {
            item.classList.add('hover');
        });
        item.addEventListener('mouseout', () => {
            item.classList.remove('hover');
        });
    });

    window.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) { // Add event listener for click
                e.preventDefault(); // Prevent default anchor behavior

                const targetId = this.getAttribute('href').substring(1); // Fixed `this`
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' }); // Smooth scroll
                }
            });
        });
    });
});
