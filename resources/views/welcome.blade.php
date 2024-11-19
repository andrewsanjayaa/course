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

    <footer class="bg-[#45526e] dark:bg-gray-900" >
    <div class="p-4 py-6 lg:py-8">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <img src="https://flowbite.com/docs/images/logo.svg" class="h-10 me-3 my-4" alt="FlowBite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
              <div>
                  <h2 class="mb-6 text-xs font-semibold text-white uppercase dark:text-white">Lorem ipsum dolor sit amet</h2>
              </div>
              <div>
                <h2 class="mb-6 text-8 font-semibold text-white uppercase">Product</h2>
                  <ul class="text-gray-400 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Free</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Premium</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase">Features</h2>
                  <ul class="text-gray-401 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Video</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Artikel</a>
                      </li>
                  </ul>
              </div>
              <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Contact Us</h2>
                <ul class="text-gray-400 dark:text-gray-400 font-medium">
                    <li class="mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-400 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 4H2C1.448 4 1 4.448 1 5v14c0 .552.448 1 1 1h20c.552 0 1-.448 1-1V5c0-.552-.448-1-1-1zm-1 2l-9 6-9-6h18z"/>
                          </svg>
                          <a href="mailto:contact@daanc-corps.com" class="hover:underline">contact@daanc-corps.com</a>                          
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92c-1.21 0-2.32-.35-3.2-1.03l-1.43 1.43c-.8.8-2.09.8-2.88 0l-3.62-3.62c-.8-.8-.8-2.09 0-2.88l1.43-1.43c-.67-.88-1.03-1.99-1.03-3.2 0-2.42 1.33-4.5 3.28-5.79l-.98-1.68c-1.7-.32-3.58.18-4.69 1.3L8.1 4.14C7.12 5.26 7.6 7.14 8.92 8.46L11.4 10.94c-.8.8-2.09.8-2.88 0l-3.62-3.62c-.8-.8-.8-2.09 0-2.88l1.43-1.43C3.35 2.32 2.72 1 2.72 0a7.9 7.9 0 0 0 7.02 5.18c3.23 3.23 4.59 4.79 8.42 8.61-1.49 2.2-2.79 4.4-4.57 6.19-1.59 1.59-3.44 2.72-5.35 3.35C2.98 19.53 3 20 3 20s.39-2.27 2.08-3.71c2.24-2.25 5.06-5.12 5.18-5.2"/>
                              </svg>
                              <a href="tel:+000-000-000" class="hover:underline">+000-000-000</a>                                                                                                                                                                                                                                                                                          
                        </li>
                </ul>
            </div>
          </div>
      </div>
      <div class="text-left ml-3">
        <h1 class="font-bold text-lg text-white mb-4">Alamat</h1>
      </div>
      <div class="relative w-full h-[400px] overflow-hidden"> 
        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="w-full h-full object-cover" alt="Image">
      </div>
      <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                          <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                      </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                          <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                      </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                      <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                  </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-8 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="8 0 20 20">
                        <path fill-rule="evenodd" d="M12 2.163c3.42 0 3.84.013 5.188.075 1.38.065 2.56.385 3.495 1.32 1.23 1.231 1.255 2.813 1.32 3.495.062 1.348.075 1.768.075 5.188s-.013 3.84-.075 5.188c-.065 1.38-.385 2.56-1.32 3.495-1.231 1.231-2.813 1.255-3.495 1.32-1.348.062-1.768.075-5.188.075s-3.84-.013-5.188-.075c-1.38-.065-2.56-.385-3.495-1.32-1.23-1.231-1.255-2.813-1.32-3.495-.062-1.348-.075-1.768-.075-5.188s.013-3.84.075-5.188c.065-1.38.385-2.56 1.32-3.495 1.231-1.231 2.813-1.255 3.495-1.32C8.16 2.176 8.58 2.163 12 2.163zm0-2.163c-3.42 0-3.84.014-5.188.075-1.546.072-2.88.406-3.99 1.516-1.104 1.104-1.44 2.444-1.516 3.99-.062 1.348-.075 1.768-.075 5.188s.013 3.84.075 5.188c.075 1.546.412 2.886 1.516 3.99 1.104 1.11 2.444 1.444 3.99 1.516 1.348.062 1.768.075 5.188.075s3.84-.013 5.188-.075c1.546-.072 2.886-.406 3.99-1.516 1.104-1.104 1.44-2.444 1.516-3.99.062-1.348.075-1.768.075-5.188s-.013-3.84-.075-5.188c-.072-1.546-.412-2.886-1.516-3.99-1.104-1.11-2.444-1.444-3.99-1.516C15.84.014 15.42 0 12 0zm0 5.838a6.16 6.16 0 1 0 6.16 6.16A6.167 6.167 0 0 0 12 5.838zm0 10.528a4.368 4.368 0 1 1 4.368-4.368 4.373 4.373 0 0 1-4.368 4.368zm6.496-9.254a1.04 1.04 0 1 0-1.04-1.04 1.04 1.04 0 0 0 1.04 1.04z" clip-rule="evenodd"/>
                      </svg>                      
                    <span class="sr-only">Instagram</span>
                </a>
                </a>
          </div>
      </div>
    </div>
</footer>
</body>

</html>
