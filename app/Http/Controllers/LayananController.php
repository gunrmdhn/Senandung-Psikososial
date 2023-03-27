<?php

namespace App\Http\Controllers;

use App\Models\Data;

class LayananController extends Controller
{
    public function anak()
    {
        return view('data/admin/index', [
            'title' => 'Anak',
            'data' => Data::where('kategori', 'Anak')->get(),
        ]);
    }

    public function perempuan()
    {
        return view('data/admin/index', [
            'title' => 'Anak',
            'data' => Data::where('kategori', 'Perempuan')->get(),
        ]);
    }

    public function ibuHamil()
    {
        return view('data/admin/index', [
            'title' => 'Ibu Hamil',
            'data' => Data::where('kategori', 'Ibu Hamil')->get(),
        ]);
    }

    public function disabilitas()
    {
        return view('data/admin/index', [
            'title' => 'Disabilitas',
            'data' => Data::where('kategori', 'Disabilitas')->get(),
        ]);
    }

    public function lansia()
    {
        return view('data/admin/index', [
            'title' => 'Lansia',
            'data' => Data::where('kategori', 'Lansia')->get(),
        ]);
    }

    public function Lainnya()
    {
        return view('data/admin/index', [
            'title' => 'Lainnya',
            'data' => Data::where('kategori', 'Lainnya')->get(),
        ]);
    }
}
