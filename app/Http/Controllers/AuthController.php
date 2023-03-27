<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $title = 'Ubah Kata Sandi';

    public function index()
    {
        return view('auth/index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama_pengguna' => 'required|alpha_dash',
            'password' => 'required|min:8',
        ], [], [
            'password' => 'kata sandi',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('beranda'))->with('berhasil', 'Selamat datang, ' . auth()->user()->nama_pengguna);
        }
        return back()->with('gagal', 'Gagal masuk!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }

    public function edit(Request $request, User $user)
    {
        return view('auth/kata-sandi/index', [
            'route' => $request->route,
            'title' => $this->title,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $validatedData['password'] = Hash::make($request->password);
        User::where('id', $user->id)->update($validatedData);
        return redirect(route($request->route))->with('berhasil', 'Kata sandi ' . $user->nama . ' berhasil diubah!');
    }
}
