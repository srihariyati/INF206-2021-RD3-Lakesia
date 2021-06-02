<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LAKESIA | Check Up Sekarang</title>

        <!--css here-->
        <link rel="stylesheet" href="/css/CheckUpSekarang/CheckupStyle.css">
        <link rel="stylesheet" href="/css/CheckUpSekarang/CheckUpSekarangStyle.css">
        <link rel="stylesheet" href="/css/CheckUpSekarang/TableStyle.css">

        <!-- js here-->
        <script src="\js\CheckUpSekarang.js"></script>
    </head>
    <body>   
        <div>
            <img class="Lakesia-Logo" src="/img/Logo.png" alt="Lakesia Logo"> </div>
            <div class='CheckUpSekarang-text'>Check Up Sekarang </div>
            <div class="perawat-tersedia-text">Perawat yang tersedia </div>
            <!--menampilkan daftar perawat yang tersedia-->
            <table  class="table-perawat-tersedia">
                <thead>
                    <tr>
                        <td class="header">Nama Perawat</td>
                        <td class="header">Alamat</td>
                        <td class="header">Nomor Telepon</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($lansia as $l)
                @foreach($perawat as $per)
                
                    <tr>
                    <td >{{$per->nama_per}}</td>
                    <td>{{$per->alamat_per}}</td>
                    <td>{{$per->nohp_per}}</td>
                    <td>
                        <button class="whatsapp-tombol"
                            onclick="window.location.href='https://wa.me/{{$per->nohp_per}}?text=Saya%20{{$l->nama_lan}}%20ingin%20melakukan%20pemeriksaan%20kesehatan%20'"
                            >WhatsApp</button>
                    </td>
                    </tr>
                @endforeach
                </tbody>  
                    
                </table>
        
        <!-- menampilkan data lansia-->
        <div class="circle-profil"></div>
        <div> <img class="foto-profil" src="/img/Profile-Logo.png" alt="Foto profil"></div>
        <div class="box-name">{{$l->nama_lan}}</div>
        <div class="box-profil-1">
        <table class="data-diri">
                    <tr>
                        <td class="judul-data-diri">No ID</td>
                        <td>:</td>
                        <td>#{{$l->id_lan}}</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Tanggal lahir</td>
                        <td>:</td>
                        <td>{{$l->tgllahir_lan}}</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Alamat</td>
                        <td>:</td>
                        <td>{{$l->alamat_lan}}</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Agama</td>
                        <td>:</td>
                        <td>{{$l->agama}}</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{$l->jk_lan}}</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Golongan Darah</td>
                        <td>:</td>
                        <td>{{$l->goldar}}</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Berat Badan</td>
                        <td>:</td>
                        <td>{{$l->berat}} Kg</td> <!--Kolom isi data-->
                    </tr>
                    <tr>
                        <td class="judul-data-diri">Tinggi Badan</td>
                        <td>:</td>
                        <td>{{$l->tinggi}} cm</td> <!--Kolom isi data-->
                    </tr>
                </table>
            </div>
            <div class="box-profil-2">
                <div class="square-profil"></div>
                <div> <img class="square-profil" src="/img/Profile-Logo.png" alt="Foto Profil"> </div>
                <table class="data-diri-singkat">
                    <tr><td class="data-nama">{{$l->nama_lan}}</td></tr> <!--Isi dengan nama pasien-->
                </table>
            </div>          
            <div class="box-cek-terakhir">
                <div class="cek-judul">Jadwal Check Up Terakhir</div>
                <div> <img class="date-logo" src="/img/date.png" alt="date"> </div>
                <div> <img class="clock-logo" src="/img/clock.png" alt=""> </div>
            </div>
            <div class="box-cek-berikut">
                <div class="cek-judul">Jadwal Check Up Berikutnya</div>
                <div> <img class="date-logo" src="/img/date.png" alt="date"> </div>
                <div> <img class="clock-logo" src="/img/clock.png" alt=""> </div>
            </div>
        @endforeach

        <a onclick="history.back()" class="previous">&#8592;</a>
        
    </body>
</html>