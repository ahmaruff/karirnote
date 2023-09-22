@extends('user.layouts.base')
@section('content')
    <div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="text-3xl font-bold capitalize lg:text-6xl">
            Lembar Pencapaian Karier
        </h1>
        <hr class="my-3">
        <h2 class="text-xl capitalize lg:text-3xl">
            {{ $name }}
        </h2>
        <p class="text-lg text-gray-500 lg:text-xl">
            {{ $about }}
        </p>
    </div>
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <div class="flex flex-col items-start md:items-center md:justify-between md:flex-row">
            <h1 class="text-2xl font-bold lg:text-4xl">Target Pencapaian</h1>
            <x-modal.target-create-button/>
        </div>
        <section>
            @if (empty($target))
            <div class="py-6 mx-auto my-3 text-center border border-gray-200 rounded-lg">
                <h1 class="font-bold hover:text-gray-400 mb-3">Kamu tidak punya target</h1>
                <x-modal.target-create-button/>
            </div>
            @endif

            <ul>
            @foreach ($target as $targetitem)
                <li>
                    <div class="p-3 my-3 bg-gray-100 rounded-lg">
                        <div class="flex flex-col md:flex-row">
                            <div class="grow">
                                <p>{{$targetitem}}</p>
                            </div>
                            <div class="flex flex-row gap-3">
                                <x-modal.target-edit/>
                                <x-modal.target-delete/>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
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
