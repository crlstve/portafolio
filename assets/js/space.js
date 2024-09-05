import * as THREE from '../js/three.module.js';

class SpaceBackground {
    constructor() {
        this.container = document.getElementById('bg-dots');
        this.width = window.innerWidth;
        this.height = window.innerHeight;
        this.scene = new THREE.Scene();
        this.camera = new THREE.PerspectiveCamera(75, this.width / this.height, 0.1, 20);
        this.renderer = new THREE.WebGLRenderer({ alpha: true });
        this.spheres = [];
        this.mouseX = 0;
        this.mouseY = 0;
        this.targetRotationX = 0;
        this.targetRotationY = 0;
        this.autoRotationX = 0;
        this.autoRotationY = 0;

        this.init();
    }

    init() {
        this.setupRenderer();
        this.createConcentricSpheres();
        this.setupCamera();
        this.setupEventListeners();
        this.animate();
    }

    setupRenderer() {
        this.renderer.setSize(this.width, this.height);
        this.container.appendChild(this.renderer.domElement);
    }

    createConcentricSpheres() {
        const radii = [3, 5, 7];
        const particleCounts = [500, 1000, 1500];

        for (let i = 0; i < 3; i++) {
            const geometry = new THREE.BufferGeometry();
            const material = new THREE.ShaderMaterial({
                vertexShader: `
                    attribute float size;
                    varying float vSize;
                    void main() {
                        vSize = size;
                        vec4 mvPosition = modelViewMatrix * vec4(position, 1.0);
                        gl_PointSize = size * (300.0 / -mvPosition.z);
                        gl_Position = projectionMatrix * mvPosition;
                    }
                `,
                fragmentShader: `
                    varying float vSize;
                    void main() {
                        vec2 xy = gl_PointCoord.xy - vec2(0.5);
                        float radius = length(xy);
                        if (radius > 0.5) discard;
                        gl_FragColor = vec4(0.28, 0.33, 0.41, 1.0); // Color #475569
                    }
                `,
                transparent: true
            });

            const positions = new Float32Array(particleCounts[i] * 3);
            const sizes = new Float32Array(particleCounts[i]);

            for (let j = 0; j < particleCounts[i]; j++) {
                const theta = Math.random() * Math.PI * 2;
                const phi = Math.acos(Math.random() * 2 - 1);
                const radius = radii[i] * (0.8 + Math.random() * 0.4);

                positions[j * 3] = radius * Math.sin(phi) * Math.cos(theta);
                positions[j * 3 + 1] = radius * Math.sin(phi) * Math.sin(theta);
                positions[j * 3 + 2] = radius * Math.cos(phi);

                sizes[j] = Math.random() * 0.05 + 0.005;
            }

            geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            geometry.setAttribute('size', new THREE.BufferAttribute(sizes, 1));

            const sphere = new THREE.Points(geometry, material);
            sphere.renderOrder = 3 - i;
            this.spheres.push(sphere);
            this.scene.add(sphere);
        }
    }

    setupCamera() {
        this.camera.position.set(0, 0, 0);
        this.camera.lookAt(new THREE.Vector3(1, 0, 0));
    }

    setupEventListeners() {
        document.addEventListener('mousemove', (event) => this.onMouseMove(event));
        window.addEventListener('resize', () => this.onWindowResize());
    }

    onMouseMove(event) {
        this.mouseX = (event.clientX - this.width / 2) / 1000;
        this.mouseY = (event.clientY - this.height / 2) / 1000;
    }

    onWindowResize() {
        this.width = window.innerWidth;
        this.height = window.innerHeight;
        this.camera.aspect = this.width / this.height;
        this.camera.updateProjectionMatrix();
        this.renderer.setSize(this.width, this.height);
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        this.autoRotationX += (Math.random() - 0.5) * 0.00005;
        this.autoRotationY += (Math.random() - 0.5) * 0.00005;

        this.targetRotationX += (this.mouseY + this.autoRotationX - this.targetRotationX) * 0.002;
        this.targetRotationY += (this.mouseX + this.autoRotationY - this.targetRotationY) * 0.002;

        this.spheres.forEach((sphere, index) => {
            sphere.rotation.x = this.targetRotationX * (1 + index * 0.2);
            sphere.rotation.y = this.targetRotationY * (1 + index * 0.2);
        });

        const cameraRadius = 0.1;
        const cameraAngle = Date.now() * 0.00005;
        this.camera.position.x = Math.cos(cameraAngle) * cameraRadius;
        this.camera.position.z = Math.sin(cameraAngle) * cameraRadius;
        this.camera.lookAt(new THREE.Vector3(1, 0, 0));

        this.renderer.render(this.scene, this.camera);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new SpaceBackground();
});
