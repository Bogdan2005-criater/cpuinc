document.addEventListener("DOMContentLoaded", () => {
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate__animated');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeIn'); // Укажите нужный класс анимации
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1 // Элемент считается видимым, если 10% его площади находится в видимой области
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    };

    animateOnScroll();
});
