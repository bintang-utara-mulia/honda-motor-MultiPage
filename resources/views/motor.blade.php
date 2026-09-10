@extends('layouts.app')

@section('content')


<!-- HEADER -->

<section class="bg-gradient-to-r from-red-700 to-red-500 text-white">

    <div class="max-w-7xl mx-auto px-6 py-16 text-center">

        <p class="font-bold uppercase text-yellow-300">
            Produk Honda
        </p>

        <h1 class="text-4xl md:text-5xl font-extrabold mt-2">
            Pilihan Motor Honda
        </h1>

        <p class="mt-4 max-w-2xl mx-auto text-red-100">

            Pilih motor Honda yang sesuai dengan kebutuhan dan gaya
            berkendara Anda.

        </p>

    </div>

</section>


<!-- PRODUK -->

<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">


            <!-- PCX -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:-translate-y-2 transition">

                <img
                    src="{{ asset('images/pcx.jpg') }}"
                    alt="Honda PCX"
                    class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold">
                        Honda PCX
                    </h3>

                    <p class="text-gray-600 mt-2">

                        Skutik premium dengan desain elegan, nyaman,
                        dan cocok untuk perjalanan sehari-hari.

                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600 text-white
                              px-5 py-2 rounded-full font-semibold
                              hover:bg-red-700 transition">

                        Tanya Sekarang

                    </a>

                </div>

            </div>


            <!-- ADV -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:-translate-y-2 transition">

                <img
                    src="{{ asset('images/adv.jpg') }}"
                    alt="Honda ADV"
                    class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold">
                        Honda ADV
                    </h3>

                    <p class="text-gray-600 mt-2">

                        Motor bergaya adventure dengan desain sporty
                        dan nyaman digunakan untuk berbagai perjalanan.

                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600 text-white
                              px-5 py-2 rounded-full font-semibold
                              hover:bg-red-700 transition">

                        Tanya Sekarang

                    </a>

                </div>

            </div>


            <!-- SCOOPY -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:-translate-y-2 transition">

                <img
                    src="{{ asset('images/scoopy.jpg') }}"
                    alt="Honda Scoopy"
                    class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold">
                        Honda Scoopy
                    </h3>

                    <p class="text-gray-600 mt-2">

                        Skutik stylish dengan desain unik yang cocok
                        untuk aktivitas sehari-hari.

                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600 text-white
                              px-5 py-2 rounded-full font-semibold
                              hover:bg-red-700 transition">

                        Tanya Sekarang

                    </a>

                </div>

            </div>


            <!-- CBR -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:-translate-y-2 transition">

                <img
                    src="{{ asset('images/cbr.jpg') }}"
                    alt="Honda CBR"
                    class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold">
                        Honda CBR
                    </h3>

                    <p class="text-gray-600 mt-2">

                        Motor sport dengan desain agresif dan tampilan
                        sporty untuk Anda yang menyukai performa.

                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600 text-white
                              px-5 py-2 rounded-full font-semibold
                              hover:bg-red-700 transition">

                        Tanya Sekarang

                    </a>

                </div>

            </div>


            <!-- BEAT -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:-translate-y-2 transition">

                <img
                    src="{{ asset('images/motor.jpg') }}"
                    alt="Honda Beat"
                    class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold">
                        Honda Beat
                    </h3>

                    <p class="text-gray-600 mt-2">

                        Motor praktis dan ringan yang cocok untuk
                        mobilitas sehari-hari.

                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600 text-white
                              px-5 py-2 rounded-full font-semibold
                              hover:bg-red-700 transition">

                        Tanya Sekarang

                    </a>

                </div>

            </div>


            <!-- VARIO -->

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                        hover:-translate-y-2 transition">

                <img
                    src="{{ asset('images/motor.jpg') }}"
                    alt="Honda Vario"
                    class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold">
                        Honda Vario
                    </h3>

                    <p class="text-gray-600 mt-2">

                        Skutik sporty dengan desain modern dan nyaman
                        untuk menemani aktivitas Anda.

                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600 text-white
                              px-5 py-2 rounded-full font-semibold
                              hover:bg-red-700 transition">

                        Tanya Sekarang

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->

<section class="py-16 bg-red-600 text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">

            Tertarik Dengan Motor Honda?

        </h2>

        <p class="mt-4 text-red-100">

            Hubungi kami untuk mendapatkan informasi lebih lanjut.

        </p>

        <a href="{{ route('kontak') }}"
           class="inline-block mt-8 bg-white text-red-600
                  px-8 py-3 rounded-full font-bold">

            Hubungi Kami

        </a>

    </div>

</section>


@endsection