// Save the current scroll position
const currentScrollY = window.scrollY;

// Load Header
fetch('header.html')
  .then(response => response.text())
  .then(data => {
    const headerPlaceholder = document.getElementById('header-placeholder');
    headerPlaceholder.innerHTML = data;

    // Add event listener for navbar links (example of handling dynamic elements)
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    if (hamburger && navLinks) {
      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
      });
    }

    // Close navbar on page load or back navigation
    window.addEventListener('pageshow', () => {
        if (navLinks) {
          navLinks.classList.remove('active'); // Ensure the menu is closed
        }
      });

    // Scroll to top only when the page is refreshed or loaded
    window.scrollTo(0, 0);
  })
  .catch(error => {
    console.error('Error loading header:', error);
  });

  //Load Footer
  fetch('footer.html')
  .then(response => response.text())
  .then(data => {
    const headerPlaceholder = document.getElementById('footer-placeholder');
    headerPlaceholder.innerHTML = data;

  })
  .catch(error => {
    console.error('Error loading header:', error);
  });