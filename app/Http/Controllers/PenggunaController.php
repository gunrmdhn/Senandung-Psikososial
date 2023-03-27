<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;

class PenggunaController extends Controller
{
    private $title = 'Kelola Pengguna';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/pengguna/index', [
            'title' => $this->title,
            'data' => User::where('peran', 'Admin')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth/pengguna/index', [
            'title' => $this->title,
            'peran' => [
                'Admin',
                // 'Kepala Bidang',
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserRequest $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);
        User::create($request->except(['password_confirmation']));
        return redirect(route('kelola-pengguna.index'))->with('berhasil', $request->nama_pengguna . ' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('auth/pengguna/index', [
            'title' => $this->title,
            'nama' => $user->nama,
            'data' => $user,
            'peran' => [
                'Admin',
                // 'Kepala Bidang',
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserRequest $request, User $user)
    {
        User::where('id', $user->id)->update($request->only(['nama', 'nama_pengguna', 'peran']));
        return redirect(route('kelola-pengguna.index'))->with('berhasil', $request->nama_pengguna . ' berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return back()->with('berhasil', $user->nama_pengguna . ' berhasil dihapus!');
    }
}
