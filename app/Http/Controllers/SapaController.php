<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Keisha Edeline Hutabarat';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
