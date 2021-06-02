<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LAKESIA | Dasboard</title>

        <!-- css here -->
        <link rel="stylesheet" href="/css/Lansia/CalendarStyle.css">
        <link rel="stylesheet" href="/css/Lansia/LansiaStyle.css">
        
    </head>
    <body>
    @foreach($lansia as $l)   
    <div> <img class="lakesia-logo" src="../img/Logo.png" alt="Lakesia Logo"> </div>
            <div class="menu-bar">
                <div class="menu-text">Menu</div>
                    <div class="line"></div>

                    <form method="get" action="/dasboard/lansia/riwayatcheckup">
                        <input style=" background-color:transparent;color:transparent;border:none;"name="username_lan" value="{{$l->username_lan}}" readonly><br>
                        <button type="submit" class="button button-riwayat">Riwayat Check Up</button>
                    </form>

                    <form method="get" action="/dasboard/lansia/checkupsekarang">
                    <input style=" background-color:transparent;color:transparent;border:none;"name="username_lan" value="{{$l->username_lan}}" readonly><br>
                        <button type="submit" class="button button-cek-up">Check Up Sekarang</button>
                    </form>
                        <a href="#box-emergency" class="button button-emergency">
                            Emergency Call
                        </a>
                    </div>

                    <div class="daftar-obat-box">
                        <div class="obat-text">Daftar Obat yang Harus Diminum</div>
                        <table class="list-obat">
                            <tr class="judul-obat">
                                <td class="nama-obat">Nama Obat</td> <!--Isi nama obat-->
                                <td class="jadwal-obat">Jadwal</td> <!--Isi jadwal obat-->
                            </tr>

                            @foreach($obat as $o)
                                <tr class="list-daftar">
                                    <td class="nama-obat">{{$o->nama_obat}}</td>
                                    <td class="jadwal-obat">{{$o->jadwal}}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>


            <!-- info grafis lansia --> 
            <!--menampilkan data --> <!--start-->
        
            <div class="box-informasi berat-badan">
                <div class="box-acs-1"></div>
                <div class="box-acs-2"></div>
                <div class="informasi-judul">Berat</div>
                <div class="informasi-isi">{{$l->berat}} Kg</div>
            </div>
            <div class="box-informasi golongan-darah">
                <div class="box-acs-1"></div>
                <div class="box-acs-2"></div>
                <div class="informasi-judul">Golongan darah</div>
                <div class="informasi-isi">{{$l->goldar}}</div>
            </div>
            <div class="box-informasi tinggi-badan">
                <div class="box-acs-1"></div>
                <div class="box-acs-2"></div>
                <div class="informasi-judul">Tinggi</div>
                <div class="informasi-isi">{{$l->tinggi}} cm</div>
            </div>

            <div class="box-informasi denyut-nadi">
                <div class="box-acs-1"></div>
                <div class="box-acs-2"></div>
                <div class="informasi-judul">Nadi</div>
                <div class="isi-informasi">-</div>
            </div>
            <!-- info grafis lansia END-->

            <!-- profil lansia-->
            <div class="circle-profil"></div>
            <div> <img class="foto-profil" src="/img/Profile-Logo.png" alt="Foto profil"></div>
            <div> <a style="color:red; left: 1400px;top: 40px;" href="/">Logout</a></div>
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
            
            <!--calender-->
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
        
            <script src="/js/Calendar.js"></script>
            
            <div id="box">
                Masukkan Catatan anda <br><br>
                <form method="post" action="/catatan">
                {{ csrf_field() }}
                <textarea style="width: 350px; height:200px;" name="note" required></textarea>
                <input style=" color:white;border:none;"name="username_lan" value="{{$l->username_lan}}"><br>
                <button type="submit">Simpan</button>
                <a href=# class="batal">×</a>
                </form>
        
            <!--menampilkan data --> <!--end-->
            @endforeach

            <!-- catatan-->
            </div>
            <div class="notes-box">
                <div class="notes-text">Notes</div>
                <a class="tambah-button" href="#box">+</a> 
                <table class="list-notes">
                @foreach($catatan as $c)
                    <tr>
                        <td>{{$c->isi}}</td> <!--Isi catatan-->
                    </tr>
                @endforeach
                </table>     
            </div>

            <div id="box-emergency">
                <br><br>
                <div class="emergency-text">Unit Gawat Darurat</div>
                <div>
                    <img class="call-logo" src="/img/call.png" alt="call logo">
                </div>
                <div class="call-nomor">0811-689-110</div>
                <div class="call-tempat">Unit Pelayanan Ambulance Dinas Kesehatan Banda Aceh</div>
                <a href=# class="batal"> x </a>
            </div>
        
    </body>
</html>