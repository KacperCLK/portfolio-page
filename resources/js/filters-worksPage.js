document.querySelectorAll('.button--filter-button').forEach(button => {
    button.addEventListener('click', function() {
        const section = this.getAttribute('data-section');

        document.querySelectorAll('.works__work').forEach(work => {
            if (section === 'all' || work.getAttribute('data-section') === section) {
                work.style.display = 'flex';
            } else {
                work.style.display = 'none';
            }
        });
    });
});