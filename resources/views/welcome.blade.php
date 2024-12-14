<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daanc Corp.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/16b4740f03b44237745b1ea3b1715ae3/detailed">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="overflow-auto scrollbar-hide">
    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://res.cloudinary.com/durosbtet/image/upload/v1733837721/logo-transparant.png"
                class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/cf7d3514b32e631ae4b052566b47c50b/detailed"
                    class="h-8">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Daanc Academy</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a type="button" href="{{ route('register') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</a>
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

    <div class="grid grid-rows-2 md:grid-cols-1 dark:bg-gray-900 bg-white">

        <!-- Hero Section -->
            <div class="gap-4" id="home">
                <div class="col-12">
                    <div class="hero w-full min-h-screen bg-cover bg-no-repeat bg-center"
                        style="background-image: url(https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/58e1592a5c93e003b70aa05fd58d557b/detailed)">
                        <div class="hero-overlay bg-opacity-60 flex items-center justify-center">
                        </div>
                    </div>
                </div>
            </div>

        <!-- About Us Section -->
        <div class="gap-4" id="about" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine"
            data-aos-duration="600">
            <div class="col-12">
                <div class="mx-4 sm:mx-12">
                    <section class="py-12 md:py-16">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-800 dark:text-white mb-6">
                            About Us
                        </h2>
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                            <div class="md:h-64 pt-2">
                                <div class="swiper w-full h-96">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <img src="https://res.cloudinary.com/durosbtet/image/upload/v1734106008/aboutus1.png"
                                                alt="" class="w-full">
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <img src="https://res.cloudinary.com/durosbtet/image/upload/v1734106008/aboutus2.png"
                                                alt="" class="w-full">
                                            </div>
                                            <div class="swiper-slide text-center">
                                                <img src="https://res.cloudinary.com/durosbtet/image/upload/v1734106008/aboutus3.png"
                                                    alt="" class="w-full">
                                                </div>
                                    </div>


                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="md:ps-7 md:pt-1">
                                <h1 class ="font-bold text-2xl text-gray-800 dark:text-white"> Struggling to find a good study course?
                                </h1>
                                <p
                                    class="text-gray-700 dark:text-gray-400 md:text-xl text-xl sm:min-w-screen text-justify mt-2">
                                    DAANC Academy is an online course platform that focuses on Science and Math subjects. 
                                    We provide a wide selection of learning videos and material articles, fit for junior high and high school students in Indonesia. 
                                    Find answers to your worries about Science, Mathematics, Biology, Physics, and Chemistry subjects through our features!
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="gap-4" id="pricing" data-aos="fade-up" data-aos-offset="150" data-aos-easing="ease-in-sine">
            <div class="max-w-6xl mx-auto mt-">
                <div class="text-center">
                    <h2 class="text-gray-800 dark:text-white text-4xl font-bold mb-4">Pricing </h2>
                    <p class="text-sm text-gray-500 dark:text-white">Flexible pricing options according to your needs</p>
                </div>

                <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-6 mt-12">
                    <!-- First Pricing Card -->
                    <div class="border rounded-md p-6">
                        <h3 class="text-gray-800 dark:text-white text-xl font-semibold mb-2 flex items-center">Free<span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">Free User</span></h3>
                        <p class="text-sm text-gray-500">For short term</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 dark:text-white text-2xl font-semibold">Rp0 <sub
                                    class="text-gray-500 text-sm font-medium">per month</sub></h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 dark:text-white text-xl font-semibold mb-2">Benefits</h4>
                            <p class="text-sm text-gray-500">What can you get?</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Up to 3 free learning videos
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Up to 3 free learning articles
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                    </svg>
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                    </svg>

                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                    </svg>
                                </li>
                            </ul>

                            <button type="button"
                                class="w-full mt-6 px-5 py-2.5 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md">Subscribe</button>
                        </div>
                    </div>

                    <!-- Second Pricing Card -->
                    <div class="border rounded-md p-6">
                        <h3 class="text-gray-800 dark:text-white text-xl font-semibold mb-2 flex items-center">Premium
                            <span class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">
                                Premium User</span></h3>
                        <p class="text-sm text-gray-500">For long term</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 dark:text-white text-2xl font-semibold">Rp109.000
                                <sub class="text-gray-500 text-sm font-medium">per month</sub>
                            </h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 dark:text-white text-xl font-semibold mb-2">Benefits</h4>
                            <p class="text-sm text-gray-500">What can you get?</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Up to 10+ free learning videos
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Up to 10+ free learning articles
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                    </svg>
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                    </svg>
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                    </svg>
                                </li>
                            </ul>

                            <button type="button"
                                class="w-full mt-6 px-5 py-2.5 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <div class="gap-4 flex justify-center items-center min-h-screen py-10" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine">
            <div class="max-w-6xl w-full bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <!-- Title -->
                <h1 class="text-3xl font-semibold text-center text-gray-800 dark:text-white mb-6">Frequently Asked Questions</h1>

                <!-- FAQ Section -->
                <div class="space-y-6" id="faq">
                    <!-- FAQ 1 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">What features are available on the Daanc Academy platform?</span>
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
                            <p class="text-gray-700">Daanc Academy has two main features:</p>
                            <li class="text-gray-700">Account Profile Configuration: You can edit your account profile, including your address and personal information!</li>
                            <li class="text-gray-700">AAccess to Learning Materials: You can access video and article materials through either free or paid user options!</li>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">What learning materials are available on Daanc Academy? </span>
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
                            <p class="text-gray-700">Daanc Academy offers online courses specifically in Science and Mathematics for junior high students, as well as Mathematics, Biology, Physics, and Chemistry for senior high school students in the Science major.</code>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">How can I access videos and learning articles?        </span>
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
                            <p class="text-gray-700">To access videos and learning articles: 
                            <p class= "text-gray-700"> Simply create an account, choose a pricing option, then enter the Course page. Select the learning material according to your needs.</p>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
                            <span class="text-lg font-semibold text-gray-800">What are the benefits of studying at Daanc Academy?</span>
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
                            <p class="text-gray-700">Daanc Academy provides flexible learning materials where you can watch learning videos and read articles simultaneously. 
                                Our videos are sourced from trusted and tested-quality providers!</p>
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
                delay: 1500, // 
                disableOnInteraction: false, 
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
<div class="py-0 bg-[#45526e] dark:bg-gray-900">
    @include('footer')
</div>

</html>
