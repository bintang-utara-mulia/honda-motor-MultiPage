@extends('layouts.app')

@section('content')

<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">
                Tentang Kami
            </p>

            <h1 class="text-4xl md:text-5xl font-bold mt-2">
                Partner Terbaik Untuk Motor Honda Anda
            </h1>

        </div>


        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>

                <p class="text-gray-600 leading-relaxed">

                    Honda Motor Sales hadir untuk membantu Anda menemukan
                    motor Honda yang sesuai dengan kebutuhan dan gaya
                    berkendara Anda.

                </p>

                <p class="text-gray-600 mt-5 leading-relaxed">

                    Kami memberikan informasi produk, promo, serta
                    pelayanan terbaik untuk membantu Anda mendapatkan
                    pilihan motor yang sesuai.

                </p>

            </div>


            <div class="bg-red-600 rounded-3xl p-10 text-white">

                <h2 class="text-3xl font-bold">
                    Pelayanan Terbaik
                </h2>

                <p class="mt-4 text-red-100">

                    Konsultasikan kebutuhan motor Honda Anda bersama
                    sales kami.

                </p>


                <div class="grid grid-cols-2 gap-5 mt-8">

                    <div class="bg-white/10 rounded-xl p-5">

                        <p class="text-3xl font-bold">
                            6+
                        </p>

                        <p class="text-sm mt-1">
                            Pilihan Model
                        </p>

                    </div>


                    <div class="bg-white/10 rounded-xl p-5">

                        <p class="text-3xl font-bold">
                            24/7
                        </p>

                        <p class="text-sm mt-1">
                            Konsultasi
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="py-16 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow text-center">

                <div class="text-4xl">
                    🏍️
                </div>

                <h3 class="text-xl font-bold mt-4">
                    Pilihan Motor
                </h3>

                <p class="text-gray-600 mt-3">
                    Berbagai pilihan motor Honda untuk kebutuhan Anda.
                </p>

            </div>


            <div class="bg-white p-8 rounded-2xl shadow text-center">

                <div class="text-4xl">
                    💬
                </div>

                <h3 class="text-xl font-bold mt-4">
                    Konsultasi
                </h3>

                <p class="text-gray-600 mt-3">
                    Dapatkan informasi dan konsultasi mengenai produk.
                </p>

            </div>


            <div class="bg-white p-8 rounded-2xl shadow text-center">

                <div class="text-4xl">
                    ⭐
                </div>

                <h3 class="text-xl font-bold mt-4">
                    Pelayanan Profesional
                </h3>

                <p class="text-gray-600 mt-3">
                    Kami siap membantu Anda mendapatkan motor Honda.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection