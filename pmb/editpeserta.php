<?php
    $result = getSingleData($_GET['id']);
    foreach ($result as $dt):
?>
<form class="mt-3" action="./proses/edit.php" method="POST">    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $dt['nama_siswa']?>">
    </div>
    <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3"><?php echo $dt['alamat']?></textarea>
    </div>
    <div class="mb-3">
        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" value="L" <?php echo $dt['jenis_kelamin'] == "L" ? "checked": "" ?>>
            <label for="jeniskelamin" class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin" value="P" <?php echo $dt['jenis_kelamin'] == "P" ? "checked": "" ?>>
            <label for="jeniskelamin" class="form-check-label">Perempuan</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <select class="form-select" name="agama" id="agama">
            <option value="Islam" <?php echo $dt['agama'] == "Islam" ? "selected": "" ?>>Islam</option>
            <option value="Protestan" <?php echo $dt['agama'] == "Protestan" ? "selected": "" ?>>Protestan</option>
            <option value="Katolik" <?php echo $dt['agama'] == "Katolik" ? "selected": "" ?>>Katolik</option>
            <option value="Hindu" <?php echo $dt['agama'] == "Hindu" ? "selected": "" ?>>Hindu</option>
            <option value="Budha" <?php echo $dt['agama'] == "Budha" ? "selected": "" ?>>Budha</option>
            <option value="Khonghucu" <?php echo $dt['agama'] == "Khonghucu" ? "selected": "" ?>>Khonghucu</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="sekolahasal" class="form-label">Sekolah Asal</label>
        <input type="text" class="form-control" name="sekolahasal" id="sekolahasal" value="<?php echo $dt['sekolah_asal']?>">
    </div>
    <input type="hidden" name="id_siswa" id="id_siswa" value="<?php echo $dt['id_siswa']?>">
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-info text-white">Reset</button>
    <a class="btn btn-success" href="./index.php?p=calonpeserta">Kembali</a>
</form>

<?php
    endforeach;
?>