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
            margin-left: 3cm;
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

    </style>
    <title>Document</title>
</head>

<body>

    <header>
        <div style="text-align: center;">
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


    </section>

</body>

</html>
