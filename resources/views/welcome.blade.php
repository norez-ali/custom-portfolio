<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Norez Ali : Portfolio</title>
    @vite('resources/css/app.css')
    <style>
        /* Custom styles for the Inter font and smooth scrolling */
        body {
            font-family: 'Inter', sans-serif;
            /* Changed background to pure white */
            background-color: white;
            padding-top: 64px;

            /* Space for fixed navbar (approx height of py-3) */

        }

        .section {
            padding-top: 30px;
            min-height: calc(100vh - 64px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #333;
        }

        /* Defining the color used for the code block background */
        .bg-codebg {
            /* Slightly opaque light background for the code card */
            background-color: rgba(248, 250, 252, 0.5);
        }

        /* Highlight text color for the name */
        .highlight-text {
            color: #3b82f6;
            /* Blue-500 equivalent */

        }

        /* Slide up and fade in */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Slide in from right */
        .slide-right {
            opacity: 0;
            transform: translateX(60px);
            transition: all 0.8s ease;
        }

        .slide-right.show {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-dark': '#1e293b',
                        'accent': '#6366f1',
                    }
                }
            }
        }
    </script>

</head>

<body>

    <nav id="main-nav"
        class="fixed top-0 left-0 w-full z-50 bg-white/30 backdrop-blur-sm border-b border-white/20 shadow-sm font-sans transition-all duration-300">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between py-3 px-4 md:px-8 h-18">

            <!-- Brand Logo -->
            <a href="#" class="text-3xl font-bold text-slate-800 tracking-wider transition-colors duration-300">
                Norez<span class="text-blue-500 text-3xl">.</span>
            </a>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle-button" type="button"
                class="md:hidden inline-flex items-center justify-center p-2 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors"
                aria-controls="navbar-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Icon for Menu (Hamburger) -->
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Icon for Close (X) -->
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-8" id="navbar-menu">
                <a href="#home"
                    class="text-slate-700 font-medium hover:text-blue-500 transition-colors duration-200 py-2 md:py-0 rounded-md">Home</a>
                <a href="#about"
                    class="text-slate-700 font-medium hover:text-blue-500 transition-colors duration-200 py-2 md:py-0 rounded-md">About</a>
                <a href="#projects"
                    class="text-slate-700 font-medium hover:text-blue-500 transition-colors duration-200 py-2 md:py-0 rounded-md">Projects</a>
                <a href="#pricing"
                    class="text-slate-700 font-medium hover:text-blue-500 transition-colors duration-200 py-2 md:py-0 rounded-md">Pricing</a>
                <a href="#contact"
                    class="text-slate-700 font-medium hover:text-blue-500 transition-colors duration-200 py-2 md:py-0 rounded-md">Contact</a>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div class="md:hidden hidden" id="navbar-menu-mobile">
            <ul
                class="flex flex-col space-y-1 p-4 bg-white/30 backdrop-blur-md border-t border-white/20 shadow-sm rounded-lg">
                <li>
                    <a href="#home"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">Home</a>
                </li>
                <li>
                    <a href="#about"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">About</a>
                </li>
                <li>
                    <a href="#prjoects"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">Projects</a>
                </li>
                <li>
                    <a href="#pricing"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">Pricing</a>
                </li>
                <li>
                    <a href="#contact"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Dummy Content Sections for demonstration -->
    <div id="home" class="section bg-gray-50  ">

        <div
            class="section-container max-w-screen-xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-10 ">

            <div class="flex flex-col max-w-xl space-y-6 text-center lg:text-left">
                <span class="text-sm md:text-base font-medium text-blue-500 opacity-90 fade-up">Hello! I'm</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold fade-up">
                    Norez <span class="highlight-text text-blue-500">Ali</span></h1>
                <p class="text-xl md:text-2xl text-gray-500 font-light fade-up">
                    Laravel Developer</p>
                <p class="text-gray-600 fade-up">Building elegant solutions to complex
                    problems with modern technologies.</p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 relative z-10"
                    style="opacity: 1; transform: none;">

                    <div class="touch-target" tabindex="0">
                        <a href="#contact" aria-label="Go to contact section">
                            <!-- Contact Me Button updated to blue-500 -->
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-blue-500 text-white hover:bg-blue-600 shadow-[0_0_20px_rgba(59,130,246,0.3)] hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] h-10 px-4 min-w-[120px] py-3 text-base fade-up">
                                Contact Me
                            </button>
                        </a>
                    </div>

                    <div class="touch-target fade-up" tabindex="0">
                        <a href="#projects" aria-label="Go to projects section">
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-gray-300 bg-white h-10 px-4 min-w-[120px] py-3 text-base text-gray-700 hover:bg-gray-100">
                                View Projects
                            </button>
                        </a>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex items-center gap-4 ml-0 lg:ml-4 mt-4 lg:mt-0 fade-up">
                        <a href="https://github.com/norez-ali" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 transition-transform transform hover:rotate-6 hover:scale-110 hover:text-blue-500 p-2"
                            aria-label="GitHub" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-github">
                                <path
                                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                </path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </a>

                        <a href="https://linkedin.com/in/norez-ali" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 transition-transform transform hover:rotate-6 hover:scale-110 hover:text-blue-500 p-2"
                            aria-label="LinkedIn" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                </path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>

                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=norezali.dev@gmail.com" target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-600 transition-transform transform hover:rotate-6 hover:scale-110 hover:text-blue-500 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </a>


                    </div>

                </div>
            </div>

            <!-- Code Block Card -->
            <div class="w-full max-w-md slide-right">
                <!-- Outer Container with Hover Effect for lift and shadow -->
                <div
                    class="relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl rounded-2xl">

                    <!-- Subtle Animated Background Glow (Blue Card) -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/10 to-blue-500/5 rounded-2xl blur-[2px]"
                        style="transform: rotate(1.24502deg);"></div>

                    <!-- Main Code Content Card -->
                    <div
                        class="relative bg-codebg border-[3px] border-white/20 backdrop-blur-md p-6 rounded-2xl shadow-xl transition-shadow duration-300">
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 rounded-full bg-red-500" style="transform: none;"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500" style="transform: none;"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500" style="transform: none;"></div>
                            </div>
                            <div class="text-xs text-gray-500">developer.js</div>
                        </div>
                        <div class="space-y-2 font-mono text-sm">
                            <div class="text-gray-500">// Software Engineer</div>
                            <div><span class="text-pink-600">const</span> <span class="text-blue-600">developer</span>
                                <span class="text-gray-500">=</span> <span class="text-orange-500">{</span>
                            </div>
                            <div class="pl-6" style="opacity: 1; transform: none;"><span
                                    class="text-purple-600">name</span><span class="text-gray-500">:</span> <span
                                    class="text-green-600">'Norez Ali'</span><span class="text-gray-500">,</span>
                            </div>
                            <div class="pl-6" style="opacity: 1; transform: none;"><span
                                    class="text-purple-600">skills</span><span class="text-gray-500">:</span> <span
                                    class="text-orange-500">[</span><span class="text-green-600">'Laravel'</span><span
                                    class="text-gray-500">,</span> <span class="text-green-600">'PHP'</span><span
                                    class="text-gray-500">,</span> <span
                                    class="text-green-600">'Wordpress'</span><span
                                    class="text-orange-500">]</span><span class="text-gray-500">,</span></div>
                            <div class="pl-6" style="opacity: 1; transform: none;"><span
                                    class="text-purple-600">focuses</span><span class="text-gray-500">:</span> <span
                                    class="text-orange-500">[</span><span
                                    class="text-green-600">'back-end'</span><span class="text-gray-500">,</span>
                                <span class="text-green-600">'scalability'</span><span
                                    class="text-orange-500">]</span><span class="text-gray-500">,</span>
                            </div>
                            <div class="pl-6" style="opacity: 1; transform: none;"><span
                                    class="text-purple-600">learning</span><span class="text-gray-500">:</span> <span
                                    class="text-green-600">'Always'</span></div>
                            <div><span class="text-orange-500">}</span><span class="text-gray-500">;</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section bg-white">
        <section class="py-14 relative">
            <div class="absolute top-0 inset-x-0 h-1/2 bg-blue-500/5 to-white -z-10"></div>

            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

                <h2 class="text-[38px] font-bold text-gray-900 mb-12 fade-up relative inline-block">
                    About Me
                    <span class="absolute left-0 bottom-0 h-1 w-1/4 bg-blue-500 rounded-full"></span>
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                    <div class="lg:col-span-8 space-y-8">

                        <div class="p-0 space-y-4 fade-up">
                            <h3 class="text-[20px] font-semibold flex items-center gap-2 text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text w-5 h-5 text-blue-500">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                                Bio
                            </h3>
                            <p class="text-[16px] text-gray-600"> Laravel developer with a strong foundation in
                                building robust web applications.
                                Experienced in developing custom solutions and optimizing backend workflows.
                                Additionally, has intermediate knowledge of WordPress plugin development,
                                creating functional and scalable features to enhance website functionality.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-6 items-stretch">

                            <!-- Education -->
                            <div class="fade-up h-full">
                                <div
                                    class="bg-white p-6 rounded-2xl shadow-md h-full transition-all duration-300
            hover:-translate-y-2 hover:shadow-xl">
                                    <h3 class="text-[18px] font-semibold mb-3 flex items-center gap-2 text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-graduation-cap w-5 h-5 text-blue-500">
                                            <path
                                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                            </path>
                                            <path d="M22 10v6"></path>
                                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                        </svg>
                                        Education
                                    </h3>

                                    <div class="space-y-2 text-[16px] text-gray-700">
                                        <p class="font-semibold">BS Computer Science</p>
                                        <p class="text-sm text-gray-500">Virtual University of Pakistan</p>
                                        <p class="text-sm text-gray-500">2024 - Present</p>
                                    </div>
                                    <div class="space-y-2 text-[16px] text-gray-700">
                                        <p class="font-semibold">ADP Computer Science</p>
                                        <p class="text-sm text-gray-500">Virtual University of Pakistan</p>
                                        <p class="text-sm text-gray-500">2022 - 2024</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Experience -->
                            <div class="fade-up h-full">
                                <div
                                    class="bg-white p-6 rounded-2xl shadow-md h-full transition-all duration-300
            hover:-translate-y-2 hover:shadow-xl">
                                    <h3 class="text-[18px] font-semibold mb-3 flex items-center gap-2 text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-briefcase w-5 h-5 text-blue-500">
                                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                        </svg>
                                        Experience
                                    </h3>

                                    <div class="space-y-4 text-[16px] text-gray-700">
                                        <div>
                                            <p class="font-semibold">Junior Laravel Developer</p>
                                            <p class="text-sm text-gray-500">UnitSol</p>
                                            <p class="text-sm text-gray-500">Jan 25 - Continue</p>
                                        </div>
                                        <div>
                                            <p class="font-semibold">Laravel Developer Intern</p>
                                            <p class="text-sm text-gray-500">UnitSol</p>
                                            <p class="text-sm text-gray-500">Nov 24 - Dec 24</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lg:col-span-4 flex flex-col items-center lg:items-start gap-6 fade-up">
                        <div class="relative">
                            <span
                                class="relative flex shrink-0 overflow-hidden rounded-full w-40 h-40 border-4 border-blue-500/20 shadow-lg">
                                <img class="aspect-square h-full w-full object-cover" alt="Norez Ali" loading="lazy"
                                    src="{{ asset('assets/imgs/profile2.png') }}">
                            </span>

                        </div>

                        <div class="text-center lg:text-left">
                            <h3 class="text-[24px] font-bold text-gray-900">Norez ALi</h3>
                            <p class="text-gray-500 text-[16px]">Laravel | Wordpress Plugin Developer</p>
                        </div>

                        <div class="flex flex-wrap gap-2 justify-center lg:justify-start">
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                Laravel</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                Rest APIs</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                MVC</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                Blade</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                HTML/CSS/JS</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                AJAX</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                Git/GitHub</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                MySQL</div>
                            <div
                                class="inline-flex items-center rounded-full border border-blue-200 px-3 py-1 text-xs font-semibold text-gray-500 bg-blue-100">
                                Wordpress plugin development</div>
                        </div>

                        <div class="touch-target" tabindex="0">
                            <a href="" download="Norez_ali_CV.pdf"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-500 text-white hover:bg-blue-600 shadow-[0_0_20px_rgba(59,130,246,0.3)] hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] h-10 px-4 py-2 text-base">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" x2="12" y1="15" y2="3"></line>
                                </svg>
                                Download Resume
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div id="projects" class="section bg-gray-50 py-14">
        <section>
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

                <h2 class="text-[38px] font-bold text-gray-900 mb-4 fade-up relative inline-block">
                    Projects
                    <span class="absolute left-0 bottom-0 h-1 w-1/4 bg-blue-500 rounded-full"></span>
                </h2>

                <p class="text-gray-600 max-w-2xl mb-12 text-[16px] fade-up">
                    Here are some of the projects I've worked on, showcasing my skills in various technologies and
                    problem domains.
                </p>

                <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Project Card 1 -->
                    <div class="relative fade-up project-card">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:ring-1 hover:ring-blue-500 h-full">
                            <div class="relative overflow-hidden rounded-t-2xl h-48">
                                <img src="{{ asset('assets/projects/p4.jpg') }}" alt="Tutor Finder - Dashlite Tutor"
                                    class="w-full h-full object-cover transition-transform duration-500 transform hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-blue-500/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity z-20">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="bg-white text-gray-900 p-3 rounded-full hover:bg-gray-100 transition-colors shadow-lg"
                                        aria-label="GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-bold text-gray-900">Dashlite Tutor - Tutor Finder</h3>
                                    <p class="text-gray-600 text-sm text-justify"> Tutor Finder — a Laravel platform
                                        with Student,
                                        Teacher, and Admin roles.
                                        Teachers register and become visible to students only after admin approval,
                                        enabling easy tutor selection based on subjects.</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Laravel</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">MySQL</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Blade</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Authentication</span>
                                        <span class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Role
                                            Management</span>
                                    </div>

                                </div>
                                <div class="flex gap-3 pt-4">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="inline-flex items-center gap-2 justify-center text-sm font-medium h-9 px-3 rounded-md bg-white text-gray-800 border border-gray-300 hover:bg-gray-100 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Project Card 2 -->
                    <div class="relative fade-up project-card" style="animation-delay: 0.1s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:ring-1 hover:ring-blue-500 h-full">
                            <div class="relative overflow-hidden rounded-t-2xl h-48">
                                <img src="{{ asset('assets/projects/p2.jpg') }}" alt="Educrat LMS"
                                    class="w-full h-full object-cover transition-transform duration-500 transform hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-blue-500/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity z-20">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="bg-white text-gray-900 p-3 rounded-full hover:bg-gray-100 transition-colors shadow-lg"
                                        aria-label="GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-bold text-gray-900">Educrat LMS</h3>
                                    <p class="text-gray-600 text-sm text-justify"> A Laravel-based LMS with Student,
                                        Teacher, and
                                        Admin roles. Teachers manage their assigned courses,
                                        while students access lessons, quizzes, and activities, with real-time progress
                                        tracking throughout the course.</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Laravel</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">PHP</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">MySQL</span>
                                        <span class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Stripe
                                            Payments</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Authentication</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Real-time
                                            Progress</span>
                                    </div>

                                </div>
                                <div class="flex gap-3 pt-4">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="inline-flex items-center gap-2 justify-center text-sm font-medium h-9 px-3 rounded-md bg-white text-gray-800 border border-gray-300 hover:bg-gray-100 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="relative fade-up project-card" style="animation-delay: 0.2s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:ring-1 hover:ring-blue-500 h-full">
                            <div class="relative overflow-hidden rounded-t-2xl h-48">
                                <img src="{{ asset('assets/projects/p3.jpg') }}" alt="Examism"
                                    class="w-full h-full object-cover transition-transform duration-500 transform hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-blue-500/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity z-20">
                                    <a href="https://examism.com/" target="_blank"
                                        class="bg-white text-gray-900 p-3 rounded-full hover:bg-gray-100 transition-colors shadow-lg"
                                        aria-label="GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-bold text-gray-900">Examism</h3>
                                    <p class="text-gray-600 text-sm text-justify">Examism — an online platform for
                                        purchasing course
                                        vouchers in bulk.
                                        Includes an admin-managed coupon system where users can validate coupons
                                        and automatically receive the applicable discount during checkout.</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Laravel</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">PHP</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">MySQL</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Blade</span>
                                        <span class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Coupon
                                            System</span>
                                    </div>
                                </div>
                                <div class="flex gap-3 pt-4">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="inline-flex items-center gap-2 justify-center text-sm font-medium h-9 px-3 rounded-md bg-white text-gray-800 border border-gray-300 hover:bg-gray-100 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 4 -->
                    <div class="relative fade-up project-card hidden" data-hidden style="animation-delay: 0.4s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:ring-1 hover:ring-blue-500 h-full">

                            <div class="relative overflow-hidden rounded-t-2xl h-48">
                                <img src="{{ asset('assets/projects/p1.jpg') }}" alt="Sociala - Social Media App"
                                    class="w-full h-full object-cover transition-transform duration-500 transform hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-blue-500/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity z-20">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="bg-white text-gray-900 p-3 rounded-full hover:bg-gray-100 transition-colors shadow-lg"
                                        aria-label="GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-bold text-gray-900">Sociala - Social Media App</h3>
                                    <p class="text-gray-600 text-sm text-justify">A Laravel-based social media platform
                                        where users can register, create posts, interact through likes and comments, and
                                        engage in real-time updates powered by Laravel Reverb.</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Laravel</span>
                                        <span class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Laravel
                                            Reverb</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">Real-time
                                            Updates</span>
                                        <span
                                            class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">MySQL</span>
                                        <span class="text-xs rounded-full px-3 py-1 text-blue-700 bg-blue-100">REST
                                            API</span>
                                    </div>

                                </div>
                                <div class="flex gap-3 pt-4">
                                    <a href="https://github.com/norez-ali" target="_blank"
                                        class="inline-flex items-center gap-2 justify-center text-sm font-medium h-9 px-3 rounded-md bg-white text-gray-800 border border-gray-300 hover:bg-gray-100 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-github">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                            </path>
                                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                        </svg>
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Show More Button -->
                <div class="flex justify-center mt-12 fade-up">
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-gray-700 hover:bg-blue-600 hover:text-white shadow-[0_0_20px_rgba(59,130,246,0.3)] hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] h-10 px-4 py-2 text-base group">
                        <span>Show More Projects</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-code ml-2 group-hover:translate-x-1 transition-transform">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </button>
                </div>

            </div>
        </section>
    </div>

    <div id="pricing" class="section bg-white">Pricing Plans</div>
    <div id="contact" class="section bg-gray-50">Contact Us</div>

    <script src="{{ asset('assets/js/nav.js') }}"></script>


</body>

</html>
