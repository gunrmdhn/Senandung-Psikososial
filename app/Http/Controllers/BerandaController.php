<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Charts\DataChart;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $kategori = [
            'Anak',
            'Perempuan',
            'Ibu Hamil',
            'Disabilitas',
            'Lansia',
            'Lainnya',
        ];
        $true = [];
        $false = [];
        foreach ($kategori as $value) {
            $true[] = Data::where('kategori', $value)->where('verifikasi_1', 1)->where('verifikasi_2', 1)->count();
            $false[] = Data::where('kategori', $value)->where('verifikasi_1', 0)->where('verifikasi_2', 0)->count();
        }
        $data_true = new DataChart;
        $data_true->labels($kategori)
            ->dataset('Data Terverifikasi', 'bar', $true)
            ->backgroundcolor('#2fb344');
        $data_false = new DataChart;
        $data_false->labels($kategori)
            ->dataset('Data Tidak Terverifikasi', 'bar', $false)
            ->backgroundcolor('#d63939');
        return view('data/index', [
            'data_true' => $data_true,
            'data_false' => $data_false,
        ]);
    }
}
