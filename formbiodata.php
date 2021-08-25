<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata PHP</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center mt-3">Form Biodata</h1>
            <form action="outputbiodata.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatLahir" id="tempatLahir">
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir">
                </div>
                <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check" id="jenisKelamin">
                        <input type="radio" class="form-check-input" name="jenisKelamin" value="Pria" id="Pria">
                        <label for="Pria" class="form-check-label">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenisKelamin" value="Wanita" id="Wanita">
                        <label for="Wanita" class="form-check-label">
                            Wanita
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>