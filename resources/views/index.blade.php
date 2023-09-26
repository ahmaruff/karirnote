@extends('layouts.base')
@section('content')
<header class="bg-white">
    @if (Auth::user())
    @include('user.layouts.nav')
    @else
    @include('layouts.nav')
    @endif
    <div class="container px-6 py-16 mx-auto">
        <div class="flex flex-col-reverse items-center justify-center gap-3 md:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl">Catat <span class="text-blue-600">pencapaian</span> kariermu mulai sekarang!</h1>

                    <p class="mt-3 text-gray-600">
                        Dengan KarirNote, kamu bisa mencatat pencapaian kariermu dengan mudah, pantau perkembanganmu, dan bagikan prestasimu bersama ribuan profesional lainnya. Yuk, mulai mencatat sekarang!
                    </p>

                    <a href="#">
                        <button class="w-full px-5 py-2 mt-6 tracking-wider text-white transition-colors duration-300 transform bg-blue-600 rounded-lg text-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Langganan Sekarang</button>
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                <img src="/assets/img/hero2.png" alt="hero image" class="w-auto h-full max-w-xs lg:max-w-md">
            </div>
        </div>
    </div>
</header>
<section class="bg-white">
    <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
        <h2 class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl">
            Platform Pencatatan Perjalanan Karir untuk mahasiswa dan <span class="text-blue-500">profesional muda</span>
        </h2>

        <p class="max-w-4xl mt-6 text-center text-gray-500">
            Sebuah platform pencatatan perjalanan karir yang akan membantu Anda meraih sukses lebih besar.
            Dengan KarirNote, Anda bisa melakukan lebih dari sekedar mengejar impian karier Anda - Anda bisa mendokumentasikannya.
        </p>
    </div>
</section>

<section class="bg-white">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl">
                <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full">
                    <i class="bi bi-journal-text font-bold text-xl"></i>
                </span>

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Catat Goals dan Target</h1>

                <p class="text-gray-500">
                    Tetapkan dan pantau tujuan karier Anda secara teratur, sehingga Anda selalu tahu arah yang Anda tuju.
                </p>
            </div>
            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl">
                <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full">
                    <i class="bi bi-fast-forward font-bold text-xl"></i>
                </span>

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Rekam Proyek dan Hasilnya</h1>

                <p class="text-gray-500">
                    Simpan catatan lengkap tentang setiap proyek yang Anda kerjakan, serta hasilnya yang mengesankan
                </p>
            </div>
            <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl">
                <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full">
                    <i class="bi bi-bar-chart font-bold text-xl"></i>
                </span>

                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Lacak Kemajuan Skill</h1>

                <p class="text-gray-500">
                    Pantau perkembangan kemampuan Anda dari waktu ke waktu, dan tingkatkan keterampilan yang diperlukan.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="bg-white lg:py-24">
    <div class="container px-6 py-8 mx-auto">
        <div class="xl:items-center xl:-mx-8 xl:flex">
            <div class="flex flex-col items-center xl:items-start xl:mx-8 xl:w-1/3">
                <h1 class="text-2xl font-medium text-gray-800 capitalize lg:text-3xl">Biaya Langganan</h1>

                <div class="mt-4">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                </div>

                <p class="mt-4 font-medium text-gray-500">
                    Dengan KarirNote, Anda memiliki pilihan untuk langganan bulanan atau tahunan.

                    <br> <br>
                    keduanya memberikan Anda akses penuh ke semua fitur kami yang luar biasa.
                    Tidak peduli apa yang Anda pilih, ini adalah investasi dalam masa depan karier Anda.
                </p>
            </div>

            <div class="flex-1 xl:mx-8 xl:w-2/3">
                <div class="mt-8 space-y-8 md:-mx-4 md:flex md:items-center md:justify-center md:space-y-0 xl:mt-0">
                    <div class="max-w-sm mx-auto border rounded-lg md:mx-4">
                        <div class="p-6">
                            <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-2xl">Bulanan</h1>

                            <p class="mt-4 text-gray-500">
                                Akses tanpa batas selama satu bulan. Mudah berhenti kapan saja.
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold text-gray-700 sm:text-3xl">Rp.20.000,- <span class="text-base font-medium">/Bulan</span></h2>
                            <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="max-w-sm mx-auto border rounded-lg md:mx-4">
                        <div class="p-6">
                            <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-2xl">Tahunan</h1>

                            <p class="mt-4 text-gray-500">
                                Hemat lebih banyak dengan akses sepanjang tahun. Ekstra diskon 10%.
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold text-gray-700 sm:text-3xl">Rp.215.000,- <span class="text-base font-medium">/Tahun</span></h2>
                            <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
