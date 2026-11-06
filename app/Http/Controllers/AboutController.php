<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class AboutController extends Controller{
    public function about(){
    $data=[
        [
            'nama' => 'Rikar',
            'nim' => '2086022510035',
            'jurusan' => 'IMT FSD 2025',
        ],
        [
            'nama' => 'Jovian',
            'nim' => '2086022510015',
            'jurusan' => 'IMT AI 2025',
        ]
    ];
    return view('about',compact('data'));
    }
}