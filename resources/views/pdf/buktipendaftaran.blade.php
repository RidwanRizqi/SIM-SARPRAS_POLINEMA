<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/stylepdf.css') }}"> --}}
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: auto;
            margin-left: 2cm;
            margin-right: 2cm;
        }

        .judul {
            font-size: 14;
            /* font-weight: bold; */
        }

        .isi{
            text-align: justify;
        }

        .hmj {
            text-transform: uppercase;
            font-weight: bold;
        }

        .alamat, .surat{
            font-size: 12;
        }

        .tanggal {
            text-align: right;
        }

        .tempat, .waktuKegiatan {
            margin-left: 32px;
        }
        .ttd{
            /* display: inline; */
        }
        .kanan{
            position: fixed;
            margin-left: 9.5cm;
        }

        .kiri{
            position: fixed;
        }

        .namakiri{
            position: fixed;
            margin-top: 80px;
        }
        .namakanan{
            position: fixed;
            margin-top: 1.47cm;
            margin-left: 9.5cm;
        }

        .text-center{
            margin-top: 2.5cm;
            text-align: center;
        }
        .height{
            margin-top: 5px
        }

        .tinggikanan{
            margin-top: 60px;
        }
        .tinggikiri{
            margin-top: 77px
        }
        .ttd3{
            margin-top: 95px
        }
        .nama{
            margin-top: 1.7cm
        }



    </style>
    <title>Document</title>
</head>

<body>
@foreach ($peminjamanPdf as $object)
    @foreach($peminjamanPdf2 as $object2)

    <header>
        <div style="text-align: center;">
{{--             <img src="{{ asset('assets/img/logo_polinema.png') }}" width="70" height="70" alt="logo">--}}
            <div class="judul">
                KEMENTRIAN PENDIDIKAN, KEBUDAYAAN,<br>
                RISET, DAN TEKNOLOGI <br>
                POLITEKNIK NEGERI MALANG <br>
                <span class="hmj">{{ auth()->user()->name }}</span><br>
            </div>
            <div class="alamat">
                Jalan Soekarno Hatta No.9 Malang 65141<br>
                Telepon (0341) 404424 – 404425 Fax (0341) 404420<br>
                https://www.polinema.ac.id
            </div>
        </div>
        <hr>
    </header>
    <section class="surat">

        <div class="header">
            <div class="tanggal">
                Malang, {{ $object->tanggal_mulai}}
            </div>

            <div class="lampiran">
                Nomor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <br>
                Lampiran &nbsp;&nbsp;&nbsp;: 1 (satu) Lembar <br>
                Perilah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Peminjaman Gedung <br>
            </div>
            <br>

            <div class="penerima">
                Yth. Pembantu Direktur II <br>
                <div class="tempat">
                    Politeknik Negeri Malang <br>
                    Malang
                </div>
            </div>
        </div>

        <div class="isi">
            <p>Dengan Hormat,</p>
            <p>Sehubungan dengan adanya kegiatan
                    {{ $object->kegiatan }},
                kami mohon bantuan peminjaman Sarana Prasarana {{ $object->saranaPrasarana->nama }} {{ $object->wewenang->name }} beserta fasilitas yang ada didalamnya
                dan daya listrik di gedung tersebut.</p>
            <p>Kegiatan tersebut akan diselenggarakan pada:</p>
            <div class="waktuKegiatan">
                hari, tanggal  &nbsp;&nbsp;: {{ $object->tanggal_mulai }} hingga {{ $object->tanggal_selesai }}<br>
                pukul  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $object->jam_mulai}} - {{ $object->jam_selesai}}<br>
                tempat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $object->saranaPrasarana->nama }} {{ $object->wewenang->name }}<br>
            </div>
            <p>Demikian surat peminjaman ini kami buat, atas izin dan bantuan yang diberikan kami sampaikan terima kasih
            </p>
        </div>

        <div class="ttd1">
            <div class="kanan">Hormat kami, </div><br>
            <div class="kiri">Ketua Umum {{ $object->user->name }},</div>
            <div class="kanan">Ketua Pelaksana,</div>
            <div class="namakiri">{{ $object->user->nama_pj }}</div><br>
            <div class="namakiri">NIM. {{ $object->user->ninduk_pj }}</div>
            <div class="namakanan">{{ $object->penanggung_jawab }}</div><br>
            <div class="namakanan">NIM. {{ $object->nim }}</div>
        </div>

        <div class="text-center">Mengetahui dan menyetujui,</div>

        <div class="ttd2">
            <div class="kiri height">Dosen Pembina Kemahasiswaan,</div>
            <div class="kanan height">Presiden BEM,</div>
            <div class="kiri tinggikiri">{{ $object->user->nama_dpk }}</div><br>
            <div class="kanan tinggikanan">Ahmad Assas Hakiki</div>
            <div class="kiri tinggikiri">NIP.{{ $object->user->nip_dpk }}</div><br>
            <div class="kanan tinggikanan">NIM. 2031110036</div>
        </div>

        <div class="ttd3">
            <div class="kiri">{{ $object2->jabatan }}</div>
            <div class="kanan">{{ $object->wewenang->jabatan }}</div>
            <div class="kiri nama">{{ $object2->pj }}</div>
            <div class="kanan nama">{{ $object->wewenang->pj }}</div><br>
            <div class="kiri nama">NIP. {{ $object2->nip }} </div>
            <div class="kanan nama">NIP. {{ $object->wewenang->nip }}</div>
        </div>

    </section>
@endforeach
@endforeach
</body>

</html>
