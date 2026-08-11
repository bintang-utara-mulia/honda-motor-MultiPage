@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 md:py-24">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- Teks -->
            <div>
                <span class="inline-block bg-white/20 px-5 py-2 rounded-full text-sm font-bold mb-5">
                    HONDA SALES
                </span>

                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                    Motor Honda
                    <span class="text-yellow-300">
                        Impian Anda
                    </span>
                </h1>

                <p class="mt-6 text-lg md:text-xl text-red-50 leading-relaxed">
                    Temukan berbagai pilihan motor Honda dengan desain modern,
                    teknologi canggih, irit bahan bakar, serta promo menarik
                    untuk kebutuhan Anda.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#produk"
                       class="bg-white text-red-600 px-7 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                        Lihat Produk
                    </a>

                    <a href="#kontak"
                       class="border-2 border-white px-7 py-3 rounded-full font-bold hover:bg-white hover:text-red-600 transition">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            <!-- Gambar -->
            <div class="flex justify-center">
                <img
                    src="{{ asset('images/motor.jpg') }}"
                    alt="Motor Honda"
                    class="w-full max-w-xl rounded-2xl shadow-2xl"
                >
            </div>

        </div>
    </div>
</section>


<!-- ================= KEUNGGULAN ================= -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <span class="text-red-600 font-bold">
                KEUNGGULAN
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
                Kenapa Pilih Motor Honda?
            </h2>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Honda menghadirkan berbagai pilihan motor yang nyaman,
                modern, hemat bahan bakar, dan cocok untuk aktivitas sehari-hari.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-gray-50 p-8 rounded-2xl shadow hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">
                    🏍️
                </div>

                <h3 class="text-xl font-bold text-gray-900">
                    Desain Modern
                </h3>

                <p class="mt-3 text-gray-600">
                    Tampilan stylish dan modern yang cocok untuk berbagai kebutuhan.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-2xl shadow hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">
                    ⛽
                </div>

                <h3 class="text-xl font-bold text-gray-900">
                    Hemat Bahan Bakar
                </h3>

                <p class="mt-3 text-gray-600">
                    Teknologi mesin Honda membantu memberikan efisiensi bahan bakar.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-2xl shadow hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">
                    🛠️
                </div>

                <h3 class="text-xl font-bold text-gray-900">
                    Perawatan Mudah
                </h3>

                <p class="mt-3 text-gray-600">
                    Didukung layanan dan jaringan servis untuk membantu kebutuhan Anda.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ================= PRODUK ================= -->
