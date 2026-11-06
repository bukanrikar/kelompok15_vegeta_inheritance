<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class BlogController extends Controller{
    public function blog(){
    $blogs=[
        [
            'img'=> 'img/2.png',
            'teks' => 'Vegeta (Jepang: ベジータ) adalah karakter fiksi dalam seri manga Dragon Ball dan anime Dragon Ball Z ciptaan Akira Toriyama. Vegeta pertama kali muncul sebagai antagonis utama dalam bab 204 Goodbye Son Goku (さようなら孫悟空, Sayōnara Son Gokū), yang dipublikasikan di Weekly Shonen Jump pada 19 Desember 1988,[1] dia mencari Dragon Ball pengabul keinginan untuk meraih keabadian. Ia pertama kali muncul di anime episode ke-6 Dragon Ball Z (namun secara sekilas ia tampak di episode perdana). Dari segi karakter dia mirip kera Tungpei dalam serial journey to the west (sebagai kera antagonis).',
            'paragraft'=>'paragraft1'

        ],
        [
            'img'=> 'img/3.png',
            'teks' => 'Sebagai antagonis utama pertama Dragon Ball Z , Vegeta adalah pangeran dari ras prajurit elit luar angkasa yang dikenal sebagai Saiyan. Sebagai pribadi, ia secara alami blak-blakan, agung, pekerja keras, dan penuh dengan kebanggaan Saiyan; ia sering merujuk pada warisan dan status kerajaannya sepanjang seri, tetapi juga dapat memiliki sifat negatif seperti sangat angkuh, bersama dengan temperamen yang destruktif. Ia percaya bahwa ia harus dianggap sebagai petarung terkuat di alam semesta, dan menjadi terobsesi untuk melampaui Son Goku setelah kalah dalam pertarungannya dengan para petarung Z. Namun, setelah kematian Frieza , Vegeta bersatu dengan para pahlawan untuk menggagalkan ancaman yang lebih besar terhadap alam semesta, terutama Cell , Majin Buu , Gomah, Beerus , Zamasu , Hit, Jiren , Broly , Moro, Granolah, dan Gas. Sepanjang seri, peran Vegeta berubah dari penjahat menjadi pahlawan, meskipun ia tetap menjadi saingan utama Goku.',
            'paragraft'=>'paragraft2'
        ],
        [
            'img'=> 'img/4.png',
            'teks' => 'Vegeta telah diakui sebagai salah satu karakter paling ikonik tidak hanya dalam franchise Dragon Ball , tetapi juga dalam sejarah manga dan anime secara keseluruhan. Dia sering disebut sebagai salah satu contoh karakter rival paling populer di industri ini, karena perkembangan karakter dan narasi yang ia miliki sepanjang Dragon Ball Z dan Dragon Ball Super .',
            'paragraft'=>'paragraft3'

        ],
    ];
    return view('blog',compact('blogs'));
    }
}