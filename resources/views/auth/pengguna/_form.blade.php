@if (Route::currentRouteName() == 'kelola-pengguna.create')
<div class="row justify-content-center align-items-center gy-2 gx-3">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <div>
                <input autofocus type="text" class="@error('nama') is-invalid @enderror form-control" id="nama"
                    name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
            <div>
                <input type="text" class="@error('nama_pengguna') is-invalid @enderror form-control" id="nama_pengguna"
                    name="nama_pengguna" value="{{ old('nama_pengguna') }}">
                @error('nama_pengguna')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="peran" class="form-label">Peran</label>
            <div>
                <select class="form-control @error('peran') is-invalid @enderror" id="peran" name=" peran">
                    <option value="{{ null }}" hidden selected></option>
                    @foreach ($peran as $item)
                    <option @selected(old('peran')==$item) value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
                @error('peran')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="password" class="form-label">Kata Sandi</label>
            <div>
                <input type="password" class="@error('password') is-invalid @enderror form-control" id="password"
                    name="password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
            <div>
                <input type="password" class="@error('password_confirmation') is-invalid @enderror form-control"
                    id="password_confirmation" name="password_confirmation">
                @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-footer mt-3">
    <button type="submit" class="btn btn-primary col-12">Tambah</button>
</div>
@elseif(Route::currentRouteName() == 'kelola-pengguna.edit')
<div class="row justify-content-center align-items-center gy-2 gx-3">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <div>
                <input autofocus type="text" class="@error('nama') is-invalid @enderror form-control" id="nama"
                    name="nama" value="{{ old('nama',$data->nama) }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
            <div>
                <input type="text" class="@error('nama_pengguna') is-invalid @enderror form-control" id="nama_pengguna"
                    name="nama_pengguna" value="{{ old('nama_pengguna',$data->nama_pengguna) }}">
                @error('nama_pengguna')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="peran" class="form-label">Peran</label>
            <div>
                <select class="form-control @error('role') is-invalid @enderror" id="peran" name=" peran">
                    <option value="{{ null }}" hidden selected></option>
                    @foreach ($peran as $item)
                    <option @selected(old('peran',$data->peran)==$item) value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
                @error('peran')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
    </div>
</div>
<div class="form-footer mt-3">
    <button type="submit" class="btn btn-warning col-12">Ubah</button>
</div>
@endif