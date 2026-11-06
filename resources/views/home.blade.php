@extends('layout.app')
@section('content')

<main class="flex grow pt-10">
    <div class="container mx-auto px-4 py-8 px-10 mb-4">
        <h1 class="text-3xl font-bold mb-4">Vegeta</h1>
        <img src="img/1.png" alt="Vegeta">
        <div class="underline bg-yellow-400">  </div>
    </div> 
    <div class="grid grid-cols-1 gap-8">
        <h2 class="text-2xl font-bold m-auto">BACKGROUNDS</h2>
        <p class ="text-gray-700">{{ $utama['teks1'] }}</p>
    </div>
</main>















@endsection