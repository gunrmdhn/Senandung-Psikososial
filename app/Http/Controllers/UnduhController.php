<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UnduhController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Data $data)
    {
        $aduan = $data->only([
            'kode_aduan',
            'kategori',
            'jenis_kasus',
            'nik',
            'nama',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'agama',
            'kabupaten_kota',
            'kecamatan',
            'kelurahan_desa',
            'permasalahan',
            'waktu_kejadian',
            'tempat_kejadian',
            'pekerjaan',
            'kebutuhan',
            'nama_pengadu',
            'nomor_pengadu',
        ]);
        $image = base64_encode(file_get_contents(public_path('/master/sulteng.png')));
        $pdf = Pdf::loadview('data/pdf', [
            'aduan' => $aduan,
            'image' => $image,
        ]);
        return $pdf->stream($data->kode_aduan . '.pdf');
    }
}
