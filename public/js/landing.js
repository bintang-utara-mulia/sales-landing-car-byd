const menuToggle = document.querySelector('.menu-toggle');
const mobileNav = document.querySelector('.mobile-nav');

menuToggle?.addEventListener('click', () => {
    mobileNav.classList.toggle('active');
    menuToggle.textContent = mobileNav.classList.contains('active') ? '×' : '☰';
});

document.querySelectorAll('.mobile-nav a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileNav.classList.remove('active');
        menuToggle.textContent = '☰';
    });
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
