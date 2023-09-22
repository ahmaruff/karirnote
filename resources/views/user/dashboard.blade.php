@extends('user.layouts.base')
@section('content')

    <div class="flex flex-col items-stretch justify-between lg:flex-row-reverse">
        <div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
            <p>menu</p>
        </div>
        <div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow h-max lg:my-6 rounded-xl lg:mr-6">
            <h1 class="text-3xl font-bold capitalize lg:text-6xl">{{ Auth::user()->name }}</h1>
            <p class="text-lg text-gray-500 lg:text-xl">{{ Auth::user()->about }}</p>
        </div>
    </div>
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="text-2xl font-bold lg:text-4xl">Goals</h1>

        <section>
            <ul>
                <li>
                    <div class="p-3 my-3 bg-gray-100 rounded-lg">
                        <div class="flex flex-col md:flex-row">
                            <div class="grow">
                                <p>Saya Ingin menjadi CTO Start Up di usia 28 tahun</p>
                            </div>
                            <div class="flex flex-row gap-3">
                                <x-modal.modal-edit-goals />
                                <x-modal.modal-hapus-goals />
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="p-3 my-3 bg-gray-100 rounded-lg">
                        <p>Saya Ingin menjadi CTO Start Up di usia 28 tahun</p>
                    </div>
                </li>
            </ul>
        </section>
    </div>
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="text-2xl font-bold lg:text-4xl">Projects</h1>

        <section>
            <h1>HOla</h1>
        </section>
    </div>
@endsection
