<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperfind Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="latihansoal.css" />
</head>

<body>
    <div class="container-fluid">
        <button class="toggle-btn" onclick="toggleSidebar()"><i class="fa fa-angle-double-left"></i></button>
        <div class="col-md-2 sidebar" id="sidebar">
            <img src="profile.png" alt="User Icon" style="width: 50px; height: 50px;">
            <span>User</span><br>
            <span>user@mail.com</span>
            <hr>
            <a href="#"><i class="fas fa-home"></i>Helperlog</a>
            <a href="#"><i class="fas fa-search"></i>Helperfind</a>
            <a href="#"><i class="fas fa-hands-helping"></i>Helperassist</a>
            <hr>
            <a href="#" style="margin-top: 600px;"><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </div>
        <div class="col-md-10 content" id="content">
            <h2>Helperfind Dashboard</h2>
            <p>Filter PRT Berdasarkan</p>
            <div class="row">
                <div class="col-md-3 profile-card">
                    <img src="people1.jpg" alt="Intan Permata" style="width: 370px; height: 350px;">
                    <h5>Intan Permata</h5>
                    <p><i class="fa fa-user" aria-hidden="true"><br></i>Baby Sitter<br></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"><br></i>Surabaya<br></p>
                    <p><i class="fa fa-star" aria-hidden="true"><br></i>4.5/5.0<br></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
                <div class="col-md-3 profile-card">
                    <img src="people2.jpg" alt="Sumairi" style="width: 370px; height: 350px;">
                    <h5>Sumairi</h5>
                    <p><i class="fa fa-user" aria-hidden="true"><br></i>Perawat lansia<br></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"><br></i>Pasuruan<br></p>
                    <p><i class="fa fa-star" aria-hidden="true"><br></i>4.5/5.0<br></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
                <div class="col-md-3 profile-card">
                    <img src="people1.jpg" alt="Rofiq" style="width: 370px; height: 350px;">
                    <h5>Rofiq</h5>
                    <p><i class="fa fa-user" aria-hidden="true"><br></i>Sopir Pribadi<br></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"><br></i>Surabaya<br></p>
                    <p><i class="fa fa-star" aria-hidden="true"><br></i>4.5/5.0<br></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
                <div class="col-md-3 profile-card">
                    <img src="people1.jpg" alt="Nagisa Natsumi" style="width: 370px; height: 350px;">
                    <h5>Nagisa Natsumi</h5>
                    <p><i class="fa fa-user" aria-hidden="true"><br></i>PRT<br></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"><br></i>Surabaya<br></p>
                    <p><i class="fa fa-star" aria-hidden="true"><br></i>4.5/5.0<br></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
                <div class="col-md-3 profile-card">
                    <img src="people1.jpg" alt="Andri Wulan" style="width: 370px; height: 350px;">
                    <h5>Andri Wulan</h5>
                    <p><i class="fa fa-user" aria-hidden="true"><br></i>PRT<br></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"><br></i>Tuban<br></p>
                    <p><i class="fa fa-star" aria-hidden="true"><br></i>4.5/5.0<br></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
                <div class="col-md-3 profile-card">
                    <img src="people1.jpg" alt="Roniah" style="width: 370px; height: 350px;">
                    <h5>Roniah</h5>
                    <p><i class="fa fa-user" aria-hidden="true"><br></i>Baby Sitter<br></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"><br></i>Surabaya<br></p>
                    <p><i class="fa fa-star" aria-hidden="true"><br></i>4.5/5.0<br></p>
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const toggleBtn = document.querySelector('.toggle-btn');

            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
            toggleBtn.classList.toggle('collapsed');
        }
    </script>
</body>

</html>