<?php Functions::partial('header'); ?>
<main class="relative w-full min-h-dvh overflow-x-hidden">
    <div id="bg-dots" class="fixed bottom-0 -z-10 opacity-20 dark:opacity-30 backdrop-blur-sm"></div>
    <section id="inicio" class="container mx-auto my-12 lg:mt-24 lg:mb-12 flex flex-col-reverse lg:flex-row gap-10 lg:gap-28 justify-center">
        <div class="w-fit flex flex-col gap-3 self-center">
            <header class="w-fit mx-auto">
                <h1 class="text-xl font-semibold dark:text-white leading-3">
                    carles esteve albiach<br>
                    <span data-text="full stack web developer" class="text-4xl md:text-5xl font-title dark:text-emerald-300 text-violet-500 ">full stack web developer<span>
                </h1>
                <div class="typewriter w-fit">
                    <p class="text-base dark:text-white">Apasionado de la programación web!</p>
                </div>
                <ul class="flex flex-row gap-4 mt-4">
                    <li class="relative">
                        <a aria-label="GitHub" rel="nofollow noopener noreferrer" target="_blank" href="https://github.com/crlstve">
                            <svg class="dark:fill-white fill-slate-600 hover:scale-150 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M16,2.345c7.735,0,14,6.265,14,14-.002,6.015-3.839,11.359-9.537,13.282-.7,.14-.963-.298-.963-.665,0-.473,.018-1.978,.018-3.85,0-1.312-.437-2.152-.945-2.59,3.115-.35,6.388-1.54,6.388-6.912,0-1.54-.543-2.783-1.435-3.762,.14-.35,.63-1.785-.14-3.71,0,0-1.173-.385-3.85,1.435-1.12-.315-2.31-.472-3.5-.472s-2.38,.157-3.5,.472c-2.677-1.802-3.85-1.435-3.85-1.435-.77,1.925-.28,3.36-.14,3.71-.892,.98-1.435,2.24-1.435,3.762,0,5.355,3.255,6.563,6.37,6.913-.403,.35-.77,.963-.893,1.872-.805,.368-2.818,.963-4.077-1.155-.263-.42-1.05-1.452-2.152-1.435-1.173,.018-.472,.665,.017,.927,.595,.332,1.277,1.575,1.435,1.978,.28,.787,1.19,2.293,4.707,1.645,0,1.173,.018,2.275,.018,2.607,0,.368-.263,.787-.963,.665-5.719-1.904-9.576-7.255-9.573-13.283,0-7.735,6.265-14,14-14Z"></path></svg>
                        </a>
                    </li>
                    <li class="relative">
                        <a aria-label="LinkedIn" rel="nofollow noopener noreferrer" target="_blank" href="https://www.linkedin.com/in/carles-esteve-albiach/">
                            <svg class="dark:fill-white fill-slate-600 hover:scale-150 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M26.111,3H5.889c-1.595,0-2.889,1.293-2.889,2.889V26.111c0,1.595,1.293,2.889,2.889,2.889H26.111c1.595,0,2.889-1.293,2.889-2.889V5.889c0-1.595-1.293-2.889-2.889-2.889ZM10.861,25.389h-3.877V12.87h3.877v12.519Zm-1.957-14.158c-1.267,0-2.293-1.034-2.293-2.31s1.026-2.31,2.293-2.31,2.292,1.034,2.292,2.31-1.026,2.31-2.292,2.31Zm16.485,14.158h-3.858v-6.571c0-1.802-.685-2.809-2.111-2.809-1.551,0-2.362,1.048-2.362,2.809v6.571h-3.718V12.87h3.718v1.686s1.118-2.069,3.775-2.069,4.556,1.621,4.556,4.975v7.926Z" fill-rule="evenodd"></path></svg>
                        </a>
                    </li>
                </ul>
            </header>
        </div>
        <div class="w-fit h-fit aspect-square flex relative mx-auto lg:mx-0 rounded-full overflow-hidden backdrop-blur-sm shadow-md shadow-slate-950/20 border-l border-t border-white dark:border-slate-600 dark:bg-[rgba(0,0,0,0.1)] bg-[rgba(255,255,255,0.1)] duration-500">
            <img id="crls-img" loading="lazy" title="carles esteve" src="./assets/images/carles-transparent.webp" alt="carles esteve" width="250" height="250" class="h-48 w-auto aspect-square self-end transition-opacity duration-500 filter drop-shadow shadow-neutral-300">

        </div>
    </section>
    <section id="experiencia" class="container mx-auto mb-6 lg:py-12 flex flex-col">
        <h2 data-text="experiencia" class="w-fit mx-auto font-title p-6 text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-6">experiencia</h2>
        <div class="flex snap-y snap-mandatory">
            <ul class="timeline relative w-full flex flex-wrap gap-y-6 md:gap-y-12 justify-between">
                <li class="bullet card after:top-0 before:top-0 snap-always md:mt-6 fadeInUp visible">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">founderz</h3>
                        <time class="text-sm" datetime="22/04/24">22-04-24 | 30-09-24</time>
                        <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Founderz" href="https://founderz.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                            Desarrollo web con <b>Wordpress</b> y <b>Laravel</b>. Liderar la modernización y rebranding completo de la web, programación de <b>bloques de Gutenberg</b>, <b>templates</b> y <b>plugins</b> para Wordpress. Desarrollo de <b>APIS REST</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-20 before:top-20 md:mt-24 fadeInUp visible">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">sesame hr</h3>
                        <time class="text-sm" datetime="11/06/22">11-06-22 | 22-04-24</time>
                        <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Sesame HR" href="https://www.sesamehr.es/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                            Creación y mantenimiento de las distintas webs de la empresa. Desarrollo de la actualización y optimización de la web a nivel SEO y CRO de estas. Programación de <b>plugins</b>, <b>temas</b>, <b>bloques</b> y <b>APIS</b> para Wordpress. Desarrollo de landing pages para Hubspot con <b>Hubl</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-10 before:top-10 snap-always md:-mt-24 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">arte regal</h3>
                        <time class="text-sm" datetime="04/10/20">04-10-2020 | 10-06-22</time>
                        <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Arte Regal Import" href="https://www.arteregal.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                            Mantenimiento y actualización de la ecommerce de la empresa hecha con <b>Codeigniter</b>. Desarrollo de otras webs y ecommerce hechas con <b>Wordpress</b>. Desarrollo de <b>APIS</b>, <b>bloques</b>, <b>temas</b> y <b>plugins</b> para <b>Wordpress</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-20 before:top-20 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">availand</h3>
                        <time class="text-sm" datetime="22/04/24">04-05-2019 | 03-06-20</time>
                        <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Visita la web de Availand" href="https://availand.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                            Mantenimiento y actualización de la ecommerce de la empresa hecha con <b>wordpress</b> y <b>woocommerce</b>. Desarrollo de <b>APIS</b>, <b>bloques</b>, <b>temas</b> de <b>Gutenberg</b> y <b>plugins</b>.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-0 before:top-0 md:-mt-16 fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">tv begin</h3>
                        <time class="text-sm" datetime="22/04/24">04-09-2017 | 04-05-2019</time>
                        <a rel="nofollow noopener noreferrer" target="" aria-label="Visita la web de Tv Begin" href="https://tvbgn.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                            Creación y mantenmiento de webs para distintos clientes hechas con Wordpress. Creación de <b>APIS</b>, <b>bloques</b>, <b>plugins</b>, <b>temas</b> y <b>módulos</b> para resolver las necesidades de las emrpesas.
                        </p>
                    </div>
                </li>

                <li class="bullet card after:top-10 before:top-10 snap-always fadeInUp">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">galaxa cosmetics</h3>
                        <time class="text-sm" datetime="22/04/24">04-13-2016 | 10-06-17</time>
                        <a rel="nofollow noopener noreferrer" target="" aria-label="Visita la web de Galaxa Cosmetics" href="https://productos-peluqueria-online.es/" class="link"> <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                            Desarrollo de la ecommerce de la empresa hecha con <b>wordpress</b> y <b>woocommerce</b>. Desarollo de <b>plugins</b>, <b>APIS</b>, <b>temas</b> y <b>módulos</b> para las necesidades de la empresa
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="proyectos" class="container mx-auto mb-6 lg:py-12 flex flex-col">
            <h2 data-text="experiencia" class="w-fit mx-auto font-title p-6 text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-6">proyectos</h2>
            <ul class="flex flex-col justify-center gap-4 md:gap-8 snap-y snap-mandatory">
                <li class="card after:top-0 before:top-0 snap-always md:mt-6 fadeInUp visible mx-auto">
                    <header>
                        <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-1">Adopta Un Comercio</h3>
                        <time class="text-sm" datetime="08/11/24">08-11-24</time>
                        <a rel="nofollow noopener noreferrer" target="_blank" aria-label="visita adopta un comercio" href="https://adoptauncomercio.com/" class="link">
                            <?= Functions::svg(); ?>
                        </a>
                    </header>
                    <div>
                        <p class="text-base">
                           Plataforma para ayudar a los comercios afectados por la <b>DANA de València de 2024</b>. El desarrollo fue hecho <b>Wordpress</b>, para el cual cree un <b>tema propio</b> que automatizaba el envío de correos para avisar a los usuarios, así como un sistema de altas y vinculación mediante formularios de contacto.
                        </p>
                    </div>
                </li>
            </ul>
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
          document.addEventListener('DOMContentLoaded', function() { new Splide('.splide',{ gap: 40, padding: { left: 24, right: 24 }, type   : 'loop', drag   : 'free', focus  : 'center', perPage: 7, autoScroll: { speed: 2, }, arrows: false, pagination: false, rewind: false, breakpoints: { 640: { perPage: 3, }, 768: { perPage: 4, }, }, }).mount(window.splide.Extensions); });
        </script>
    </section>
    <?php Functions::partial('modal'); ?>
</main>
<?php Functions::partial('footer'); ?>