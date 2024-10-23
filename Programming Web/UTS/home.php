<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home - ABC Hotel</title>
    <style>
        /* Global Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #2a2a2a;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-link:hover {
            color: #FF8C00 !important;
        }

        .parallax {
            background-image: url('img/bilderboken-rlwE8f8anOc-unsplash.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            height: 670px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .parallax h1 {
            font-weight: bold;
            font-size: 4rem;
            animation: fadeIn 2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .btn-custom1 {
            background-color: #FF8C00;
            color: white;
        }
        
        .btn-custom1:hover {
            color: #FF8C00;
            background-color: #f4f4f4;
        }

        .btn-custom {
            background-color: #FF8C00;
            color: white;
        }

        .btn-custom:hover {
            background-color: white;
            color: #FF8C00;
        }

        .carousel-item img {
            max-height: 500px;
            object-fit: cover;
        }

        footer {
            background-color: #2a2a2a;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="py-3 shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="fw-bold text-white">ABC Hotel</h2>
            <nav>
                <ul class="nav gap-5">
                    <li class="nav-items"><a href="#about" class="nav-link text-light">Tentang</a></li>
                    <li class="nav-items"><a href="#cek-harga" class="nav-link text-light">Cek Harga</a></li>
                    <li class="nav-items"><a href="#contact" class="nav-link text-light">Kontak</a></li>
                    <li class="nav-items"><button class="btn btn-custom1 px-5 fw-semibold" id="logout">LogOut</button></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="parallax text-center">
        <h1>Selamat Datang di <span class="fw-bolder" style="color: #FF8C00;">ABC Hotel</span></h1>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold fs-1 py-3">Tentang Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/francesca-saraco-_dS27XGgRyQ-unsplash.jpg" class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <p class="lead fw-semibold">ABC Hotel adalah pilihan sempurna bagi Anda yang mencari kenyamanan, 
                    kemewahan, dan layanan terbaik. Terletak di pusat kota, kami menyediakan beragam 
                    fasilitas yang dirancang untuk memenuhi kebutuhan bisnis maupun liburan Anda. Dengan kamar-kamar yang elegan, 
                    layanan pelanggan yang ramah, dan suasana yang hangat, kami siap menjadikan pengalaman menginap Anda tidak terlupakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section id="carousel" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold fs-1">Kamar Pilihan Kami</h2>
            <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/datingscout-KFDuhyW5H5w-unsplash.jpg" class="d-block w-100" alt="Kamar 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ish-consul-ccKvfKSKH-k-unsplash.jpg" class="d-block w-100" alt="Kamar 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/olexandr-ignatov-w72a24brINI-unsplash.jpg" class="d-block w-100" alt="Kamar 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Cek Harga Section -->
    <section id="cek-harga" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold fs-1">Cek Harga</h2>
            <p class="text-center fs-3 fw-semibold">Pilih Kamar yang Sesuai dengan Kebutuhan Anda</p>
            <p class="text-center fs-3 fw-normal mx-5">ABC Hotel menyediakan berbagai tipe kamar dengan harga yang bersahabat dengan dompet anda</p>
            <div class="d-flex justify-content-center">
                <a href="cekHarga.php" class="text-decoration-none my-4">
                    <button class="btn btn-custom py-3 px-5 fs-4 fw-bold">Cek Disini</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-3">
    <section id="contact" class="py-3 text-white">
        <div class="container">
            <div class="column d-flex align-content-start text-start">
                <div class="col-md-6">
                    <h5>Alamat</h5>
                    <p>Jl. Raya Pusat, No. 123, Jakarta</p>
                    <h5>Email</h5>
                    <p>info@abchotel.com</p>
                </div>
                <div class="col-md-3">
                    <h5>Telepon</h5>
                    <p>(021) 123-4567</p>
                    <h5>Jam Operasional</h5>
                    <p>Senin - Minggu: 08.00 - 22.00</p>
                </div>
                <div class="col-md-3 text-center align-content-center">
                    <p class="">© 2024 ABC Hotel. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    </footer>


    <!-- Logout Script -->
    <script>
        document.getElementById('logout').addEventListener('click', function(){
          alert('Anda Telah Logout!');
          window.location.href = 'index.html'; 
        });
    </script>
</body>
</html>
