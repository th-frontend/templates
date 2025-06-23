document.addEventListener('DOMContentLoaded', () => {
  const hamburgerBtn = document.querySelector('.obs-hamburger-btn');
  const navList = document.getElementById('main-nav-list');

  if (hamburgerBtn && navList) {
    hamburgerBtn.addEventListener('click', () => {
      navList.classList.toggle('mobile-nav-active');
      // Toggle aria-expanded attribute for accessibility
      const isExpanded = navList.classList.contains('mobile-nav-active');
      hamburgerBtn.setAttribute('aria-expanded', isExpanded);
      // Optional: Toggle a class on the hamburger button itself for animated X
      hamburgerBtn.classList.toggle('hamburger-active');
    });
  }
});
