<!DOCTYPE html>
<html lang="es" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carles Esteve">
    <meta name="keyword" content="web, full stack, desarrollador, developer, wordpress">
    <meta name="description" content="Portafolio de Carles Esteve, desarrollador web full stack. Especializado en la creación de sitios web y aplicaciones web con wordpress.">
    <title>c.esteve | full stack web developer</title>
    <link rel="canonical" href="https://carlesteve.dev/" />
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.svg">
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portafolio Carles Esteve" />
    <meta property="og:description" content="Portafolio de Carles Esteve, desarrollador web full stack. Especializado en la creación de sitios web y aplicaciones web con wordpress." />
    <meta property="og:url" content="https://carlesteve.dev/" />
    <meta property="og:site_name" content="carles esteve" />
    <meta property="article:modified_time" content="2024-07-23T11:29:13+00:00" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="617" />
    <meta property="og:image:height" content="400" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="stylesheet" href="./assets/css/theme.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/splide.min.css" type="text/css">
    <script defer src="./assets/js/dark-mode.js"></script>
    <script defer type="module" src="./assets/js/index.js"></script>
    <script defer type="module" src="./assets/js/space.js"></script>
    <script defer type="module" src="./assets/js/splide.min.js"></script>
    <!-- Google tag (gtag.js) 
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JXSKRNRHKV"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-JXSKRNRHKV');</script>-->
</head>
<body id="fireworks" class="min-h-dvh bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-50 via-slate-100  to-gray-50 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] dark:from-[#282a2d] dark:via-[#101114] dark:to-black scroll-smooth duration-500">
    <header class="sticky top-0 z-40">
        <nav class="w-full py-4 container">
            <div class="flex flex-row justify-center">
                <ul aria="menu" class="flex flex-row items-center gap-3 md:gap-10 px-6 py-3 rounded-full backdrop-blur-sm shadow-md shadow-slate-950/20 border-l border-t border-white dark:border-slate-600 dark:bg-[rgba(0,0,0,0.1)] bg-[rgba(255,255,255,0.1)]">
                    <li><a aria="menu item" rel="nofollow noreferrer" href="#experiencia" class="btn_nav sound">experiencia</a></li>
                    <li><a aria="menu item" rel="nofollow noreferrer" href="#stack" class="btn_nav sound">stack</a></li>
                    <li><button id="contact" aria="menu item" aria-label="Contacto" class="btn_nav sound">contacto</a></button>
                    <li><button aria="menu item" aria-label="Modo oscuro" class="sound group p-2 rounded-full aspect-square bg-transparent relative border-l border-t border-white hover:border-slate-300 hover:dark:border-slate-950 dark:border-slate-600 backdrop-blur hover:backdrop-blur-none shadow-md hover:shadow-inner" onclick="toggleDarkMode();">
                            <svg class="dark:hidden block fill-slate-600 group-hover:fill-violet-500" version="1.1" id="moon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 30.457 30.457" xml:space="preserve">
                                <g>
                                    <path d="M29.693,14.49c-0.469-0.174-1-0.035-1.32,0.353c-1.795,2.189-4.443,3.446-7.27,3.446c-5.183,0-9.396-4.216-9.396-9.397c0-2.608,1.051-5.036,2.963-6.835c0.366-0.347,0.471-0.885,0.264-1.343c-0.207-0.456-0.682-0.736-1.184-0.684 C5.91,0.791,0,7.311,0,15.194c0,8.402,6.836,15.238,15.238,15.238c8.303,0,14.989-6.506,15.219-14.812 C30.471,15.118,30.164,14.664,29.693,14.49z" />
                                </g>
                            </svg>
                            <svg class="hidden dark:block dark:fill-white group-hover:fill-emerald-300" enable-background="new 0 0 512 512" height="20px" id="sun" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path d="M256,144c-61.75,0-112,50.25-112,112s50.25,112,112,112s112-50.25,112-112S317.75,144,256,144z M256,336    c-44.188,0-80-35.812-80-80c0-44.188,35.812-80,80-80c44.188,0,80,35.812,80,80C336,300.188,300.188,336,256,336z M256,112    c8.833,0,16-7.167,16-16V64c0-8.833-7.167-16-16-16s-16,7.167-16,16v32C240,104.833,247.167,112,256,112z M256,400    c-8.833,0-16,7.167-16,16v32c0,8.833,7.167,16,16,16s16-7.167,16-16v-32C272,407.167,264.833,400,256,400z M380.438,154.167    l22.625-22.625c6.25-6.25,6.25-16.375,0-22.625s-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625    S374.188,160.417,380.438,154.167z M131.562,357.834l-22.625,22.625c-6.25,6.249-6.25,16.374,0,22.624s16.375,6.25,22.625,0    l22.625-22.624c6.25-6.271,6.25-16.376,0-22.625C147.938,351.583,137.812,351.562,131.562,357.834z M112,256    c0-8.833-7.167-16-16-16H64c-8.833,0-16,7.167-16,16s7.167,16,16,16h32C104.833,272,112,264.833,112,256z M448,240h-32    c-8.833,0-16,7.167-16,16s7.167,16,16,16h32c8.833,0,16-7.167,16-16S456.833,240,448,240z M131.541,154.167    c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625l-22.625-22.625c-6.25-6.25-16.374-6.25-22.625,0    c-6.25,6.25-6.25,16.375,0,22.625L131.541,154.167z M380.459,357.812c-6.271-6.25-16.376-6.25-22.625,0    c-6.251,6.25-6.271,16.375,0,22.625l22.625,22.625c6.249,6.25,16.374,6.25,22.624,0s6.25-16.375,0-22.625L380.459,357.812z" />
                                    </g>
                                </g>
                            </svg>
                        </button></li>
                    <audio id="hoverSound" src="./assets/sound/button.mp3"></audio>
                    <audio id="actionSound" src="./assets/sound/action.mp3"></audio>
                </ul>
            </div>
        </nav>
    </header>