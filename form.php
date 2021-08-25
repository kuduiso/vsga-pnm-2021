<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Latihan Form</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <h1 class="my-3">DIGITAL TALENT :| Form dengan Bootstrap</h1>
        <form>
            <div class="row g-3 mb-3">
                <div class="col-12">
                    <label for="nama" class="form-label">Nama Anda:</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat Anda:</label>
                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label">Jenis Kelamin:</label>
                    <select class="form-select" id="alamat">
                        <option selected disabled>-- Pilih jenis kelamin --</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
            </div>        
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>