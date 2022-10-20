<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        return "ini adalah Latihan Controller";
    }
    public function beranda()
    {
        $data = array('nama' => 'Denisa Mei Linda Sari');
        return view('beranda', $data);
    }
}
