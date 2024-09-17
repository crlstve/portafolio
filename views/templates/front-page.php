<?php Functions::partial('header'); ?>

<main class="relative w-full min-h-dvh overflow-x-hidden">
    <div id="bg-dots" class="fixed bottom-0 -z-10 opacity-30 dark:opacity-40 backdrop-blur-sm "></div>
    <section id="inicio" class="container mx-auto my-12 lg:mt-24 lg:mb-12 flex flex-col-reverse lg:flex-row gap-10 lg:gap-16">
        <div class="w-full lg:w-1/2 flex flex-col gap-3 self-center">
            <header class="w-fit mx-auto lg:ml-auto lg:mr-12">
                <h1 class="text-xl font-semibold dark:text-white leading-3">
                    carles esteve albiach<br>
                    <span data-text="full stack web developer" class="glitch text-4xl md:text-5xl font-title dark:text-emerald-300 text-violet-500 ">full stack web developer<span>
                </h1>
                <div class="typewriter w-fit">
                    <p class="text-base dark:text-white font-light">Apasionado de la programación web!</p>
                </div>
            </header>
        </div>
        <div class="w-fit h-fit aspect-square flex relative mx-auto lg:mx-0 rounded-full overflow-hidden backdrop-blur-sm shadow-md shadow-slate-950/20 border-l border-t border-white dark:border-slate-600 dark:bg-[rgba(0,0,0,0.1)] bg-[rgba(255,255,255,0.1)] duration-500">
            <img id="crls-img" loading="lazy" title="carles esteve" src="./assets/images/carles-transparent.webp" alt="carles esteve" width="250" height="250" class="h-48 w-auto aspect-square self-end transition-opacity duration-500 filter drop-shadow shadow-neutral-300">
        </div>
    </section>
    <section id="experiencia" class="container mx-auto mb-6 lg:py-12 flex flex-col">
        <h2 data-text="experiencia" class="glitch w-fit mx-auto font-title p-6 text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-6">experiencia</h2>
        <div class="flex snap-y snap-mandatory">
            <ul class="timeline relative w-full flex flex-wrap gap-y-6 md:gap-y-12 justify-between">
                <li class="bullet card after:top-0 before:top-0 snap-always md:mt-6 fadeInUp visible">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">founderz</h3>
                        <time class="text-sm" datetime="22/04/24">22-04-24 | actualidad</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Founderz" href="https://founderz.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base font-light">
                            Desarrollo web con <b>Wordpress</b> y <b>Laravel</b>. Liderar la modernización y rebranding completo de la web, programación de <b>bloques de Gutenberg</b>, <b>templates</b> y <b>plugins</b> para Wordpress. Desarrollo de <b>APIS REST</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-20 before:top-20 md:mt-24 fadeInUp visible">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">sesame hr</h3>
                        <time class="text-sm" datetime="11/06/22">11-06-22 | 22-04-24</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Sesame HR" href="https://www.sesamehr.es/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base font-light">
                            Creación y mantenimiento de las distintas webs de la empresa. Desarrollo de la actualización y optimización de la web a nivel SEO y CRO de estas. Programación de <b>plugins</b>, <b>temas</b>, <b>bloques</b> y <b>APIS</b> para Wordpress. Desarrollo de landing pages para Hubspot con <b>Hubl</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-10 before:top-10 snap-always md:-mt-24 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">arte regal</h3>
                        <time class="text-sm" datetime="04/10/20">04-10-2020 | 10-06-22</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Arte Regal Import" href="https://www.arteregal.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base font-light">
                            Mantenimiento y actualización de la ecommerce de la empresa hecha con <b>Codeigniter</b>. Desarrollo de otras webs y ecommerce hechas con <b>Wordpress</b>. Desarrollo de <b>APIS</b>, <b>bloques</b>, <b>temas</b> y <b>plugins</b> para <b>Wordpress</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-20 before:top-20 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">availand</h3>
                        <time class="text-sm" datetime="22/04/24">04-05-2019 | 03-06-20</time>
                        <a reel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Availand" href="https://availand.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base font-light">
                            Mantenimiento y actualización de la ecommerce de la empresa hecha con <b>wordpress</b> y <b>woocommerce</b>. Desarrollo de <b>APIS</b>, <b>bloques</b>, <b>temas</b> de <b>Gutenberg</b> y <b>plugins</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-0 before:top-0 md:-mt-16 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">tv begin</h3>
                        <time class="text-sm" datetime="22/04/24">04-09-2017 | 04-05-2019</time>
                        <a reel="nofollow noopener noreferrer" target="" aria-label="Visita la web de Tv Begin" href="https://tvbgn.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base font-light">
                            Creación y mantenmiento de webs para distintos clientes hechas con Wordpress. Creación de <b>APIS</b>, <b>bloques</b>, <b>plugins</b>, <b>temas</b> y <b>módulos</b> para resolver las necesidades de las emrpesas.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-10 before:top-10 snap-always fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">galaxa cosmetics</h3>
                        <time class="text-sm" datetime="22/04/24">04-13-2016 | 10-06-17</time>
                        <a reel="nofollow noopener noreferrer" target="" aria-label="Visita la web de Galaxa Cosmetics" href="https://productos-peluqueria-online.es/" class="link"> <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base font-light">
                            Desarrollo de la ecommerce de la empresa hecha con <b>wordpress</b> y <b>woocommerce</b>. Desarollo de <b>plugins</b>, <b>APIS</b>, <b>temas</b> y <b>módulos</b> para las necesidades de la empresa
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="stack" class="container mx-auto my-12 lg:my-24 flex flex-col">
        <h2 class="font-title text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4 p-6 mb-6">stack</h2>
        <div class="splide relative" aria-label="Proyectos Slider">
            <div class="splide__track backdrop-blur-sm rounded-full shadow-md shadow-slate-950/20 border-l border-t border-white dark:border-slate-600 dark:bg-[rgba(0,0,0,0.1)] bg-[rgba(255,255,255,0.1)] py-3">
                <ul class="splide__list">
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/html.svg" loading="lazy" title="html" alt="html para el esqueleto de la web" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="48px" height="48px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">html</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/css.svg" loading="lazy" title="css" alt="css para el diseño de la web" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="48px" height="48px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">css</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/js.svg" loading="lazy" title="javascript" alt="js para la funcionalidad de la web" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="48px" height="48px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">javascript</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/php.svg" loading="lazy" title="php" alt="php para el backend de la web" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="48px" height="48px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">php</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/sql.svg" loading="lazy" title="sql" alt="sql para la gestión de la base de datos" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="48px" height="48px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">sql</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/jquery.svg" loading="lazy" title="jquery" alt="jquery para la funcionalidad de la web" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="72px" height="72px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">jquery</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/hubl.svg" loading="lazy" title="hubl" alt="hubl para la integración con hubspot" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="64px" height="64px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">hubl</p>
                    </li>
                    <li class="splide__slide flex justify-center item-center group">
                        <img src="./assets/images/logos/nodejs.svg" loading="lazy" title="node.js" alt="node.js para el backend con javascript" class="aspect-square self-center drop-shadow-md brightness-0 dark:invert opacity-40 hover:brightness-100 dark:hover:invert-0 hover:opacity-100 duration-500 mx-auto cursor-pointer" width="48px" height="48px">
                        <p class="hidden group-hover:block absolute -top-2 left-0 w-full h-full text-center text-sm tooltip -z-10">node.js</p>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() { new Splide('.splide', { gap: 40, padding: { left: 24, right: 24 }, interval: 0, autoplay: true, perPage: 7, perMove: 1, type: 'loop', preloadPages: 1, arrows: false, pagination: false, rewind: false, interval: 3000, breakpoints: { 640: { perPage: 3, }, 768: { perPage: 4, }, }, }).mount(); });
        </script>
    </section>
    <?php Functions::partial('modal'); ?>
</main>
<?php Functions::partial('footer'); ?>