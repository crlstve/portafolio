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
});
//mensaje
console.log('Hola! Soy Carles Esteve y soy desarrollador web full stack y soy de Valencia, España.');
console.log('Me especializo en la creación de sitios web y aplicaciones web con Wordpress.');
console.log('Ironicamente este portafolio esta hecho únicamente con php, vanilla js, html y tailwind css');
console.log('Además, por si te lo preguntas, el fondo son tres esferas concentricas hechas de bolitas, que rotan al mover el raton y están con three.js');
