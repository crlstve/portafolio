window.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.fadeInUp');
    var windowHeight = window.innerHeight;
    elements.forEach(function (element) {
        var position = element.getBoundingClientRect().top;
          if (position < windowHeight * 0.7) {
            element.classList.add('visible');
        }
    });

    const hoverElements = document.querySelectorAll('.sound');
    const hoverAudio = document.getElementById('hoverSound');
    const actionAudio = document.getElementById('actionSound');

    hoverElements.forEach(element => {
        element.addEventListener('mouseenter', function () {
            hoverAudio.currentTime = 0; // Reinicia el audio al principio
            hoverAudio.play();
        });

        element.addEventListener('click', function () {
            actionAudio.currentTime = 0; // Reinicia el audio de acción al principio
            actionAudio.play();
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modal');
    const toggleModal = () => {
        modal.classList.toggle('hidden');
    }
    /* const form = document.querySelector('form');
     const name = document.getElementById('name');
     const email = document.getElementById('email');
     const subject = document.getElementById('subject');
     const message = document.getElementById('message');
     form.addEventListener('submit', function(event) {
         event.preventDefault();
         const data = {
             name: name.value,
             email: email.value,
             subject: subject.value,
             message: message.value
         };
         console.log(data);
     });*/
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