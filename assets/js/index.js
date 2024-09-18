//smooth scroll
window.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.fadeInUp');
    var windowHeight = window.innerHeight;
    elements.forEach(function (element) {
        var position = element.getBoundingClientRect().top;
          if (position < windowHeight * 0.7) {
            element.classList.add('visible');
        }
    });
    //sound
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
//modal
document.addEventListener('DOMContentLoaded', function () {
    //open modal button
        const modal = document.getElementById('modal');
        const contactButton = document.getElementById('contact');
        contactButton.addEventListener('click', function() {
            modal.classList.toggle('hidden');
        });
    //close modal button
        modal.addEventListener('click', (e) => { if (e.target === modal) { modal.classList.add('hidden'); } });
    //form
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input[type="text"], input[type="email"], textarea');
        const submitButton = form.querySelector('input[type="submit"]');
    //Validación de campos
        inputs.forEach(input => {
            input.addEventListener('blur', function () {
                if (!this.value.trim()) {
                    this.classList.add('error');
                    this.classList.remove('success');
                } else {
                    this.classList.add('success');
                    this.classList.remove('error');
                }
            });
        });
    // Función para verificar todos los campos
        function checkAllFields() {
            return Array.from(inputs).every(input => input.value.trim() !== '');
        }
    // Función para actualizar el estado del botón de envío
        function updateSubmitButton() {
            if (checkAllFields()) {
                submitButton.classList.remove('btnError');
                submitButton.classList.add('btnSuccess');
                submitButton.disabled = false;
            } else {
                submitButton.classList.remove('btnSuccess');
                submitButton.classList.add('btnError');
                submitButton.disabled = true;
            }
        }
    // Agregar evento input a cada campo
        inputs.forEach(input => {
            input.addEventListener('input', updateSubmitButton);
        });
    // Evento submit del formulario
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (checkAllFields()) {
                const result = document.getElementById('success');
                const form = document.querySelector('form'); // Cambia el selector según sea necesario
                form.classList.add('hidden');
                result.classList.remove('hidden');
                form.reset();
            }
        });
    // Actualizar el estado inicial del botón
        updateSubmitButton();
    //mensaje
    console.log(
        '¡Hola! Me llamo %cCarles Esteve%c, soy %cdesarrollador web full stack%c y soy de %cValencia, España%c.\n' +
        'Mi especialidad es la creación de %cpáginas web%c con %cWordPress%c.',
        'color: #6ee7b7;', '', 'color: #6ee7b7;', '', 'color: #6ee7b7;', '',
        'color: #6ee7b7;', '', 'color: #6ee7b7;', ''
    );
});