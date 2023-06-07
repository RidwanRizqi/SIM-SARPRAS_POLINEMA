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
            margin-left: 2cm;
            margin-right: 2cm;
        }

        .judul {
            font-size: 14;
            /* font-weight: bold; */
        }

        .hmj {
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
            margin-left: 11cm
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
            margin-left: 11cm;
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

    <header>
        <div style="text-align: center;">
            {{-- <img src="{{ asset('assets/img/logo_polinema.png') }}" alt=""> --}}
            <div class="judul">
                KEMENTRIAN PENDIDIKAN, KEBUDAYAAN,<br>
                RISET, DAN TEKNOLOGI <br>
                POLITEKNIK NEGERI MALANG <br>
                <span class="hmj">LT/HMJ/UKM</span><br>
            </div>
            <div class="alamat">
                Jalan Soekarno Hatta No.9 Malang 65141<br>
                Telepon (0341) 404424 – 404425 Fax (0341) 404420<br>
                http://www.polinema.ac.id
            </div>
        </div>
        <hr>
    </header>
    <section class="surat">
        <div class="header">
            <div class="tanggal">
                Malang, 20 Maret 2023
            </div>

            <div class="lampiran">
                Nomor : <br>
                Lampiran : 1 (satu) Lembar <br>
                Perilah : Peminjaman Gedung <br>
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
            <p>Sehubungan dengan adanya kegiatan "Nama Kegiatan",
                kami mohon bantuan peminjaman Gedung (Nama Gedung) beserta fasilitas yang ada didalamnya
                dan daya listrik di gedung tersebut</p>
            <p>Kegiatan tersebut akan diselenggarakan pada:</p>
            <div class="waktuKegiatan">
                hari, tanggal : <br>
                pukul : <br>
                tempat : <br>
            </div>
            <p>Demikian surat peminjaman ini kami buat, atas izin dan bantuan yang diberikan kami sampaikan terima kasih
            </p>
        </div>

        <div class="ttd1">
            <div class="kanan">Hormat kami, </div><br>
            <div class="kiri">Ketua Umum LT/HHMJ/UKM,</div>
            <div class="kanan">Ketua Pelaksana,</div>
            <div class="namakiri">(Nama Ketua Umum)</div><br>
            <div class="namakiri">NIM. (NIM Ketua Umum)</div>
            <div class="namakanan">Nama Ketua Pelaksana</div><br>
            <div class="namakanan">NIM. (NIM Ketua Pelaksana)</div>
        </div>

        <div class="text-center">Mengetahui dan menyetujui,</div>

        <div class="ttd2">
            <div class="kiri height">Dosen Pembina Kemahasiswaan,</div>
            <div class="kanan height">Presiden BEM,</div>
            <div class="kiri tinggikiri">(Nama DPK)</div><br>
            <div class="kanan tinggikanan">Ryan Yudhistira Fitrah C.</div>
            <div class="kiri tinggikiri">NIP. (NIP DPK)</div><br>
            <div class="kanan tinggikanan">NIM. 2031110036</div>
        </div>

        <div class="ttd3">
            <div class="kiri">Pembantu Direktur III,</div>
            <div class="kanan">Sekretaris Jurusan (TI)</div>
            <div class="kiri nama">Dr.Eng. Anggit Murdani, S.T., M.Eng</div>
            <div class="kanan nama">(Nama Ketua Jurusan)</div><br>
            <div class="kiri nama">NIP. 197109151999031001 </div>
            <div class="kanan nama">NIP. (NIP Ketua Jurusan)</div>
        </div>


    </section>

</body>

</html>
