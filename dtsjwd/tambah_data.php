<!DOCTYPE html>
<html>
    <head>
        <title>INPUT ANGGOTA</title>
    </head>
    <body>
    <div>
        <div>
            <h1>DTS Junior Web Developer</h1>
            <p>Halaman Menambahkan Data Anggota</p>
        </div>
        <div>
            <ul>
                <li><a href="index.php">Tampil Data</a></li>
                <li><a href="tambah_data.php">Input Data</a></li>
            </ul>
        </div>
        <form method="POST" action="">
            <div>
                <div>
                    <input type="text" name="idanggota" id="idanggota" placeholder="Id Anggota">
                </div>
                <br />
                <div class="col-sm-6">
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">                    
                </div>
                <br />
                <div>
                    <legend>Jenis Kelamin</legend>
                    <div>
                        <div>
                            <input type="radio" name="jeniskelamin" id="gridRadios1" value="Pria">
                            <label class="form-check-label" for="gridRadios1">Pria</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="Wanita">
                            <label class="form-check-label" for="gridRadios2">Wanita</label>
                        </div>
                    </div>
                </div>
                <br />
                <div>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Rumah">
                </div>
                <br />
                <div>
                    <input type="text" name="status" id="status" placeholder="Status">
                </div>
                <br />
                <div>
                    <input type="submit" id="kirim" name="kirim" value="Kirim">
                </div>
                <br />
            </div>
        </form>
    </div>
    
    <?php
        // PROSES DATA
            require ('./models/AnggotaModel.php');

            if (isset($_POST['kirim'])) {
                $idanggota = $_POST['idanggota'];
                $nama = $_POST['nama'];
                $jeniskelamin = $_POST['jeniskelamin'];
                $alamat = $_POST['alamat'];
                $status = $_POST['status'];

                if ($idanggota != '' && $nama != '' && $jeniskelamin != '' && $alamat != '' && $status != '') {
                    $data = [
                        "idanggota" => $idanggota,
                        "nama" => $nama,
                        "jeniskelamin" => $jeniskelamin,
                        "alamat" => $alamat,
                        "status" => $status,
                    ];

                    try {
                        $result = inputAnggota($data);
                        if($result) {
                            header("location:index.php?message=inputsukses");
                        }
                    } catch(Exception $e) {
                        echo "Error: ".$e;
                    }
                } else {
                    header("location:tambah_data.php?message=inputkosong");
                }
            }
        // END PROSES DATA
    ?>
    </body>
</html>