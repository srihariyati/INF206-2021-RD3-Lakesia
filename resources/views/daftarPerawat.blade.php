<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LAKESIA | Daftar</title>

        <!-- css here-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/DaftarPerawat/DaftarPerawat.css">
    </head>
    <body>
    <div class="container align-items-center justify-content-center">
            <br><br>
            <h1 class="mb-5">Daftar Disini</h1>
            <h5 class="mb-5">Akun Perawat</h5>
            <form method="POST" action="/register/perawat" >
            {{ csrf_field() }}
            
                <div class="row">
                    <div class="col-sm">
                        <label>Username</label>
                        <input class="form-control" id="username_per" type="text" name="username_per" placeholder="username" require>
                        <br>
                        <label>Password</label>
                        <input class="form-control" id="password_per"  type="password" name="password_per" placeholder="Password" required>
                        <br>
                        <label> Konfirmasi Password</label>
                        <input class="form-control" id="konfir_pas_per" type="password" name="konfir_pas_per" placeholder="Konfirmasi Password" required >
                        <br> 
                    </div>
                        
                    <div class="col-sm">
                        <label>Nomor Pegawai</label>
                        <input class="form-control" id="no_per" type="text" name="no_per" placeholder="Nomor Pegawai" required>
                        <br>
                        <label>Nama</label>
                        <input class="form-control" id="nama_per" type="text" name="nama_per" placeholder="Nama Lengkap" required>
                        <br>
                        <label>Nomor Telepon</label>
                        <input class="form-control" id="nohp_per"  type="text" name="nohp_per" placeholder="Nomor Hp" required>
                        <br>
                        <label>Alamat</label>
                        <input class="form-control" id="alamat_per"  type="text" name="alamat_per" placeholder="Alamat" required>
                        <br>
                    </div>

                    <div class="col-sm">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" id="tgllahir_per" name="tgllahir_per" placeholder="Tanggal Lahir"  type="date"  required>
                    <br>
                    <label>Jenis Kelamin</label>
                        <select  class="form-control" id="jk_per" name="jk_per"> 
                            <option selected disabled >Pilih</option>
                            <option> Laki-laki </option>
                            <option> Perempuan </option>                        
                        </select> 
                    <br>
                    <label>Asal Posyandu</label>
                    <input class="form-control" id="nama_pos"  type="text" name="nama_pos" placeholder="Nama Asal Posyandu" required>
                    <br>
                        <div class=" d-grid gap-2 col-6 mx-auto ">
                        <button class="btn btn-primary" type="submit" name="registerper"> Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <a onclick="history.back()" class="previous">&#8592;</a>
    </body>
</html>