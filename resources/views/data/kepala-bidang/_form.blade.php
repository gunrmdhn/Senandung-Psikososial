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
    <div class="col-sm-5">
        <div class="form-group">
            <label class="form-label" for="kategori">Kategori</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="kategori" value="{{ $data->kategori }}">
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <label class="form-label" for="jenis_kasus">Jenis Kasus</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="jenis_kasus" value="{{ $data->jenis_kasus }}">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label class="form-label" for="nik">NIK</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="nik" value="{{ $data->nik }}">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label class="form-label" for="nama">Nama</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="nama" value="{{ $data->nama }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="jenis_kelamin" value="{{ $data->jenis_kelamin }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="tempat_lahir" value="{{ $data->tempat_lahir }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="agama">Agama</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="agama" value="{{ $data->agama }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="kabupaten_kota">Kabupaten/Kota</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="kabupaten" value="{{ $data->kabupaten_kota }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="kecamatan">Kecamatan</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="kecamatan" value="{{ $data->kecamatan }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="kelurahan_desa">Kelurahan/Desa</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="kelurahan_desa"
                    value="{{ $data->kelurahan_desa }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="permasalahan">Permasalahan Yang Dirasakan</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="permasalahan" value="{{ $data->permasalahan }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="waktu_kejadian">Waktu Kejadian</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="waktu_kejadian"
                    value="{{ $data->waktu_kejadian }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="tempat_kejadian">Tempat Kejadian</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="tempat_kejadian"
                    value="{{ $data->tempat_kejadian }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="pekerjaan">Pekerjaan</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="pekerjaan" value="{{ $data->pekerjaan }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="kebutuhan">Kebutuhan Yang Diharapkan</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="kebutuhan" value="{{ $data->kebutuhan }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="nama_pengadu">Nama Pengadu</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="nama_pengadu" value="{{ $data->nama_pengadu }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="form-label" for="nomor_pengadu">Nomor Pengadu</label>
            <div class="input-group">
                <input readonly type="text" class="form-control" id="nomor_pengadu" value="{{ $data->nomor_pengadu }}">
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
    <div class="col-sm-12">
        <div class="form-group">
            <label class="form-label">Verifikasi</label>
            <div class="input-group">
                <span class="input-group-text col-6">
                    <input value="0" type="radio" class="btn-check" name="verifikasi_2" id="verifikasi_2_0"
                        @checked(!$data->verifikasi_2)>
                    <label class="btn col-12 btn-sm btn-outline-danger" for="verifikasi_2_0">Tidak Terverifikasi</label>
                </span>
                <span class="input-group-text col-6">
                    <input value="1" type="radio" class="btn-check" name="verifikasi_2" id="verifikasi_2_1"
                        @checked($data->verifikasi_2)>
                    <label class="btn col-12 btn-sm btn-outline-success" for="verifikasi_2_1">Terverifikasi</label>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="form-footer mt-3">
    <button type="submit" class="btn btn-success col-12">Simpan</button>
</div>