<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Perawat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container align-items-center justify-content-center">
        <br><br>
        <h1 class="mb-5">Daftar Disini</h1>
        <form action="registration.php" method="post"></form>
            <div class="row">
                <div class="col-sm">
                    <label>Nomor Pegawai*</label>
                    <input class="form-control" id="no_per" type="text" name="no_per" placeholder="Nomor Pegawai" required>
                    <br>
                    <label>Nama</label>
                    <input class="form-control" id="nama_per" type="text" name="nama_per" placeholder="Nama Lengkap" required>
                    <br>
                    <label>Password</label>
                    <input class="form-control" id="password_per"  type="password" name="password_per" placeholder="Password" required>
                    <br>
                    <label>Nomor Telepon</label>
                    <input class="form-control" id="no_hp_per"  type="text" name="no_hp_per" placeholder="Nomor Hp" required>
                    <br>
                    <label>Alamat</label>
                    <input class="form-control" id="alamat_peg"  type="text" name="alamat_peg" placeholder="Alamat" required>
                
                </div>
                <div class="col-sm">
                    <label>Tanggal Lahir</label>
                   <input class="form-control" id="tgl_lahir_per" placeholder="Tanggal Lahir"  type="date" name="tgl_lahir_per" required>
                   <br>
                   <label>Jenis Kelamin</label>
                    <select class="form-control"> 
                        <option selected disabled >Pilih</option>
                        <option> Laki-laki </option>
                        <option> Perempuan </option>                        
                    </select> 
                   <br>
                   <label>Asal Posyandu</label>
                    <input class="form-control" id="nama_pos"  type="text" name="nama_pos" placeholder="Nama Asal Posyandu" required>
                    <br>
                    <div class=" d-grid gap-2 col-6 mx-auto ">
                    <input class="btn btn-primary   " type="submit" id="register" name="create" value="Daftar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>