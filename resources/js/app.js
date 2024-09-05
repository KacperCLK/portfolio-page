import './bootstrap';
import './contact-errors';
import './progress-bar';
import './filters-worksPage';

document.addEventListener("DOMContentLoaded", function() {
    function checkScreenSize() {
        if (window.innerWidth <= 900) {
            if (window.location.pathname !== '/mobile') {
                window.location.href = '/mobile';
            }
            console.log('mobile');
            
        } else {
            console.log('desctop');
            if (window.location.pathname == '/mobile') {
                window.location.href = '/home';
            }
        }
    };

    checkScreenSize();

    window.addEventListener('resize', function() {
        checkScreenSize();
    });
});