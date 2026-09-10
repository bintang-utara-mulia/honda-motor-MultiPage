@extends('layouts.app')

@section('content')

<section class="py-20 bg-gray-900 text-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12">


            <!-- INFORMASI -->

            <div>

                <p class="text-red-500 font-bold uppercase">
                    Kontak Kami
                </p>

                <h1 class="text-4xl md:text-5xl font-bold mt-2">
                    Siap Membantu Anda
                </h1>

                <p class="text-gray-400 mt-5 leading-relaxed">

                    Ingin mengetahui lebih lanjut mengenai motor Honda?
                    Hubungi kami untuk mendapatkan informasi produk,
                    promo, dan konsultasi.

                </p>


                <div class="mt-8 space-y-5">

                    <div>

                        <p class="font-bold">
                            📱 WhatsApp
                        </p>

                        <p class="text-gray-400 mt-1">
                            0812-3456-7890
                        </p>

                    </div>


                    <div>

                        <p class="font-bold">
                            📧 Email
                        </p>

                        <p class="text-gray-400 mt-1">
                            info@hondasales.com
                        </p>

                    </div>


                    <div>

                        <p class="font-bold">
                            📍 Lokasi
                        </p>

                        <p class="text-gray-400 mt-1">
                            Sidoarjo, Jawa Timur
                        </p>

                    </div>

                </div>


                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="inline-block mt-8 bg-green-500
                           hover:bg-green-600 text-white
                           px-7 py-3 rounded-full font-bold">

                    Chat WhatsApp

                </a>

            </div>


            <!-- FORM -->

            <div class="bg-white text-gray-900 rounded-2xl p-8">

                <h2 class="text-2xl font-bold">
                    Hubungi Sales
                </h2>


                <form class="mt-6 space-y-4">


                    <input
                        type="text"
                        placeholder="Nama Anda"
                        class="w-full border rounded-lg px-4 py-3
                               outline-none focus:ring-2
                               focus:ring-red-500">


                    <input
                        type="text"
                        placeholder="Nomor WhatsApp"
                        class="w-full border rounded-lg px-4 py-3
                               outline-none focus:ring-2
                               focus:ring-red-500">


                    <textarea
                        rows="5"
                        placeholder="Tulis pesan Anda..."
                        class="w-full border rounded-lg px-4 py-3
                               outline-none focus:ring-2
                               focus:ring-red-500"></textarea>


                    <button
                        type="button"
                        class="w-full bg-red-600 text-white
                               py-3 rounded-lg font-bold
                               hover:bg-red-700 transition">

                        Kirim Pesan

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection