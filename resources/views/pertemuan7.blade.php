<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="pertemuan7.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+"
        crossorigin="anonymous"></script>
    <title>Kalkulator</title>
    <script>
        function hello() {
            alert("P Halo");
        }
        function tambah() {
            var bil1 = document.getElementById("bil1").value;
            var bil2 = document.getElementById("bil2").value;
            var hasil = parseInt(bil1) + parseInt(bil2);
            document.getElementById("hasil").innerHTML = hasil;
            console.log(hasil);
        }
        function kurang() {
            var bil1 = document.getElementById("bil1").value;
            var bil2 = document.getElementById("bil2").value;
            var hasil = parseInt(bil1) - parseInt(bil2);
            document.getElementById("hasil").innerHTML = hasil;
        }
        function kali() {
            var bil1 = document.getElementById("bil1").value;
            var bil2 = document.getElementById("bil2").value;
            var hasil = parseInt(bil1) * parseInt(bil2);
            document.getElementById("hasil").innerHTML = hasil;
        }
        function bagi() {
            var bil1 = document.getElementById("bil1").value;
            var bil2 = document.getElementById("bil2").value;
            var hasil = parseInt(bil1) / parseInt(bil2);
            document.getElementById("hasil").innerHTML = hasil;
            console.log(hasil);
        }
    </script>

</head>

<body>
    <div class="container">
        <button class="btn btn-primary" onclick="hello()">Klik sini</button>
    </div>
    <p>
        Bilangan 1:
        <input type="text" id="bil1" value="0" class="form-control">
        <br>
        Bilangan 2:
        <input type="text" id="bil2" value="0" class="form-control">
        <br>
    <p>MAU NGAPAIN HAYO</p>
    <button class="btn btn-success" onclick="tambah()">Tambah</button>
    <button class="btn btn-success" onclick="kurang()">Kurang</button>
    <button class="btn btn-success" onclick="kali()">Kali</button>
    <button class="btn btn-success" onclick="bagi()">Bagi</button>
    <br>
    Hasil Penjumlahan: <span id="hasil"></span>


    </p>


</html>