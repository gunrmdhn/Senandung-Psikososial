<x-data.layout>
    @if (Route::currentRouteName()=='data.edit')
    <x-data.card title="{{ $kode_aduan }}">
        @slot('button')
        <div class="card-actions">
            <a href="{{ route($route) }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
        @endslot
        <form method="post" action="{{ route('data.update', $data->kode_aduan) }}">
            @method('put')
            @csrf
            <input type="hidden" class="form-control" name="route" value="{{ $route }}">
            @include('data/admin/_form')
        </form>
    </x-data.card>
    @else
    <x-data.card :title="$title">
        <table id="table" class="table table-hover table-vcenter table-nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>Kode Aduan</th>
                    <th>Jenis Kasus</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Kabupaten/Kota</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan/Desa</th>
                    <th>Permasalahan Yang Dirasakan</th>
                    <th>Waktu Kejadian</th>
                    <th>Tempat Kejadian</th>
                    <th>Pekerjaan</th>
                    <th>Kebutuhan Yang Diharapkan</th>
                    <th>Nama Pengadu</th>
                    <th>Nomor Pengadu</th>
                    <th>Foto</th>
                    <th>Verifikasi</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($item->verifikasi_1)
                        <span class="status status-green">
                            Terverifikasi
                        </span>
                        @else
                        <span class="status status-red">
                            Tidak Terverifikasi
                        </span>
                        @endif
                    </td>
                    <td>{{ $item->kode_aduan }}</td>
                    <td>{{ $item->jenis_kasus }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->kabupaten_kota }}</td>
                    <td>{{ $item->kecamatan }}</td>
                    <td>{{ $item->kelurahan_desa }}</td>
                    <td>{{ $item->permasalahan }}</td>
                    <td>{{ $item->waktu_kejadian }}</td>
                    <td>{{ $item->tempat_kejadian }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->kebutuhan }}</td>
                    <td>{{ $item->nama_pengadu }}</td>
                    <td>{{ $item->nomor_pengadu }}</td>
                    <td>
                        <a class="btn btn-info col-12" href="{{ asset('storage/'.$item->foto) }}" target="_blank">
                            Lihat
                        </a>
                    </td>
                    <td>
                        <form method="get" action="{{ route('data.edit', $item->kode_aduan) }}">
                            <input type="hidden" class="form-control" name="route"
                                value="{{ Route::currentRouteName() }}">
                            <button type="submit" class="col-12 btn btn-success">Verifikasi</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('data.destroy', $item->kode_aduan) }}">
                            @csrf
                            @method('delete')
                            <input type="hidden" class="form-control" name="route"
                                value="{{ Route::currentRouteName() }}">
                            <button type="submit" class="col-12 btn btn-danger"
                                onclick="return confirm('{{ $item->kode_aduan }} akan dihapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-data.card>
    @endif
</x-data.layout>