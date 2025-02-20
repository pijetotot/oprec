<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    

    <!-- form inputan -->
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        
        <h1>Edit Data Mahasiswa</h1>
        <form action="/detail/update/<?=$mahasiswa['id'];?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <?php $validation = session()->getFlashdata('validation'); ?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control <?= isset($validation['nama']) ? 'is-invalid' : '';?>" name="nama" id="nama" value="<?=$mahasiswa['nama'];?>">
                <?php if (isset($validation['nama'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['nama']; ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control <?= isset($validation['nim']) ? 'is-invalid' : '';?>" name="nim" id="nim" value="<?=$mahasiswa['nim'];?>">
                <?php if (isset($validation['nim'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['nim']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelas" id="A1" value="A1" <?= old('kelas', $mahasiswa['kelas']) == 'A1' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="A1">
                        A1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelas" id="A2" value="A2" <?= old('kelas', $mahasiswa['kelas']) == 'A2' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="A2">
                        A2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelas" id="A3" value="A3" <?= old('kelas', $mahasiswa['kelas']) == 'A3' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="A3">
                        A3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelas" id="B1" value="B1" <?= old('kelas', $mahasiswa['kelas']) == 'B1' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="B1">
                        B1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelas" id="B2" value="B2" <?= old('kelas', $mahasiswa['kelas']) == 'B2' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="B2">
                        B2
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control <?= isset($validation['alamat']) ? 'is-invalid' : '';?>" name="alamat" id="alamat" value="<?=$mahasiswa['alamat'];?>">
                <?php if (isset($validation['alamat'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['alamat']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="nomer_tlp" class="form-label">Nomer WhatApps</label>
                <input type="text" class="form-control <?= isset($validation['nomer_tlp']) ? 'is-invalid' : '';?>" name="nomer_tlp" id="nomer_tlp" value="<?=$mahasiswa['nomer_tlp'];?>">
                <?php if (isset($validation['nomer_tlp'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['nomer_tlp']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control <?= isset($validation['email']) ? 'is-invalid' : '';?>" name="email" id="email" value="<?=$mahasiswa['email'];?>">
                <?php if (isset($validation['email'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['email']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="tempatLahir" class="form-label">TempatLahir</label>
                <input type="text" class="form-control <?= isset($validation['tempatLahir']) ? 'is-invalid' : '';?>" name="tempatLahir" id="tempatLahir" value="<?=$mahasiswa['tempatLahir'];?>">
                <?php if (isset($validation['tempatLahir'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['tempatLahir']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input <?= isset($validation['jenis_kelamin']) ? 'is-invalid' : '';?>" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" <?= old('jenis_kelamin', $mahasiswa['jenis_kelamin']) == 'Laki-laki' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="laki_laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input <?= isset($validation['jenis_kelamin']) ? 'is-invalid' : '';?>" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?= old('jenis_kelamin', $mahasiswa['jenis_kelamin']) == 'perempuan' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="thnKelulusan" class="form-label">Tahun Kelulusan</label>
                <input type="number" class="form-control <?= isset($validation['thnKelulusan']) ? 'is-invalid' : '';?>" name="thnKelulusan" id="thnKelulusan" value="<?=$mahasiswa['thnKelulusan'];?>" min="2015" max="<?= date('Y'); ?>">
                <?php if (isset($validation['thnKelulusan'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['thnKelulusan']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control <?= isset($validation['tglLahir']) ? 'is-invalid' : '';?>" name="tglLahir" id="tglLahir" value="<?=$mahasiswa['tglLahir'];?>">
                <?php if (isset($validation['tglLahir'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['tglLahir']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="ss_ig" class="form-label">Bukti Screnshot IG</label>
                <input type="file" class="form-control <?= isset($validation['ss_ig']) ? 'is-invalid' : '';?>" name="ss_ig" id="ss_ig">
                <?php if (isset($validation['ss_ig'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['ss_ig']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['ss_ig']; ?></small>
            </div>

            <div class="mb-3">
                <label for="ss_yt" class="form-label">Bukti Screnshot Youtube</label>
                <input type="file" class="form-control <?= isset($validation['ss_yt']) ? 'is-invalid' : '';?>" name="ss_yt" id="ss_yt">
                <?php if (isset($validation['ss_yt'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['ss_yt']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['ss_yt']; ?></small>
            </div>

            <div class="mb-3">
                <label for="ktm" class="form-label">Ktm</label>
                <input type="file" class="form-control <?= isset($validation['ktm']) ? 'is-invalid' : '';?>" name="ktm" id="ktm">
                <?php if (isset($validation['ktm'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['ktm']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['ktm']; ?></small>
            </div>

            <div class="mb-3">
                <label for="projectFile1" class="form-label">Upload File Project1</label>
                <input type="file" class="form-control <?= isset($validation['projectFile1']) ? 'is-invalid' : '';?>" name="projectFile1" id="projectFile1">
                <?php if (isset($validation['projectFile1'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['projectFile1']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['projectFile1']; ?></small>
            </div>

            <div class="mb-3">
                <label for="Description1" class="form-label">Deskripsi Project1</label>
                <textarea class="form-control <?= isset($validation['Description1']) ? 'is-invalid' : '';?>" name="Description1" id="Description1"><?= $mahasiswa['Description1']; ?></textarea>
                <?php if (isset($validation['Description1'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['Description1']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="projectFile2" class="form-label">Upload File Project2</label>
                <input type="file" class="form-control <?= isset($validation['projectFile2']) ? 'is-invalid' : '';?>" name="projectFile2" id="projectFile2">
                <?php if (isset($validation['projectFile2'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['projectFile2']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['projectFile2']; ?></small>
            </div>

            <div class="mb-3">
                <label for="Description2" class="form-label">Deskripsi Project2</label>
                <textarea class="form-control <?= isset($validation['Description2']) ? 'is-invalid' : '';?>" name="Description2" id="Description2"><?= $mahasiswa['Description2']; ?></textarea>
                <?php if (isset($validation['Description2'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['Description2']; ?>
                    </div>
                <?php endif; ?>
            </div>

            
            <div class="mb-3">
                <label for="projectFile3" class="form-label">Upload File Project3</label>
                <input type="file" class="form-control <?= isset($validation['projectFile3']) ? 'is-invalid' : '';?>" name="projectFile3" id="projectFile3">
                <?php if (isset($validation['projectFile3'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['projectFile3']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['projectFile3']; ?></small>
            </div>

            <div class="mb-3">
                <label for="Description3" class="form-label">Deskripsi Project3</label>
                <textarea class="form-control <?= isset($validation['Description3']) ? 'is-invalid' : '';?>" name="Description3" id="Description3"><?= $mahasiswa['Description3']; ?></textarea>
                <?php if (isset($validation['Description3'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['Description3']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="projectFile4" class="form-label">Upload File Project4</label>
                <input type="file" class="form-control <?= isset($validation['projectFile4']) ? 'is-invalid' : '';?>" name="projectFile4" id="projectFile4">
                <?php if (isset($validation['projectFile4'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['projectFile4']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['projectFile4']; ?></small>
            </div>

            <div class="mb-3">
                <label for="Description4" class="form-label">Deskripsi Project4</label>
                <textarea class="form-control <?= isset($validation['Description4']) ? 'is-invalid' : '';?>" name="Description4" id="Description4"><?= $mahasiswa['Description4']; ?></textarea>
                <?php if (isset($validation['Description4'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['Description4']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="alasan" class="form-label">Alasan Masuk Aslab</label>
                <textarea class="form-control <?= isset($validation['alasan']) ? 'is-invalid' : '';?>" name="alasan" id="alasan"><?= $mahasiswa['alasan']; ?></textarea>
                <?php if (isset($validation['alasan'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['alasan']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="ijazah" class="form-label">Ijazah</label>
                <input type="file" class="form-control <?= isset($validation['ijazah']) ? 'is-invalid' : '';?>" name="ijazah" id="ijazah">
                <?php if (isset($validation['ijazah'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['ijazah']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['ijazah']; ?></small>
            </div>


            <div class="mb-3">
                <label for="foto" class="form-label">foto</label>
                <input type="file" class="form-control <?= isset($validation['foto']) ? 'is-invalid' : '';?>" name="foto" id="foto">
                <?php if (isset($validation['foto'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['foto']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['foto']; ?></small>
            </div>


            <div class="mb-3">
                <label for="cv" class="form-label">cv</label>
                <input type="file" class="form-control <?= isset($validation['cv']) ? 'is-invalid' : '';?>" name="cv" id="cv">
                <?php if (isset($validation['cv'])) : ?>
                    <div class="invalid-feedback">
                        <?= $validation['cv']; ?>
                    </div>
                <?php endif; ?>
                <small>File saat ini: <?= $mahasiswa['cv']; ?></small>
            </div>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
     <!-- form inputan -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>