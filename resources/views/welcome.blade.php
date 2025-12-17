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

        .project-card {
            position: relative;
            overflow: visible;
            border-radius: 1rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        /* Soft drop shadow on hover */
        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        /* Soft glowing brush spotlight */
        .project-card .spotlight {
            position: absolute;
            top: 0;
            left: 0;
            width: 250px;
            height: 250px;
            pointer-events: none;
            border-radius: 50%;
            background: radial-gradient(circle,
                    rgba(59, 130, 246, 0.32),
                    rgba(59, 130, 246, 0.15) 40%,
                    transparent 70%);
            filter: blur(40px);
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s ease-out;
        }

        .project-card:hover .spotlight {
            opacity: 1;
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
            <a href="{{ url('/') }}"
                class="text-3xl font-bold text-slate-800 tracking-wider transition-colors duration-300">
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
                <a href="#skills"
                    class="text-slate-700 font-medium hover:text-blue-500 transition-colors duration-200 py-2 md:py-0 rounded-md">Skills</a>
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
                    <a href="#projects"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">Projects</a>
                </li>
                <li>
                    <a href="#skills"
                        class="block py-2 px-3 text-slate-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-200">Skills</a>
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
                                Experienced in developing custom solutions using laravel packages like Breeze, Spatie,
                                Cashier, Horizon, Sanctum, Reverb, Telescope, and Scout to
                                optimize backend workflows.
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
                            <h3 class="text-[24px] font-bold text-gray-900">Norez Ali</h3>
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
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg  h-full">
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
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg  h-full">
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
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg  h-full">
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
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg  h-full">

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

    <div id="skills" class="section bg-white py-14">
        <section>
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

                <div style="opacity: 1; transform: none;">
                    <h2 class="text-[38px] font-bold text-gray-900 mb-4 fade-up relative inline-block">
                        Skills
                        <span class="absolute left-0 bottom-0 h-1 w-1/4 bg-blue-500 rounded-full"></span>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mb-12 text-[16px] fade-up">
                        I've worked with a range of technologies in the
                        web development world, from frontend to backend and everything in between.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" style="opacity: 1;">

                    <!-- Card 1 -->
                    <div class="relative fade-up project-card">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl
                        shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg h-full p-6">
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-blue-100 text-primary rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-terminal h-5 w-5 text-blue-700">
                                            <polyline points="4 17 10 11 4 5"></polyline>
                                            <line x1="12" x2="20" y1="19" y2="19">
                                            </line>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Skills</h3>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">PHP</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Laravel</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">JS</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Blade</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">REST
                                        APIs</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">MySQL</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">AJAX</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">jQuery</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative fade-up project-card" style="animation-delay: 0.1s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl
                        shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg h-full p-6">
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-blue-100 text-primary rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-panels-top-left h-5 w-5 text-blue-700">
                                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                            <path d="M3 9h18"></path>
                                            <path d="M9 21V9"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Frontend Styling</h3>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">CSS</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Tailwind
                                        CSS</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Bootstrap</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Responsive
                                        Design</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">UI
                                        Components</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative fade-up project-card" style="animation-delay: 0.2s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl
                        shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg h-full p-6">
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-blue-100 text-primary rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-code h-5 w-5 text-blue-700">
                                            <polyline points="16 18 22 12 16 6"></polyline>
                                            <polyline points="8 6 2 12 8 18"></polyline>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Backend Development</h3>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">PHP</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Laravel</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">REST
                                        APIs</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">MVC
                                        Architecture</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="relative fade-up project-card" style="animation-delay: 0.3s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl
                        shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg h-full p-6">
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-blue-100 text-primary rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-database h-5 w-5 text-blue-700">
                                            <ellipse cx="12" cy="5" rx="9" ry="3">
                                            </ellipse>
                                            <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                            <path d="M3 12A9 3 0 0 0 21 12"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Databases & Caching</h3>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">MySQL</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Redis</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Database
                                        Caching</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Eloquent
                                        ORM</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Query
                                        Optimization</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="relative fade-up project-card" style="animation-delay: 0.4s;">
                        <div
                            class="relative flex flex-col overflow-hidden bg-white rounded-2xl
                        shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg h-full p-6">
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-blue-100 text-primary rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-cpu h-5 w-5 text-blue-700">
                                            <rect width="16" height="16" x="4" y="4" rx="2"></rect>
                                            <rect width="6" height="6" x="9" y="9" rx="1"></rect>
                                            <path d="M15 2v2"></path>
                                            <path d="M15 20v2"></path>
                                            <path d="M2 15h2"></path>
                                            <path d="M2 9h2"></path>
                                            <path d="M20 15h2"></path>
                                            <path d="M20 9h2"></path>
                                            <path d="M9 2v2"></path>
                                            <path d="M9 20v2"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Tools & Technologies</h3>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Git</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">GitHub</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Composer</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Postman</span>
                                    <span
                                        class="text-sm rounded-full px-3 py-1 text-gray-600 bg-white border border-gray-300">Laravel
                                        Artisan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>


    <div id="contact" class="section bg-gray-50 py-14">
        <section>
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div>
                    <h2 class="**text-[38px]** font-bold text-gray-900 mb-4 fade-up relative inline-block">
                        Get In Touch
                        <span class="absolute left-0 bottom-0 h-1 w-1/4 bg-blue-500 rounded-full"></span>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mb-12 text-[16px] fade-up">
                        Have a question or want to work together? Feel free to
                        drop me a message. I'd love to hear from you!
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="md:col-span-1 space-y-8 fade-up">
                        <div>
                            <h3 class="text-[18px] font-semibold mb-3 text-gray-700">Contact Information</h3>
                            <p class="text-gray-600 text-[16px]">Fill up the form and I'll get back to you as soon as
                                possible.</p>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-mail w-5 h-5 mt-1 text-blue-600">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                                <div>
                                    <h4 class="text-[18px] font-semibold text-gray-700">Email</h4>
                                    <p class="text-sm text-gray-600">
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=norezali.dev@gmail.com"
                                            target="_blank">norezali.dev@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-phone w-5 h-5 mt-1 text-blue-600">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <div>
                                    <h4 class="text-[18px] font-semibold text-gray-700">Phone</h4>
                                    <p class="text-sm text-gray-600">
                                        <a href="tel:+92 325 8061943">+92 325 8061943</a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin w-5 h-5 mt-1 text-blue-600">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <div>
                                    <h4 class="text-[18px] font-semibold text-gray-700">Location</h4>
                                    <p class="text-sm text-gray-600">Faisalabad, Pakistan</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-[18px] font-semibold text-gray-700 py-2">Connect with me</h3>
                            <div class="flex space-x-4">
                                <a href="https://github.com/norez-ali" target="_blank" rel="noopener noreferrer"
                                    class="text-gray-600 transition-transform transform hover:rotate-6 hover:scale-110 hover:text-blue-500 p-2"
                                    aria-label="GitHub" tabindex="0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
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
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-linkedin">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect width="4" height="12" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </a>

                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=norezali.dev@gmail.com"
                                    target="_blank" rel="noopener noreferrer"
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
                    <div class="md:col-span-2 fade-up">
                        <form class="space-y-6 bg-white p-8 rounded-2xl shadow-lg " id="contact-form">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium **text-gray-700**">Your
                                        Name</label>
                                    <input
                                        class="flex h-10 w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2 text-base placeholder:text-gray-400 hover:border-blue-400 focus:outline-none focus:border-blue-500 transition-colors duration-200 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                        id="name" name="name" placeholder="John Doe" required=""
                                        value="">
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium **text-gray-700**">Your
                                        Email</label>
                                    <input type="email"
                                        class="flex h-10 w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2 text-base placeholder:text-gray-400 hover:border-blue-400 focus:outline-none focus:border-blue-500 transition-colors duration-200 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                        id="email" name="email" placeholder="john@example.com" required=""
                                        value="">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label for="subject" class="text-sm font-medium **text-gray-700**">Subject</label>
                                <input
                                    class="flex h-10 w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2 text-base placeholder:text-gray-400 hover:border-blue-400 focus:outline-none focus:focus:border-blue-500 transition-colors duration-200 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                    id="subject" name="subject" placeholder="How can I help you?" required=""
                                    value="">
                            </div>
                            <div class="space-y-2">
                                <label for="message" class="text-sm font-medium **text-gray-700**">Message</label>
                                <textarea
                                    class="flex min-h-[120px] w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2 text-sm placeholder:text-gray-400 hover:border-blue-400 focus:outline-none focus:border-blue-500 transition-colors duration-200 disabled:cursor-not-allowed disabled:opacity-50"
                                    id="message" name="message" placeholder="Your message here..." rows="5" required=""></textarea>
                            </div>
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white hover:bg-blue-700 shadow-[0_4px_15px_rgba(59,130,246,0.3)] hover:shadow-[0_6px_20px_rgba(59,130,246,0.4)] h-10 px-4 py-2 w-full"
                                type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div
        class="bg-white/20 backdrop-blur-md border border-white/30 flex h-20 w-full items-center justify-between p-4 md:px-8 rounded-2xl shadow-lg">

        <div class="flex items-center gap-2 md:pl-[120px]">
            <svg class="text-blue-600" width="20" height="20" viewBox="0 0 210 210" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M30.2852 108.5C37.0623 101.723 48.6584 105.234 50.5381 114.632L56.3564 143.726C57.3065 148.476 61.0202 152.19 65.7705 153.14L94.8643 158.958C104.262 160.838 107.773 172.433 100.996 179.21L74.252 205.955C71.4149 208.792 67.3474 210.023 63.4131 209.236L18.6299 200.279C13.8795 199.329 10.1659 195.617 9.21582 190.866L0.259766 146.083C-0.527094 142.149 0.703973 138.081 3.54102 135.244L30.2852 108.5ZM64.8545 4.24414C68.0685 1.03016 72.8228 -0.0916344 77.1348 1.3457L170.473 32.458C174.056 33.6524 176.868 36.4646 178.062 40.0479L209.175 133.386C210.612 137.698 209.49 142.452 206.276 145.666L154.539 197.402C148.231 203.71 137.49 201.175 134.669 192.712L107.352 110.758C106.157 107.175 103.345 104.363 99.7617 103.169L17.8076 75.8506C9.34527 73.0295 6.80984 62.2892 13.1172 55.9814L64.8545 4.24414Z">
                </path>
            </svg>
            <p class="font-figtree text-sm font-medium text-gray-800">norez ali</p>
        </div>

        <p class="text-gray-700 text-sm md:pr-[120px]">
            Made with <a class="underline text-blue-700" href="https://laravel.com/docs/12.x/">Laravel 12</a>
        </p>
    </div>




    <script src="{{ asset('assets/js/nav.js') }}"></script>


</body>

</html>
