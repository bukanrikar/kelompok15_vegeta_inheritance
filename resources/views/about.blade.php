@extends('layout.app')
@section('content')

<main class="grow py-15 justfify-center">
    <div class="grid grid-cols-1 gap-8 p-4 mt-40">
        @foreach ($data as $items)
        <div class="border border-gray-300 rounded-lg p-4">
            <ul class="flex justify-center space-x-4">
                <li><a class="text-gray-700 hover:text-gray-900">Nama: {{ $items['nama'] }}</a></li>
                <li><a class="text-gray-700 hover:text-gray-900">NIM: {{ $items['nim'] }}</a></li>
                <li><a class="text-gray-700 hover:text-gray-900">Jurusan: {{ $items['jurusan'] }}</a></li>
            </ul>
        </div>
        @endforeach
        
    </div>
</main>
    
@endsection