<?php 
    include 'header.php'; 
?>
<main>
    <div class="container">
        <?php 
        require './proses/koneksi.php';
        if (isset($_GET['p']) && $_GET['p'] != '') {
            $page = $_GET['p'];
            include $page.'.php';
        } else { ?>
            <h1 class="mt-3">Selamat Datang Calon Peserta Digital Talent</h1>
            <hr class="my-3">
            <p>Silahkan pilih <b>Menu Daftar Baru</b> untuk melakukan pendaftaran.</p>
        <?php
        }
        ?>

        <!-- MODAL DAFTAR BARU -->
        <div class="modal fade" id="modaldaftarbaru" tabindex="-1" aria-labelledby="modalDaftarBaruLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDaftarBaruLabel">Tambah Data Peserta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" value="L">
                                <label for="jeniskelamin" class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" value="P">
                                <label for="jeniskelamin" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama" id="agama">
                                <option selected disabled>-- Pilih salah satu --</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sekolahasal" class="form-label">Sekolah Asal</label>
                            <input type="text" class="form-control" name="sekolahasal" id="sekolahasal">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-info text-white">Reset</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </form>
                </div>
            </div>
        </div>     
    </div>

    <!-- PROSESING DATA -->
    <?php    
    if (isset($_POST['simpan'])) {
        $arr['nama'] = $_POST['nama'];
        $arr['alamat'] = $_POST['alamat'];
        $arr['jenis_kelamin'] = $_POST['jeniskelamin'];
        $arr['agama'] = $_POST['agama'];
        $arr['sekolah_asal'] = $_POST['sekolahasal'];

        $result = insertData($arr);
        if ($result) {
            echo "<div id='message' style='visibility: hidden'>Data berhasil ditambahkan</div>";
        } else {
            echo "<div id='message' style='visibility: hidden'>Error: ".mysqli_error($conn)."</div>";
        }
    }
    ?>
    <!-- END PROSESING DATA -->
</main>
<?php include 'footer.php'; ?>