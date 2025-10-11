// Importar Three.js (asegúrate de que esté incluido en tu proyecto)
import * as THREE from '../../node_modules/three/build/three.module.js';

// Configuración de la escena
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById('monkey-container').appendChild(renderer.domElement);

// Crear la cabeza del mono
const geometry = new THREE.SphereGeometry(1, 32, 32);
const material = new THREE.MeshBasicMaterial({ color: 0x8B4513 });
const monkeyHead = new THREE.Mesh(geometry, material);
scene.add(monkeyHead);

// Crear los ojos
const eyeGeometry = new THREE.SphereGeometry(0.2, 32, 32);
const eyeMaterial = new THREE.MeshBasicMaterial({ color: 0xFFFFFF });
const leftEye = new THREE.Mesh(eyeGeometry, eyeMaterial);
const rightEye = new THREE.Mesh(eyeGeometry, eyeMaterial);
leftEye.position.set(-0.3, 0.3, 0.8);
rightEye.position.set(0.3, 0.3, 0.8);
monkeyHead.add(leftEye);
monkeyHead.add(rightEye);

// Crear las pupilas
const pupilGeometry = new THREE.SphereGeometry(0.1, 32, 32);
const pupilMaterial = new THREE.MeshBasicMaterial({ color: 0x000000 });
const leftPupil = new THREE.Mesh(pupilGeometry, pupilMaterial);
const rightPupil = new THREE.Mesh(pupilGeometry, pupilMaterial);
leftPupil.position.set(0, 0, 0.1);
rightPupil.position.set(0, 0, 0.1);
leftEye.add(leftPupil);
rightEye.add(rightPupil);

camera.position.z = 5;

// Función para manejar el movimiento del ratón
function onMouseMove(event) {
    const mouseX = (event.clientX / window.innerWidth) * 2 - 1;
    const mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
    
    // Rotar la cabeza del mono
    monkeyHead.rotation.y = mouseX * 0.5;
    monkeyHead.rotation.x = mouseY * 0.5;
}

// Función para hacer parpadear los ojos
function blink() {
    leftEye.scale.y = 0.1;
    rightEye.scale.y = 0.1;
    
    setTimeout(() => {
        leftEye.scale.y = 1;
        rightEye.scale.y = 1;
    }, 200);
}

// Configurar el parpadeo aleatorio
setInterval(() => {
    if (Math.random() < 0.1) {
        blink();
    }
}, 1000);

// Agregar el evento de movimiento del ratón
document.addEventListener('mousemove', onMouseMove);

// Función de animación
function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}

animate();

