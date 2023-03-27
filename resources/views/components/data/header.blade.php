<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ route('index') }}" class="text-decoration-none">
                <img src="{{ asset('master/sulteng.png') }}" height="50" alt="sulteng">
                <img src="{{ asset('master/dinsos.png') }}" height="50" alt="dinsos" class="mx-2">
                {{ config('app.name') }}
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            @auth
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <img src="{{ asset('master/person-fill.svg') }}" class="d-lg-none w-4 img-thumbnail"
                        alt="person-fill">
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ auth()->user()->nama }}</div>
                        <div class="mt-1 small text-muted">{{ auth()->user()->peran }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <form method="get" action="{{ route('kata-sandi.edit', auth()->user()->nama_pengguna) }}">
                        @csrf
                        <input type="hidden" class="form-control" name="route" value="{{ Route::currentRouteName() }}">
                        <button type="submit" class="dropdown-item">Ubah Kata Sandi</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="return confirm('Apakah anda yakin untuk keluar?')">Keluar</a>
                </div>
            </div>
            @endauth
        </div>
    </div>
</header>
<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Route::currentRouteName() == 'index' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('index') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Beranda
                            </span>
                        </a>
                    </li>
                    @if (Route::currentRouteName()=='index')
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">
                            <span class="nav-link-title">
                                Tentang
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">
                            <span class="nav-link-title">
                                Layanan
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">
                            <span class="nav-link-title">
                                Kontak
                            </span>
                        </a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <span class="nav-link-title">
                                Masuk
                            </span>
                        </a>
                    </li>
                    @endguest
                    @endif
                    @if (!Request::is('kata-sandi/*'))
                    @can('admin')
                    @if (!Request::is('data/*'))
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.anak' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('admin.anak') }}">
                            <span class="nav-link-title">
                                Anak
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.perempuan' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('admin.perempuan') }}">
                            <span class="nav-link-title">
                                Perempuan
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.ibu_hamil' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('admin.ibu_hamil') }}">
                            <span class="nav-link-title">
                                Ibu Hamil
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.disabilitas' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('admin.disabilitas') }}">
                            <span class="nav-link-title">
                                Disabilitas
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.lansia' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('admin.lansia') }}">
                            <span class="nav-link-title">
                                Lansia
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'admin.lainnya' ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('admin.lainnya') }}">
                            <span class="nav-link-title">
                                Lainnya
                            </span>
                        </a>
                    </li>
                    @endif
                    @endcan
                    @can('kepala-bidang')
                    <li
                        class="nav-item {{ Route::currentRouteName() == 'kepala-bidang.index' || Request::is('kepala-bidang/*') ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('kepala-bidang.index') }}">
                            <span class="nav-link-title">
                                Kepala Bidang
                            </span>
                        </a>
                    </li>
                    <li
                        class="nav-item {{ Route::currentRouteName() == 'kelola-pengguna.index' || Request::is('kelola-pengguna/*') ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('kelola-pengguna.index') }}">
                            <span class="nav-link-title">
                                Kelola Pengguna
                            </span>
                        </a>
                    </li>
                    @endcan
                    @endIf
                </ul>
            </div>
        </div>
    </div>
</div>