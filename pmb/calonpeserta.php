<h1 class="mt-3">Pendaftar</h1>
<hr class="my-3">
<table class="table table-striped">
    <tr class="bg-dark text-white">
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Tindakan</th>
    </tr>
    <?php
        $result = getData();
        $no = 1;
        foreach($result as $dt):
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $dt['nama_siswa']; ?></td>
        <td><?php echo $dt['alamat']; ?></td>
        <td><?php echo $dt['jenis_kelamin'] == "L" ? "Laki-laki" : "Perempuan"; ?></td>
        <td><?php echo $dt['agama']; ?></td>
        <td><?php echo $dt['sekolah_asal']; ?></td>
        <td>
            <a class="btn btn-warning" href="./index.php?p=editpeserta&id=<?php echo $dt['id_siswa']?>">Edit</a>
            <button class="btn btn-danger text-white" onclick="deletedata('<?php echo $dt['id_siswa']?>')">Delete</button>
        </td>
    </tr>
    <?php
        endforeach;
    ?>
</table>