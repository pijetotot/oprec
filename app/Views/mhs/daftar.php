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


  <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top" data-aos="fade-down" data-aos-duration="1100">
      <div class="container-fluid">
        <div class=""></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link px-3 disabled" aria-current="page" href="#"><s>Home</s></a>
            </li>
            <div class="vr mt-2" style="height: 25px;"></div>
            <li class="nav-item">
              <a class="nav-link px-3 disabled" href="#"><s>Matakuliah Praktikum</s></a>
            </li>
            <div class="vr mt-2" style="height: 25px;"></div>
            <li class="nav-item">
              <a class="nav-link px-3 disabled" href="#"><s>Jadwal Praktikum</s></a>
            </li>
            <div class="vr mt-2" style="height: 25px;"></div>
            <li class="nav-item">
              <a class="nav-link px-3 disabled" href="#"><s>Galery Lab</s></a>
            </li>
            <div class="vr mt-2" style="height: 25px;"></div>
            <li class="nav-item">
              <a class="nav-link link-hover text-primary px-3" href="/daftar">Daftar Calon Aslab <i class="fa-solid fa-caret-right ms-1"></i>
              </a>
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
          <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom disabled" href="#"><s>Home</s></a>
          <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom disabled" href="#"><s>Matakuliah Praktikum</s></a>
          <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom disabled" href="#"><s>Jadwal Praktikum</s></a>
          <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-dark fw-medium border-0 border-bottom disabled" href="#"><s>Galery Lab</s></a>
          <a class="btn btn-outline-light p-4 rounded-0 text-start w-100 text-primary fw-medium border-0 border-bottom" href="/daftar">Daftar Calon Aslab</a>
        </div>
      </div>
    </div>
    <div class="img position-relative">
      <div class="content">
        <div class="text-center mb-4">
          <img src="/assets/img/logo.png" class="rounded-circle shadow-sm" style="margin-top: 165px;" height="130px" alt="" data-aos="fade-up" data-aos-duration="1000">
        </div>
        <div class="text-center mb-4">
          <h3 class="text-white fw-medium px-3" data-aos="fade-up" data-aos-duration="1000">Pendaftaran Calon Aslab Informatika</h3>
          <h1 class="text-white fw-bold px-3" data-aos="fade-up" data-aos-duration="1300">Universitas Muhammadiyah Sidoarjo</h1>
        </div>
      </div>
    </div>
    <div class="p-4 bg-light"></div>
    <div class="text-start">
      <div class="py-5">
        <div class="container">
            <div class="mb-5">
                <h2 class="text-bold text-dark text-opacity-75" id="1">Form Pendaftaran</h2>
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
          <form action="/daftar/save" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <?php $validation = session()->getFlashdata('validation'); ?>
            <div class="row">
              <div class="col-xl-9">
                <div class="card border-0 rounded-0 p-4 bg-white border-top border-5 border-light mb-4" style="box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1);">
                  <div class="position-absolute top-0 end-0 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
                    <span class="fs-4 fw-bold text-dark text-opacity-75">1</span>
                  </div>
                  <div class="mt-3">
                    <label class="form-label mb-3 fw-medium" for="nama" >Nama <span class="text-danger">*</span>
                    </label>
                    <div class="">
                      <div class="">
                        <input type="text" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['nama']) ? 'is-invalid' : '';?>" name="nama" id="nama" value="<?= old('nama'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama lengkap" >
                        <?php if (isset($validation['nama'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['nama']; ?>
                            </div>
                        <?php endif; ?>  
                    </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="">
                      <div class="">
                        <label class="form-label mb-3 fw-medium" for="nim">NIM (Nomor Induk Mahasiswa) <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['nim']) ? 'is-invalid' : '';?>" name="nim" id="nim" value="<?= old('nim'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM Kamu">
                        <?php if (isset($validation['nim'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['nim']; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                  </div>
                  <div class="">
                  <label class="form-label mb-3 fw-medium">Kelas</label>
                  <div class="d-flex mb-4">
                      <div class="form-check me-4">
                          <input class="form-check-input <?= isset($validation['kelas']) ? 'is-invalid' : '';?>" type="radio" name="kelas" id="A1" value="A1" <?= old('kelas') == 'A1' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="A1">
                              A1
                          </label>
                      </div>
                      <div class="form-check me-4">
                          <input class="form-check-input <?= isset($validation['kelas']) ? 'is-invalid' : '';?>" type="radio" name="kelas" id="A2" value="A2" <?= old('kelas') == 'A2' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="A2">
                              A2
                          </label>
                      </div>
                      <div class="form-check me-4">
                          <input class="form-check-input <?= isset($validation['kelas']) ? 'is-invalid' : '';?>" type="radio" name="kelas" id="A3" value="A3" <?= old('kelas') == 'A3' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="A3">
                              A3
                          </label>
                      </div>
                      <div class="form-check me-4">
                          <input class="form-check-input <?= isset($validation['kelas']) ? 'is-invalid' : '';?>" type="radio" name="kelas" id="B1" value="B1" <?= old('kelas') == 'B1' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="B1">
                              B1
                          </label>
                      </div>
                      <div class="form-check me-4">
                          <input class="form-check-input <?= isset($validation['kelas']) ? 'is-invalid' : '';?>" type="radio" name="kelas" id="B2" value="B2" <?= old('kelas') == 'B2' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="B2">
                              B2
                          </label>
                      </div>
                      <?php if (isset($validation['kelas'])) : ?>
                          <div class="invalid-feedback">
                              <?= $validation['kelas']; ?>
                          </div>
                      <?php endif; ?>
                  </div>
                  </div>
                  <div class="">
                    <div class="">
                      <label class="form-label mb-3 fw-medium" for="alamat">Alamat Lengkap <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['alamat']) ? 'is-invalid' : '';?>" name="alamat" id="alamat" value="<?= old('alamat'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Lengkap">
                    </div>
                  </div>
                  <div class="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          <label class="form-label mb-3 fw-medium">No WA <span class="text-danger">*</span>
                          </label>
                          <input type="number" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['nomer_tlp']) ? 'is-invalid' : '';?>" name="nomer_tlp" id="nomer_tlp" value="<?= old('nomer_tlp'); ?>" placeholder="Masukkan Nomor Kamu">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="">
                          <label class="form-label mb-3 fw-medium">Email (Aktif) <span class="text-danger">*</span>
                          </label>
                          <input type="email" id="2" class="form-control border border-light-subtle rounded-0 mb-3 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['email']) ? 'is-invalid' : '';?>" name="email" id="email" value="<?= old('email'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Aktif Kamu">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card border-0 rounded-0 p-4 bg-white border-top border-5 border-light mb-4" style="box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1);">
                  <div class="position-absolute top-0 end-0 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
                    <span class="fs-4 fw-bold text-dark text-opacity-75">2</span>
                  </div>
                  <div class="mt-3">
                    <div class="mb-4">
                      <div class="">
                        <label class="form-label mb-3 fw-medium">Jenis Kelamin <span class="text-danger">*</span>
                        </label>
                        <div class="d-flex">
                        <div class="form-check me-4">
                            <input class="form-check-input <?= isset($validation['jenis_kelamin']) ? 'is-invalid' : '';?>" type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki" <?= old('jenis_kelamin') == 'Laki-laki' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="Laki-laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input <?= isset($validation['jenis_kelamin']) ? 'is-invalid' : '';?>" type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="Perempuan">
                                Perempuan
                            </label>
                        </div>
                        <?php if (isset($validation['jenis_kelamin'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['jenis_kelamin']; ?>
                            </div>
                        <?php endif; ?>
                        </div>                    
                      </div>
                    </div>
                  </div>
                    <div class="">
                        <div class="">
                        <label class="form-label mb-3 fw-medium" for="thnKelulusan">Tahun Kelulusan <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['thnKelulusan']) ? 'is-invalid' : '';?>" name="thnKelulusan" id="thnKelulusan" value="<?= old('thnKelulusan'); ?>" min="2015" max="<?= date('Y'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Kelulusan Kamu">
                        <?php if (isset($validation['thnKelulusan'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['thnKelulusan']; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                  <div class="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          <label class="form-label mb-3 fw-medium" for="tempatLahir">Tempat Lahir <span class="text-danger">*</span>
                          </label>
                          <input type="text" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['tempatLahir']) ? 'is-invalid' : '';?>" name="tempatLahir" id="tempatLahir" value="<?= old('tempatLahir'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir Kamu">
                            <?php if (isset($validation['tglLahir'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation['tglLahir']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="">
                          <label class="form-label mb-3 fw-medium" for="tglLahir">Tanggal Lahir <span class="text-danger">*</span>
                          </label>
                          <input type="date" id="3" class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light border-0 border-bottom px-0 <?= isset($validation['tglLahir']) ? 'is-invalid' : '';?>" name="tglLahir" id="tglLahir" value="<?= old('tglLahir'); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Kamu">
                            <?php if (isset($validation['tglLahir'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation['tglLahir']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="card border-0 rounded-0 p-4 bg-white border-top border-5 border-light mb-4" style="box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1);">
                  <div class="position-absolute top-0 end-0 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
                    <span class="fs-4 fw-bold text-dark text-opacity-75">3</span>
                  </div>
                  <div class="mt-3">
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="ktm">Upload KTM <span class="text-danger">*</span></label>
                      <input class="form-control border border-light-subtle rounded-0 mb-2 focus-ring focus-ring-light <?= isset($validation['ktm']) ? 'is-invalid' : '';?>" name="ktm" id="ktm" type="file">
                      <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( jpg, jpeg, png ) ( Max Size 4MB )</span></div>
                        <?php if (isset($validation['ktm'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['ktm']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="foto">Upload Foto ( 4 x 6 ) <span class="text-danger">*</span></label>
                      <input class="form-control border border-light-subtle rounded-0 mb-2 focus-ring focus-ring-light <?= isset($validation['foto']) ? 'is-invalid' : '';?>" name="foto" id="foto" type="file">
                        <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( jpg, jpeg, png ) ( Max Size 4MB )</span></div>
                        <?php if (isset($validation['foto'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['foto']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="ijazah">Upload Ijazah <span class="text-danger">*</span></label>
                      <input class="form-control border border-light-subtle rounded-0 mb-2 focus-ring focus-ring-light <?= isset($validation['ijazah']) ? 'is-invalid' : '';?>" name="ijazah" id="ijazah" type="file">
                        <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( jpg, jpeg, png ) ( Max Size 4MB )</span></div>
                        <?php if (isset($validation['ijazah'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['ijazah']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="cv">Upload CV <span class="text-danger">*</span></label>
                      <input id="4" class="form-control border border-light-subtle rounded-0 mb-2 focus-ring focus-ring-light <?= isset($validation['cv']) ? 'is-invalid' : '';?>" name="cv" id="cv" type="file">
                        <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( pdf ) ( Max Size 4MB )</span></div>
                        <?php if (isset($validation['cv'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validation['cv']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                
                <div class="card border-0 rounded-0 p-4 bg-white border-top border-5 border-light mb-4" style="box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1);">
                  <div class="position-absolute top-0 end-0 bg-light d-flex align-items-center justify-content-center" style="height: 50px; width: 50px;">
                    <span class="fs-4 fw-bold text-dark text-opacity-75">4</span>
                  </div>
                  <div class="mt-3">
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="projectFile1'">Upload Project 1</label>
                      <input class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light <?= isset($validation['projectFile1']) ? 'is-invalid' : '';?>" name="projectFile1" id="projectFile1" type="file">
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control border border-light-subtle rounded-0 mb-3 focus-ring focus-ring-light <?= isset($validation['Description1']) ? 'is-invalid' : '';?>" name="Description1" id="Description1" placeholder="Leave a comment here" style="height: 100px"><?= old('Description1'); ?></textarea>
                      <label for="Description1">Deskripsi Project 1</label>
                    </div>
                    <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( pdf, zip ) ( Max Size 20MB )</span></div>
                    <hr class="border">
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="projectFile2'">Upload Project 2</label>
                      <input class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light <?= isset($validation['projectFile2']) ? 'is-invalid' : '';?>" name="projectFile2" id="projectFile2" type="file">
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control border border-light-subtle rounded-0 mb-3 focus-ring focus-ring-light <?= isset($validation['Description2']) ? 'is-invalid' : '';?>" name="Description2" id="Description2" placeholder="Leave a comment here" style="height: 100px"><?= old('Description2'); ?></textarea>
                      <label for="Description2">Deskripsi Project 2</label>
                    </div>
                    <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( pdf, zip ) ( Max Size 20MB )</span></div>
                    <hr class="border">
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="projectFile3'">Upload Project 3</label>
                      <input class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light <?= isset($validation['projectFile3']) ? 'is-invalid' : '';?>" name="projectFile3" id="projectFile3" type="file">
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control border border-light-subtle rounded-0 mb-3 focus-ring focus-ring-light <?= isset($validation['Description3']) ? 'is-invalid' : '';?>" name="Description3" id="Description3" placeholder="Leave a comment here" style="height: 100px"><?= old('Description3'); ?></textarea>
                      <label for="Description3">Deskripsi Project 3</label>
                    </div>
                    <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( pdf, zip ) ( Max Size 20MB )</span></div>
                    <hr class="border">
                    <div class="mb-4">
                      <label class="form-label mb-3 fw-medium" for="projectFile4'">Upload Project 4</label>
                      <input class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light <?= isset($validation['projectFile4']) ? 'is-invalid' : '';?>" name="projectFile4" id="projectFile4" type="file">
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control border border-light-subtle rounded-0 mb-3 focus-ring focus-ring-light <?= isset($validation['Description4']) ? 'is-invalid' : '';?>" name="Description4" id="Description4" placeholder="Leave a comment here" style="height: 100px"><?= old('Description4'); ?></textarea>
                      <label for="Description4">Deskripsi Project 4</label>
                    </div>
                    <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( pdf, zip ) ( Max Size 20MB )</span></div>
                    <hr class="border">
                    <div class="alert alert-primary rounded-0 border-0 border-start border-5 border-primary-subtle" role="alert">
                      <span class="fw-medium">Unggah File Proyek (Opsional)</span>
                      Jika Anda memiliki proyek seperti desain poster, website, esai, atau jenis proyek lainnya, Anda dapat mengunggahnya di sini. Mengisi bagian ini tidak wajib, namun dapat membantu kami memahami lebih lanjut tentang potensi Anda. Kumpulkan dengan format file <b>PDF</b> atau <b>ZIP</b>.
                    </div>
                  </div>
                </div>
                
                <div class="card border-0 rounded-0 p-4 bg-white border-top border-5 border-light" style="box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1);">
                  <div class="mt-3">
                    <div class="mb-2">
                      <label class="form-label mb-2 fw-medium">Alasan Daftar Aslab <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control border border-light-subtle rounded-0 mb-4 focus-ring focus-ring-light <?= isset($validation['alasan']) ? 'is-invalid' : '';?>" name="alasan" id="alasan" placeholder="Leave a comment here" style="height: 200px"><?= old('alasan'); ?></textarea>
                      <label>Isi Disini..</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="ss_ig" class="form-label form-label mb-3 fw-medium">Bukti Screnshot Follow IG <span class="text-danger">*</span></label>
                          <input type="file" class="form-control border border-light-subtle rounded-0 mb-2 focus-ring focus-ring-light <?= isset($validation['ss_ig']) ? 'is-invalid' : '';?>" name="ss_ig" id="ss_ig">
                          <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( jpg, jpeg, png ) (Max Size 4MB)</span></div>
                          <?php if (isset($validation['ss_ig'])) : ?>
                              <div class="invalid-feedback">
                                  <?= $validation['ss_ig']; ?>
                              </div>
                          <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="ss_yt" class="form-label form-label mb-3 fw-medium">Bukti Screnshot Subscribe Youtube <span class="text-danger">*</span></label>
                          <input type="file" class="form-control border border-light-subtle rounded-0 mb-2 focus-ring focus-ring-light <?= isset($validation['ss_yt']) ? 'is-invalid' : '';?>" name="ss_yt" id="ss_yt">
                          <div id="emailHelp" class="form-text mb-4">Upload dengan format <span class="fw-bold">( jpg, jpeg, png ) (Max Size 4MB)</span></div>
                          <?php if (isset($validation['ss_yt'])) : ?>
                              <div class="invalid-feedback">
                                  <?= $validation['ss_yt']; ?>
                              </div>
                          <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  
                </div>

                

                

              </div>
              
              <div class="col-xl-3">
                <div class="sticky-top" style=" top: 90px;">
                  <div class="p-4 bg-white border-top border-5 border-light mb-4" style="box-shadow: 0px 0px 34px 0px rgba(0,0,0,0.1);">
                    <div id="progressBarChart"></div>
                    <hr class="border">
                    <h6 class="mb-4">Cek Form</h6>
                    <div class="row mb-4">
                      <div class="col-3">
                        <a href="#1" class="btn btn-light rounded-0 fw-medium border w-100">1</a>
                      </div>
                      <div class="col-3">
                        <a href="#2" class="btn btn-light rounded-0 fw-medium border w-100">2</a>
                      </div>
                      <div class="col-3">
                        <a href="#3" class="btn btn-light rounded-0 fw-medium border w-100">3</a>
                      </div>
                      <div class="col-3">
                        <a href="#4" class="btn btn-light rounded-0 fw-medium border w-100">4</a>
                      </div>
                    </div>
                  </div>
                  <hr class="border">
                  <div class="alert alert-primary rounded-0 border-0 border-start border-5 border-primary-subtle" role="alert">
                    Harap pastikan bahwa semua data yang Anda isi adalah benar dan valid. Data yang Anda kirimkan akan kami jaga kerahasiaannya dan diproses dengan aman.
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-xl-9">
                    <div class="card border-0 rounded-0 p-4 bg-white mb-4" style="box-shadow: 0px 19px 34px 0px rgba(0,0,0,0.1);">
                      <div class="text-start">
                      <button type="submit" class="btn btn-primary rounded-1 w-25 opacity-75">Kirim</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3"></div>
                </div>
              </div>
            </div>
          </form>
        </div>
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