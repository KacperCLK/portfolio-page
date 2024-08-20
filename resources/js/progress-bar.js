document.addEventListener('DOMContentLoaded', function() {
    // Ustawia wartość wszystkich progress barów
    document.querySelectorAll('.skills-page__progress-bar').forEach(function(progressBar) {
        let initialValue = progressBar.getAttribute('pregress');
        let progress = progressBar.querySelector('.skills-page__progress');
        if (initialValue >= 0 && initialValue <= 100) {
            progress.style.width = initialValue + '%';
        }
    });
});