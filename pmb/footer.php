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
    </script>
    </body>
</html>