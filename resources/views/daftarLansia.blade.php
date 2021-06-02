<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LAKESIA | Daftar Lansia</title>

        <!-- css here-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/DaftarLansia/DaftarLansia.css">
    </head>
    <body>
        <!--section daftar-->
        <div class="container align-items-center justify-content-center">
            <br><br>
            <h1 class="mb-5">Daftar Disini</h1>
            <h5 class="mb-5">Akun Lansia</h5>
            <form  method="POST" action="/register/lansia">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm">
                        <label>Username</label>
                        <input class="form-control" id="username_lan" type="text" name="username_lan" placeholder="Username" required>
                        <br>
                        <label>Password</label>
                        <input class="form-control" id="password_lan"  type="password" name="password_lan" placeholder="Password" required>
                        <br>
                        <label>Konfirmasi Password</label>
                        <input class="form-control" id="konfir_pas_lan" type="password" name="konfir_pas_lan"  placeholder="Konfirmasi Password" required>
                        <br>
                                    
                    </div>
                    <div class="col-sm">
                        <label>Nama</label>
                        <input class="form-control" id="nama_lan"  type="text" name="nama_lan" placeholder="Nama" required>
                        <br>
                        <label>Nomor Telepon</label>
                        <input class="form-control" id="nohp_lan"  type="text" name="nohp_lan" placeholder="Nomor Telepon" required>
                        <br>
                        <label>Alamat</label>
                        <input class="form-control" id="alamat_lan"  type="text" name="alamat_lan" placeholder="Alamat" required>
                        <br>
                        <label>Tinggi (cm)</label>
                        <input class="form-control" id="tinggi"  type="text" name="tinggi" placeholder="Tinggi" required>
                        <br>
                        <label>Berat (Kg)</label>
                        <input class="form-control" id="berat"  type="text" name="berat" placeholder="Berat Badan" required>
                        <br>
                    </div>
                    <div class="col-sm">
                    
                    <label>Tanggal Lahir</label>
                    <input class="form-control" id="tgllahir_lan" placeholder="Tanggal Lahir"  type="date" name="tgllahir_lan" required>
                    <br>
                    <label>Jenis Kelamin</label>
                        <select class="form-control" id="jk_lan" name="jk_lan"> 
                            <option selected disabled >Pilih</option>
                            <option> Laki-laki </option>
                            <option> Perempuan </option>                        
                        </select> 
                        <br>
                        <label>Agama</label>
                        <select class="form-control" id="agama" name="agama"> 
                            <option selected disabled >Pilih</option>
                            <option> Islam </option>
                            <option> Kristen Protestan </option>
                            <option> Kristen Katolik </option>
                            <optio> Buddha </option>
                            <option> Konghucu </option>
                        </select> 
                        <br>
                        <label>Golongan Darah</label>
                        <select class="form-control" id="goldar" name="goldar">
                            <option selected disabled>Pilih</option>
                            <option> A</option>
                            <option> B</option>
                            <option> AB</option>
                            <option> O</option>
                        </select>
                        <br><br>
                        
                        <div class=" d-grid gap-2 col-6 mx-auto ">
                        <button class="btn btn-primary" type="submit" name="register"> Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <a onclick="history.back()" class="previous">&#8592;</a>
    </body>
</html>