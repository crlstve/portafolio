window.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.fadeInUp');
    var windowHeight = window.innerHeight;
    elements.forEach(function (element) {
        var position = element.getBoundingClientRect().top;
          if (position < windowHeight * 0.5) {
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

// Activar las View Transitions
if (document.startViewTransition) {
    window.navigation.addEventListener('navigate', (event) => {
        const toUrl = new URL(event.destination.url);
        
        // Verificar si es una navegación dentro del mismo origen y no es un anchor
        if (location.origin !== toUrl.origin || toUrl.hash !== '') return;
        
        // Prevenir la navegación por defecto
        event.intercept({
            async handler() {
                // Cargar el nuevo contenido
                const response = await fetch(toUrl.pathname);
                const text = await response.text();
                const parser = new DOMParser();
                const newDocument = parser.parseFromString(text, 'text/html');
                
                // Iniciar la transición
                document.startViewTransition(() => {
                    // Actualizar el contenido del documento
                    document.body.innerHTML = newDocument.body.innerHTML;
                    document.title = newDocument.title;
                    
                    // Actualizar la URL
                    history.pushState(null, '', toUrl);
                    
                    // Volver a ejecutar los scripts necesarios
                    actualizarImagen();
                });
            }
        });
    });
}

// Función para manejar los enlaces internos
function manejarEnlacesInternos() {
    document.body.addEventListener('click', (event) => {
        const enlace = event.target.closest('a');
        if (enlace && enlace.origin === location.origin && !enlace.hash) {
            event.preventDefault();
            history.pushState(null, '', enlace.href);
            window.dispatchEvent(new PopStateEvent('popstate'));
        }
    });
}

// Ejecutar la función cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', manejarEnlacesInternos);
