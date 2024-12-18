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