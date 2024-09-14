// Scroll to anchor smothly
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            const offset = 90; // 6rem to 6 * 16px (jeśli 1rem = 16px)
            const elementPosition = targetElement.offsetTop;
            const offsetPosition = elementPosition - offset;

            window.scrollTo({
                top: offsetPosition, // Przewijanie do pozycji z uwzględnieniem przesunięcia
                behavior: 'smooth' // Ustawienie płynnego przewijania
            });
        }
    });
});

// Header and scroll to top button behaviour while scrolling 
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    const baseHeight = header.offsetHeight;
    const scrolledHeight = baseHeight / 2;

    window.addEventListener('scroll', function() {
        setTimeout(() => {
            if (window.scrollY > 0) {
                header.classList.add('header--scrolled');
                header.style.height = `${scrolledHeight}px`;

                scrollToTopBtn.style.display = "block";
            } else {
                header.classList.remove('header--scrolled');
                header.style.height = `${baseHeight}px`;

                scrollToTopBtn.style.display = "none";
            }
          }, 100);
    });
    
    if (scrollToTopBtn) {
        // Scroll to top button settings
        scrollToTopBtn.addEventListener("click", function() {
            window.scrollTo({
              top: 0,
              behavior: "smooth"
            });
        });
    }
});