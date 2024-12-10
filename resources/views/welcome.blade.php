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
<<<<<<< HEAD
            <a href="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/b09cc69eb54d47cd365de6f3b1fb7cbf/detailed"
                class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/16b4740f03b44237745b1ea3b1715ae3/detailed"
                    class="h-8">
=======
            <a href="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/b09cc69eb54d47cd365de6f3b1fb7cbf/detailed" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/16b4740f03b44237745b1ea3b1715ae3/detailed" class="h-8">
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Daanc Academy</span>
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

    <div class="grid grid-rows-2 md:grid-cols-1 gap-y-8 dark:bg-gray-900 bg-white">

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
        <div class="gap-4" id="about">
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
                                            <img src="https://res-console.cloudinary.com/durosbtet/media_explorer_thumbnails/16b4740f03b44237745b1ea3b1715ae3/detailed"
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
<<<<<<< HEAD
                                <h1 class ="font-bold text-2xl text-gray-800 dark:text-white"> Bingung mencari tempat
                                    belajar?</h1>
                                <p
                                    class="text-gray-700 dark:text-gray-400 md:text-xl text-xl sm:min-w-screen text-justify mt-2">
                                    Daanc Academy merupakan platform online course yang berfokus pada mata pelajaran
                                    SAINS dan MATEMATIKA.
                                    Kami menyediakan solusi bagi pelajar SMP dan SMA melalui video pembelajaran beserta
                                    artikel materi. Temukan
                                    jawaban atas keluhan Anda mulai dari mata pelajaran IPA, MTK, BIOLOGI, FISIKA, dan
                                    KIMIA melalui fitur kami!
=======
                                <h1 class ="font-bold text-2xl"> Bingung mencari tempat belajar?</h1>
                                <p
                                    class="text-gray-700 dark:text-gray-400 md:text-xl text-xl sm:min-w-screen text-justify">
                                    Daanc Academy merupakan platform online course yang berfokus pada mata pelajaran SAINS dan MATEMATIKA.
                                    Kami menyediakan solusi bagi pelajar SMP dan SMA melalui video pembelajaran beserta artikel materi. Temukan 
                                    jawaban atas keluhan Anda mulai dari mata pelajaran IPA, MTK, BIOLOGI, FISIKA, dan KIMIA melalui fitur kami! 
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
<<<<<<< HEAD
                    <h2 class="text-gray-800 dark:text-white text-4xl font-bold mb-4">Pricing </h2>
                    <p class="text-sm text-gray-500 dark:text-white">Change your plan according to your needs</p>
=======
                    <h2 class="text-gray-800 text-4xl font-bold mb-4">Pricing   </h2>
                    <p class="text-sm text-gray-500">Change your plan according to your needs</p>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                </div>

                <!-- Add grid layout -->
                <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-6 mt-12">
                    <!-- First Pricing Card -->
                    <div class="border rounded-md p-6">
<<<<<<< HEAD
                        <h3 class="text-gray-800 dark:text-white text-xl font-semibold mb-2 flex items-center">Free<span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">pengguna
                                gratis</span></h3>
                        <p class="text-sm text-gray-500">Untuk jangka pendek</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 dark:text-white text-2xl font-semibold">Rp0 <sub
=======
                        <h3 class="text-gray-800 text-xl font-semibold mb-2 flex items-center">Free<span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">pengguna gratis</span></h3>
                        <p class="text-sm text-gray-500">Untuk jangka pendek</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 text-2xl font-semibold">Rp0 <sub
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                                    class="text-gray-500 text-sm font-medium">per bulan</sub></h3>
                        </div>

                        <div class="mt-6">
<<<<<<< HEAD
                            <h4 class="text-gray-800 dark:text-white text-xl font-semibold mb-2">Manfaat</h4>
=======
                            <h4 class="text-gray-800 text-xl font-semibold mb-2">Manfaat</h4>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                            <p class="text-sm text-gray-500">Apa saja yang bisa anda peroleh</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-3 fill-green-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    5+ video pembelajaran gratis
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    5+ artikel pembelajaran gratis
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
<<<<<<< HEAD
                                    </svg>
