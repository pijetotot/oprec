<?php /** @var \CodeIgniter\View\View $this */ ?>

<?= $this -> extend('layout/template'); ?>
<?= $this -> section('content'); ?>


<div class="card" style="width: 18rem;">
  <img src="/uploads/foto/<?= $mahasiswa['foto']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> <?= $mahasiswa['nama'];?></h5>
    <p class="card-text"> <?= $mahasiswa['alamat'];?></p>
    <a href="/download/pdf/<?= $mahasiswa['nama']; ?>" class="btn btn-warning">Pdf</a>

    <!-- menghapus nilai berdsarkan id -->
  </div>
</div>
<!-- <td><img src="/uploads/ig/<?= $mahasiswa['ss_ig']; ?>" alt="" class="" height="100px"></td>
                    <td><img src="/uploads/yt/<?= $mahasiswa['ss_yt']; ?>" alt="" class="" height="100px"></td>
                    <td><img src="/uploads/ktm/<?= $mahasiswa['ktm']; ?>" alt="" class="" height="100px"></td>
                    <td><img src="/uploads/ijazah/<?= $mahasiswa['ijazah']; ?>" alt="" class="" height="100px"></td>
                    <td><img src="/uploads/foto/<?= $mahasiswa['foto']; ?>" alt="" class="" height="100px"></td>
                    <td><a href="<?= base_url('/download/cv/' . $mahasiswa['cv']); ?>">Download</a></td>
                    <td><a href="<?= base_url('/download/project1/' . $mahasiswa['projectFile1']); ?>">DOWNLOAD</a></td>
                    <td><?= $mahasiswa['Description1']; ?></td>
                    <td><a href="<?= base_url('/download/project2/' . $mahasiswa['projectFile2']); ?>">DOWNLOAD</a></td>
                    <td><?= $mahasiswa['Description2']; ?></td>
                    <td><a href="<?= base_url('/download/project3/' . $mahasiswa['projectFile3']); ?>">DOWNLOAD</a></td>
                    <td><?= $mahasiswa['Description3']; ?></td>
                    <td><a href="<?= base_url('/download/project4/' . $mahasiswa['projectFile4']); ?>">DOWNLOAD</a></td>
                    <td><?= $mahasiswa['Description4']; ?></td>
                    <td><?= $mahasiswa['alasan']; ?></td> -->

<?= $this->endSection(); ?>