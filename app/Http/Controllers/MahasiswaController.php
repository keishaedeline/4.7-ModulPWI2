<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Keisha',
            'Edeline',
            'Hutabarat'
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}