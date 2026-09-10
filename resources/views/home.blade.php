@extends('layouts.app')

@section('content')


<!-- HERO -->

<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">

    <div class="max-w-7xl mx-auto px-6 py-20
                grid md:grid-cols-2 gap-10 items-center">


        <div>

            <span class="inline-block bg-white/20 px-4 py-2
                         rounded-full text-sm font-semibold mb-5">

                HONDA MOTOR

            </span>


            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">

                Motor Honda

                <span class="text-yellow-300">
                    Impian Anda
                </span>

            </h1>


            <p class="mt-6 text-lg text-red-100 leading-relaxed">

                Temukan berbagai pilihan motor Honda dengan desain
                modern, teknologi canggih, efisien, dan nyaman untuk
                kebutuhan sehari-hari.

            </p>


            <div class="mt-8 flex flex-wrap gap-4">

                <a href="{{ route('motor') }}"
                   class="bg-white text-red-600 px-7 py-3
                          rounded-full font-bold
                          hover:bg-gray-100 transition">

                    Lihat Produk

                </a>


                <a href="{{ route('kontak') }}"
                   class="border-2 border-white px-7 py-3
                          rounded-full font-bold
                          hover:bg-white hover:text-red-600 transition">

                    Hubungi Kami

                </a>

            </div>

        </div>


        <div class="flex justify-center">

            <img
                src="{{ asset('images/motor.jpg') }}"
                alt="Motor Honda"
                class="w-full max-w-xl rounded-2xl shadow-2xl">

        </div>

    </div>

</section>


<!-- KEUNGGULAN -->

<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">

                Mengapa Honda?

            </p>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">

                Pilihan Tepat Untuk Kebutuhan Anda

            </h2>

        </div>


        <div class="grid md:grid-cols-3 gap-8">


            <div class="p-8 rounded-2xl shadow-lg border text-center
                        hover:-translate-y-2 transition">

                <div class="text-4xl mb-4">
                    🏍️
                </div>

                <h3 class="text-xl font-bold">
                    Desain Modern
                </h3>

                <p class="text-gray-600 mt-3">

                    Desain stylish dan modern yang cocok untuk berbagai
                    kebutuhan dan gaya berkendara.

                </p>

            </div>


            <div class="p-8 rounded-2xl shadow-lg border text-center
                        hover:-translate-y-2 transition">

                <div class="text-4xl mb-4">
                    ⚙️
                </div>

                <h3 class="text-xl font-bold">
                    Teknologi Canggih
                </h3>

                <p class="text-gray-600 mt-3">

                    Dilengkapi fitur modern untuk memberikan pengalaman
                    berkendara yang nyaman.

                </p>

            </div>


            <div class="p-8 rounded-2xl shadow-lg border text-center
                        hover:-translate-y-2 transition">

                <div class="text-4xl mb-4">
                    ⛽
                </div>

                <h3 class="text-xl font-bold">
                    Efisien
                </h3>

                <p class="text-gray-600 mt-3">

                    Pilihan motor Honda yang efisien untuk menemani
                    aktivitas sehari-hari.

                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->

<section class="py-16 bg-red-600 text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">

            Temukan Motor Honda Pilihan Anda

        </h2>

        <p class="mt-4 text-red-100">

            Lihat berbagai pilihan motor Honda dan dapatkan informasi
            terbaik dari kami.

        </p>


        <a href="{{ route('motor') }}"
           class="inline-block mt-8 bg-white text-red-600
                  px-8 py-3 rounded-full font-bold
                  hover:bg-gray-100">

            Lihat Produk

        </a>

    </div>

</section>


@endsection