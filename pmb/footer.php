    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
    if (document.querySelector("#message").innerHTML) {
        alert(document.querySelector("#message").innerHTML);
        location.href="./index.php?p=calonpeserta";
    }

    function edit(id) {
        console.log(id);
        location.href
    }

    function deletedata(id) {
        let confirmdelete = confirm("Apakah Anda ingin menghapus?");
        console.log(id);
        if (confirmdelete) {
            location.href="proses/delete.php?id="+id;
        }
    }

    function editData(data) {
        console.log(data);
        let nama = document.querySelector("#edit-nama");
        let alamat = document.querySelector("#edit-alamat");
        let jeniskelaminL = document.querySelector("#jeniskelamin-l");
        let jeniskelaminP = document.querySelector("#jeniskelamin-p");
        let agama = document.querySelector("#edit-agama");
        let sekolahasal = document.querySelector("#edit-sekolahasal");
        let idsiswa = document.querySelector("#edit-idsiswa");

        nama.value = data.nama_siswa;
        alamat.value = data.alamat;        
        agama.value = data.agama;
        sekolahasal.value = data.sekolah_asal;
        idsiswa.value = data.id_siswa;
        if (data.jenis_kelamin === "L") {
            jeniskelaminL.click();
        } else {
            jeniskelaminP.click();
        }
    }
    </script>
    </body>
</html>