@extends('user.layouts.base')
@section('content')
<div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
    <h1 class="text-3xl font-bold capitalize lg:text-6xl">
        Profil Pengguna
    </h1>
</div>
<div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
    <h1 class="text-xl font-bold lg:text-2xl">Profil</h1>
    <p class="text-gray-500 text-md">
        Update profil akun dan alamat email kamu
    </p>
    <div>
        <form action="{{route('user.profile.update')}}" class="mt-6" method="post">
            @csrf
            @method('PUT')
            <div class="w-full my-3">
                <label class="text-gray-700" for="name">Nama</label>
                <input type="text" name="name" value="{{$user->name}}" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
            </div>
            <div class="w-full my-3">
                <label class="text-gray-700" fname">Tanggal</label>
                <input type="email" name="email" value="{{$user->email}}" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
            </div>
            <div class="my-3">
                <label class="text-gray-700" for="about">Tentang Saya</label>
                <textarea name="about" rows="3" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">{{$user->about}}</textarea>
            </div>
            <div class="flex flex-row justify-end gap-3 mt-6">
                <button type="submit" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<div class="w-full px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
    <h1 class="text-xl font-bold lg:text-2xl">Update Password</h1>
    <p class="text-gray-500 text-md">
        Pastikan akunmu menggunakan password yang panjang dan memiliki banyak kombinasi agar lebih aman
    </p>
    <div>
        <form action="{{ route('password.update') }}" class="mt-6" method="post">
            @csrf
            @method('PUT')
            <div class="w-full my-3">
                <label class="text-gray-700" for="current_password">Password Saat Ini</label>
                <input type="password" name="current_password" value="" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
            </div>
            <div class="w-full my-3">
                <label class="text-gray-700" name="password">Password Baru</label>
                <input type="password" name="password" value="" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
            </div>
            <div class="w-full my-3">
                <label class="text-gray-700" name="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" value="" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
            </div>
            <div class="flex flex-row justify-end gap-3 mt-6">
                <button type="submit" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
