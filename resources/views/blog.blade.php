@extends('layout.app')
@section('content')

    <main class="grow pt-10">
    <div class="container mx-auto px-10 py-8">
        <h1 class="text-3xl font-bold mb-4">Vegeta</h1>
        <div class="underline bg-yellow-400">  </div>
    </div>
    @foreach ($blogs as $items) 
    <div class="grid grid-cols-1 gap-8">
        <img src="{{ $items['img'] }}" alt="Vegeta">
        <h2 class="text-2xl font-bold mb-4. border-l-4 border-yellow-400">{{ $items['paragraft'] }}</h2>
        <p class ="text-gray-700">{{ $items['teks'] }}</p>
    </div>
    @endforeach
@endsection