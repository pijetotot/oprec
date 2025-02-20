<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="asset/img/logo aslab.png" type="image/x-icon">

    <link rel="stylesheet" href="asset/css/style.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="asset/fontawesome/css/all.css">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
        }
    </style>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top shadow-sm" data-aos="fade-down" data-aos-duration="1100">
        <div class="container-fluid">
            <div class=""></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link px-3" aria-current="page" href="/homepage">Home</a>
              </li>
              <div class="vr mt-2" style="height: 25px;"></div>
              <li class="nav-item">
                <a class="nav-link px-3" href="#matkul">Matakuliah Praktikum</a>
              </li>
              <div class="vr mt-2" style="height: 25px;"></div>
              <li class="nav-item">
                <a class="nav-link px-3" href="#tabel">Jadwal Praktikum</a>
              </li>
              <div class="vr mt-2" style="height: 25px;"></div>
              <li class="nav-item">
                <a class="nav-link px-3" href="#tabel">Karya</a>
              </li>
              <div class="vr mt-2" style="height: 25px;"></div>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Galery Lab</a>
              </li>
              <div class="vr mt-2" style="height: 25px;"></div>
              <li class="nav-item">
                <a class="nav-link text-primary px-3" href="/daftar">Daftar Calon Aslab <i class="fa-solid fa-caret-right ms-1"></i></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>      
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header border-bottom">
          <button type="button" class="btn-close p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="">
                <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom" href="#">Home</a>
                <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom" href="#">Matakuliah Praktikum</a>
                <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom" href="#">Jadwal Praktikum</a>
                <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom" href="#">Galery Lab</a>
                <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom" href="#">Daftar Calon Aslab</a>
            </div>
        </div>
      </div>
  

    <div style="margin-bottom:30px;"></div>
    <?php /** @var \CodeIgniter\View\View $this */ ?>
    <!-- konten -->
    <?= $this -> renderSection('content-profile'); ?>
    
    
    <footer data-aos="fade-up" data-aos-duration="1200">
      <div class="bg-light bg-opacity-50">
        <div class="container pt-5 pb-3">
          <div class="text-center">
            <div class="mt-1">
              <div class="row">
                <div class="col-md-4 mb-3 text-start">
                    <div class="p-3">
                        <div class="mb-3">
                          <h5 class="text-sub text-dark">Lokasi</h5>
                        </div>
                        <hr class="border">
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Jl. Raya Gelam No.250, Pagerwaja, Gelam, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61271</a>
                        </div>
                        <hr class="border">
                        <div class="mt-3 border border-5">
                          <iframe class="w-100" height="200px" id="gmap_canvas" src="https://maps.google.com/maps?q=Institut+Teknologi+Bisnis+dan+Bahasa+Dian+Cipta+Cendikia&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3 text-start">
                    <div class="p-3">
                        <div class="mb-3">
                          <h5 class="text-sub text-dark">Lainnya</h5>
                        </div>
                        <hr class="border">
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Sejarah</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Visi & Misi</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Biodata</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Karya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 text-start">
                    <div class="p-3">
                        <div class="mb-3">
                          <h5 class="text-sub text-dark">Hubungi Kami</h5>
                        </div>
                        <hr class="border">
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Youtube</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Instagram</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Tiktok</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Facebook</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Whatsapp</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Email</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 text-start">
                    <div class="p-3">
                        <div class="mb-3">
                          <h5 class="text-sub text-dark">Divisi Aslab</h5>
                        </div>
                        <hr class="border">
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Divisi Pemrograman</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Divisi Jaringan</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Divisi IT Support</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Divisi Humas</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Divisi Training</a>
                        </div>
                        <div class="mb-2 link">
                          <a href="" class="text-dark text-decoration-none">Divisi Bidang Usaha</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-3 border-top ">
          <p class="m-0 text-center"> &#169; 2024 Divisi Pemrograman. All rights reserved.</p>
        </div>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <script>
        new Splide( '.splide' ).mount( window.splide.Extensions );
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const videoIframe = document.getElementById("video");

        // Daftar video
        const videos = [
            "gIXPFv_B1rI", // Video 1
            "7HxTFFqDmmw", // Video 2
            "9Gr3BbzUsL4", // Video 3
        ];

        let currentIndex = 0; 

        function updateVideo(index) {
            const videoId = videos[index];
            videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&loop=1&playlist=${videoId}`;
        }

        // Event untuk tombol 'Previous'
        document.getElementById("prev-btn").addEventListener("click", function () {
            currentIndex = (currentIndex - 1 + videos.length) % videos.length; // Navigasi ke kiri (circular)
            updateVideo(currentIndex);
        });

        // Event untuk tombol 'Next'
        document.getElementById("next-btn").addEventListener("click", function () {
            currentIndex = (currentIndex + 1) % videos.length; // Navigasi ke kanan (circular)
            updateVideo(currentIndex);
        });
    });
</script>



  </body>
</html>