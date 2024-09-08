document.addEventListener("DOMContentLoaded", function() {
    function checkScreenSize() {
        if (window.innerWidth <= 900) {
            if (window.location.pathname !== '/mobile' && !window.location.pathname.match(/^\/works\/[^/]+/)) {
                window.location.href = '/mobile';
            }
            
        } else {
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