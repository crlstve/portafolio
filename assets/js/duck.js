import * as THREE from '../../node_modules/three/build/three.module.js';

const three = document.getElementById('three');

// Configuración de la escena
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, three.clientWidth / three.clientHeight, 0.1, 100);
camera.position.z = 5;

// Configuración del renderer
const renderer = new THREE.WebGLRenderer({ alpha: true });
renderer.setSize(three.clientWidth, three.clientHeight);
three.appendChild(renderer.domElement);

// Añadir luz direccional desde la parte superior izquierda
const directionalLight = new THREE.DirectionalLight(0xffffff, 1); // Luz blanca intensa
directionalLight.position.set(-5, 5, 5); // Luz desde la parte superior izquierda
directionalLight.castShadow = true; // Activar sombras
scene.add(directionalLight);

// Añadir una luz ambiental para suavizar las sombras
const ambientLight = new THREE.AmbientLight(0xffffff, 0.3); // Luz ambiental tenue
scene.add(ambientLight);

// Crear un grupo para el patito
const duckGroup = new THREE.Group();
scene.add(duckGroup);

// Materiales con diferentes colores para cada parte del patito
const bodyMaterial = new THREE.MeshPhongMaterial({ color: new THREE.Color('rgb(150, 218, 59)') }); // Cuerpo - RGB(150, 218, 59)
const wingMaterial = new THREE.MeshPhongMaterial({ color: new THREE.Color('rgb(120, 180, 49)') }); // Alas - RGB(120, 180, 49)
const beakMaterial = new THREE.MeshPhongMaterial({ color: 0xffa500 }); // Pico - Naranja
const eyeMaterial = new THREE.MeshPhongMaterial({ color: 0x000000 }); // Ojos - Negro

// Cuerpo del patito (parte inferior)
const bodyGeometry = new THREE.SphereGeometry(1.5, 32, 32);
const body = new THREE.Mesh(bodyGeometry, bodyMaterial);
body.position.y = -0.5;
duckGroup.add(body);

// Cabeza del patito
const headGeometry = new THREE.SphereGeometry(1, 32, 32);
const head = new THREE.Mesh(headGeometry, bodyMaterial);
head.position.set(0, 1.5, 0);
duckGroup.add(head);

// Pico del patito
const beakGeometry = new THREE.ConeGeometry(0.3, 0.6, 32);
const beak = new THREE.Mesh(beakGeometry, beakMaterial);
beak.rotation.x = Math.PI / 2;
beak.position.set(0, 1.5, 1);
duckGroup.add(beak);

// Ojo izquierdo del patito
const eyeGeometry = new THREE.SphereGeometry(0.1, 16, 16);
const leftEye = new THREE.Mesh(eyeGeometry, eyeMaterial);
leftEye.position.set(-0.3, 1.8, 0.85);
duckGroup.add(leftEye);

// Ojo derecho del patito
const rightEye = new THREE.Mesh(eyeGeometry, eyeMaterial);
rightEye.position.set(0.3, 1.8, 0.85);
duckGroup.add(rightEye);

// Ala izquierda del patito
const wingGeometry = new THREE.SphereGeometry(0.5, 32, 32);
const leftWing = new THREE.Mesh(wingGeometry, wingMaterial);
leftWing.scale.set(1, 0.5, 1);
leftWing.position.set(-1.2, 0, 0);
duckGroup.add(leftWing);

// Ala derecha del patito
const rightWing = new THREE.Mesh(wingGeometry, wingMaterial);
rightWing.scale.set(1, 0.5, 1);
rightWing.position.set(1.2, 0, 0);
duckGroup.add(rightWing);

// Variables para la rotación del patito
let rotateLeft = false, rotateRight = false, rotateUp = false, rotateDown = false;


THREE.addEventListener('mousemove', onDocumentMouseMove, false);

// Evento para detectar cuando se pulsa una tecla
window.addEventListener('keydown', (event) => {
    switch (event.key) {
        case 'ArrowLeft':
        case 'a':
            rotateLeft = true;
            break;
        case 'ArrowRight':
        case 'd':
            rotateRight = true;
            break;
        case 'ArrowUp':
        case 'w':
            rotateUp = true;
            break;
        case 'ArrowDown':
        case 's':
            rotateDown = true;
            break;
    }
});

// Evento para detectar cuando se suelta una tecla
window.addEventListener('keyup', (event) => {
    switch (event.key) {
        case 'ArrowLeft':
        case 'a':
            rotateLeft = false;
            break;
        case 'ArrowRight':
        case 'd':
            rotateRight = false;
            break;
        case 'ArrowUp':
        case 'w':
            rotateUp = false;
            break;
        case 'ArrowDown':
        case 's':
            rotateDown = false;
            break;
    }
});

function onDocumentMouseMove(event) {

    mouseX = event.clientX - windowHalfX;
    mouseY = event.clientY - windowHalfY;

}

// Función de animación
function animate() {
    requestAnimationFrame(animate);

    // Rotación del patito en función de las teclas presionadas
    const rotationSpeed = 0.05; // Velocidad de rotación

    if (rotateLeft) duckGroup.rotation.y -= rotationSpeed;
    if (rotateRight) duckGroup.rotation.y += rotationSpeed;
    if (rotateUp) duckGroup.rotation.x -= rotationSpeed;
    if (rotateDown) duckGroup.rotation.x += rotationSpeed;

    // Renderiza la escena desde la perspectiva de la cámara
    renderer.render(scene, camera);
}

animate(); // Llama a la función de animación