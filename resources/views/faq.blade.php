@extends('layouts.app')

@section('content')

<section class="py-20 bg-white">

    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">
                FAQ
            </p>

            <h1 class="text-4xl md:text-5xl font-bold mt-2">
                Pertanyaan Umum
            </h1>

        </div>


        <div class="space-y-5">


            <details class="border rounded-xl p-5">

                <summary class="font-bold cursor-pointer">

                    Bagaimana cara mendapatkan informasi harga motor?

                </summary>

                <p class="text-gray-600 mt-3">

                    Silakan hubungi kami melalui halaman kontak untuk
                    mendapatkan informasi harga dan penawaran terbaru.

                </p>

            </details>


            <details class="border rounded-xl p-5">

                <summary class="font-bold cursor-pointer">

                    Apakah tersedia simulasi kredit motor?

                </summary>

                <p class="text-gray-600 mt-3">

                    Kami dapat membantu memberikan informasi dan simulasi
                    pembelian motor sesuai kebutuhan Anda.

                </p>

            </details>


            <details class="border rounded-xl p-5">

                <summary class="font-bold cursor-pointer">

                    Bagaimana cara melakukan konsultasi?

                </summary>

                <p class="text-gray-600 mt-3">

                    Anda dapat menghubungi sales melalui halaman kontak
                    yang tersedia.

                </p>

            </details>


            <details class="border rounded-xl p-5">

                <summary class="font-bold cursor-pointer">

                    Motor Honda apa saja yang tersedia?

                </summary>

                <p class="text-gray-600 mt-3">

                    Tersedia berbagai pilihan seperti Honda PCX, ADV,
                    Scoopy, CBR, Beat, dan Vario.

                </p>

            </details>


        </div>


        <div class="text-center mt-12">

            <a href="{{ route('kontak') }}"
               class="inline-block bg-red-600 text-white
                      px-7 py-3 rounded-full font-bold
                      hover:bg-red-700">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>

@endsection