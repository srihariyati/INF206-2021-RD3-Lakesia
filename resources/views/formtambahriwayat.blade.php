<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="/img/lakesia-logo.png">
        <title>LAKESIA | Tambah Riwayat</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/TambahData/TambahDataStyle.css">
    </head>
    <body>
        <div class="container align-items-center justify-content-center">
            <br><br>
            <h1 class="mb-5">Tambah Riwayat Pemeriksaan</h1>
    <!--tambahkan layout-->
            <form method='POST' action="/tambahriwayat">
            {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm">
                        <h3>Data Diri Lansia</h3>
                            <label>Username</label>
                            <input class="form-control" id="username_lan" type="text" name="username_lan" readonly value="{{$username_lan}}" required>
                            <br> 
                            <label>Nama</label>
                            <input class="form-control" id="nama_lan" type="text" name="nama_lan" readonly value="{{$nama_lan}}" required>
                            <br>
                            <label>Alamat</label>
                            <input class="form-control" id="alamat_lan" type="text" name="alamat_lan" readonly value="{{$alamat_lan}}" required>
                            <br>      
                        </div>
                        <div class="col-sm">
                        <h3>Data Diri Perawat</h3>
                            <label>Nama Pemeriksa</label>
                            <input class="form-control" id="nama_per"  type="text" name="nama_per" placeholder="Nama Pemeriksa" required>
                            <br>
                            <label>Tanggal Pemeriksaan</label>
                            <input class="form-control" id="tgl" type="date" name="tgl"  placeholder="Tanggal Pemeriksaan" required>
                            
                        </div>
                        <div class="col-sm">
                        <h3>Hasil Pemeriksaan</h3>
                            <label>Gula Darah</label>
                            <input class="form-control" id="gula" type="text" name="gula" placeholder="Gula Darah" required>
                            <br>
                            <label>Gula Darah</label>
                            <input class="form-control" id="tekanandarah" type="text" name="tekanandarah" placeholder="Tekanan Darah" required>
                            <br>
                            <label>Tekanan Darah</label>
                            <input class="form-control" id="asamurat" type="text" name="asamurat" placeholder="Asam Urat" required>
                            <br> 
                            <label>Tekanan Darah</label>
                            <input class="form-control" id="kolesterol" type="text" name="kolesterol" placeholder="Kolesterol" required>
                            <br><br><br><br>

                            <div class=" d-grid gap-2 col-6 mx-auto ">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>

        <a onclick="history.back()" class="previous">&#8592;</a>

    </body>
</html>