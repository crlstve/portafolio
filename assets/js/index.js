// Callback global para reCAPTCHA
window.recaptchaCallback = function() {
    console.log('reCAPTCHA cargado correctamente');
};

window.recaptchaExpiredCallback = function() {
    console.log('reCAPTCHA expirado');
    document.getElementById('recaptcha-error').textContent = 'La verificación reCAPTCHA ha expirado. Por favor, verifica nuevamente.';
    document.getElementById('recaptcha-error').classList.remove('hidden');
};

//Con el Dom cargado
document.addEventListener('DOMContentLoaded', function () {
//smooth scroll
    window.addEventListener('scroll', function () {
        var elements = document.querySelectorAll('.fadeInUp');
        var windowHeight = window.innerHeight;
        elements.forEach(function (element) {
            var position = element.getBoundingClientRect().top;
            if (position < windowHeight * 0.75) {
                element.classList.add('visible');
            }
        });
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
//modal
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
    
    // Función para verificar reCAPTCHA
    function checkRecaptcha() {
        return typeof grecaptcha !== 'undefined' && grecaptcha.getResponse().length > 0;
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
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        
        // Ocultar mensajes de error previos
        document.getElementById('error').classList.add('hidden');
        document.getElementById('recaptcha-error').classList.add('hidden');
        
        if (!checkAllFields()) {
            document.getElementById('error').classList.remove('hidden');
            return;
        }
        
        if (!checkRecaptcha()) {
            document.getElementById('recaptcha-error').classList.remove('hidden');
            return;
        }
        
        const result = document.getElementById('success');
        const form = document.querySelector('form');
        form.classList.add('hidden');
        result.classList.remove('hidden');

        // Recoger los datos del formulario y crear un objeto
        var data = {
            nombre: form.querySelector('[name="name"]').value,
            email: form.querySelector('[name="email"]').value,
            phone: form.querySelector('[name="phone"]').value,                
            subject: form.querySelector('[name="subject"]').value,
            message: form.querySelector('[name="message"]').value,
            'g-recaptcha-response': grecaptcha.getResponse()
        };
        
        // Crear un objeto XMLHttpRequest
        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/contact.php', true);
        console.log(data);
        // Configurar el encabezado para indicar que el cuerpo de la petición es JSON
        xhr.setRequestHeader('Content-Type', 'application/json');
        
        // Manejar la respuesta
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.status === 'error') {
                            // Mostrar error y restaurar el formulario
                            form.classList.remove('hidden');
                            result.classList.add('hidden');
                            document.getElementById('error').textContent = response.message;
                            document.getElementById('error').classList.remove('hidden');
                            // Reset reCAPTCHA
                            grecaptcha.reset();
                        }
                    } catch (e) {
                        console.error('Error parsing response:', e);
                    }
                }
            }
        };
        
        // Enviar los datos como JSON
        xhr.send(JSON.stringify(data));
    });
    
    // Actualizar el estado inicial del botón
    updateSubmitButton();
    //mensaje
    console.log(
        '¡Hola, gracias por tu interés!.\n' +
        'Llevo en el mundo del %cdesarrollo web%c más de %c8 años%c.\n' +
        'Mi especialidad es crear sitios web y aplicaciones web con %cWordpress%c.\n' +
        'Pero tengo experiencia con otros %clenguajes, frameworks y tecnologías%c.\n' +
        'Si quieres contactarme puedes hacerlo en  el formulario de %ccontacto%c.\n' +
        '¡Muchas gracias!'
        
        ,
        'color: #6ee7b7;', '', 'color: #6ee7b7;', '', 'color: #6ee7b7;', '',
        'color: #6ee7b7;', '', 'color: #6ee7b7;', ''
    );


    // Menu
    const menu = document.querySelector('[data-contoller="menu"]');
    const navMenu = document.getElementById('nav-menu');
    const navMenuBtn = Array.from(document.getElementsByClassName('btn_nav'));  // Convertir a array

    menu.addEventListener('click', function (e) {
        e.preventDefault();
        navMenu.classList.toggle('hidden');
    });

    // Ahora puedes usar forEach en el array de botones
    navMenuBtn.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            //e.preventDefault();
            navMenu.classList.toggle('hidden');
        });
    });



});