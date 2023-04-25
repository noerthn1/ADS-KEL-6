<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>HaloKlinik</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" />
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>

  <!-- NAVBAR -->
  <nav class="navbar navbar-dark" style="background-color: #0A2640;">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" class="me-2" height="20" alt="Logo" loading="lazy" />
        <small>HaloKlinik</small>
      </a>

      <button class="navbar-toggler" type="menu" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="d-flex align-items-center">
        <button type="button" class="btn btn-link px-3 me-2" style="color: white;">
          <a class="nav-link" href="jadwal.php"> Jadwal Pelayanan </a>
        </button>
        <button type="button" class="btn btn-link px-3 me-2" style="color: white;">
          <a class="nav-link" href="antrian.php"> Antrian </a>
        </button>
        <button type="button" class="btn btn-primary me-3" style="background-color: white; color: #0A2640; border-radius: 30px;">
          <a class="nav-link" href="reservasi.php"> Reservasi Online </a>
        </button>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header>
    <!-- Background -->
    <div class="p-5 bg-image" style="background-color: #0A2640;">
      <div class="row" style="padding-left: 2rem;">
        <div class="col">
          <div class="d-flex align-items-center h-100">
            <div class="text-white">
              <h2 class="mb-3">Poliklinik<br>IPB Dramaga</h2>
              <p class="mb-4">Memfasilitasi pendaftaran pelayanan melalui reservasi online, melihat jadwal pelayanan, dan mengecek serta memonitor daftar antrian.</p>
              <a class="btn btn-outline-light btn-lg m-2" href="reservasi.php" role="button" style="background-color: #69E6A6; color:#0A2640; border-color: #69E6A6; border-radius: 30px;">Reservasi Online</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="d-flex justify-content-end">
            <img class="img-fluid" src="img/home.png" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- MENU -->
  <h2 class="text-center" style="margin-top: 2.5rem; margin-bottom: 2.5rem;">Pelayanan Kami</h2>

  <div class="d-flex justify-content-center">
    <div class="row" style="margin-top: 20px; margin-bottom: 2.5rem;">
      <div class="col">
        <div class="card h-100" style="width: 20rem;">
          <div class="bg-image hover-overlay ripple">
            <img src="img/jadwal.png" class="card-img-top" />
            <a href="jadwal.php">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <div class="card-body">
            <h5 class="card-title">Melihat Jadwal Pelayanan</h5>
            <p class="card-text">Informasi mengenai jadwal pelayanan poliklinik.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 20rem;">
          <div class="bg-image hover-overlay ripple">
            <img src="img/reservasi.png" class="card-img-top" />
            <a href="reservasi.php">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <div class="card-body">
            <h5 class="card-title">Reservasi Online</h5>
            <p class="card-text">Mempermudah pendaftaran pelayanan secara online. </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 20rem;">
          <div class="bg-image hover-overlay ripple">
            <img src="img/antrian.png" class="card-img-top" />
            <a href="antrian.php">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <div class="card-body">
            <h5 class="card-title">Daftar Antrian</h5>
            <p class="card-text">Informasi mengenai nomor antrian pelayanan yang sedang berjalan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h4>Butuh Bantuan?</h4>
          <p><i class="fab fa-whatsapp"></i>0877-7569-2881</p>
          <div><i class="fab fa-instagram"></i>@klinikipbdarmaga</div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h6 class="fw-bold">Menu</h6>
          <p><a class="nav-link" href="jadwal.php"> Jadwal Pelayanan </a></p>
          <p><a class="nav-link" href="antrian.php"> Antrian </a></p>
          <p><a class="nav-link" href="reservasi.php"> Reservasi Online </a></p>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h6 class="fw-bold">Tentang Kami</h6>
          <p> Alamat </p>
          <p> Jadwal Buka </p>
          <p> E-mail </p>
        </div>
      </div>
    </div>

    <div class="text-center p-3" style="background-color: #0A2640; color: white;">
      © Copyright <b>HaloKlinik</b> Poliklinik IPB Dramaga Bogor, Indonesia
    </div>

  </footer>

</body>

</html>