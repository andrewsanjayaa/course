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
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="grid grid-rows-2 md:grid-cols-1">

        <div class="gap-4">
            <div class="col-12">
                <div class="hero w-full min-h-screen bg-cover bg-no-repeat bg-center"
                    style="background-image: url(https://flowbite.com/docs/images/carousel/carousel-1.svg)">
                    <div class="hero-overlay bg-opacity-60 flex items-center justify-center">
                        <h1 class="text-5xl font-bold text-center">Hello World</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="gap-4">
            <div class="col-12">
                <div class="mx-12">
                    <section class="py-12 h-64">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-800 dark:text-white-300 mb-3">
                            About Us
                        </h2>
                        <div class="grid md:grid-cols-2 grid-cols-1">
                            <div class="md:h-64 pt-2">
                                <div class="swiper w-full h-96">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center "><img
                                                src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                                                alt="" class="w-full"></div>
                                        <div class="swiper-slide text-center">Slide 2</div>
                                        <div class="swiper-slide text-center">Slide 3</div>
                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="md:ps-7 md:pt-1">
                                <p
                                    class="text-gray-700 dark:text-gray-400 md:text-xl text-xl sm:min-w-screen text-justify">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue
                                    massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                                    sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.
                                    Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue
                                    massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                                    sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.
                                    Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="gap-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center">
                    <h2 class="text-gray-800 text-4xl font-bold mb-4">Pricing</h2>
                    <p class="text-sm text-gray-500">Change your plant according your needs</p>
                </div>


                <div class="grid lg:grid-cols-2 sm:grid-cols-2 gap-6 mt-12 max-sm:max-w-sm max-sm:mx-auto grid-cols-1">
                    <div class="border rounded-md p-6">
                        <h3 class="text-gray-800 text-xl font-semibold mb-2">Starter</h3>
                        <p class="text-sm text-gray-500">For Individuals and Small Teams</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 text-2xl font-semibold">$10 <sub
                                    class="text-gray-500 text-sm font-medium">per month</sub></h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 text-xl font-semibold mb-2">Include</h4>
                            <p class="text-sm text-gray-500">Everything you get in this plan</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-3 fill-green-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    50 Page Unlock
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-3 fill-green-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    10 GB Storage
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    6 Team Members
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited Book Mark
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited basic feature
                                </li>
                            </ul>

                            <button type="button"
                                class="w-full mt-6 px-5 py-2.5 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md">Buy
                                now</button>
                        </div>
                    </div>

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
                            <h4 class="text-gray-800 text-xl font-semibold mb-2">Include</h4>
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
                                    Unlimited Book Mark
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Unlimited basic feature
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

    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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


</body>

</html>
