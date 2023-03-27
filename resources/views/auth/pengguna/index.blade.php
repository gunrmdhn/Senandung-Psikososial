<x-data.layout>
    @if (Route::currentRouteName()=='kelola-pengguna.create')
    <x-data.card title="{{ $title }}">
        @slot('button')
        <div class="card-actions">
            <a href="{{ route('kelola-pengguna.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
        @endslot
        <form method="post" action="{{ route('kelola-pengguna.store') }}">
            @csrf
            @include('auth/pengguna/_form')
        </form>
    </x-data.card>
    @elseif (Route::currentRouteName()=='kelola-pengguna.edit')
    <x-data.card title="{{ $nama }}">
        @slot('button')
        <div class="card-actions">
            <a href="{{ route('kelola-pengguna.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
        @endslot
        <form method="post" action="{{ route('kelola-pengguna.update', $data->nama_pengguna) }}">
            @method('put')
            @csrf
            @include('auth/pengguna/_form')
        </form>
    </x-data.card>
    @else
    <x-data.card :title="$title">
        @slot('button')
        <div class="card-actions">
            <form method="get" action="{{ route('kelola-pengguna.create') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
        @endslot
        <table id="table" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Pengguna</th>
                    <th>Peran</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nama_pengguna }}</td>
                    <td>{{ $item->peran }}</td>
                    <td>
                        <form method="get" action="{{ route('kelola-pengguna.edit', $item->nama_pengguna) }}">
                            <button type="submit" class="col-12 btn btn-warning">Ubah</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('kelola-pengguna.destroy', $item->nama_pengguna) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="col-12 btn btn-danger"
                                onclick="return confirm('{{ $item->nama_pengguna }} akan dihapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-data.card>
    @endif
</x-data.layout>