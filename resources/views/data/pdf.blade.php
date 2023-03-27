<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $aduan['kode_aduan'] }}</title>
    <style>
        * {
            margin: 0;
        }

        body {
            margin: 2.5cm;
            font-size: 11pt;
        }

        .coba img {
            display: block;
            z-index: 1;
            margin-top: -0.7cm;
            position: absolute;
        }

        .kop {
            text-align: center;
        }

        .isi {
            text-align: justify;
            line-height: 1;
        }

        .isi table {
            width: 100%;
        }

        .isi table.tab tr td:first-child {
            width: 2cm;
        }

        .isi table.data tr td:first-child {
            width: 7cm;
        }

        table tr td {
            padding: 0;
            vertical-align: top;
        }

        .tanggal-surat {
            margin-left: 50%;
            text-align: right;
        }

        .keterangan {
            width: 50%;
        }

        .kepada,
        .ttd {
            margin-left: 50%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="coba">
        <img src="data:image/png;base64,{{ $image }}" alt="logo" width="10%">
    </div>
    <div class="kop">
        <p>PEMERINTAH PROVINSI SULAWESI TENGAH</p>
        <h2>DINAS SOSIAL</h2>
        <p style="font-size: 10pt;">Jl. Prof. Moh. Yamin No. 15 Palu Telp.(0451) 421866 Fax. 422566</p>
        <p>PALU</p>
        <p style="text-align: right;">Kode Pos 94117</p>
    </div>
    <hr style="border-width: 2px;">
    <div class="isi">
        <table class="tab">
            <tr>
                <td>Nomor</td>
                <td>: ...............</td>
                <td style="text-align: right;">Palu, {{ now()->format('d-m-Y') }}</td>
            </tr>
        </table>
        <table class="tab">
            <tr>
                <td>Lampiran</td>
                <td>: -</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>: Tindaklanjut Data Aduan <br>
                    Dukungan Psikososial Kebencanaan</td>
            </tr>
        </table>
        <div class="kepada">
            <p><strong>Kepada</strong></p>
            <p>Yth. <strong>Saudara/i Pekerja Sosial</strong></p>
            <p><strong>Provinsi Sulawesi Tengah</strong></p>
            <p>di-</p>
            <br>
            <br>
            <p><u>PALU</u></p>
        </div>
        <br>
        <p style="text-indent: 1cm;">
            Mempelajari hasil verifikasi data aduan dukungan psikososial bagi korban terdampak bencana yang dilakukan
            oleh Admin (operator) dan diverifikasi ulang oleh Kepala Bidang Perlindungan dan Jaminan Sosial, dengan ini
            diminta kepada Saudara/i Pekerja Sosial sebagai mitra kerja Dinas Sosial Provinsi Sulawesi Tengah untuk
            menindaklanjuti/memproses lanjut aduan dimaksud secara terintegrasi dengan melibatkan stakeholder terkait.
            Proses aduan telah tersedia/dibuka melalui Website "Senandung Psikososial". Adapun data aduan yang telah
            diverifikasi yaitu:
        </p>
        <br>
        <table class="data" style="margin-left: 1.1cm;">
            <tr>
                <td>Kategori</td>
                <td>: {{ $aduan['kategori'] }}</td>
            </tr>
            <tr>
                <td>Jenis Kasus</td>
                <td>: {{ $aduan['jenis_kasus'] }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: {{ $aduan['nik'] }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: {{ $aduan['nama'] }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $aduan['jenis_kelamin'] }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>: {{ $aduan['tempat_lahir'] }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: {{ $aduan['tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: {{ $aduan['agama'] }}</td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>: {{ $aduan['kabupaten_kota'] }}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: {{ $aduan['kecamatan'] }}</td>
            </tr>
            <tr>
                <td>Keluarahan/Desa</td>
                <td>: {{ $aduan['kelurahan_desa'] }}</td>
            </tr>
            <tr>
                <td>Permasalahan Yang Dirasakan</td>
                <td>: {{ $aduan['permasalahan'] }}</td>
            </tr>
            <tr>
                <td>Waktu Kejadian</td>
                <td>: {{ $aduan['waktu_kejadian'] }}</td>
            </tr>
            <tr>
                <td>Tempat Kejadian</td>
                <td>: {{ $aduan['tempat_kejadian'] }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $aduan['pekerjaan'] }}</td>
            </tr>
            <tr>
                <td>Kebutuhan Yang Diharapkan</td>
                <td>: {{ $aduan['kebutuhan'] }}</td>
            </tr>
            <tr>
                <td>Nama Pengadu</td>
                <td>: {{ $aduan['nama_pengadu'] }}</td>
            </tr>
            <tr>
                <td>Nomor Pengadu</td>
                <td>: {{ $aduan['nomor_pengadu'] }}</td>
            </tr>
        </table>
        <br>
        <p style="text-indent: 1cm;">
            Demikian disampaikan, atas perkenaan dan kerjasamanya diucapkan terima kasih.
        </p>
        <br>
        <br>
        <br>
        <div class="ttd">
            <p>Palu, {{ now()->format('d-m-Y') }}</p>
            <br>
            <p>Kepala Dinas Sosial</p>
            <p>Provinsi Sulawesi Tengah</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p><strong><u>Dra. SITTI HASBIA N. ZAENONG, M.Si</u></strong></p>
            <p><strong>Pembina Utama Muda</strong></p>
            <p><strong>NIP. 19650824 199103 2 006</strong></p>
        </div>
    </div>
</body>

</html>