<!-- app/Views/laporan_mahasiswa.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        .kiri {
            float:left;
            width: 25%;
        }

        .kanan {
            float:right;
            width: 75%;
        }

        .clearfix2::after {
            content: "";
            display: table;
            clear: both;
        }

        .clearfix2 {
            margin-top:40px;
        }
        /* table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            margin:0;
        }

        tr:nth-child(even) {
            border:black solid 1px;
        } */
    </style>
</head>
<body>
    <div class="p-3">
        <div class="clearfix">
            <img src="" alt="">
            <h2 class="text-dark" style="font-weight: 800;">Biodata Caslon Aslab</h2>
        </div>
            <hr class="border mb-1">
            <div class="">
                <h3 class="text-dark" style="font-weight: 800;">
                    <?= $mahasiswa['nama']; ?>
                </h3>
            </div>
            <hr class="border">
        <div class="clearfix2">
            <div class="kiri">
                <img src="<?= $foto; ?>" alt="" class="object-fit-cover rounded-1 text-center" height="200px" >
            </div>
            <div class="kanan">
                <table style="margin-top:0px;">
                    <tr>
                        <th>NIM</th>
                        <td><?= $mahasiswa['nim']; ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td><?= $mahasiswa['kelas']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $mahasiswa['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?= $mahasiswa['alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td><?= $mahasiswa['tempatLahir']; ?>, <?= $mahasiswa['tglLahir']; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?= $mahasiswa['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <th>Tahun Kelulusan</th>
                        <td><?= $mahasiswa['thnKelulusan']; ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td><?= $mahasiswa['nomer_tlp']; ?></td>
                    </tr>
                    <tr>
                        <th>Mendaftar Pada</th>
                        <td><?= $mahasiswa['created_at']; ?></td>
                    </tr>
                    <!-- <tr>
                        <th>Deskripsi Projek 1</th>
                        <td><?= $mahasiswa['Description1'] ? ($mahasiswa['Description1']) : '-' ; ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi Projek 2</th>
                        <td><?= $mahasiswa['Description2'] ? ($mahasiswa['Description2']) : '-' ; ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi Projek 3</th>
                        <td><?= $mahasiswa['Description3'] ? ($mahasiswa['Description3']) : '-' ; ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi Projek 4</th>
                        <td><?= $mahasiswa['Description4'] ? ($mahasiswa['Description4']) : '-' ; ?></td>
                    </tr> -->
                </table>
            </div>        
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
