@extends('user.layouts.base')
@section('content')
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="mb-3 text-2xl font-bold lg:text-4xl">Edit Skill</h1>

        <section>
            <form action="{{route('user.skill.update', $skill->id)}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="flex flex-col gap-3 md:flex-row">
                    <div class="w-full md:w-3/4">
                        <label class="text-gray-700" for="title">Skill</label>
                        <input type="text" name="skill" value="{{$skill->skill}}" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
                    </div>
                    <div class="w-full md:w-1/4">
                        <label class="text-gray-700" for="title">Tanggal</label>
                        <input type="date" name="date" value="{{$skill->date}}" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
                    </div>
                </div>
                <div class="my-3">
                    <label class="text-gray-700" for="description">Deskripsi</label>
                    <textarea name="description" id="" rows="3" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">{{$skill->description}}</textarea>
                </div>
                <div class="flex flex-row justify-end gap-3 mt-6">
                    <a href="{{route('user.dashboard')}}" class="px-6 py-2 font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                        Kembali
                    </a>
                    <button type="submit" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                        Simpan
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
