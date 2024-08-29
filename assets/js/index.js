console.log('test');
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

// Controlar el desplazamiento con la rueda del ratón
/*window.addEventListener('wheel', function (event) {
    event.preventDefault();
    window.scrollBy({
        top: event.deltaY < 0 ? -320 : 320, // Ajusta el valor para controlar la cantidad de desplazamiento
        behavior: 'smooth'
    });
}, { passive: false });*/