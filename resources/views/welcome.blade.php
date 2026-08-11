@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="bg-gradient-to-r from-red-600 to-red-800 text-white">

    <div class="max-w-7xl mx-auto px-8 py-24 flex flex-col lg:flex-row items-center">

        <!-- Kiri -->
        <div class="lg:w-1/2">

            <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight">
                Temukan Honda Impian Anda
            </h1>

            <p class="mt-6 text-lg text-red-100">
                Dealer resmi Mobil & Motor Honda dengan promo terbaik,
                pelayanan profesional, dan proses pembelian yang mudah.
            </p>

            <div class="mt-10 flex gap-4">

                <a href="/mobil"
                   class="bg-white text-red-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                    🚗 Mobil Honda
                </a>

                <a href="/motor"
                   class="border-2 border-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-red-600 transition">
                    🏍️ Motor Honda
                </a>

            </div>

        </div>

        <!-- Kanan -->
        <div class="lg:w-1/2 mt-12 lg:mt-0 flex justify-center">

            <img src="{{ asset('images/civic.jpg') }}"
                 alt="Honda"
                 class="w-full max-w-2xl drop-shadow-2xl">

        </div>

    </div>

</section>

<!-- Tentang -->
<section class="max-w-7xl mx-auto px-8 py-20 text-center">

    <h2 class="text-4xl font-bold text-gray-800">
        Selamat Datang di Honda Sales
    </h2>

    <p class="mt-6 text-gray-600 max-w-3xl mx-auto leading-8">
        Kami menyediakan berbagai pilihan Mobil Honda dan Motor Honda
        dengan kualitas terbaik, promo menarik, serta pelayanan yang
        profesional untuk membantu Anda mendapatkan kendaraan impian.
    </p>

</section>

<!-- Pilihan -->
<section class="max-w-7xl mx-auto px-8 pb-24">

    <div class="grid md:grid-cols-2 gap-10">

        <!-- Mobil -->
        <a href="/mobil"
           class="bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition duration-300">

            <img src="{{ asset('images/car.jpg') }}"
                 class="w-full h-72 object-cover">

            <div class="p-8">

                <h3 class="text-3xl font-bold text-red-600">
                    🚗 Mobil Honda
                </h3>

                <p class="mt-4 text-gray-600">
                    Jelajahi berbagai pilihan Mobil Honda terbaru dengan
                    desain modern, fitur lengkap, dan promo terbaik.
                </p>

            </div>

        </a>

        <!-- Motor -->
        <a href="/motor"
           class="bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition duration-300">

            <img src="{{ asset('images/motor.jpg') }}"
                 class="w-full h-72 object-cover">

            <div class="p-8">

                <h3 class="text-3xl font-bold text-red-600">
                    🏍️ Motor Honda
                </h3>

                <p class="mt-4 text-gray-600">
                    Temukan motor Honda favorit Anda mulai dari Beat,
                    Vario, PCX hingga CBR dengan berbagai promo menarik.
                </p>

            </div>

        </a>

    </div>

</section>

@endsection