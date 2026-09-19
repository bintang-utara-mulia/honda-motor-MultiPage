<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Honda Motor</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">


    <!-- NAVBAR -->

    <nav class="sticky top-0 z-50 bg-red-600 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex justify-between items-center">


                <!-- LOGO -->

                <a href="{{ route('home') }}"
                   class="text-2xl font-bold text-white">

                    Honda Motor

                </a>


                <!-- MENU DESKTOP -->

                <ul class="hidden md:flex gap-6 text-white font-medium">

                    <li>
                        <a href="{{ route('home') }}"
                           class="hover:text-gray-200 transition">

                            Home

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('motor') }}"
                           class="hover:text-gray-200 transition">

                            Produk

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('tentang') }}"
                           class="hover:text-gray-200 transition">

                            Tentang

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('promo') }}"
                           class="hover:text-gray-200 transition">

                            Promo

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('testimoni') }}"
                           class="hover:text-gray-200 transition">

                            Testimoni

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('faq') }}"
                           class="hover:text-gray-200 transition">

                            FAQ

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('kontak') }}"
                           class="hover:text-gray-200 transition">

                            Kontak

                        </a>
                    </li>

                </ul>


                <!-- TOMBOL MOBILE -->

                <button
                    class="md:hidden text-white text-3xl focus:outline-none"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                    aria-label="Buka menu">

                    ☰

                </button>

            </div>


            <!-- MENU MOBILE -->

            <div id="mobile-menu"
                 class="hidden md:hidden mt-4 border-t border-red-500 pt-4">

                <ul class="flex flex-col gap-2 text-white font-medium">

                    <li>
                        <a href="{{ route('home') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            Home

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('motor') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            Produk

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('tentang') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            Tentang

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('promo') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            Promo

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('testimoni') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            Testimoni

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('faq') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            FAQ

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('kontak') }}"
                           class="block py-2 px-3 hover:bg-red-700 rounded">

                            Kontak

                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- ISI HALAMAN -->

    @yield('content')


    <!-- FOOTER -->

    <footer class="bg-gray-900 text-white py-10 mt-20">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <h2 class="text-2xl font-bold">

                Honda Motor

            </h2>

            <p class="mt-3 text-gray-400">

                Dealer Motor Honda Terpercaya

            </p>

            <p class="mt-2 text-gray-400">

                Siap membantu Anda menemukan motor Honda terbaik.

            </p>


            <div class="mt-6 flex flex-col md:flex-row justify-center gap-4 text-sm">

                <span>
                    📞 0812-3456-7890
                </span>

                <span>
                    📧 info@hondasales.com
                </span>

                <span>
                    📍 Sidoarjo, Jawa Timur
                </span>

            </div>


            <p class="mt-6 text-sm text-gray-500">

                © 2026 Honda Motor. All Rights Reserved.

            </p>

        </div>

    </footer>


    <!-- WHATSAPP -->

    <a
        href="https://wa.me/6281234567890"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600
               text-white w-16 h-16 rounded-full
               flex items-center justify-center
               text-3xl shadow-2xl transition z-50"
        aria-label="Hubungi WhatsApp">

        💬

    </a>


</body>

</html>