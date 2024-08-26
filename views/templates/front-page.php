<?php Functions::partial('header'); ?>
   
<main class="relative w-full min-h-dvh">
        <div id="bg-dots" class="absolute"></div>
    <section id="inicio" class="container mx-auto my-6 md:my-12 flex flex-col lg:flex-row">
        <article class="w-full lg:w-1/2 flex flex-col gap-3 p-6">
            <header>
                <h1 class="text-xl font-bold dark:text-[#96da3b] text-violet-500">
                    Carles Esteve Albiach<br>
                    Full Stack Web Developer
                </h1>
            </header>
            <div>
                <p class="text-base dark:text-white font-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat elit ut odio vestibulum, nec mollis nisl volutpat. 
                </p>         
            </div>
        </article>
        <div id="three" class="w-full lg:w-1/2 h-36"></div>
    </section>


    <section id="experiencia" class="container mx-auto mb-6 lg:mb-12 flex flex-col">
        <h2 class="p-6 text-xl font-bold dark:text-[#96da3b] text-violet-500">PROYECTOS</h2>
        <div class="grid grid-cols lg:grid-cols-3 gap-6">
            <article class="flex flex-col gap-3 p-6 border-l border-t border-white dark:border-slate-600 rounded-md backdrop-blur-sm shadow-md">
                <header>
                    <h3 class="text-xl font-bold dark:text-[#96da3b] text-violet-500">Tik Tak Toe</h3>
                </header>
                <div>
                    <p class="text-base dark:text-white font-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ornare sapien at libero consequat, id luctus erat posuere. Vestibulum suscipit urna vel felis dapibus, eget interdum metus fermentum.
                    </p>         
                </div>
            </article>

            <article class="flex flex-col gap-3 p-6 border-l border-t border-white dark:border-slate-600 rounded-md backdrop-blur-sm shadow-md">
                <header>
                    <h3 class="text-xl font-bold dark:text-[#96da3b] text-violet-500">Tetris</h3>
                </header>
                <div>
                    <p class="text-base dark:text-white font-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Phasellus pharetra, elit at luctus tristique, nunc metus interdum sapien, ut dapibus orci lacus at augue.
                    </p>         
                </div>
            </article>

            <article class="flex flex-col gap-3 p-6 border-l border-t border-white dark:border-slate-600 rounded-md backdrop-blur-sm shadow-md">
                <header>
                    <h3 class="text-xl font-bold dark:text-[#96da3b] text-violet-500">Zelda</h3>
                </header>
                <div>
                    <p class="text-base dark:text-white font-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id risus magna. Proin egestas, arcu sit amet bibendum facilisis, augue elit sodales quam, sit amet laoreet ligula nulla sit amet metus. Etiam sodales, nisi nec aliquet eleifend.
                    </p>         
                </div>
            </article>            
        </div>
    </section>


</main>
<?php Functions::partial('footer'); ?>