=======
                                        {{-- <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" /> --}}
                                    </svg>
                                  
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
<<<<<<< HEAD
                                    </svg>

=======
                                        {{-- <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" /> --}}
                                    </svg>
                                    
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
<<<<<<< HEAD
                                    </svg>
=======
                                        {{-- <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" /> --}}
                                    </svg>
                                    
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                                </li>
                            </ul>

                            <button type="button"
                                class="w-full mt-6 px-5 py-2.5 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md">Buy
                                now</button>
                        </div>
                    </div>

                    <!-- Second Pricing Card -->
                    <div class="border rounded-md p-6">
<<<<<<< HEAD
                        <h3 class="text-gray-800 dark:text-white text-xl font-semibold mb-2 flex items-center">Premium <span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3">
                                pengguna premium</span></h3>
                        <p class="text-sm text-gray-500">Untuk jangka panjang</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 dark:text-white text-2xl font-semibold">Rp109.000
                                <sub class="text-gray-500 text-sm font-medium">per bulan</sub>
                            </h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 dark:text-white text-xl font-semibold mb-2">Manfaat</h4>
=======
                        <h3 class="text-gray-800 text-xl font-semibold mb-2 flex items-center">Premium <span
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md ml-3"> pengguna premium</span></h3>
                        <p class="text-sm text-gray-500">Untuk jangka panjang</p>

                        <div class="mt-6">
                            <h3 class="text-gray-800 text-2xl font-semibold">Rp109.000 <sub
                                    class="text-gray-500 text-sm font-medium">per bulan</sub></h3>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-gray-800 text-xl font-semibold mb-2">Manfaat</h4>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                            <p class="text-sm text-gray-500">Apa saja yang bisa anda peroleh</p>

                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Semua video pembelajaran gratis
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" />
                                    </svg>
                                    Semua artikel gratis
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
<<<<<<< HEAD
                                    </svg>

=======
                                        {{-- <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" /> --}}
                                    </svg>
                                    
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
<<<<<<< HEAD
                                    </svg>
=======
                                        {{-- <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" /> --}}
                                    </svg>
                                    
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                                </li>
                                <li class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        class="mr-3 fill-green-500" viewBox="0 0 24 24">
<<<<<<< HEAD
                                    </svg>

=======
                                        {{-- <path
                                            d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                            data-original="#000000" /> --}}
                                    </svg>
                                    
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
            <div class="max-w-6xl w-full bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <!-- Title -->
                <h1 class="text-3xl font-semibold text-center text-gray-800 dark:text-white mb-6">Frequently Asked
                    Questions</h1>

                <!-- FAQ Section -->
                <div class="space-y-6" id="faq">
                    <!-- FAQ 1 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
<<<<<<< HEAD
                            <span class="text-lg font-semibold text-gray-800">Apa saja fitur di platform Daanc
                                Academy?</span>
=======
                            <span class="text-lg font-semibold text-gray-800">Apa saja fitur di platform Daanc Academy?</span>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
                            <p class="text-gray-700">Daanc Academy memiliki 2 fitur utama, yaitu:</p>
<<<<<<< HEAD
                            <li class="text-gray-700">Konfigurasi Profil Akun: Anda bisa mengedit profil akun sendiri
                                mulai dari alamat hingga biodata!</li>
                            <li class="text-gray-700">Akses Materi Pembelajaran: Anda bisa mengakses materi video dan
                                artikel melalui pilihan pengguna gratis ataupun berbayar!</li>
=======
                            <li class="text-gray-700">Konfigurasi Profil Akun: Anda bisa mengedit profil akun sendiri mulai dari alamat hingga biodata!</li>
                            <li class="text-gray-700">Akses Materi Pembelajaran: Anda bisa mengakses materi video dan artikel melalui pilihan pengguna gratis ataupun berbayar!</li>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
<<<<<<< HEAD
                            <span class="text-lg font-semibold text-gray-800">Apa saja materi pembelajaran yang
                                terdapat dalam Daanc Academy?</span>
=======
                            <span class="text-lg font-semibold text-gray-800">Apa saja materi pembelajaran yang terdapat dalam Daanc Academy?</span>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
<<<<<<< HEAD
                            <p class="text-gray-700">Daanc Academy menyediakan course online khusus yang terdiri dari
                                mapel IPA dan MTK bagi pelajar SMP serta MTK, BIOLOGI, FISIKA, dan KIMIA bagi pelajar
                                SMA jurusan IPA.</code>
=======
                            <p class="text-gray-700">Daanc Academy menyediakan course online khusus yang terdiri dari mapel IPA dan MTK bagi pelajar SMP serta MTK, BIOLOGI, FISIKA, dan KIMIA bagi pelajar SMA jurusan IPA.</code>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
<<<<<<< HEAD
                            <span class="text-lg font-semibold text-gray-800">Bagaimana cara saya mengakses video dan
                                artikel pembelajaran?</span>
=======
                            <span class="text-lg font-semibold text-gray-800">Bagaimana cara saya mengakses video dan artikel pembelajaran?</span>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
<<<<<<< HEAD
                            <p class="text-gray-700">Untuk mengakses video dan artikel pembelajaran:
                            <p class= "text-gray-700"> Anda hanya perlu membuat akun, pilih paket pengguna, lalu masuk
                                ke dalam halaman Course. Pilihlah materi pembelajaran sesuai kebutuhan Anda.</p>
                            </p>
=======
                            <p class="text-gray-700">Untuk mengakses video dan artikel pembelajaran: 
                            <p class= "text-gray-700"> Anda hanya perlu membuat akun, pilih paket pengguna, lalu masuk ke dalam halaman Course. Pilihlah materi pembelajaran sesuai kebutuhan Anda.</p> </p>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="w-full text-left bg-gray-200 p-4 rounded-md shadow-sm flex justify-between items-center hover:bg-gray-300 transition-all duration-300">
<<<<<<< HEAD
                            <span class="text-lg font-semibold text-gray-800">Apa manfaat saya belajar di Daanc
                                Academy?</span>
=======
                            <span class="text-lg font-semibold text-gray-800">Apa manfaat saya belajar di Daanc Academy?</span>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
<<<<<<< HEAD
                            <p class="text-gray-700">Daanc Academy menyediakan materi pembelajaran yang fleksibel
                                dimana Anda bisa menonton video belajar dan membaca artikel sekaligus. Video kami juga
                                berasal dari sumber yang terpercaya dan teruji kualitasnya!</p>
=======
                            <p class="text-gray-700">Daanc Academy menyediakan materi pembelajaran yang fleksibel dimana Anda bisa menonton video belajar dan membaca artikel sekaligus. Video kami juga berasal dari sumber yang terpercaya dan teruji kualitasnya!</p>
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
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
<<<<<<< HEAD

=======
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
</html>
