<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Lansia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/DaftarLansia.css">
</head>
<body>
    <div class="container align-items-center justify-content-center">
        <br><br>
        <h1 class="mb-5">Daftar Disini</h1>
        <form action="registration.php" method="post"></form>
            <div class="row">
                <div class="col-sm">
                    <label>Username</label>
                    <input class="form-control" id="Username" type="text" name="Username" placeholder="Username" required>
                    <br>
                    <label>Password</label>
                    <input class="form-control" id="password"  type="password" name="password" placeholder="******" required>
                   
                                   
                </div>
                <div class="col-sm">
                    <label>Nama</label>
                    <input class="form-control" id="nama_lansia"  type="text" name="nama_lansia" placeholder="Isi Disini" required>
                    <br>
                    <label>Nomor Telepon</label>
                    <input class="form-control" id="no_hp"  type="text" name="no_hp" placeholder="+628" required>
                    <br>
                    <label>Alamat</label>
                    <input class="form-control" id="alamat"  type="text" name="alamat" placeholder="Isi Disini" required>
                    <br>
                    <label>Tinggi</label>
                    <input class="form-control" id="tinggi"  type="text" name="tinggi" placeholder="Isi Disini" required>
                    <br>
                    <label>Berat</label>
                    <input class="form-control" id="berat"  type="text" name="berat" placeholder="Isi Disini" required>
                    <br>
                </div>
                <div class="col-sm">
                   
                   <label>Tanggal Lahir</label>
                   <input class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir"  type="date" name="tgl_lahir" required>
                   <br>
                   <label>Jenis Kelamin</label>
                    <select class="form-control"> 
                        <option selected disabled >Pilih</option>
                        <option> Laki-laki </option>
                        <option> Perempuan </option>                        
                    </select> 
                    <br>
                    <label>Agama</label>
                    <select class="form-control"> 
                        <option selected disabled >Pilih</option>
                        <option> Islam </option>
                        <option> Kristen Protestan </option>
                        <option> Kristen Katolik </option>
                        <optio> Buddha </option>
                        <option> Konghucu </option>
                    </select> 
                    <br>
                    <label>Golongan Darah</label>
                    <select class="form-control">
                        <option selected disabled>Pilih</option>
                        <option> A</option>
                        <option> B</option>
                        <option> AB</option>
                        <option> O</option>
                    </select>
                    <br><br>
                    
                    <div class=" d-grid gap-2 col-6 mx-auto ">
                    <input class="btn btn-primary   " type="submit" id="register" name="create" value="Daftar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>