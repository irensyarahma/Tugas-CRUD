<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }

    public function submit(Request $request)
    {
        $nama_depan = $request->first_name;
        $nama_belakang = $request->last_name;

        return view('welcome', [
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang
        ]);
    }
}
