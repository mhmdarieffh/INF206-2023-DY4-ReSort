<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=auto, height=auto">
    <title>ReSort</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/formpetugas.css">
</head>
<body>
    <header style="width: 1482px; height: 117px; background-color: #e6e6e6; border-radius: 30px;">
        <img src="{{asset('assets/img/logoresort.png')}}" alt="icon" style="margin-left: 45px; margin-top: 39px; width: 212px; height: 39px;"/>
        <nav style="margin-top: 40px; font-size: 30px;">
            <a href="berandapetugas.php" class="beranda">Beranda</a>
            <a href="" class="kontak">Kontak</a>
            <a href="" class="halo">Halo,Zul</a>
        </nav>
    </header>
    <table style="font-size: 36px; margin-left: 45px; margin-top: 75px; margin-bottom: 120px;">
        <tr>
            <td>Nama</td>
            <td style="padding-right: 5px;">:</td>
            <td>Zul</td>
        </tr>
        <tr>
            <td style="padding-right: 25px;">ID Petugas</td>
            <td>:</td>
            <td>00154</td>
        </tr>
    </table>
    <div style="width: 1482px; max-height: auto; margin-bottom: 120px;">
        <table class="tabel" style="margin-bottom: 10px;">
            <thead style="background-color: #adde86; font-size: 30px; text-align: center;">
                <tr>
                    <td class="no">NO</td>
                    <td class="nama">NAMA</td>
                    <td class="alamat">ALAMAT</td>
                    <td class="status">STATUS</td>
                </tr>
            </thead>
        </table>
        <table class="tabel">
            <tbody style="background-color: white; font-size: 30px; text-align: center;">
                <tr>
                    <td class="no">1</td>
                    <td class="nama">Irma</td>
                    <td class="alamat">Jl.Ikan</td>
                    <td class="status">SUDAH</td>
                </tr>
                <tr>
                    <td class="no">2</td>
                    <td class="nama">Adi</td>
                    <td class="alamat">Jl.Ayam</td>
                    <td class="status">SUDAH</td>
                </tr>
                <tr>
                    <td class="no">3</td>
                    <td class="nama">Imran</td>
                    <td class="alamat">Jl.Layang</td>
                    <td class="status">BELUM</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
