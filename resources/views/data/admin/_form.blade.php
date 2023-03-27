<div class="row justify-content-center align-items-center gy-2 gx-3">
    <div class=" col-sm-2">
        <div class="form-group">
            <label for="kode_aduan" class="form-label">Kode Aduan</label>
            <div>
                <input type="text" class="form-control" id="kode_aduan" name="kode_aduan" value="{{ $kode_aduan }}"
                    readonly>
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            <label class="form-label">Jenis Kasus</label>
            <div class="input-group">
                <select autofocus class="form-select @error('jenis_kasus') is-invalid @enderror" id="jenis_kasus"
                    name="jenis_kasus">
                    <option hidden selected></option>
                    @foreach ($jenis_kasus as $item)
                    <option @selected(old('jenis_kasus',$data->jenis_kasus)==$item) value="{{ $item}}">
                        {{ $item }}
                    </option>
                    @endforeach
                </select>
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_jenis_kasus" id="cek_jenis_kasus_0"
                        @checked(!$data->cek_jenis_kasus)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_jenis_kasus_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_jenis_kasus" id="cek_jenis_kasus_1"
                        @checked($data->cek_jenis_kasus)>
                    <label class="btn btn-sm btn-outline-success" for="cek_jenis_kasus_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label class="form-label">NIK</label>
            <div class="input-group">
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                    value="{{ old('nik',$data->nik) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_nik" id="cek_nik_0"
                        @checked(!$data->cek_nik)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_nik_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_nik" id="cek_nik_1"
                        @checked($data->cek_nik)>
                    <label class="btn btn-sm btn-outline-success" for="cek_nik_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label class="form-label">Nama</label>
            <div class="input-group">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama',$data->nama) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_nama" id="cek_nama_0"
                        @checked(!$data->cek_nama)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_nama_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_nama" id="cek_nama_1"
                        @checked($data->cek_nama)>
                    <label class="btn btn-sm btn-outline-success" for="cek_nama_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Jenis Kelamin</label>
            <div class="input-group">
                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                    name="jenis_kelamin">
                    <option hidden selected></option>
                    @foreach ($jenis_kelamin as $item)
                    <option @selected(old('jenis_kelamin',$data->jenis_kelamin)==$item) value="{{ $item}}">
                        {{ $item }}
                    </option>
                    @endforeach
                </select>
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_jenis_kelamin" id="cek_jenis_kelamin_0"
                        @checked(!$data->cek_jenis_kelamin)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_jenis_kelamin_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_jenis_kelamin" id="cek_jenis_kelamin_1"
                        @checked($data->cek_jenis_kelamin)>
                    <label class="btn btn-sm btn-outline-success" for="cek_jenis_kelamin_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Tempat Lahir</label>
            <div class="input-group">
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    name="tempat_lahir" value="{{ old('tempat_lahir',$data->tempat_lahir) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_tempat_lahir" id="cek_tempat_lahir_0"
                        @checked(!$data->cek_tempat_lahir)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_tempat_lahir_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_tempat_lahir" id="cek_tempat_lahir_1"
                        @checked($data->cek_tempat_lahir)>
                    <label class="btn btn-sm btn-outline-success" for="cek_tempat_lahir_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Tanggal Lahir</label>
            <div class="input-group">
                <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text"
                    class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                    name="tanggal_lahir" value="{{ old('tanggal_lahir',$data->tanggal_lahir) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_tanggal_lahir" id="cek_tanggal_lahir_0"
                        @checked(!$data->cek_tanggal_lahir)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_tanggal_lahir_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_tanggal_lahir" id="cek_tanggal_lahir_1"
                        @checked($data->cek_tanggal_lahir)>
                    <label class="btn btn-sm btn-outline-success" for="cek_tanggal_lahir_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Agama</label>
            <div class="input-group">
                <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama">
                    <option hidden selected></option>
                    @foreach ($agama as $item)
                    <option @selected(old('agama',$data->agama)==$item) value="{{ $item}}">
                        {{ $item }}
                    </option>
                    @endforeach
                </select>
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_agama" id="cek_agama_0"
                        @checked(!$data->cek_agama)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_agama_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_agama" id="cek_agama_1"
                        @checked($data->cek_agama)>
                    <label class="btn btn-sm btn-outline-success" for="cek_agama_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Kabupaten/Kota</label>
            <div class="input-group">
                <input type="text" class="form-control @error('kabupaten_kota') is-invalid @enderror"
                    id="kabupaten_kota" name="kabupaten_kota" value="{{ old('kabupaten_kota',$data->kabupaten_kota) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_kabupaten_kota" id="cek_kabupaten_kota_0"
                        @checked(!$data->cek_kabupaten_kota)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_kabupaten_kota_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_kabupaten_kota" id="cek_kabupaten_kota_1"
                        @checked($data->cek_kabupaten_kota)>
                    <label class="btn btn-sm btn-outline-success" for="cek_kabupaten_kota_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Kecamatan</label>
            <div class="input-group">
                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                    name="kecamatan" value="{{ old('kecamatan',$data->kecamatan) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_kecamatan" id="cek_kecamatan_0"
                        @checked(!$data->cek_kecamatan)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_kecamatan_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_kecamatan" id="cek_kecamatan_1"
                        @checked($data->cek_kecamatan)>
                    <label class="btn btn-sm btn-outline-success" for="cek_kecamatan_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Kelurahan/Desa</label>
            <div class="input-group">
                <input type="text" class="form-control @error('kelurahan_desa') is-invalid @enderror"
                    id="kelurahan_desa" name="kelurahan_desa" value="{{ old('kelurahan_desa',$data->kelurahan_desa) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_kelurahan_desa" id="cek_kelurahan_desa_0"
                        @checked(!$data->cek_kelurahan_desa)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_kelurahan_desa_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_kelurahan_desa" id="cek_kelurahan_desa_1"
                        @checked($data->cek_kelurahan_desa)>
                    <label class="btn btn-sm btn-outline-success" for="cek_kelurahan_desa_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Permasalahan Yang Dirasakan</label>
            <div class="input-group">
                <input type="text" class="form-control @error('permasalahan') is-invalid @enderror" id="permasalahan"
                    name="permasalahan" value="{{ old('permasalahan',$data->permasalahan) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_permasalahan" id="cek_permasalahan_0"
                        @checked(!$data->cek_permasalahan)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_permasalahan_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_permasalahan" id="cek_permasalahan_1"
                        @checked($data->cek_permasalahan)>
                    <label class="btn btn-sm btn-outline-success" for="cek_permasalahan_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Waktu Kejadian</label>
            <div class="input-group">
                <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text"
                    class="form-control @error('waktu_kejadian') is-invalid @enderror" id="waktu_kejadian"
                    name="waktu_kejadian" value="{{ old('waktu_kejadian',$data->waktu_kejadian) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_waktu_kejadian" id="cek_waktu_kejadian_0"
                        @checked(!$data->cek_waktu_kejadian)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_waktu_kejadian_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_waktu_kejadian" id="cek_waktu_kejadian_1"
                        @checked($data->cek_waktu_kejadian)>
                    <label class="btn btn-sm btn-outline-success" for="cek_waktu_kejadian_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Tempat Kejadian</label>
            <div class="input-group">
                <input type="text" class="form-control @error('tempat_kejadian') is-invalid @enderror"
                    id="tempat_kejadian" name="tempat_kejadian"
                    value="{{ old('tempat_kejadian',$data->tempat_kejadian) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_tempat_kejadian"
                        id="cek_tempat_kejadian_0" @checked(!$data->cek_tempat_kejadian)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_tempat_kejadian_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_tempat_kejadian"
                        id="cek_tempat_kejadian_1" @checked($data->cek_tempat_kejadian)>
                    <label class="btn btn-sm btn-outline-success" for="cek_tempat_kejadian_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Pekerjaan</label>
            <div class="input-group">
                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan"
                    name="pekerjaan" value="{{ old('pekerjaan',$data->pekerjaan) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_pekerjaan" id="cek_pekerjaan_0"
                        @checked(!$data->cek_pekerjaan)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_pekerjaan_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_pekerjaan" id="cek_pekerjaan_1"
                        @checked($data->cek_pekerjaan)>
                    <label class="btn btn-sm btn-outline-success" for="cek_pekerjaan_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Kebutuhan Yang Diharapkan</label>
            <div class="input-group">
                <input type="text" class="form-control @error('kebutuhan') is-invalid @enderror" id="kebutuhan"
                    name="kebutuhan" value="{{ old('kebutuhan',$data->kebutuhan) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_kebutuhan" id="cek_kebutuhan_0"
                        @checked(!$data->cek_kebutuhan)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_kebutuhan_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_kebutuhan" id="cek_kebutuhan_1"
                        @checked($data->cek_kebutuhan)>
                    <label class="btn btn-sm btn-outline-success" for="cek_kebutuhan_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Nama Pengadu</label>
            <div class="input-group">
                <input type="text" class="form-control @error('nama_pengadu') is-invalid @enderror" id="nama_pengadu"
                    name="nama_pengadu" value="{{ old('nama_pengadu',$data->nama_pengadu) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_nama_pengadu" id="cek_nama_pengadu_0"
                        @checked(!$data->cek_nama_pengadu)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_nama_pengadu_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_nama_pengadu" id="cek_nama_pengadu_1"
                        @checked($data->cek_nama_pengadu)>
                    <label class="btn btn-sm btn-outline-success" for="cek_nama_pengadu_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label">Nomor Pengadu</label>
            <div class="input-group">
                <input type="text" class="form-control @error('nomor_pengadu') is-invalid @enderror" id="nomor_pengadu"
                    name="nomor_pengadu" value="{{ old('nomor_pengadu',$data->nomor_pengadu) }}">
                <span class="input-group-text">
                    <input value="0" type="radio" class="btn-check" name="cek_nomor_pengadu" id="cek_nomor_pengadu_0"
                        @checked(!$data->cek_nomor_pengadu)>
                    <label class="btn btn-sm btn-outline-danger" for="cek_nomor_pengadu_0">Tidak</label>
                </span>
                <span class="input-group-text">
                    <input value="1" type="radio" class="btn-check" name="cek_nomor_pengadu" id="cek_nomor_pengadu_1"
                        @checked($data->cek_nomor_pengadu)>
                    <label class="btn btn-sm btn-outline-success" for="cek_nomor_pengadu_1">Ya</label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label class="form-label">Foto</label>
            <div class="input-group">
                <span class="input-group-text col-12">
                    <a class="btn btn-outline-info col-12 btn-sm" href="{{ asset('storage/'.$data->foto) }}"
                        target="_blank">
                        Lihat
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="form-footer mt-3">
    <button type="submit" class="btn btn-success col-12">Verifikasi</button>
</div>