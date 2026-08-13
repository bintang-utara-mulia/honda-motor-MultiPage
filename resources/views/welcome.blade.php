@extends('layouts.app')

@section('content')

<!-- ========================================================= -->
<!-- HERO -->
<!-- ========================================================= -->

<section class="bg-gradient-to-r from-red-600 to-red-800 text-white">

    <div class="max-w-7xl mx-auto px-8 py-24
                flex flex-col lg:flex-row items-center">

        <!-- KIRI -->

        <div class="lg:w-1/2">

            <span class="inline-block bg-white/20 px-4 py-2
                         rounded-full text-sm font-semibold mb-5">

                HONDA MOTOR

            </span>

            <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight">

                Temukan Motor Honda
                <span class="text-yellow-300">
                    Impian Anda
                </span>

            </h1>

            <p class="mt-6 text-lg text-red-100">

                Dealer Motor Honda dengan pilihan produk lengkap,
                promo menarik, pelayanan profesional, dan proses
                pembelian yang mudah.

            </p>


            <div class="mt-10 flex gap-4 flex-wrap">

                <a href="/motor"
                   class="bg-white text-red-600 px-8 py-3
                          rounded-full font-bold
                          hover:bg-gray-100 transition">

                    🏍️ Lihat Motor Honda

                </a>

                <a href="/motor#kontak"
                   class="border-2 border-white px-8 py-3
                          rounded-full font-bold
                          hover:bg-white hover:text-red-600 transition">

                    Hubungi Kami

                </a>

            </div>

        </div>


        <!-- KANAN -->

        <div class="lg:w-1/2 mt-12 lg:mt-0 flex justify-center">

            <img
                src="{{ asset('images/motor.jpg') }}"
                alt="Honda Motor"
                class="w-full max-w-2xl drop-shadow-2xl">

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- TENTANG -->
<!-- ========================================================= -->

<section class="max-w-7xl mx-auto px-8 py-20 text-center">

    <h2 class="text-4xl font-bold text-gray-800">
        Selamat Datang di Honda Motor Sales
    </h2>

    <p class="mt-6 text-gray-600 max-w-3xl mx-auto leading-8">

        Kami menyediakan berbagai pilihan Motor Honda dengan
        kualitas terbaik, promo menarik, serta pelayanan profesional
        untuk membantu Anda mendapatkan kendaraan impian.

    </p>

</section>


<!-- ========================================================= -->
<!-- PILIHAN MOTOR -->
<!-- ========================================================= -->

<section class="max-w-7xl mx-auto px-8 pb-24">

    <div class="grid md:grid-cols-2 gap-10">


        <!-- MOTOR -->

        <a href="/motor"
           class="bg-white rounded-3xl shadow-xl overflow-hidden
                  hover:-translate-y-2 transition duration-300">

            <img
                src="{{ asset('images/motor.jpg') }}"
                class="w-full h-72 object-cover"
                alt="Motor Honda">

            <div class="p-8">

                <h3 class="text-3xl font-bold text-red-600">
                    🏍️ Motor Honda
                </h3>

                <p class="mt-4 text-gray-600">

                    Temukan berbagai pilihan Motor Honda mulai dari
                    PCX, ADV, Scoopy, CBR dan berbagai pilihan lainnya
                    dengan promo menarik.

                </p>

            </div>

        </a>


        <!-- PCX -->

        <a href="/motor#produk"
           class="bg-white rounded-3xl shadow-xl overflow-hidden
                  hover:-translate-y-2 transition duration-300">

            <img
                src="{{ asset('images/pcx.jpg') }}"
                class="w-full h-72 object-cover"
                alt="Honda PCX">

            <div class="p-8">

                <h3 class="text-3xl font-bold text-red-600">
                    🏍️ Honda PCX
                </h3>

                <p class="mt-4 text-gray-600">

                    Skutik premium dengan desain elegan dan nyaman
                    untuk menemani berbagai aktivitas Anda.

                </p>

            </div>

        </a>

    </div>

</section>

@endsection