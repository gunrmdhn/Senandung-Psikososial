<!doctype html>
<html lang="en">
<x-data.head></x-data.head>

<body>
    <div class="page">
        <x-data.header></x-data.header>
        <div class="page-wrapper">
            @auth
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none d-none d-sm-block">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title text-center">
                                Sistem Layanan Aduan Dukungan Psikososial Dalam Kebencanaan Berbasis Digital
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
            <div class="page-body">
                <div class="container-xl">
                    @if(session()->has('berhasil'))
                    <div class="alert alert-success p-4">
                        <strong>{{ session()->get('berhasil') }}</strong>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Data aduan gagal ditambahkan!</strong>
                        <ul>
                            @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- Content here -->
                    {{ $slot }}
                </div>
            </div>
            <x-data.footer></x-data.footer>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jqc-1.12.4/dt-1.12.1/datatables.min.js">
    </script>
</body>

</html>