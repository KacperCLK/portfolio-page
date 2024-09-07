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
