@extends('user.layouts.base')
@section('content')
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="text-3xl font-bold capitalize lg:text-6xl">{{ Auth::user()->name }}</h1>
        <p class="text-lg text-gray-500 lg:text-xl">{{ Auth::user()->about }}</p>
    </div>
    <div class="px-6 py-10 mx-auto my-3 bg-white shadow lg:my-6 rounded-xl">
        <h1 class="text-2xl font-bold lg:text-4xl">Goals</h1>

        <section>
            <ul>
                <li>Hola</li>
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
