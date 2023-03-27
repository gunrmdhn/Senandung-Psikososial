<x-data.layout>
    <div class="row gy-3">
        <div class="col-lg-12">
            <section id="beranda">
                <div class="card card-lg text-center">
                    <div class="card-body">
                        <h1 class="display-5">SENANDUNG PSIKOSOSIAL</h1>
                        <h3>Sistem Layanan Aduan Dukungan Psikososial Dalam Kebencanaan Berbasis Digital</h3>
                        <a href="#layanan" class="mt-3 col-12 col-sm-5 btn btn-primary btn-pill btn-lg">
                            Kirim Aduan
                        </a>
                        <hr>
                        <div class="row">
                            @foreach ($kategori as $item)
                            <div class="col-lg-2">
                                <div class="card card-link-pop text-center">
                                    <div class="card-body">
                                        <p class="lead">
                                            {{ $item }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('master/background.png') }}" alt="">
                </div>
            </section>
        </div>
        <div class="col-lg-6 align-self-stretch">
            <section id="tentang">
                <div class="card card-lg">
                    <div class="card-body">
                        <h1 class="display-6 text-center">TUJUAN AKSI PERUBAHAN</h1>
                        <hr>
                        <div style="text-align: justify; height: 692px;">
                            <p>
                                Adapun tujuan rencana aksi perubahan ini adalah untuk meningkatkan layanan aduan
                                psikososial melalui Digital <em><strong>"Senandung Psikososial"</strong></em> (SISTEM
                                LAYANAN ADUAN DUKUNGAN PSIKOSOSIAL DALAM KERENCANAAN BERBASIS DIGITAL). Rencana
                                aksi perubahan ini didasarkan pada spesifik, terukur, dan yakin dapat dicapai, realistis
                                dan akan tepat waktu (SMART).
                            </p>
                            <ol type="A">
                                <li>
                                    <strong>Tujuan Jangka Pendek</strong>
                                </li>
                                <p>Membangun sistem layanan aduan dukungan psikososial dalam kebencanaan berbasis
                                    Digital yang <em>Prototype.</em>
                                </p>
                                <li>
                                    <strong>Tujuan Jangka Menengah</strong>
                                </li>
                                <p>Terlaksananya penerapan pelayanan aduan dukungan psikososial dalam kebencanaan
                                    sebagai mediasi pengaduan <em>online</em> berbasis Digital <em>(Digital)</em> yang
                                    terintegrasi dengan dinas sosial.
                                </p>
                                <li>
                                    <strong>Tujuan Jangka Panjang</strong>
                                </li>
                                <p>Melaksanakan hasil monitoring dan evaluasi hambatan pelaksanaan rencana tindak lanjut
                                    terkait sistem pemantauan evaluasi berbasis Digital.
                                </p>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section id="tentang">
                <div class="card card-lg">
                    <div class="card-body">
                        <h1 class="display-6 text-center">MANFAAT AKSI PERUBAHAN</h1>
                        <hr>
                        <div style="text-align: justify;">
                            <p>
                                Dengan terbangunnya (SISTEM LAYANAN ADUAN DUKUNGAN PSIKOSOSIAL DALAM KERENCANAAN
                                BERBASIS DIGITAL) di Provinsi Sulawesi Tengah, manfaat yang akan diperoleh:
                                <strong>Tujuan Jangka Pendek.</strong>
                            </p>
                            <ol type="A">
                                <li><strong>Manfaat untuk Instasnsi/OPD</strong></li>
                                <ol>
                                    <li>Sebagai wujud peningkatan kinerja organisasi khususnya pada bidang Perlindungan
                                        dan Jaminan Sosial.
                                    </li>
                                    <li>
                                        Meningkatkan kualitas dan kuantitas pengelolaan dukungan psikososial dalam
                                        kebencanaan.
                                    </li>
                                    <li>
                                        Membantu dalam pelayanan aduan psikososial pada masa kebencanaan.
                                    </li>
                                    <li>
                                        Membantu penanganan psikososial pada masa kebencanaan.
                                    </li>
                                    <li>
                                        Pelayanan dan penanganan yang bersifat dukungan psikososial bersifat merata dan
                                        menyeluruh.
                                    </li>
                                </ol>
                                <li><strong>Manfaat untuk Stakeholder</strong></li>
                                <ol>
                                    <li>Memberi informasi tentang aplikasi sebagai wadah pengaduan dukungan psikososial
                                        dalam masa kebencanaan.
                                    </li>
                                    <li>
                                        Meningkatkan kinerja pelayanan tentang pembaruan mekanisme koordinasi.
                                    </li>
                                    <li>
                                        Membantu meningkatkan kapasitas pelayanan bagi Tim LDP dalam menganalisis data
                                        masyarakat (kelompok rentan) yang terdampak bencana melalui aplikasi.
                                    </li>
                                    <li>
                                        Tersedianya data-data masyarakat (kelompok rentan) yang memerlukan LDP dalam
                                        masa kebencanaan.
                                    </li>
                                    <li>
                                        Perangkat Daerah dan Institusi lainnya dengan mudah memanfaatkan sistem aplikasi
                                        ini program/kegiatan LDP dalam masa kebencanaan.
                                    </li>
                                </ol>
                                <li><strong>Manfaat untuk Masyarakat</strong></li>
                                <p>Masyarakat dengan mudah mengakses dan menggunakan sistem aplikasi ini guna memperoleh
                                    LDP dalam masa kebencanaan.</p>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-12">
            <section id="layanan">
                <div class="card card-lg">
                    <div class="card-body">
                        <h1 class="display-6 text-center">LAYANAN</h1>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <form method="post" action="{{ route('data.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-2 gx-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kode_aduan" class="form-label">Kode Aduan</label>
                                                <div>
                                                    <input readonly type="text" class="form-control" id="kode_aduan"
                                                        name="kode_aduan" value="{{ $kode_aduan }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kategori" class="form-label">Kategori</label>
                                                <div>
                                                    <select class="form-select @error('kategori') is-invalid @enderror"
                                                        id="kategori" name="kategori">
                                                        <option hidden selected></option>
                                                        @foreach ($kategori as $item)
                                                        <option @selected(old('kategori')==$item) value="{{ $item
                                                        }}">{{ $item }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="jenis_kasus" class="form-label">Jenis Kasus</label>
                                                <div>
                                                    <select
                                                        class="form-select @error('jenis_kasus') is-invalid @enderror"
                                                        id="jenis_kasus" name="jenis_kasus">
                                                        <option hidden selected></option>
                                                        @foreach ($jenis_kasus as $item)
                                                        <option @selected(old('jenis_kasus')==$item) value="{{ $item
                                                        }}">{{ $item }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nik" class="form-label">NIK</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('nik') is-invalid @enderror" id="nik"
                                                        name="nik" value="{{ old('nik') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="form-label">Nama</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        id="nama" name="nama" value="{{ old('nama') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                <div>
                                                    <select
                                                        class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                                        id="jenis_kelamin" name="jenis_kelamin">
                                                        <option hidden selected></option>
                                                        @foreach ($jenis_kelamin as $item)
                                                        <option @selected(old('jenis_kelamin')==$item) value="{{ $item
                                                        }}">{{ $item }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                        id="tempat_lahir" name="tempat_lahir"
                                                        value="{{ old('tempat_lahir') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <div>
                                                    <input onfocus="(this.type='date')" onblur="(this.type='text')"
                                                        type="text"
                                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                        id="tanggal_lahir" name="tanggal_lahir"
                                                        value="{{ old('tanggal_lahir') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="agama" class="form-label">Agama</label>
                                                <div>
                                                    <select class="form-select @error('agama') is-invalid @enderror"
                                                        id="agama" name="agama">
                                                        <option hidden selected></option>
                                                        @foreach ($agama as $item)
                                                        <option @selected(old('agama')==$item) value="{{ $item
                                                        }}">{{ $item }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kabupaten_kota" class="form-label">Kabupaten/Kota</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('kabupaten_kota') is-invalid @enderror"
                                                        id="kabupaten_kota" name="kabupaten_kota"
                                                        value="{{ old('kabupaten_kota') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('kecamatan') is-invalid @enderror"
                                                        id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kelurahan_desa" class="form-label">Kelurahan/Desa</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('kelurahan_desa') is-invalid @enderror"
                                                        id="kelurahan_desa" name="kelurahan_desa"
                                                        value="{{ old('kelurahan_desa') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="permasalahan" class="form-label">Permasalahan</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('permasalahan') is-invalid @enderror"
                                                        id="permasalahan" name="permasalahan"
                                                        value="{{ old('permasalahan') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="waktu_kejadian" class="form-label">Waktu Kejadian</label>
                                                <div>
                                                    <input onfocus="(this.type='date')" onblur="(this.type='text')"
                                                        type="text"
                                                        class="form-control @error('waktu_kejadian') is-invalid @enderror"
                                                        id="waktu_kejadian" name="waktu_kejadian"
                                                        value="{{ old('waktu_kejadian') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tempat_kejadian" class="form-label">Tempat Kejadian</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('tempat_kejadian') is-invalid @enderror"
                                                        id="tempat_kejadian" name="tempat_kejadian"
                                                        value="{{ old('tempat_kejadian') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('pekerjaan') is-invalid @enderror"
                                                        id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="kebutuhan" class="form-label">Kebutuhan Kebutuhan Yang
                                                    Diharapkan</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('kebutuhan') is-invalid @enderror"
                                                        id="kebutuhan" name="kebutuhan" value="{{ old('kebutuhan') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="form-fieldset mt-2 bg-white">
                                                <div class="row gy-2 gx-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nama_pengadu" class="form-label">Nama
                                                                Pengadu</label>
                                                            <div>
                                                                <input type="text"
                                                                    class="form-control @error('nama_pengadu') is-invalid @enderror"
                                                                    id="nama_pengadu" name="nama_pengadu"
                                                                    value="{{ old('nama_pengadu') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nomor_pengadu" class="form-label">Nomor
                                                                Pengadu</label>
                                                            <div>
                                                                <input type="text"
                                                                    class="form-control @error('nomor_pengadu') is-invalid @enderror"
                                                                    id="nomor_pengadu" name="nomor_pengadu"
                                                                    value="{{ old('nomor_pengadu') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="foto" class="form-label">Foto</label>
                                            <div>
                                                <input type="file"
                                                    class="form-control @error('foto') is-invalid @enderror" id="foto"
                                                    name="foto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer mt-3">
                                        <button type="submit" class="btn btn-primary col-12 mb-2">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-12">
            <section id="kontak">
                <div class="card card-lg">
                    <div class="card-body">
                        <h1 class="display-6 text-center">KONTAK</h1>
                        <hr>
                        <div class="row justify-content-center gy-2 gx-3">
                            <div class="col-lg-2 col-6">
                                <img class="img-fluid" src="{{ asset('master/sulteng.png') }}" alt="sulteng">
                            </div>
                            <div class="col-lg-12 text-center">
                                <p class="lead">DINAS SOSIAL PROVINSI SULAWESI
                                    TENGAH<br>
                                    <em>Jl. Prof. Moh. Yamin No. 15 Palu</em><br>
                                    <em>(0451) 421866 / 422566</em><br>
                                    <em>adminppid@dinsos.sultengprov.go.id</em>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-data.layout>