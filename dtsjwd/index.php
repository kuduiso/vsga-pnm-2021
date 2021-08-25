<!DOCTYPE html>
<html>
    <head>
        <title> DTS JWD</title>
    </head>
    <body>
    <div>
        <div>
            <h1>DTS Junior Web Developer</h1>
            <p>Halaman Menampilkan Data Anggota</p>
        </div>
        <div>
            <ul>
                <li><a href="index.php">Tampil Data</a></li>
                <li><a href="tambah_data.php">Input Data</a></li>
            </ul>
        </div>
        <div>
            <div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Id Anggota</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require "./models/AnggotaModel.php";
                            $data = getAllAnggota();
                            $no = 1;
                            foreach($data as $dt) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dt['idanggota'] ?></td>
                                <td><?= $dt['nama'] ?></td>
                                <td><?= $dt['jeniskelamin'] ?></td>
                                <td><?= $dt['alamat'] ?></td>
                                <td><?= $dt['status'] ?></td>
                                <td>
                                    <a href="editpage.php?idanggota=<?= $dt['idanggota'] ?>">EDIT</a>
                                    <a href='javascript:deleteanggota(<?= json_encode([ "id" => $dt['idanggota']]); ?>);'>HAPUS</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function deleteanggota(data) {
            let check = confirm('Apakah Anda ingin menghapus ?');
            if (check) {
                location.href = "http://www.localhost/vsgapnm/dtsjwd/hapus.php?idanggota="+data.id
            }
        }
    </script>
    </body>
</html>