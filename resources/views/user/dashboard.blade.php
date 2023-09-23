@extends('user.layouts.base')
@section('content')
    <div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="text-3xl font-bold capitalize lg:text-6xl">
            Lembar Pencapaian Karier
        </h1>
        <hr class="my-3">
        <h2 class="text-xl capitalize lg:text-3xl font-semibold">
            {{ $name }}
        </h2>
        <p class="text-sm text-gray-500 lg:text-md">
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
                <h1 class="mb-3 font-bold hover:text-gray-400">Kamu tidak punya target</h1>
                <x-modal.target-create-button/>
            </div>
            @endif

            <ul>
            @foreach ($target as $target_item)
                <li>
                    <div class="p-3 my-3 bg-gray-100 rounded-lg">
                        <div class="flex flex-col md:flex-row">
                            <div class="grow">
                                <p>
                                    {{$target_item['target']}}
                                </p>
                            </div>
                            <div class="flex flex-row gap-3">
                                <x-modal.target-edit id="{{$target_item['id']}}" target="{{$target_item['target']}}"/>
                                <x-modal.target-delete id="{{$target_item['id']}}"  target="{{$target_item['target']}}"/>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </section>
    </div>
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <div class="flex flex-col items-start md:items-center md:justify-between md:flex-row">
            <h1 class="text-2xl font-bold lg:text-4xl">Proyek</h1>
            <a href="{{route('user.project.create')}}" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                Tambah
            </a>
        </div>

        @if (empty($projects))
        <div class="py-6 mx-auto my-3 text-center border border-gray-200 rounded-lg">
            <h1 class="mb-3 font-bold hover:text-gray-400">Kamu belum memiliki capaian proyek</h1>
            <a href="{{route('user.project.create')}}" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                Tambah
            </a>
        </div>
        @else
        <section>
            @foreach ($projects as $project)
            <section class="p-3 my-3 bg-gray-100 rounded-lg">
                <div class="flex flex-row justify-between">
                    <h3 class="text-xl font-bold text-gray-400">
                        {{ \Carbon\Carbon::parse($project['date'], 'Asia/Jakarta')->format('d F Y')}}
                    </h3>
                    <div class="flex flex-row gap-3">
                        <a href="{{route('user.project.edit', $project['id'])}}">
                            <i class="text-lg text-yellow-400 bi bi-pencil-square hover:text-yellow-600"></i>
                        </a>
                        <x-modal.project-delete id="{{$project['id']}}" />
                    </div>
                </div>
                <hr class="my-2">
                <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                    <div>
                        <h4 class="text-lg font-bold text-sky-600 hover:text-sky-400">
                            Proyek (background)
                        </h4>
                        <p class="text-gray-800 break-words hover:text-black">{{ $project['project_background'] }}</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-sky-600 hover:text-sky-400">
                            Kontribusi
                        </h4>
                        <p class="text-gray-800 break-words hover:text-black">{{ $project['my_contribution'] }}</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-sky-600 hover:text-sky-400">
                            Dampak
                        </h4>
                        <p class="text-gray-800 break-words hover:text-black">{{ $project['impact'] }}</p>
                </div>
                </div>
            </section>
            @endforeach
        </section>
        @endif
    </div>

    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <div class="flex flex-col items-start md:items-center md:justify-between md:flex-row">
            <h1 class="text-2xl font-bold lg:text-4xl">Skill/Keterampilan</h1>
            <a href="{{route('user.skill.create')}}" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                Tambah
            </a>
        </div>

        @if (empty($skills))
        <div class="py-6 mx-auto my-3 text-center border border-gray-200 rounded-lg">
            <h1 class="mb-3 font-bold hover:text-gray-400">Kamu belum memiliki keterampilan apapun</h1>
            <a href="{{route('user.skill.create')}}" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                Tambah
            </a>
        </div>
        @else
        <section>
            <div class="grid grid-cols-1 gap-6 my-3 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($skills as $skill)
                <section class="p-6 bg-gray-100 rounded-lg">
                    <h1 class="text-xl font-bold text-sky-600 hover:text-sky-400">
                        {{ $skill['skill'] }}
                    </h1>
                    <div>
                        <p class="break-words">
                            {{ $skill['description'] }}
                        </p>
                    </div>
                    <div class="flex flex-row gap-3">
                        <a href="{{route('user.skill.edit', $skill['id'])}}">
                            <i class="text-lg text-yellow-400 bi bi-pencil-square hover:text-yellow-600"></i>
                        </a>
                        <x-modal.skill-delete id="{{$skill['id']}}" />
                    </div>
                </section>
                @endforeach
            </div>
        </section>
        @endif
    </div>

    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <div class="flex flex-col items-start md:items-center md:justify-between md:flex-row">
            <h1 class="text-2xl font-bold lg:text-4xl">Capaian Personal</h1>
            <x-modal.brag-create-button />
        </div>

        @if (empty($brags))
        <div class="py-6 mx-auto my-3 text-center border border-gray-200 rounded-lg">
            <h1 class="mb-3 font-bold hover:text-gray-400">Kamu belum memiliki capaian pribadi apapun</h1>
            <x-modal.brag-create-button />
        </div>
        @else
        <section>
            <div class="grid grid-cols-1 gap-6 my-3 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($brags as $brag)
                <section class="p-6 bg-gray-100 rounded-lg">
                    <h1 class="text-xl font-bold text-sky-600 hover:text-sky-400">
                        {{ \Carbon\Carbon::parse($brag['date'], 'Asia/Jakarta')->format('d F Y')}}
                    </h1>
                    <div>
                        <p class="break-words">
                            {{ $brag['brag'] }}
                        </p>
                    </div>
                    <div class="flex flex-row gap-3">
                        <x-modal.brag-edit id="{{$brag['id']}}" brag="{{$brag['brag']}}" date="{{$brag['date']}}" />
                        <x-modal.brag-delete id="{{$brag['id']}}" />
                    </div>
                </section>
                @endforeach
            </div>
        </section>
        @endif
    </div>
@endsection
