<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Pendaftaran</title>

    <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
  <style>
      * {
        margin: 0;
        padding: 0;
        font-family: "Montserrat", sans-serif;
      }
    </style>
  <body>


  <div class="bg-white position-absolute top-50 start-50 translate-middle p-4 rounded-3" style="max-height:700px; width:370px; box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1); ">
    <div class="mt-4 mb-3">
        <div class="text-center">
          <img src="/assets/img/logo.png" class="rounded-circle shadow-sm" height="130px" alt="">
        </div>
    </div>
    <div class="mb-3">
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="2" class="text-center"><?= $mahasiswa['nama']; ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center"><?= $mahasiswa['nim']; ?></td>
                </tr>
                <tr>
                    <td class="text-center border-end">Tanggal Kirim</td>
                    <td class="text-center"><?= date('d-m-y', strtotime($mahasiswa['created_at'])); ?></td>
                </tr>
                <tr>
                    <td class="text-center border-end">Dikirim Pukul</td>
                    <td class="text-center"><?= date('H:i:s', strtotime($mahasiswa['created_at'])); ?></td>
                </tr>
                <tr>
                    <td class="text-center border-end">Status Kirim</td>
                    <td class="text-center"><i class="fa-solid fa-circle-check me-1 text-success"></i> Berhasil</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="alert alert-light rounded-1" role="alert">
    Tekan tombol untuk bergabung kedalam grub dan tunggu persetujuan admin.
    </div>
    <div class="">
        <a href="https://chat.whatsapp.com/I8MfsF6a8Aj0vBb6vmZ1xv" target="_blank" class="btn btn-success w-100 rounded-1 mb-2 fw-light"><i class="fa-brands fa-whatsapp me-1"></i> Gabung Grub</a>
        <a href="/daftar" class="btn btn-primary w-100 opacity-75 rounded-1">Kembali</a>
    </div>
  </div>
    

    <!-- form inputan -->

<!-- js -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <script>
      new Splide('.splide').mount(window.splide.Extensions);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>