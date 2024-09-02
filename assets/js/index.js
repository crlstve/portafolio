window.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.fadeInUp');
    var windowHeight = window.innerHeight;
    elements.forEach(function (element) {
        var position = element.getBoundingClientRect().top;
        // Ajustar la condición para que el elemento aparezca cuando esté antes de la mitad de la pantalla
        if (position < windowHeight * 0.5) {
            element.classList.add('visible');
        }
    });
});
