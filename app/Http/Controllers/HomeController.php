<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class HomeController extends Controller{
    public function home(){
    $utama=[
        'teks1' => 'Vegeta dari Dragon Ball. Vegeta adalah karakter fiksi dalam seri manga Dragon Ball dan anime Dragon Ball Z ciptaan Akira Toriyama. Vegeta pertama kali muncul sebagai antagonis utama dalam bab 204 Goodbye Son Goku (さようなら孫悟空, Sayōnara Son Gokū), yang dipublikasikan di Weekly Shonen Jump pada 19 Desember 1988,[1] dia mencari Dragon Ball pengabul keinginan untuk meraih keabadian. Ia pertama kali muncul di anime episode ke-6 Dragon Ball Z (namun secara sekilas ia tampak di episode perdana). Dari segi karakter dia mirip kera Tungpei dalam serial journey to the west (sebagai kera antagonis).',
    ];
    return view('home',compact('utama'));
    }
}