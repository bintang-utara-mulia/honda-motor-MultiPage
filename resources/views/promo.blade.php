@extends('layouts.app')

@section('content')

<section class="py-20 bg-red-600 text-white">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <p class="text-yellow-300 font-bold uppercase">
            Promo Spesial
        </p>

        <h1 class="text-4xl md:text-5xl font-extrabold mt-2">
            Promo Motor Honda
        </h1>

        <p class="mt-5 max-w-2xl mx-auto text-red-100">

            Dapatkan berbagai penawaran menarik untuk pembelian
            motor Honda.

        </p>


        <div class="mt-10 grid md:grid-cols-3 gap-6">


            <div class="bg-white text-gray-900 rounded-2xl p-8">

                <div class="text-4xl">
                    💰
                </div>

                <h2 class="text-2xl font-bold mt-4">
                    DP Ringan
                </h2>

                <p class="mt-3 text-gray-600">

                    Dapatkan pilihan paket pembelian motor Honda
                    dengan DP yang ringan.

                </p>

                <a href="{{ route('kontak') }}"
                   class="inline-block mt-6 bg-red-600 text-white
                          px-6 py-2 rounded-full font-semibold">

                    Tanya Promo

                </a>

            </div>


            <div class="bg-white text-gray-900 rounded-2xl p-8">

                <div class="text-4xl">
                    📅
                </div>

                <h2 class="text-2xl font-bold mt-4">
                    Cicilan Mudah
                </h2>

                <p class="mt-3 text-gray-600">

                    Pilihan tenor cicilan yang dapat disesuaikan
                    dengan kebutuhan Anda.

                </p>

                <a href="{{ route('kontak') }}"
                   class="inline-block mt-6 bg-red-600 text-white
                          px-6 py-2 rounded-full font-semibold">

                    Tanya Promo

                </a>

            </div>


            <div class="bg-white text-gray-900 rounded-2xl p-8">

                <div class="text-4xl">
                    🎁
                </div>

                <h2 class="text-2xl font-bold mt-4">
                    Bonus Menarik
                </h2>

                <p class="mt-3 text-gray-600">

                    Nikmati berbagai penawaran dan bonus menarik
                    selama periode promo.

                </p>

                <a href="{{ route('kontak') }}"
                   class="inline-block mt-6 bg-red-600 text-white
                          px-6 py-2 rounded-full font-semibold">

                    Tanya Promo

                </a>

            </div>

        </div>

    </div>

</section>

@endsection