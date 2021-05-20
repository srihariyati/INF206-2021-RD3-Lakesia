<!DOCTYPE html>

<html>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/CalendarStyle.css">
    <link rel="stylesheet" href="../css/LansiaStyle.css">
      

    </head>

    <body>
        <div> <img class="lakesia-logo" src="../img/Logo.png" alt="Lakesia Logo"> </div>
        <div class="menu-bar">
            <div class="menu-text">Menu</div>
            <div class="line"></div>
            <a href="RiwayatCheckUp.php" class="button button-riwayat">Riwayat Check Up</a>
            <a href="CheckUpSekarangLansia.php" class="button button-cek-up">Check Up Sekarang</a>
            <div class="button button-emergency">Emergency</div>
        </div>
        <div class="daftar-obat-box">
            <div class="obat-text">Daftar Obat yang Harus Diminum</div>
        </div>
        <div class="box-informasi berat-badan">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Berat</div>
            <div class="isi-informasi">67 kg</div>
        </div>
        <div class="box-informasi golongan-darah">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Golongan darah</div>
            <div class="isi-informasi">O</div>
        </div>
        <div class="box-informasi tinggi-badan">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Tinggi</div>
            <div class="isi-informasi">156 cm</div>
        </div>
        <div class="box-informasi denyut-nadi">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Nadi</div>
            <div class="isi-informasi">87 BPM</div>
        </div>
        <div class="notes-box">
            <div class="notes-text">Notes</div>
            <div> <img class="button-plus" src="../img/plus.png" alt="tambah catatan"> </div>
        </div>
        <div class="calendar-box"></div>

        <div class="calendar">
            <div class="calendar-header">
                <span class="month-picker" id="month-picker">May</span>
                <div class="year-picker">
                    <span class="year-change" id="prev-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2021</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>
            <div class="calendar-body">
                <div class="calendar-week-day">
                    <div>Minggu</div>
                    <div>Senin</div>
                    <div>Selasa</div>
                    <div>Rabu</div>
                    <div>Kamis</div>
                    <div>Jumat</div>
                    <div>Sabtu</div>
                </div>
                <div class="calendar-days"></div>
            </div>
            <div class="month-list"></div>
        </div>
    
        <script src="../js/Calendar.js"></script>

        <div class="circle-profil"></div>
        <div> <img class="foto-profil" src="../img/Profile-Logo.png" alt="Foto profil"> </div>
        <div class="box-name">Jamal</div>
        <div class="box-profil-1">
                <ul>
                    <p class="data-profil">No.Id &emsp; &emsp; &emsp; &emsp; &emsp; :#11</p>
                    <p class="data-profil">Tanggal Lahir &emsp; &emsp; : 10 Maret 1955</p>
                    <p class="data-profil">Alamat &emsp; &emsp; &emsp; &emsp; &ensp;: Jalan kajhu</p>
                    <p class="data-profil">Umur &emsp; &emsp; &emsp; &emsp; &emsp; : 67 tahun</p>
                    <p class="data-profil">Agama &emsp; &emsp; &emsp; &emsp; &ensp;: Islam</p>
                    <p class="data-profil">Jenis Kelamin &emsp; &nbsp;&ensp;&ensp;: Laki-Laki</p>
                    <p class="data-profil">Riwayat Penyakit &ensp;&ensp;: Ginjal</p>
                    <p class="data-profil">Golongan Darah &ensp; &ensp;: O</p>
                    <p class="data-profil">Berat Badan &emsp; &emsp; &ensp; : 67kg</p>
                  
                </ul>
        </div>
        <div class="box-profil-2">
            <div class="square-profil"></div>
            <div> <img class="square-profil" src="../img/Profile-Logo.png" alt="Foto Profil"> </div>
            <div class="nama-profil">Jamal</div>
            <div class="usia-profil">60 Th</div>
        </div>
        
        <div class="box-cek-terakhir">
            <div class="cek-judul">Jadwal Check Up Terakhir</div>
            <div> <img class="date-logo" src="../img/date.png" alt="date"> </div>
            <div> <img class="clock-logo" src="../img/clock.png" alt=""> </div>
        </div>
        <div class="box-cek-berikut">
            <div class="cek-judul">Jadwal Check Up Berikutnya</div>
            <div> <img class="date-logo" src=".../img/date.png" alt="date"> </div>
            <div> <img class="clock-logo" src="../img/clock.png" alt=""> </div>
        </div>
    </body>

</html>