<section id="produk" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <span class="text-red-600 font-bold">
                PRODUK HONDA
            </span>

            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mt-2">
                Pilihan Motor Honda
            </h2>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Pilih motor Honda yang sesuai dengan kebutuhan dan gaya hidup Anda.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Beat -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">
                <img
                    src="{{ asset('images/beat.jpg') }}"
                    alt="Honda Beat"
                    class="w-full h-64 object-contain bg-white"
                >

                <div class="p-7">
                    <span class="text-sm text-red-600 font-bold">
                        MATIC
                    </span>

                    <h3 class="text-2xl font-bold text-gray-900 mt-2">
                        Honda Beat
                    </h3>

                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Motor matic yang praktis, stylish, dan cocok untuk aktivitas sehari-hari.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-6 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- Vario -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">
                <img
                    src="{{ asset('images/vario.jpg') }}"
                    alt="Honda Vario"
                    class="w-full h-64 object-contain bg-white"
                >

                <div class="p-7">
                    <span class="text-sm text-red-600 font-bold">
                        MATIC
                    </span>

                    <h3 class="text-2xl font-bold text-gray-900 mt-2">
                        Honda Vario
                    </h3>

                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Pilihan motor matic dengan desain sporty dan fitur modern.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-6 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- PCX -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">
                <img
                    src="{{ asset('images/pcx.jpg') }}"
                    alt="Honda PCX"
                    class="w-full h-64 object-contain bg-white"
                >

                <div class="p-7">
                    <span class="text-sm text-red-600 font-bold">
                        PREMIUM MATIC
                    </span>

                    <h3 class="text-2xl font-bold text-gray-900 mt-2">
                        Honda PCX
                    </h3>

                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Motor premium dengan kenyamanan dan desain elegan untuk perjalanan Anda.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-6 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- ADV -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">
                <img
                    src="{{ asset('images/adv.jpg') }}"
                    alt="Honda ADV"
                    class="w-full h-64 object-contain bg-white"
                >

                <div class="p-7">
                    <span class="text-sm text-red-600 font-bold">
                        ADVENTURE
                    </span>

                    <h3 class="text-2xl font-bold text-gray-900 mt-2">
                        Honda ADV
                    </h3>

                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Motor dengan karakter tangguh yang cocok untuk berbagai perjalanan.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-6 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- Scoopy -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">
                <img
                    src="{{ asset('images/scoopy.jpg') }}"
                    alt="Honda Scoopy"
                    class="w-full h-64 object-contain bg-white"
                >

                <div class="p-7">
                    <span class="text-sm text-red-600 font-bold">
                        MATIC
                    </span>

                    <h3 class="text-2xl font-bold text-gray-900 mt-2">
                        Honda Scoopy
                    </h3>

                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Motor stylish dengan desain unik yang cocok untuk anak muda.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-6 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- CBR -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">
                <img
                    src="{{ asset('images/cbr.jpg') }}"
                    alt="Honda CBR"
                    class="w-full h-64 object-contain bg-white"
                >

                <div class="p-7">
                    <span class="text-sm text-red-600 font-bold">
                        SPORT
                    </span>

                    <h3 class="text-2xl font-bold text-gray-900 mt-2">
                        Honda CBR
                    </h3>

                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Motor sport dengan tampilan agresif dan performa yang menarik.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-6 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================= TENTANG KAMI ================= -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <span class="text-red-600 font-bold">
                    TENTANG KAMI
                </span>

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
                    Partner Terbaik Untuk Motor Honda Anda
                </h2>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Honda Sales hadir untuk membantu Anda menemukan motor Honda
                    yang sesuai dengan kebutuhan. Kami menyediakan informasi
                    mengenai produk, promo, simulasi pembelian, dan layanan
                    konsultasi.
                </p>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Dengan pelayanan yang ramah dan profesional, kami siap
                    membantu proses pembelian motor Honda Anda.
                </p>
            </div>

            <div class="bg-red-600 rounded-3xl p-10 text-white">
                <h3 class="text-2xl font-bold">
                    Konsultasi Sekarang
                </h3>

                <p class="mt-4 text-red-100">
                    Bingung memilih motor Honda?
                    Konsultasikan kebutuhan Anda bersama sales kami.
                </p>

                <a href="#kontak"
                   class="inline-block mt-6 bg-white text-red-600 px-7 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                    Hubungi Sales
                </a>
            </div>

        </div>
    </div>
</section>


<!-- ================= PROMO ================= -->
<section id="promo" class="py-20 bg-red-600 text-white">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="text-yellow-300 font-bold">
            PROMO SPESIAL
        </span>

        <h2 class="text-3xl md:text-5xl font-extrabold mt-2">
            Promo Motor Honda
        </h2>

        <p class="mt-5 max-w-2xl mx-auto text-red-100">
            Dapatkan penawaran menarik dan kemudahan pembelian motor Honda.
        </p>

        <div class="mt-10 grid md:grid-cols-3 gap-6">

            <div class="bg-white text-gray-900 rounded-2xl p-7">
                <h3 class="text-xl font-bold">
                    DP Ringan
                </h3>

                <p class="mt-3 text-gray-600">
                    Dapatkan pilihan paket pembelian dengan DP yang ringan.
                </p>
            </div>

            <div class="bg-white text-gray-900 rounded-2xl p-7">
                <h3 class="text-xl font-bold">
                    Cicilan Mudah
                </h3>

                <p class="mt-3 text-gray-600">
                    Pilihan tenor cicilan yang dapat disesuaikan dengan kebutuhan.
                </p>
            </div>

            <div class="bg-white text-gray-900 rounded-2xl p-7">
                <h3 class="text-xl font-bold">
                    Bonus Menarik
                </h3>

                <p class="mt-3 text-gray-600">
                    Nikmati berbagai penawaran dan bonus menarik selama periode promo.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ================= TESTIMONI ================= -->
