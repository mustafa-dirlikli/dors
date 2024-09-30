<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Style Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/../assets/css/tema.css">
    <style>
        /* Genel stil ayarları */
        .navbar {
            /* Facebook'un renk kodu */
            padding: 0.5rem 1rem; /* Navbar padding */
        }

        .navbar-logo {
            height: 40px; /* Logo boyutu */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .form-control {
            border-radius: 20px; /* Yuvarlatılmış arama çubuğu */
        }

        .btn-outline-success {
            border-radius: 20px; /* Yuvarlatılmış buton */
            color: #4267B2;
            border-color: #4267B2;
        }

        .btn-outline-success:hover {
            background-color: #365899; /* Hover efekti */
            color: white;
            border-color: #365899;
        }

        .avatar-img {
            width: 32px; /* Avatar boyutu */
            height: 32px; /* Avatar boyutu */
            border-radius: 50%; /* Yuvarlak avatar */
            object-fit: cover; /* Resmin düzgün görünmesini sağlar */
        }

        .dropdown-menu {
            min-width: 150px; /* Dropdown menü genişliği */
        }

        .dropdown-item {
            color: #4267B2; /* Dropdown menü öğeleri renk */
        }

        .dropdown-item:hover {
            background-color: #e9ebee; /* Hover efekti */
        }

        @media (max-width: 991px) {
            .form-inline {
                width: 100%; /* Küçük ekranlarda arama çubuğu genişliği */
            }
           
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="/../assets/images/logo/logo.png" alt="logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex m-auto form-inline" style="width: 50%; max-width: 600px;">
                    <input class="form-control me-2" type="search" placeholder="Ara" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Ara</button>
                </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="info.html">Bilgilendirme</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://storage.evrimagaci.org/old/mi_media/afcae823e61eefb077e1f223594b1e7f.jpeg" alt="Avatar" class="avatar-img me-2">
                           
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profile.html">Profil</a></li>
                            <li><a class="dropdown-item" href="settings.html">Ayarlar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.html">Çıkış Yap</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS ve Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
