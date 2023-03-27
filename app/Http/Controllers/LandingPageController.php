<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $kode_aduan = IdGenerator::generate([
            'table' => 'tabel_data',
            'field' => 'kode_aduan',
            'length' => 9,
            'prefix' => 'ADUAN-',
            'reset_on_prefix_change' => true,
        ]);
        return view('index', [
            'kategori' => [
                'Anak',
                'Perempuan',
                'Ibu Hamil',
                'Disabilitas',
                'Lansia',
                'Lainnya',
            ],
            'kode_aduan' => $kode_aduan,
            'jenis_kasus' => [
                'Bencana Alam',
                'Bencana Sosial',
                'Bencana Non Alam',
            ],
            'jenis_kelamin' => [
                'Laki-Laki',
                'Perempuan',
            ],
            'agama' => [
                'Islam',
                'Kristen Protestan',
                'Kristen Katolik',
                'Hindu',
                'Buddha',
                'Konghucu',
            ],
        ]);
    }
}
