document.addEventListener('DOMContentLoaded', () => {
    const removeErrorState = (element, elementClass) => {
        // Kasowanie border-bottom (success lub error)
        element.classList.remove(elementClass);

        // Kasowanie tekstów errorów
        const errorSpan = element.closest('.contact-page__inputBx').querySelector('.contact-page__error');
        if (errorSpan) errorSpan.textContent = '';

        //Kasowaie wiadomości o prawidłowym wysłaniu
        const successMessageElement = element.closest('.contact-page__form').querySelector('.contact-page__success-message');
        if (successMessageElement) successMessageElement.textContent = '';
    };

    document.querySelectorAll('.contact-page__input').forEach(element => {
        element.addEventListener('focus', () => {
            if (element.classList.contains('contact-page__input--error')) removeErrorState(element, 'contact-page__input--error');
            if (element.classList.contains('contact-page__input--success')) removeErrorState(element, 'contact-page__input--success');
        });
    });

    document.querySelectorAll('.contact-page__textarea').forEach(element => {
        element.addEventListener('focus', () => {

            if (element.classList.contains('contact-page__textarea--error')) removeErrorState(element, 'contact-page__textarea--error');
            if (element.classList.contains('contact-page__textarea--success')) removeErrorState(element, 'contact-page__textarea--success');
        });
    });
});