<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daanc Corp.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a type="button" href="{{ route('register') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                    started</a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#pricing"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#faq"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="grid grid-rows-2 md:grid-cols-1 gap-y-8">

        <!-- Hero Section -->
        <div class="gap-4" id="home">
            <div class="col-12">
                <div class="hero w-full min-h-screen bg-cover bg-no-repeat bg-center"
                    style="background-image: url(https://flowbite.com/docs/images/carousel/carousel-1.svg)">
                    <div class="hero-overlay bg-opacity-60 flex items-center justify-center">
                        <h1 class="text-5xl font-bold text-center">Hello World</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Section -->
        <div class="gap-4" id="about">
            <div class="col-12">
                <div class="mx-4 sm:mx-12">
                    <section class="py-12 md:py-16">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-800 dark:text-white-300 mb-6">
                            About Us
                        </h2>
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                            <div class="md:h-64 pt-2">
                                <div class="swiper w-full h-96">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                                                alt="" class="w-full">
                                        </div>
                                        <div class="swiper-slide text-center">Slide 2</div>
                                        <div class="swiper-slide text-center">Slide 3</div>
                                    </div>


                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="md:ps-7 md:pt-1">
                                <p
                                    class="text-gray-700 dark:text-gray-400 md:text-xl text-xl sm:min-w-screen text-justify">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue
                                    massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                                    sit amet commodo magna eros quis urna...
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="gap-4" id="pricing">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-gray-800 text-4xl font-bold mb-4">Pricing</h2>
                    <p class="text-sm text-gray-500">Change your plan according to your needs</p>
                </div>

                <!-- Add grid layout -->
                <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-6 mt-12">
                    <!-- First Pricing Card -->
                    <div class="border rounded-md p-6">
                        <h3 class="text-gray-800 text-xl font-semibold mb-2 flex items-center">Professional <span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">Best
                                Deal</span></h3>
                        <p class="text-sm text-gray-500">For Individuals and Largest Teams</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 text-2xl font-semibold">$20 <sub
                                    class="text-gray-500 text-sm font-medium">per month</sub></h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 text-xl font-semibold mb-2">Includes</h4>
                            <p class="text-sm text-gray-500">Everything you get in this plan</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-3 fill-green-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    100 Page Unlock
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    20 GB Storage
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    8 Team Members
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited Bookmarks
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited Basic Features
                                </li>
                            </ul>

                            <button type="button"
                                class="w-full mt-6 px-5 py-2.5 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md">Buy
                                now</button>
                        </div>
                    </div>

                    <!-- Second Pricing Card -->
                    <div class="border rounded-md p-6">
                        <h3 class="text-gray-800 text-xl font-semibold mb-2 flex items-center">Professional <span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">Best
                                Deal</span></h3>
                        <p class="text-sm text-gray-500">For Individuals and Largest Teams</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 text-2xl font-semibold">$20 <sub
                                    class="text-gray-500 text-sm font-medium">per month</sub></h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 text-xl font-semibold mb-2">Includes</h4>
                            <p class="text-sm text-gray-500">Everything you get in this plan</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    100 Page Unlock
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    20 GB Storage
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    8 Team Members
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited Bookmarks
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited Basic Features
                                </li>
                            </ul>

                            <button type="button"
                                class="w-full mt-6 px-5 py-2.5 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md">Buy
                                now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <div class="flex justify-center items-center min-h-screen py-10">
            <div class="max-w-4xl w-full bg-white rounded-lg shadow-lg p-6">
                <!-- Title -->
                <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Frequently Asked Questions</h1>

                <!-- FAQ Section -->
                <div class="space-y-6" id="faq">
                    <!-- FAQ 1 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">What is Laravel?</span>
                            <span class="text-gray-500">
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 15l-7-7-7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-4 p-4 bg-gray-50 rounded-md shadow-sm">
                            <p class="text-gray-700">Laravel is a PHP framework designed for web artisans. It's robust
                                and provides elegant syntax for rapid application development.</p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">How do I install Laravel?</span>
                            <span class="text-gray-500">
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 15l-7-7-7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-4 p-4 bg-gray-50 rounded-md shadow-sm">
                            <p class="text-gray-700">You can install Laravel via Composer using the following command:
                                <code>composer create-project --prefer-dist laravel/laravel projectName</code>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">What is Blade?</span>
                            <span class="text-gray-500">
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 15l-7-7-7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-4 p-4 bg-gray-50 rounded-md shadow-sm">
                            <p class="text-gray-700">Blade is Laravel’s templating engine that allows you to build
                                clean and reusable views with ease.</p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">What are Eloquent Models?</span>
                            <span class="text-gray-500">
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 15l-7-7-7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-4 p-4 bg-gray-50 rounded-md shadow-sm">
                            <p class="text-gray-700">Eloquent is Laravel’s ORM (Object-Relational Mapping) that allows
                                you to interact with your database using an elegant, active record implementation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            autoplay: {
                delay: 1500, // Delay between transitions in milliseconds
                disableOnInteraction: false, // Allow autoplay to continue after user interactions
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
<div class="py-0">
    @include('footer')
</div>
</html>
