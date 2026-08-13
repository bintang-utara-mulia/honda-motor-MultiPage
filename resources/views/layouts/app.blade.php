<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Honda Motor Sales</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- ==================== NAVBAR ==================== -->

    <nav class="sticky top-0 z-50 bg-red-600 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex justify-between items-center">

                <!-- Logo -->
                <a href="/" class="text-2xl font-bold text-white">
                    Honda Motor
                </a>

                <!-- Menu Desktop -->
                <ul class="hidden md:flex gap-6 text-white font-medium">

                    <li>
                        <a href="/"
                           class="hover:text-gray-200 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#produk"
                           class="hover:text-gray-200 transition">
                            Produk
                        </a>
                    </li>

                    <li>
                        <a href="#promo"
                           class="hover:text-gray-200 transition">
                            Promo
                        </a>
                    </li>

                    <li>
                        <a href="#testimoni"
                           class="hover:text-gray-200 transition">
                            Testimoni
                        </a>
                    </li>

                    <li>
                        <a href="#faq"
                           class="hover:text-gray-200 transition">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#kontak"
                           class="hover:text-gray-200 transition">
                            Kontak
                        </a>
                    </li>

                </ul>

                <!-- Tombol Menu Mobile -->
                <button
                    class="md:hidden text-white text-3xl focus:outline-none"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                    aria-label="Buka menu">

                    ☰

                </button>

            </div>


            <!-- ==================== MENU MOBILE ==================== -->

            <div id="mobile-menu"
                 class="hidden md:hidden mt-4 border-t border-red-500 pt-4">

                <ul class="flex flex-col gap-3 text-white font-medium">

                    <li>
                        <a href="/"
                           class="block py-2 hover:bg-red-700 rounded px-3">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#produk"
                           class="block py-2 hover:bg-red-700 rounded px-3">
                            Produk
                        </a>
                    </li>

                    <li>
                        <a href="#promo"
                           class="block py-2 hover:bg-red-700 rounded px-3">
                            Promo
                        </a>
                    </li>

                    <li>
                        <a href="#testimoni"
                           class="block py-2 hover:bg-red-700 rounded px-3">
                            Testimoni
                        </a>
                    </li>

                    <li>
                        <a href="#faq"
                           class="block py-2 hover:bg-red-700 rounded px-3">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#kontak"
                           class="block py-2 hover:bg-red-700 rounded px-3">
                            Kontak
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- ==================== ISI LANDING PAGE ==================== -->

    @yield('content')


    <!-- ==================== FOOTER ==================== -->

    <footer class="bg-gray-900 text-white py-10 mt-20">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <h2 class="text-2xl font-bold">
                Honda Motor Sales
            </h2>

            <p class="mt-3 text-gray-400">
                Sales Motor Honda Terpercaya
            </p>

            <p class="mt-2 text-gray-400">
                Siap membantu Anda menemukan motor Honda terbaik.
            </p>

            <div class="mt-6 flex flex-col md:flex-row justify-center gap-4 text-sm">

                <span>
                    📞 0812-3456-7890
                </span>

                <span>
                    📧 hondasales@email.com
                </span>

                <span>
                    📍 Sidoarjo, Jawa Timur
                </span>

            </div>

            <p class="mt-6 text-sm text-gray-500">
                © 2026 Honda Motor Sales. All Rights Reserved.
            </p>

        </div>

    </footer>


    <!-- ==================== WHATSAPP FLOATING ==================== -->

    <a
        href="https://wa.me/6281234567890"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600
               text-white w-16 h-16 rounded-full
               flex items-center justify-center
               shadow-lg text-3xl transition duration-300 z-50"
        aria-label="Hubungi WhatsApp">

        💬

    </a>

</body>

</html>