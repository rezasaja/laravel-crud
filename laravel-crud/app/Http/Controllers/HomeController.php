<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "ini dari home controller";
    }
public function showhtml()
{
    return view('home.halo');
}

public function apakabs()
{
    $nama = "Reza";
    $cita2 = ["Tidak punya", "Tidak tahu mau jadi apa", "Ingin sukses"];
    return view('home.apakabs', compact('nama', 'cita2'));
}

public function pengunaanlayout()
{
    return view('home.pengunaanlayout');
}


}
