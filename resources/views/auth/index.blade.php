<!doctype html>
<html lang="en">
<x-data.head></x-data.head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center">
                <a href="{{ route('index') }}" class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset('master/sulteng.png') }}" height="50" alt="sulteng">
                    <img src="{{ asset('master/dinsos.png') }}" height="50" alt="dinsos" class="mx-2">
                </a>
            </div>
            <div class="text-center mb-3">
                <a href="{{ route('index') }}" class="navbar-brand navbar-brand-autodark">
                    <h1>{{ config('app.name') }}</h1>
                </a>
            </div>
            @if(session()->has('berhasil'))
            <div class="alert alert-success p-4">
                <strong>{{ session()->get('berhasil') }}</strong>
            </div>
            @elseif(session()->has('gagal'))
            <div class="alert alert-danger p-4">
                <strong>{{ session()->get('gagal') }}</strong>
            </div>
            @endif
            <form class="card card-md" action="{{ route('authenticate') }}" method="post" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Selamat Datang</h2>
                    <div class="mb-2">
                        <label class="form-label" for="nama_pengguna">Nama Pengguna</label>
                        <input autofocus type="text" class="form-control @error('nama_pengguna') is-invalid @enderror"
                            id="nama_pengguna" name="nama_pengguna" value="{{ old('nama_pengguna') }}">
                        @error('nama_pengguna')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="password">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-footer mt-3">
                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>