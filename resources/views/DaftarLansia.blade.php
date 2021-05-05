<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Lansia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container align-items-center justify-content-center">
        <br><br>
        <h1 class="mb-5">Daftar Disini</h1>
        <form action="registration.php" method="post"></form>
            <div class="row">
                <div class="col-sm">
                    <br>
                    <input class="form-control" id="Username" type="text" name="Username" placeholder="Username" required>
                    <br>
                    <input class="form-control" id="password"  type="password" name="password" placeholder="Password" required>
                    <br>
                    <input class="form-control" id="no_hp"  type="text" name="no_hp" placeholder="Nomor Hp" required>
                    <br>
                    <input class="form-control" id="jenis_kelamin"  type="text" name="jenis_kelamin" placeholder="Jenis Kelamin (P/L)" required>
                
                </div>
                <div class="col-sm">
                    <br>
                    <input class="form-control" id="alamat"  type="text" name="alamat" placeholder="Alamat" required>
                    <br>
                    <input class="form-control" id="tgl_lahir"  type="text" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                    <br>
                    <input class="form-control" id="goldar"  type="text" name="goldar" placeholder="Golongan Darah" required>
                    <br>
                    <input class="form-control" id="tinggi"  type="text" name="tinggi" placeholder="Tinggi" required>

                </div>
                <div class="col-sm">
                    <br>
                    <input class="form-control" id="berat"  type="text" name="berat" placeholder="Berat" required>
                    <br>
                    <input class="form-control" id="agama"  type="text" name="agama" placeholder="Agama" required>
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