<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use Illuminate\Http\Request;

class DataController extends Controller
{
    private $title = 'Admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataRequest $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->storeAs('aduan/' . $request->kategori, $request->file('foto')->hashName());
        Data::create($data);
        return redirect(route('index'))->with('berhasil', $request->kode_aduan . ' berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Data $data)
    {
        return view('data/admin/index', [
            'route' => $request->route,
            'title' => $this->title,
            'kode_aduan' => $data->kode_aduan,
            'data' => $data,
            'kategori' => [
                'Anak',
                'Perempuan',
                'Ibu Hamil',
                'Disabilitas',
                'Lansia',
                'Lainnya',
            ],
            'jenis_kasus' => [
                'Bencana Alam',
                'Bencana Sosial',
                'Bencana Non Alam'
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataRequest  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataRequest $request, Data $data)
    {
        $updatedData = $request->except(['_method', '_token', 'route']);
        $verifikasi_1 = in_array('0', $request->except([
            '_method',
            '_token',
            'route',
            'kode_aduan',
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
        ]));
        $updatedData['verifikasi_1'] = $verifikasi_1 ? 0 : 1;
        Data::where('id', $data->id)->update($updatedData);
        return redirect(route($request->route))->with('berhasil', $request->kode_aduan . ' berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Data $data)
    {
        Data::destroy($data->id);
        return redirect(route($request->route))->with('berhasil', $data->kode_aduan . ' berhasil dihapus!');
    }
}
