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
        this.trailGroups = []; // Grupos de estelas para cada esfera
        this.previousRotations = []; // Historial de rotaciones para el efecto de estela
        this.trailLength = 15; // Número de frames de estela
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
            // Crear geometría principal
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
                        float alpha = 1.0 - smoothstep(0.3, 0.5, radius);
                        if (radius > 0.5) discard;
                        
                        // Efecto de sombreado
                        float shadow = smoothstep(0.3, 0.5, radius);
                        vec3 color = mix(vec3(0.28, 0.33, 0.41), vec3(0.1, 0.12, 0.15), shadow);
                        
                        gl_FragColor = vec4(color, alpha * (1.0 - shadow * 0.5));
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

            // Crear estelas para cada esfera
            const trailGroup = [];
            for (let t = 0; t < this.trailLength; t++) {
                const trailGeometry = new THREE.BufferGeometry();
                const trailOpacity = 1.0 - (t / this.trailLength);
                
                const trailMaterial = new THREE.ShaderMaterial({
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
                        uniform float uOpacity;
                        void main() {
                            vec2 xy = gl_PointCoord.xy - vec2(0.5);
                            float radius = length(xy);
                            float alpha = (1.0 - smoothstep(0.3, 0.5, radius)) * uOpacity;
                            if (radius > 0.5) discard;
                            
                            // Gradiente de estela - más azulado y tenue
                            float shadow = smoothstep(0.3, 0.5, radius);
                            vec3 baseColor = vec3(0.28, 0.33, 0.41);
                            vec3 trailColor = mix(baseColor, vec3(0.15, 0.25, 0.35), 0.6);
                            vec3 color = mix(trailColor, vec3(0.05, 0.08, 0.12), shadow);
                            
                            gl_FragColor = vec4(color, alpha * (1.0 - shadow * 0.3));
                        }
                    `,
                    uniforms: {
                        uOpacity: { value: trailOpacity }
                    },
                    transparent: true,
                    depthWrite: false
                });

                // Clonar la geometría original para la estela
                const trailPositions = new Float32Array(positions);
                const trailSizes = new Float32Array(sizes.length);
                
                for (let s = 0; s < sizes.length; s++) {
                    trailSizes[s] = sizes[s] * (0.7 - t * 0.03); // Tamaños decrecientes
                }

                trailGeometry.setAttribute('position', new THREE.BufferAttribute(trailPositions, 3));
                trailGeometry.setAttribute('size', new THREE.BufferAttribute(trailSizes, 1));

                const trailSphere = new THREE.Points(trailGeometry, trailMaterial);
                trailSphere.renderOrder = sphere.renderOrder - 0.1 - t * 0.01;
                trailSphere.visible = false; // Inicialmente invisible
                
                trailGroup.push(trailSphere);
                this.scene.add(trailSphere);
            }
            
            this.trailGroups.push(trailGroup);
            
            // Inicializar historial de rotaciones para esta esfera
            this.previousRotations.push([]);
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

    cleanupOldTrails() {
        // Limpiar estelas muy antiguas para mantener el rendimiento
        const currentTime = Date.now();
        this.previousRotations.forEach(rotationHistory => {
            while (rotationHistory.length > 0 && currentTime - rotationHistory[rotationHistory.length - 1].timestamp > 1000) {
                rotationHistory.pop();
            }
        });
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        // Limpiar estelas antiguas cada segundo aproximadamente
        if (Math.random() < 0.016) { // ~1 vez por segundo a 60fps
            this.cleanupOldTrails();
        }

        this.autoRotationX += (Math.random() - 0.5) * 0.00005;
        this.autoRotationY += (Math.random() - 0.5) * 0.00005;

        this.targetRotationX += (this.mouseY + this.autoRotationX - this.targetRotationX) * 0.002;
        this.targetRotationY += (this.mouseX + this.autoRotationY - this.targetRotationY) * 0.002;

        this.spheres.forEach((sphere, index) => {
            const newRotationX = this.targetRotationX * (1 + index * 0.2);
            const newRotationY = this.targetRotationY * (1 + index * 0.2);
            
            // Guardar la rotación actual en el historial
            const rotationData = {
                x: newRotationX,
                y: newRotationY,
                timestamp: Date.now()
            };
            
            this.previousRotations[index].unshift(rotationData);
            
            // Limitar el historial al tamaño de la estela
            if (this.previousRotations[index].length > this.trailLength) {
                this.previousRotations[index].pop();
            }
            
            // Aplicar rotación a la esfera principal
            sphere.rotation.x = newRotationX;
            sphere.rotation.y = newRotationY;
            
            // Actualizar estelas
            this.trailGroups[index].forEach((trailSphere, trailIndex) => {
                if (this.previousRotations[index][trailIndex + 1]) {
                    const pastRotation = this.previousRotations[index][trailIndex + 1];
                    const age = Date.now() - pastRotation.timestamp;
                    
                    // Solo mostrar estela si es reciente (menos de 500ms)
                    if (age < 500) {
                        trailSphere.visible = true;
                        trailSphere.rotation.x = pastRotation.x;
                        trailSphere.rotation.y = pastRotation.y;
                        
                        // Ajustar opacidad basada en la edad
                        const ageRatio = Math.min(age / 500, 1);
                        const baseOpacity = 1.0 - ((trailIndex + 1) / this.trailLength);
                        const finalOpacity = baseOpacity * (1 - ageRatio * 0.8);
                        
                        if (trailSphere.material.uniforms.uOpacity) {
                            trailSphere.material.uniforms.uOpacity.value = Math.max(0, finalOpacity);
                        }
                    } else {
                        trailSphere.visible = false;
                    }
                } else {
                    trailSphere.visible = false;
                }
            });
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
