<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="pertemuan7.css" />

    <script>

        function formValidation() {

            var nrp = document.getElementById("NRP").value;
            var nama = document.getElementById("NAMA").value;

            if (/\d/.test(nama)) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Nama tidak boleh ada angka",
                })
                return false;
            }

            else if ((nama.length == 0)) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Nama Minim 1 Huruf",
                })
                return false;
            }

            else {
                Swal.fire({
                    title: "Berhasil!"
                })
                return true;
            }
        }

    </script>

    <title>Form Pendaftaran ISE</title>
</head>

<body>

    <div class="container">
        <h1>Form Pendaftaran ISE!</h1>

        <form id="formpendaftaran" action="https://google.com" method="GET" onsubmit="return formValidation();">

            NRP :
            <input type="text" id="NRP" class="form-control"
                placeholder="Silahkan Isi NRP , 10 Digit , Harus Angka , Gak Boleh Kosong">
            <br>
            NAMA :
            <input type="text" id="NAMA" class="form-control"
                placeholder="Silahkan Isi Nama , Minimal 1 Digit , Gak Boleh Kosong">
            <br>
            <input type="submit" class="btn btn-primary" value="Daftar">

        </form>
    </div>
</body>

</html>