<section id="testimoni" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <span class="text-red-600 font-bold">
                TESTIMONI
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
                Apa Kata Pelanggan?
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow">
                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="mt-4 text-gray-600">
                    "Pelayanannya sangat ramah dan proses pembelian motor
                    Honda saya sangat mudah."
                </p>

                <h4 class="mt-6 font-bold">
                    Athur
                </h4>

                <p class="text-sm text-gray-500">
                    Pelanggan Honda
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow">
                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="mt-4 text-gray-600">
                    "Informasinya lengkap dan sangat membantu saya memilih
                    motor yang sesuai."
                </p>

                <h4 class="mt-6 font-bold">
                    Sesil
                </h4>

                <p class="text-sm text-gray-500">
                    Pelanggan Honda
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow">
                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="mt-4 text-gray-600">
                    "Proses konsultasi cepat dan sales sangat responsif."
                </p>

                <h4 class="mt-6 font-bold">
                    Bima
                </h4>

                <p class="text-sm text-gray-500">
                    Pelanggan Honda
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ================= FAQ ================= -->
<section id="faq" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center mb-12">
            <span class="text-red-600 font-bold">
                FAQ
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
                Pertanyaan Yang Sering Ditanyakan
            </h2>
        </div>

        <div class="space-y-5">

            <details class="bg-gray-50 rounded-xl p-6">
                <summary class="font-bold cursor-pointer">
                    Apakah bisa konsultasi sebelum membeli?
                </summary>

                <p class="mt-3 text-gray-600">
                    Tentu. Anda dapat menghubungi sales untuk mendapatkan
                    informasi dan konsultasi mengenai motor Honda.
                </p>
            </details>

            <details class="bg-gray-50 rounded-xl p-6">
                <summary class="font-bold cursor-pointer">
                    Apakah tersedia simulasi cicilan?
                </summary>

                <p class="mt-3 text-gray-600">
                    Tersedia. Hubungi kami untuk mendapatkan informasi
                    mengenai pilihan cicilan yang sesuai.
                </p>
            </details>

            <details class="bg-gray-50 rounded-xl p-6">
                <summary class="font-bold cursor-pointer">
                    Bagaimana cara mendapatkan informasi promo?
                </summary>

                <p class="mt-3 text-gray-600">
                    Anda dapat menghubungi sales melalui WhatsApp untuk
                    mengetahui promo yang sedang tersedia.
                </p>
            </details>

        </div>
    </div>
</section>


<!-- ================= KONTAK ================= -->
<section id="kontak" class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12">

            <div>
                <span class="text-red-500 font-bold">
                    KONTAK
                </span>

                <h2 class="text-3xl md:text-4xl font-extrabold mt-2">
                    Hubungi Honda Sales
                </h2>

                <p class="mt-5 text-gray-400 leading-relaxed">
                    Siap membantu Anda mendapatkan motor Honda yang sesuai
                    dengan kebutuhan dan budget Anda.
                </p>

                <div class="mt-8 space-y-5">

                    <div>
                        <span class="text-red-500">
                            📞
                        </span>

                        <span class="ml-2">
                            0812-3456-7890
                        </span>
                    </div>

                    <div>
                        <span class="text-red-500">
                            📧
                        </span>

                        <span class="ml-2">
                            hondasales@email.com
                        </span>
                    </div>

                    <div>
                        <span class="text-red-500">
                            📍
                        </span>

                        <span class="ml-2">
                            Sidoarjo, Jawa Timur
                        </span>
                    </div>

                </div>
            </div>


            <!-- Form -->
            <div class="bg-white text-gray-900 rounded-2xl p-8">

                <h3 class="text-2xl font-bold">
                    Kirim Pesan
                </h3>

                <form class="mt-6 space-y-5">

                    <div>
                        <label class="block font-medium mb-2">
                            Nama
                        </label>

                        <input
                            type="text"
                            placeholder="Nama Anda"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        >
                    </div>

                    <div>
                        <label class="block font-medium mb-2">
                            Nomor WhatsApp
                        </label>

                        <input
                            type="text"
                            placeholder="08xxxxxxxxxx"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        >
                    </div>

                    <div>
                        <label class="block font-medium mb-2">
                            Pesan
                        </label>

                        <textarea
                            rows="4"
                            placeholder="Tuliskan motor yang ingin Anda tanyakan..."
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        ></textarea>
                    </div>

                    <button
                        type="button"
                        class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>
    </div>
</section>


<!-- ================= WHATSAPP ================= -->
<a
    href="https://wa.me/6281234567890"
    target="_blank"
    class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-2xl transition hover:scale-110"
    aria-label="WhatsApp"
>
    <span class="text-3xl">
        💬
    </span>
</a>

@endsection