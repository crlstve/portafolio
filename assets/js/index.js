window.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.fadeInUp');
    var windowHeight = window.innerHeight;
    elements.forEach(function (element) {
        var position = element.getBoundingClientRect().top;
          if (position < windowHeight * 0.7) {
            element.classList.add('visible');
        }
    });
});

function actualizarImagen() {
    const imagenLight = document.getElementById('carles-image-light');
    const imagenDark = document.getElementById('carles-image-dark');
    const esModoOscuro = document.documentElement.classList.contains('dark');
    if (esModoOscuro) {
        imagenLight.style.opacity = '0';
        imagenDark.style.opacity = '1';
    } else {
        imagenLight.style.opacity = '1';
        imagenDark.style.opacity = '0';
    }
}
// Actualizar la imagen correcta al inicio
actualizarImagen();
// Observar cambios en la clase 'dark' del HTML
const observer = new MutationObserver(actualizarImagen);
observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });