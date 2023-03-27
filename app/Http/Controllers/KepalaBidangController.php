<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class KepalaBidangController extends Controller
{
    private $title = 'Kepala Bidang';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data/kepala-bidang/index', [
            'title' => $this->title,
            'data' => Data::where('verifikasi_1', 1)->get(),
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('data/kepala-bidang/index', [
            'route' => $request->route,
            'title' => $this->title,
            'kode_aduan' => $data->kode_aduan,
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        Data::where('id', $data->id)->update($request->only(['verifikasi_2']));
        return redirect(route($request->route))->with('berhasil', $request->kode_aduan . ' berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
