<x-data.layout>
    @if (Route::currentRouteName()=='kepala-bidang.edit')
    <x-data.card title="{{ $kode_aduan }}">
        @slot('button')
        <div class="card-actions">
            <a href="{{ route($route) }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
        @endslot
        <form method="post" action="{{ route('kepala-bidang.update', $data->kode_aduan) }}">
            @method('put')
            @csrf
            <input type="hidden" class="form-control" name="route" value="{{ $route }}">
            @include('data/kepala-bidang/_form')
        </form>
    </x-data.card>
    @else
    <x-data.card :title="$title">
        <table id="table" class="table table-hover table-vcenter table-nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Kode Aduan</th>
                    <th>Jenis Kasus</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Unduh</th>
                    <th>Verifikasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->kode_aduan }}</td>
                    <td>{{ $item->jenis_kasus }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        @if ($item->verifikasi_2)
                        <a target="_blank" class="col-12 btn btn-info" href="{{ route('unduh',$item->kode_aduan) }}"
                            role="button">Unduh</a>
                        @else
                        <span class="status status-red">
                            Tidak Terverifikasi
                        </span>
                        @endif
                    </td>
                    <td>
                        <form method="get" action="{{ route('kepala-bidang.edit', $item->kode_aduan) }}">
                            <input type="hidden" class="form-control" name="route"
                                value="{{ Route::currentRouteName() }}">
                            <button type="submit" class="col-12 btn btn-success">Verifikasi</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-data.card>
    @endif
</x-data.layout>