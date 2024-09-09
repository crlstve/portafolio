<?php Functions::partial('header'); ?>

<main class="relative w-full min-h-dvh overflow-x-hidden">
    <div id="bg-dots" class="fixed bottom-0 -z-10 opacity-10 dark:opacity-30"></div>
    <section id="inicio" class="container mx-auto my-12 lg:mt-24 lg:mb-12 flex flex-col-reverse lg:flex-row gap-10 lg:gap-16">
        <div class="w-full lg:w-1/2 flex flex-col gap-3 self-center">
            <header class="w-fit mx-auto lg:ml-auto lg:mr-12">
                <h1 class="text-xl font-semibold dark:text-white leading-3">
                    carles esteve albiach<br>
                    <span class="text-4xl md:text-5xl font-title dark:text-emerald-300 text-violet-500 ">full stack web developer<span>
                </h1>
                <div class="typewriter w-fit">
                    <p class="text-base dark:text-white font-light">Apasionado de la programación web!</p>
                </div>
            </header>
        </div>
        <div class="w-fit h-48 aspect-square flex relative mx-auto lg:mx-0">
            <img id="carles-image-light" src="./assets/images/carles-light.webp" alt="carles esteve" width="250" height="250" class="h-full w-auto aspect-square self-end absolute transition-opacity duration-500 filter drop-shadow shadow-neutral-300">
            <img id="carles-image-dark" src="./assets/images/carles-dark.webp" alt="carles esteve" width="250" height="250" class="h-full w-auto aspect-square self-end absolute transition-opacity duration-500 filter drop-shadow shadow-neutral-300">
        </div>
        <!-- <div id="monkey" class="w-full lg:w-1/2 h-36">
            <div id="monkey-container"></div>
        </div> -->
    </section>
    <section id="experiencia" class="container mx-auto mb-6 lg:py-12 flex flex-col">
        <h2 class="font-title p-6 text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-6">experiencia</h2>
        <div class="flex snap-y snap-mandatory">
            <ul class="timeline relative w-full flex flex-wrap gap-y-6 md:gap-y-12 justify-between">
                <li class="bullet after:top-0 before:top-0 snap-always w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:mt-6 fadeInUp visible relative">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">founderz</h3>
                        <time class="dark:text-white text-sm" datetime="22/04/24">22-04-24 | actualidad</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Founderz" href="https://founderz.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base dark:text-white font-light">
                            Desarrollo web con <b>Wordpress</b> y <b>Laravel</b>. Liderar la modernización y rebranding completo de la web, programación de <b>bloques de Gutenberg</b>, <b>templates</b> y <b>plugins</b> para Wordpress. Desarrollo de <b>APIS REST</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet after:top-20 before:top-20 w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:mt-24 fadeInUp visible relative">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">sesame hr</h3>
                        <time class="dark:text-white text-sm" datetime="11/06/22">11-06-22 | 22-04-24</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Sesame HR" href="https://www.sesamehr.es/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base dark:text-white font-light">
                            Creación y mantenimiento de las distintas webs de la empresa. Desarrollo de la actualización y optimización de la web a nivel SEO y CRO de estas. Programación de <b>plugins</b>, <b>temas</b>, <b>bloques</b> y <b>APIS</b> para Wordpress. Desarrollo de landing pages para Hubspot con <b>Hubl</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet after:top-10 before:top-10 snap-always w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:-mt-24 fadeInUp relative">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">arte regal</h3>
                        <time class="dark:text-white text-sm" datetime="04/10/20">04-10-2020 | 10-06-22</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Arte Regal Import" href="https://www.arteregal.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base dark:text-white font-light">
                            Mantenimiento y actualización de la ecommerce de la empresa hecha con <b>Codeigniter</b>. Desarrollo de otras webs y ecommerce hechas con <b>Wordpress</b>. Desarrollo de <b>APIS</b>, <b>bloques</b>, <b>temas</b> y <b>plugins</b> para <b>Wordpress</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet after:top-20 before:top-20 w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">availand</h3>
                        <time class="dark:text-white text-sm" datetime="22/04/24">04-05-2019 | 03-06-20</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Availand" href="https://availand.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base dark:text-white font-light">
                            Mantenimiento y actualización de la ecommerce de la empresa hecha con <b>wordpress</b> y <b>woocommerce</b>. Desarrollo de <b>APIS</b>, <b>bloques</b>, <b>temas</b> de <b>Gutenberg</b> y <b>plugins</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet after:top-0 before:top-0 w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:-mt-16 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">tv begin</h3>
                        <time class="dark:text-white text-sm" datetime="22/04/24">04-09-2017 | 04-05-2019</time>
                        <a reel="nofollow noopener noreferrer" target="" aria-label="Visita la web de Tv Begin" href="https://tvbgn.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base dark:text-white font-light">
                            Creación y mantenmiento de webs para distintos clientes hechas con Wordpress. Creación de <b>APIS</b>, <b>bloques</b>, <b>plugins</b>, <b>temas</b> y <b>módulos</b> para resolver las necesidades de las emrpesas.
                        </p>
                    </div>
                </li>

                <li class="bullet after:top-10 before:top-10 snap-always w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">galaxa cosmetics</h3>
                        <time class="dark:text-white text-sm" datetime="22/04/24">04-13-2016 | 10-06-17</time>
                        <a reel="nofollow noopener noreferrer" target="" aria-label="Visita la web de Galaxa Cosmetics" href="https://productos-peluqueria-online.es/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0"> <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base dark:text-white font-light">
                            Desarrollo de la ecommerce de la empresa hecha con <b>wordpress</b> y <b>woocommerce</b>. Desarollo de <b>plugins</b>, <b>APIS</b>, <b>temas</b> y <b>módulos</b> para las necesidades de la empresa
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="stack" class="container mx-auto my-12 lg:my-24 flex flex-col-reverse lg:flex-row">
        <div class="w-full flex flex-col gap-3 p-6">
            <h2 class="font-title text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4">stack</h2>
            <div class="flex flex-col lg:flex-row gap-3">
                <div class="w-full flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] fadeInUp visible relative w-full lg:w-1/2 dark:text-white">Front-end</h3>
                    <ul>
                        <li class="text-base dark:text-white font-light ">HTML5</li>
                        <li class="text-base dark:text-white font-light">CSS3</li>
                        <li class="text-base dark:text-white font-light">JavaScript</li>
                        <li class="text-base dark:text-white font-light">jQuery</li>
                        <li class="text-base dark:text-white font-light">Three.js</li>
                    </ul>

                </div>
                <div class="w-full flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] fadeInUp visible relative w-full lg:w-1/2 dark:text-white">Back-end</h3>
                    <ul>
                        <li class="text-base dark:text-white font-light">PHP</li>
                        <li class="text-base dark:text-white font-light">Laravel</li>
                        <li class="text-base dark:text-white font-light">Wordpress</li>
                        <li class="text-base dark:text-white font-light">Codeigniter</li>
                        <li class="text-base dark:text-white font-light">SQL</li>
                        <li class="text-base dark:text-white font-light">APIS REST</li>
                        <li class="text-base dark:text-white font-light">Hubspot</li>
                        <li class="text-base dark:text-white font-light">HubL</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="proyectos" class="container mx-auto my-12 lg:my-24 flex flex-col">
        <h2 class="font-title text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4">proyectos</h2>
        <div class="splide" aria-label="Proyectos Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide dark:text-white h-full">
                        <div class="flex flex-col h-full p-4 border border-gray-200 dark:border-gray-700 rounded-lg">
                            <h3 class="text-xl font-bold mb-2">Proyecto 1</h3>
                            <p class="flex-grow">Descripción del proyecto 1</p>
                        </div>
                    </li>
                    <li class="splide__slide dark:text-white h-full">
                        <div class="flex flex-col h-full p-4 border border-gray-200 dark:border-gray-700 rounded-lg">
                            <h3 class="text-xl font-bold mb-2">Proyecto 2</h3>
                            <p class="flex-grow">Descripción del proyecto 2</p>
                        </div>
                    </li>
                    <li class="splide__slide dark:text-white h-full">
                        <div class="flex flex-col h-full p-4 border border-gray-200 dark:border-gray-700 rounded-lg">
                            <h3 class="text-xl font-bold mb-2">Proyecto 3</h3>
                            <p class="flex-grow">Descripción del proyecto 3</p>
                        </div>
                    </li>
                </ul>
            </div>
            <script>
                // SPLIDE SLIDER //
                document.addEventListener('DOMContentLoaded', function() {
                    new Splide('.splide', {
                        gap: 20,
                        padding: {
                            left: 12,
                            right: 12
                        },
                        perPage: 3,
                        perMove: 1,
                        type: 'slide',
                        height: '300px',
                        preloadPages: 1,
                        arrows: true,
                        pagination: true,
                        rewind: true,
                        interval: 3000,
                        breakpoints: {
                            640: {
                                perPage: 1,
                            },
                            768: {
                                perPage: 2,
                            },
                        },
                    }).mount();
                });
            </script>
        </div>
    </section>
</main>
<?php Functions::partial('footer'); ?>