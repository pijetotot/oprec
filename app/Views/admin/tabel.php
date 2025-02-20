<?php

/** @var \CodeIgniter\View\View $this */ ?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0">
                <div class="card" id="viewdata">

                </div>
                <div class="position-relative text-center mb-5 mt-4">
                    <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-end mb-3">

</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>


</div>
<div class="">
    <div class=""></div>
    <div class="">
        <div class="table-responsive border rounded-1 pb-5 pt-4 px-3" style="overflow-x: auto;">
            <table class="table table-bordered" id="myTable" style="width: 100%;">
                <thead class="">
                    <tr class="">
                        <th scope="col" class="text-center align-middle">No</th>
                        <th scope="col" class="text-center align-middle">Mendaftar Pada</th>
                        <th scope="col" class="text-center align-middle">NIM</th>
                        <th scope="col" class="text-center align-middle">Nama</th>
                        <th scope="col" class="text-center align-middle">Kelas</th>
                        <th scope="col" class="text-center align-middle">Email</th>
                        <th scope="col" class="text-center align-middle">Alamat</th>
                        <th scope="col" class="text-center align-middle">TTL</th>
                        <th scope="col" class="text-center align-middle">Jenis Kelamin</th>
                        <th scope="col" class="text-center align-middle">Tahun Kelulusan</th>
                        <th scope="col" class="text-center align-middle">Nomor Telepon</th>
                        <th scope="col" class="text-center align-middle">Bukti Follow</th>
                        <th scope="col" class="text-center align-middle">KTM</th>
                        <th scope="col" class="text-center align-middle">Ijazah</th>
                        <th scope="col" class="text-center align-middle">Foto Diri</th>
                        <th scope="col" class="text-center align-middle">View Projet</th>
                        <th scope="col" class="text-center align-middle">Alasan</th>
                        <th scope="col" class="text-center align-middle">CV</th>
                        <th scope="col" class="text-center align-middle">Aksi</th>
                        <!-- <th scope="col">Aksi</th>   -->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $mhs): ?>

                        <!-- modal bukti follow ig & yt -->
                        <div class="modal fade" id="exampleModal<?= $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $mhs['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-body p-0">
                                        <div class="card p-5 bg-transparent border-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="m-3 text-center">
                                                        <img src="/uploads/ig/<?= $mhs['ss_ig']; ?>" alt="" class="img-fluid" style="max-height:600px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="m-3 text-center">
                                                        <img src="/uploads/yt/<?= $mhs['ss_yt']; ?>" alt="" class="img-fluid" style="max-height:600px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative text-center mb-5 mt-4">
                                            <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal foto ktm -->
                        <div class="modal fade" id="exampleModal2<?= $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $mhs['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-body p-5">
                                        <div class="text-center">
                                            <img src="/uploads/ktm/<?= $mhs['ktm']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="position-relative text-center mb-5 mt-4">
                                            <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal foto ijazah -->
                        <div class="modal fade" id="exampleModal3<?= $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $mhs['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-body p-5">
                                        <div class="card bg-transparent border-0">
                                            <div class="text-center">
                                                <img src="/uploads/ijazah/<?= $mhs['ijazah']; ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="position-relative text-center mb-5 mt-4">
                                            <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal foto formal -->
                        <div class="modal fade" id="exampleModal4<?= $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $mhs['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-body p-5">
                                        <div class="card bg-transparent border-0">
                                            <div class="text-center">
                                                <img src="/uploads/foto/<?= $mhs['foto']; ?>" alt="" class="img-fluid" style="max-height:700px;">
                                            </div>
                                        </div>
                                        <div class="position-relative text-center mb-5 mt-4">
                                            <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal project -->
                        <div class="modal fade" id="exampleModal5<?= $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $mhs['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content border-0">
                                    <div class="modal-body p-5">
                                        <div class="card bg-transparent border-0">
                                            <?php if (!empty($mhs['projectFile1']) || !empty($mhs['projectFile2']) || !empty($mhs['projectFile3']) || !empty($mhs['projectFile4'])): ?>

                                                <?php if (!empty($mhs['projectFile1'])): ?>
                                                    <div class="mb-3">
                                                        <hr class="border">
                                                        <div class="clearfix">
                                                            <h4 class="float-start pt-1">Project 1</h4>
                                                            <a href="<?= base_url('/download/project1/' . $mhs['projectFile1']); ?>" class="float-end btn btn-light border"><?= 'DOWNLOAD' ?></a>
                                                        </div>
                                                        <hr class="border">
                                                        <p>Deskripsi</p>
                                                        <div class="border p-3 bg-light rounded-2">
                                                            <?= !empty($mhs['Description1']) ? $mhs['Description1'] : 'Tidak Deskripsi'; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($mhs['projectFile2'])): ?>
                                                    <div class="mb-3">
                                                        <hr class="border">
                                                        <div class="clearfix">
                                                            <h4 class="float-start pt-1">Project 2</h4>
                                                            <a href="<?= base_url('/download/project2/' . $mhs['projectFile2']); ?>" class="float-end btn btn-light border"><?= 'DOWNLOAD' ?></a>
                                                        </div>
                                                        <hr class="border">
                                                        <p>Deskripsi</p>
                                                        <div class="border p-3 bg-light rounded-2">
                                                            <?= !empty($mhs['Description2']) ? $mhs['Description2'] : 'Tidak Deskripsi'; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($mhs['projectFile3'])): ?>
                                                    <div class="mb-3">
                                                        <hr class="border">
                                                        <div class="clearfix">
                                                            <h4 class="float-start pt-1">Project 3</h4>
                                                            <a href="<?= base_url('/download/project3/' . $mhs['projectFile3']); ?>" class="float-end btn btn-light border"><?= 'DOWNLOAD' ?></a>
                                                        </div>
                                                        <hr class="border">
                                                        <p>Deskripsi</p>
                                                        <div class="border p-3 bg-light rounded-2">
                                                            <?= !empty($mhs['Description3']) ? $mhs['Description3'] : 'Tidak Deskripsi'; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($mhs['projectFile4'])): ?>
                                                    <div class="mb-3">
                                                        <hr class="border">
                                                        <div class="clearfix">
                                                            <h4 class="float-start pt-1">Project 4</h4>
                                                            <a href="<?= base_url('/download/project4/' . $mhs['projectFile4']); ?>" class="float-end btn btn-light border"><?= 'DOWNLOAD' ?></a>
                                                        </div>
                                                        <hr class="border">
                                                        <p>Deskripsi</p>
                                                        <div class="border p-3 bg-light rounded-2">
                                                            <?= !empty($mhs['Description4']) ? $mhs['Description4'] : 'Tidak Deskripsi'; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                            <?php else: ?>
                                                <h3 class="text-center">Tidak ada project yang di-upload.</h3>
                                            <?php endif; ?>
                                        </div>
                                        <div class="position-relative text-center mb-2 mt-4">
                                            <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal alasan masuk aslab -->
                        <div class="modal fade" id="exampleModal6<?= $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $mhs['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content border-0">
                                    <div class="modal-body p-5">
                                        <div class="card bg-transparent border-0">
                                            <div class="">
                                                <h4 class="pt-1"><?= $mhs['nama']; ?></h4>
                                            </div>
                                            <hr class="border">
                                            <div class="border p-3 bg-light rounded-2">
                                                <?= $mhs['alasan']; ?>
                                            </div>
                                        </div>
                                        <div class="position-relative text-center mb-1 mt-4">
                                            <button type="button" class="btn-close p-4 bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>
                            <th scope="row" class="text-center align-middle"><?= $i++ ?></th>
                            <td class="text-center align-middle"><?= $mhs['created_at']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['nim']; ?></td>
                            <td class="text-center align-middle">
                                <p class="text-uppercase m-0 p-0"><?= $mhs['nama']; ?></p>
                            </td>
                            <td class="text-center align-middle"><?= $mhs['kelas']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['email']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['alamat']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['tempatLahir']; ?>, <?= $mhs['tglLahir']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['jenis_kelamin']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['thnKelulusan']; ?></td>
                            <td class="text-center align-middle"><?= $mhs['nomer_tlp']; ?></td>
                            <td class="text-center align-middle"><button class="btn btn-light border btn-bukti" data-id="<?= $mhs['id'] ?>">Bukti Follow</button></td>
                            <td class="text-center align-middle"><button class="btn btn-light border" data-bs-toggle="modal" data-bs-tar00get="#exampleModal2<?= $mhs['id'] ?>">KTM</button></td>
                            <td class="text-center align-middle"><button class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal3<?= $mhs['id'] ?>">Ijazah</button></td>
                            <td class="text-center align-middle"><button class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal4<?= $mhs['id'] ?>">Foto</button></td>
                            <td class="text-center align-middle"><button class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal5<?= $mhs['id'] ?>">Project</button></td>
                            <td class="text-center align-middle"><button class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal6<?= $mhs['id'] ?>">Alasan</button></td>
                            <td class="text-center align-middle"><a href="<?= '/download/cv/' . $mhs['cv']; ?>" class="btn btn-light border">Download CV</a></td>
                            <td class="text-center align-middle"><a href="<?= 'download/pdf/' . $mhs['nama']; ?>" target="_blank" class="btn btn-success">pdf</a></td>
                            <!-- <td><a href="/downloadAll/<?= $mhs['id']; ?>" class="btn btn-primary">Download All</a></td> -->
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class=""></div>
</div>

<script>
    $('.btn-bukti').on('click', function() {
        let id = $(this).data('id');
    })



    function getdata(id) {
        return new Promise((resolve, resk) => {

        })
        $.ajax({
            method: "POST",
            url: "<?= base_url('getdata') ?>",
            data: {
                '<?= csrf_token() ?>': '<?= csrf_hash() ?>',
                id
            },
            success: function(res) {
                console.log(res)
            }
        })
    }
</script>
<?= $this->endSection(); ?>