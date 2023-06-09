@php
    use Carbon\Carbon;
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo_polinema.png') }}" style="width: 50px">
    <title>Unduh Bukti Peminjaman - SIMSARPRAS</title>
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
            margin-top: 120px;
        }
        .namakanan{
            position: fixed;
            margin-top: 2.6cm;
            margin-left: 9.5cm;
        }

<<<<<<< Updated upstream
        .text-center{
            margin-top: 2.5cm;
=======
        .text-center {
            margin-top: 3.5cm;
>>>>>>> Stashed changes
            text-align: center;
        }
        .ttd2{
            margin-top: 0.5cm;
        }
<<<<<<< Updated upstream
        .nama{
            margin-top: 1.7cm;
=======

        .nama {
            margin-top: 3.1cm;
        }
        .gambar{
            margin-right: 120px;
        }
        .gambarkiri{
            float: left;
>>>>>>> Stashed changes
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
                Malang, @php $created_at = Carbon::parse($object->created_at)->locale('id')->isoFormat('dddd D MMMM Y');
                        echo $created_at;
                        @endphp
            </div>

            <div class="lampiran">
                Nomor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <br>
                Lampiran &nbsp;&nbsp;&nbsp;: 1 (satu) Lembar <br>
                Perilah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Peminjaman Gedung <br>
            </div>
            <br>

            <div class="penerima">
                Yth. Pembantu Direktur III <br>
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
                @php
                    $tanggal_mulai = Carbon::parse($object->tanggal_mulai)->locale('id')->isoFormat('dddd D MMMM Y');
                    $tanggal_selesai = Carbon::parse($object->tanggal_selesai)->locale('id')->isoFormat('dddd D MMMM Y');
                    echo "hari, tanggal  &nbsp;&nbsp;: " . $tanggal_mulai . " - " . $tanggal_selesai . "<br>";
                    $jam_selesai = substr($object->jam_selesai, 0, 5);
                    $jam_mulai = substr($object->jam_mulai, 0, 5);
                    echo "pukul  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $jam_mulai . " - ". $jam_selesai . "<br>";
                @endphp
                tempat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $object->saranaPrasarana->nama }} {{ $object->wewenang->name }}<br>
            </div>
            <p>Demikian surat peminjaman ini kami buat, atas izin dan bantuan yang diberikan kami sampaikan terima kasih
            </p>
        </div>

<<<<<<< Updated upstream
        <div class="ttd1">
            <div class="kanan">Hormat kami, </div><br>
            <div class="kiri">Ketua Umum {{ $object->user->name }},</div>
            <div class="kanan">Penanggung Jawab,</div>
            <div class="namakiri">{{ $object->user->nama_pj }}</div><br>
            <div class="namakiri">NIP. {{ $object->user->ninduk_pj }}</div>
            <div class="namakanan">{{ $object->penanggung_jawab }}</div><br>
            <div class="namakanan">NIP. {{ $object->nim }}</div>
        </div>
=======
            <div class="ttd1">
                <div class="kanan">Hormat kami,</div>
                <br>
                <div class="kiri">{{ $object->user->name }},</div>
                <div class="kanan">Penanggung Jawab,</div>
                <div class="gambar">
                    <img src="assets/img/logo_iso.png" width="100" height="100" alt="logo" class="d-inline logo2">
                </div>
                <div class="namakiri">{{ $object->user->nama_pj }}</div>

                <div class="gambarkiri">
                    <img src="assets/img/logo_iso.png" width="100" height="100" alt="logo" class="d-inline logo2">
                </div>
                <br>
                <div class="namakiri">NIP. {{ $object->user->ninduk_pj }}</div>
                <div class="namakanan">{{ $object->penanggung_jawab }}</div>
                <br>
                <div class="namakanan">NIP. {{ $object->nim }}</div>
            </div>
>>>>>>> Stashed changes

        <div class="text-center">Mengetahui dan menyetujui,</div>

<<<<<<< Updated upstream
        <div class="ttd2">
            <div class="kiri">{{ $object2->jabatan }}</div>
            <div class="kanan">{{ $object->wewenang->jabatan }}</div>
            <div class="kiri nama">{{ $object2->pj }}</div>
            <div class="kanan nama">{{ $object->wewenang->pj }}</div><br>
            <div class="kiri nama">NIP. {{ $object2->nip }} </div>
            <div class="kanan nama">NIP. {{ $object->wewenang->nip }}</div>
        </div>
=======
            <div class="ttd2">
                <div class="kiri">{{ $object2->jabatan }}</div>
                <div class="kanan">{{ $object->wewenang->jabatan }}</div>
                <div class="gambar">
                    <img src="assets/img/logo_iso.png" width="100" height="100" alt="logo" class="d-inline logo2">
                </div>
                <div class="kiri nama">{{ $object2->pj }}</div>
                <div class="kanan nama">{{ $object->wewenang->pj }}</div>

                <div class="gambarkiri">
                    <img src="assets/img/logo_iso.png" width="100" height="100" alt="logo" class="d-inline logo2">
                </div>
                <br>
                <div class="kiri nama">NIP. {{ $object2->nip }} </div>
                <div class="kanan nama">NIP. {{ $object->wewenang->nip }}</div>
            </div>
>>>>>>> Stashed changes

    </section>
@endforeach
@endforeach
</body>

</html>
