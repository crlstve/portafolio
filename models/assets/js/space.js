import * as THREE from '../../node_modules/three/build/three.module.js';

// Configuración inicial
const container = document.getElementById('bg-dots');
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ alpha: true });

renderer.setSize(container.clientWidth, container.clientHeight);
container.appendChild(renderer.domElement);

// Crear partículas
const particlesGeometry = new THREE.BufferGeometry();
const particlesCount = 5000;
const posArray = new Float32Array(particlesCount * 3);
const colorsArray = new Float32Array(particlesCount * 3);

for (let i = 0; i < particlesCount * 3; i++) {
    posArray[i] = (Math.random() - 0.5) * 10;
    colorsArray[i] = Math.random();
}

particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
particlesGeometry.setAttribute('color', new THREE.BufferAttribute(colorsArray, 3));

const particlesMaterial = new THREE.PointsMaterial({
    size: 0.005,
    vertexColors: true,
    blending: THREE.AdditiveBlending,
});

const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
scene.add(particlesMesh);

camera.position.z = 5;

// Variables para la rotación
let mouseX = 0;
let mouseY = 0;
const windowHalfX = window.innerWidth / 2;
const windowHalfY = window.innerHeight / 2;
const rotationLimit = 0.1;

// Función para manejar el movimiento del ratón
function onDocumentMouseMove(event) {
    mouseX = (event.clientX - windowHalfX) / windowHalfX;
    mouseY = (event.clientY - windowHalfY) / windowHalfY;
}

document.addEventListener('mousemove', onDocumentMouseMove);

// Animación
function animate() {
    requestAnimationFrame(animate);

    // Rotación suave y limitada
    particlesMesh.rotation.x += (mouseY * rotationLimit - particlesMesh.rotation.x) * 0.05;
    particlesMesh.rotation.y += (mouseX * rotationLimit - particlesMesh.rotation.y) * 0.05;

    // Cambiar luminosidad aleatoriamente
    const colors = particlesGeometry.attributes.color.array;
    for (let i = 0; i < colors.length; i++) {
        colors[i] *= 0.95 + Math.random() * 0.1;
    }
    particlesGeometry.attributes.color.needsUpdate = true;

    renderer.render(scene, camera);
}

// Manejar redimensionamiento
function onWindowResize() {
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
}

window.addEventListener('resize', onWindowResize);

animate();
