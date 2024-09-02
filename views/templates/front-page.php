<?php Functions::partial('header'); ?>
   
<main class="relative w-full min-h-dvh overflow-x-hidden">
    <div id="bg-dots" class="fixed bottom-0 -z-10 opacity-70"></div>
    <section id="inicio" class="container mx-auto mt-6 md:mt-12 mb-3 md:mb-6 flex flex-col-reverse lg:flex-row">
        <article class="w-full lg:w-1/2 flex flex-col gap-3 p-6">
            <header>
                <h1 class="text-xl font-semibold dark:text-white leading-3">
                    carles esteve albiach<br>
                    <span class="text-4xl md:text-5xl font-title dark:text-emerald-300 text-violet-500">full stack web developer<span>
                </h1>
            </header>
            <div>
                <p class="text-base dark:text-white font-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat elit ut odio vestibulum, nec mollis nisl volutpat. 
                </p>         
            </div>
        </article>
        <div id="three" class="w-full lg:w-1/2 h-36">
            <img src="" alt="">
        </div>
    </section>
    <section id="experiencia" class="container mx-auto mb-6 lg:mb-12 flex flex-col">
        <h2 class="p-6 text-3xl md:text-4xl text-center font-bold dark:text-emerald-300 text-violet-500 leading-4 mb-6">experiencia</h2>
        <div class="flex snap-y snap-mandatory">
                <ul class="timeline relative w-full flex flex-wrap gap-y-6 md:gap-y-12 justify-between">
                    <li class="bullet after:top-0 before:top-0 snap-always w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:mt-6 fadeInUp visible relative">
                        <header>
                            <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">founderz</h3>
                            <time class="dark:text-white text-sm" datetime="22/04/24">22-04-24 | now</time>
                            <a reel="nofollow noopener noreferrer" aria-label="Visita la web de Founderz" href="https://founderz.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                                <?= Functions::svg(); ?>
                            </a>
                        </header>
                        <div>
                            <p class="text-base dark:text-white font-light">
                                Programación de módulos, templates y plugins para Wordpress y Hubspot. Desarrollo de APIS RESTful. Gestión de librerías y paquetes del servidor. Diseño UI / UX de las webs.
                            </p>
                        </div>
                    </li>

                    <li class="bullet after:top-20 before:top-20 w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:mt-24 fadeInUp visible relative">
                        <header>
                            <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">sesame hr</h3>
                            <time class="dark:text-white text-sm" datetime="22/04/24">11-06-22 | 22-04-24</time>
                            <a reel="nofollow noopener noreferrer" aria-label="Visita la web de Sesame HR" href="https://www.sesamehr.es/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                                <?= Functions::svg(); ?>
                            </a>
                        </header>
                        <div>
                            <p class="text-base dark:text-white font-light">
                                Programación de módulos, templates y plugins para Wordpress y Hubspot. Desarrollo de APIS RESTful. Gestión de librerías y paquetes del servidor. Diseño UI / UX de las webs.
                            </p>         
                        </div>
                    </li>

                    <li class="bullet after:top-10 before:top-10 snap-always w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:-mt-20 fadeInUp relative">
                        <header>
                            <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">arte regal</h3>
                            <time class="dark:text-white text-sm" datetime="22/04/24">04-9-2020 | 10-06-22</time>
                            <a reel="nofollow noopener noreferrer" aria-label="Visita la web de Arte Regal Import" href="https://www.arteregal.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                                <?= Functions::svg(); ?>
                            </a>
                        </header>
                        <div>
                            <p class="text-base dark:text-white font-light">
                                Programación de módulos, plantillas y plugins para Wordpress. Desarrollo de APIS RESTful. Gestión de librerías y paquetes del servidor. Diseño UI / UX de las webs. Desarrollo web con Codeigniter.
                            </p>         
                        </div>
                    </li> 

                    <li class="bullet after:top-20 before:top-20 w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] fadeInUp">
                        <header>
                            <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">availand</h3>
                            <time class="dark:text-white text-sm" datetime="22/04/24">04-9-2020 | 10-06-22</time>
                            <a reel="nofollow noopener noreferrer" aria-label="Visita la web de Availand" href="https://availand.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                                <?= Functions::svg(); ?>
                            </a>
                        </header>
                        <div>
                            <p class="text-base dark:text-white font-light">
                                Programación de módulos, plantillas y plugins para Wordpress. Desarrollo de APIS RESTful. Gestión de librerías y paquetes del servidor. Diseño UI / UX de las webs.
                            </p>         
                        </div>
                    </li> 

                    <li class="bullet after:top-0 before:top-0 w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] md:-mt-28 fadeInUp">
                        <header>
                            <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">tv begin</h3>
                            <time class="dark:text-white text-sm" datetime="22/04/24">04-9-2020 | 10-06-22</time>
                            <a reel="nofollow noopener noreferrer" aria-label="Visita la web de Tv Begin"  href="https://tvbgn.com/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                                <?= Functions::svg(); ?>
                            </a>
                        </header>
                        <div>
                            <p class="text-base dark:text-white font-light">
                                Diseño de páginas web y apoyo gráfico. Dominio de paquete Adobe (Photoshop, Illustrator, Premiere). Código front-end (HTML5, CSS, Javascript, etc.). Gestión de CMS: Wordpress y Prestashop. Community Manager (Hootsuite) para clientes. Grabación en actos y videos empresariales. Fotografía y retoque fotográfico. Trato directo con clientes.
                            </p>         
                        </div>
                    </li> 

                    <li class="bullet after:top-10 before:top-10 snap-always w-full md:w-5/12 flex flex-col h-fit gap-3 p-8 border-l border-t border-white dark:border-slate-600 rounded-lg backdrop-blur-sm shadow-md dark:bg-[rgba(0,0,0,0.1)] fadeInUp">
                        <header>
                            <h3 class="text-4xl font-title font-bold dark:text-emerald-300 text-violet-500 leading-4">galaxa cosmetics</h3>
                             <time class="dark:text-white text-sm" datetime="22/04/24">04-9-2020 | 10-06-22</time>
                            <a reel="nofollow noopener noreferrer" aria-label="Visita la web de Galaxa Cosmetics" href="https://productos-peluqueria-online.es/" class="w-fit h-fit opacity-60 hover:opacity-100 duration-500 absolute top-7 right-7 rotate-45 hover:rotate-0">
                                <?= Functions::svg(); ?>
                            </a>
                        </header>
                        <div>
                            <p class="text-base dark:text-white font-light">
                                Técnico en Marketing. Community Manager. Web Developer (diseño, html, css y Wordpress). Especialista SEM/SEO. Diseño
                                corporativo.
                            </p>         
                        </div>
                    </li> 
                </ul>
            </div>
    </section>
</main>
<?php Functions::partial('footer'); ?>