<!DOCTYPE html>
<html>
    <head>
        <title>EDIT ANGGOTA</title>
    </head>
    <body>
        <div>
            <div>
                <h1>DTS Junior Web Developer</h1>
                <p>Halaman Mengubah Data Anggota</p>
            </div>
            <div>
                <ul>
                    <li><a href="index.php">Tampil Data</a></li>
                    <li><a href="tambah_data.php">Input Data</a></li>
                </ul>
            </div>
            <div>
            <?php
                require "./models/AnggotaModel.php";
                $data = getAnggotaById($_GET['idanggota']);
                foreach ($data as $dt) {
            ?>

                    <form method="POST" action="">
                        <div>
                            <div>
                                <input type="text" name="idanggota" id="idanggota" placeholder="Id Anggota" value="<?= $dt['idanggota'] ?>">
                            </div>
                            <br />
                            <div>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $dt['nama'] ?>">
                            </div>
                            <br />
                        </div>
                        <div>
                            <legend>Jenis Kelamin</legend>
                            <div>
                                <div>
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Pria" <?= $dt['jeniskelamin'] == 'Pria' ? 'checked':'' ?>>
                                    <label class="form-check-label" for="gridRadios1">Pria</label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="Wanita" <?= $dt['jeniskelamin'] == 'Wanita' ? 'checked':'' ?>>
                                    <label class="form-check-label" for="gridRadios2">Wanita</label>
                                </div>
                                <br />
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat Rumah" value="<?= $dt['alamat'] ?>">
                            </div>
                            <br />
                            <div>
                                <input type="text" name="status" id="status" placeholder="status" value="<?= $dt['status'] ?>">
                            </div>
                            <br />
                            <div>
                                <input type="submit" name="kirim" id="kirim" value="kirim">
                            </div>
                            <br />
                        </div>
                    </form>
            <?php
                }
            ?>
            </div>
        </div> 

        <?php
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
                        $result = updateAnggota($data);
                        if ($result) {
                            header("location:index.php?message=updatesukses");
                        }
                    } catch (Exception $e) {
                        echo "Error: ".$e;
                    }
                } else {
                    header("location:editpage.php?idanggota={$_GET['idanggota']}&message=inputkosong");
                }
            }
        ?>
    </body>
</html>