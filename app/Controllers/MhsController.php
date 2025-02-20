<?php

namespace App\Controllers;
//mengimport kelas MhsModel digunakan untuk berinteraksi dengan class MhsModel untuk berinteraksi dgn database
use App\Models\MhsModel;
use Config\Services;
use Dompdf\Dompdf;
use Dompdf\Options;
use ZipArchive;

class MhsController extends BaseController
{
    //propertis MhsModel digunakan untuk menyimpan instance Model Mhs
    protected $MhsModel;
    //digunakan untuk menyimpan instance dari layanan validasi CI
    protected $validation;

    //memberikan nilai pada propertis
    public function __construct()
    {
        $this -> MhsModel = new MhsModel(); //mengubungkan pd Model class
        $this->validation = Services::validation();
    }

    //method index digunakan untuk mengambil semua nilai yg ada ditabel untuk ditampilkan
    public function index()
    {
        $search = $this->request->getVar('search');
        if ($search) {
            $mahasiswa = $this->MhsModel->like('nama', $search)->findAll();
        } else {
            $mahasiswa = $this->MhsModel->findAll();
        }
        $data = [
            'title' => 'Tabel Data',
            'mahasiswa' => $mahasiswa,
            'search' => $search
        ];

        return view('admin/tabel',$data);
    }

    public function error($folder)
    {
        return redirect()->back()->with("error", "file not found");
    }

    //Method download file
    public function download($folder, $fileName){
        
        //mengarahkan ke direktori file berada
        $direktori = FCPATH . 'uploads/'. $folder . '/' . $fileName;

        //periksa file ada atau tidak
        if(file_exists($direktori))
        {
            // Mengatur header yang diperlukan untuk download
            return $this->response->setHeader('Content-Type', mime_content_type($direktori))
            ->setHeader('Content-Disposition', 'attachment; filename="' . basename($direktori) . '"')
            ->setHeader('Content-Length', filesize($direktori))
            ->download($direktori, null);
        } else {
            return redirect()->back()->with("error", "file not found");
        }
    }

    public function generatePdf($nama){
        //mengambil data dari tabel
        $mahasiswa = $this->MhsModel->getMhs($nama);
        $foto = FCPATH . 'uploads/foto/' . $mahasiswa['foto'];

        // dd($mahasiswa['foto']);

        $base64img = file_get_contents($foto);

        //format base64 URL
        $base64 = 'data:image/' . pathinfo($foto, PATHINFO_EXTENSION) . ';base64,' . base64_encode($base64img);

        $data = [
            'mahasiswa' => $mahasiswa,
            'foto' => $base64
        ];

        $html = view('admin/generatePdf', $data);

        // inisialisasi dompdf
        $options = new Options;

        $options->set('enabled', 'true');
        $options->set('isHtml5ParserEnabled', 'true');
        $options->set('isRemoteEnabled', TRUE);
        $options->set('isPhpEnabled', 'true');
        $options->set('chroot', 'uploads/foto');


        $dompdf = new Dompdf($options);

        //masukkan load html ke dalam pdf
        $dompdf->loadHtml($html);

        //set ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'potrait');

        //render pdf
        $dompdf->render();

        //tampilkan output ke browser
        // $dompdf->stream();
        $dompdf->stream("Biodata Mahasiswa" . $mahasiswa['nama'] . ".pdf", ['Attachment' => false]);
    }

    // public function downloadMultipleFile( $nama)
    // {
    //     $mahasiswa = $this->MhsModel->getMhs($nama);
        
    //     //daftar folder yang ada
    //     $folders = ['cv', 'foto', 'ig', 'ijazah', 'ktm', 'project1', 'project2', 'project3', 'project4', 'yt'];

    //     //buat array kosong untuk menyimpan data
    //     $files = [];

    //     //buat perulangan untuk memanggil tiap folder

    //     foreach ($folders as $folder) {
    //         // definisikan folder pathnya
    //         $folderPath = FCPATH . 'uploads/' . $folder;

    //         // buat logika untuk menemukan ekstensi file di tiap tiap folder
    //         if ($folder == 'cv') {
    //             $extension = ['pdf'];
    //             $file = $mahasiswa['cv'];
    //         }else if ($folder == 'foto') {
    //             $extension = ['jpg', 'png'];
    //             $file = $mahasiswa['foto'];
    //         }elseif ($folder == 'ig') {
    //             $extension =['jpg', 'png'];
    //             $file = $mahasiswa['ss_ig'];
    //         }else if ($folder == 'ijazah') {
    //             $extension = ['jpg', 'png'];
    //             $file = $mahasiswa['ijazah'];
    //         }else if ($folder == 'ktm') {
    //             $extension = ['jpg', 'png'];
    //             $file = $mahasiswa['ktm'];
    //         }else if ($folder == 'yt') {
    //             $extension = ['jpg', 'png'];
    //             $file = $mahasiswa['ss_yt'];
    //         }else if ($folder == 'project1') {
    //             $extension = ['zip', 'pdf'];
    //             $file = $mahasiswa['projectFile1'];
    //         }else if ($folder == 'project2') {
    //             $extension = ['zip', 'pdf'];
    //             $file = $mahasiswa['projectFile2'];
    //         }else if ($folder == 'project3') {
    //             $extension = ['zip', 'pdf'];
    //             $file = $mahasiswa['projectFile3'];
    //         }else if ($folder == 'project4') {
    //             $extension = ['zip', 'pdf'];
    //             $file = $mahasiswa['projectFile4'];
    //         }
    //         else {
    //             $extension = ['jpg', 'png', 'zip', 'pdf'];
    //         }

    //         //mencari file yang ada di dalam folder

    //         foreach ($extension as $ext) {
    //             $filePath = $folderPath . '/' . $file;
    //             if (file_exists($filePath)) {
    //                 $files[] = $filePath; //menambahkan file yang ada ke dalam array
    //             }
    //         }
    //     }

    //     //menentukan nama file yang akan dikeluarkan
    //     $zipFileName = $mahasiswa['nama'] . time() . '.zip';

    //     //menginisialkan penyimpanan sementara
    //     $zipFilePath = FCPATH . 'uploads/temp/' . $zipFileName;

    //     // $zip = new \ZipArchive();

    //     // if ($zip->open($zipFilePath, \ZipArchive::CREATE) === TRUE) {
    //     //     //loop untuk menambahkan file ke dalam zip
    //     //     foreach ($files as $file) {
    //     //         $zip->addFile($file, basename($file)); 
    //     //     }
    //     //     $zip->close();

    //     // Membuat zip dengan perintah `zip` di command line
    //     $cmd = 'zip -j ' . escapeshellarg($zipFilePath) . ' ' . implode(' ', array_map('escapeshellarg', $files));
    //     exec($cmd, $output, $return_var);

    //     if ($return_var === 0) {
    //         //Mengatur header untuk mendownload file ZIP
    //         header('Content-Type: application/zip');
    //         header('Content-disposition: attachment; filename=' . $zipFileName);
    //         header('Content-Length: ' . filesize($zipFilePath));
    
    
    //         //mengirim zip file ke output
    //         readfile($zipFilePath);
    //         unlink($zipFilePath);
    //     }else {
    //         file_put_contents(FCPATH . 'uploads/temp/test.txt', 'Test write to temp folder');

    //     }
    // }

    //Method Detail digunakan untuk melihat detail pada salah satu nilai pd tabel
    public function detail($nama)
    {
        $data = [
            'title' => 'Detail Data Mahasiswa',
            'mahasiswa' => $this->MhsModel->getMhs($nama) //nilai yg dicari tadi akan disimpan melalui key mahasiswa
        ];
        //Jika nilai tidak ditemukan
        if(empty($data['mahasiswa'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data mahasiswa' . $nama . 'tidak ditemukan');
        }
        return view('admin/detail',$data);
    }

    //method create digunakan untuk mengarahkan ke tampilan form inputan
    public function create()
    {
        $data = [
            'title' => 'Halaman Pendaftaran',
            'validation' => session()->getFlashdata('validation') //menghubungkan objek saat ini, yg berisi pesan kesalahan, untuk dikirm pd tampilan form inputan daftar
        ];
        return view('mhs/daftar',$data);
    }

    //method save digunakan untuk menyimpan nilai form inputan ke tabel yg berada di database
    public function save()
    {
        //$rules berisi sebuah validasi/ sebuah kritria nilai yg dimasukkan
        $rules = [
            'nama' => 'required|alpha_space|min_length[3]|max_length[50]',
            'nim'  => 'required|numeric|exact_length[12]',
            'kelas' => 'required|in_list[A1,A2,A3,B1,B2]',
            'alamat' => 'required',
            'nomer_tlp' => 'required|numeric|min_length[12]|max_length[15]',
            'email' => 'required|valid_email|is_unique[tb_mhs.email]|max_length[50]',
            'tempatLahir' => 'required|max_length[20]',
            'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
            'thnKelulusan' => 'required|numeric|exact_length[4]|less_than_equal_to['.date('Y') .']|greater_than_equal_to[2015]',
            'tglLahir' => 'required|valid_date',
            'ss_ig' => 'uploaded[ss_ig]|is_image[ss_ig]|max_size[ss_ig,6196]|mime_in[ss_ig,image/jpg,image/jpeg,image/png]',
            'ss_yt' => 'uploaded[ss_yt]|is_image[ss_yt]|max_size[ss_yt,4096]|mime_in[ss_yt,image/jpg,image/jpeg,image/png]',
            'ktm' => 'uploaded[ktm]|is_image[ktm]|max_size[ktm,4096]|mime_in[ktm,image/jpg,image/jpeg,image/png]',
            'projectFile1' => 'permit_empty|ext_in[projectFile1,pdf,zip,js,html,php,sql,txt,css,py]|max_size[projectFile1,20480]',
            'projectFile2' => 'permit_empty|ext_in[projectFile2,pdf,zip,js,html,php,sql,txt,css,py]|max_size[projectFile2,20480]',
            'projectFile3' => 'permit_empty|ext_in[projectFile3,pdf,zip,js,html,php,sql,txt,css,py]|max_size[projectFile3,20480]',
            'projectFile4' => 'permit_empty|ext_in[projectFile4,pdf,zip,js,html,php,sql,txt,css,py]|max_size[projectFile4,20480]',
            'Description1' => 'permit_empty',
            'Description2' => 'permit_empty',
            'Description3' => 'permit_empty',
            'Description4' => 'permit_empty',
            'alasan'       =>  'required',
            'ijazah' => 'uploaded[ijazah]|is_image[ijazah]|max_size[ijazah,4096]|mime_in[ijazah,image/jpg,image/jpeg,image/png]',
            'foto' => 'uploaded[foto]|is_image[foto]|max_size[foto,4096]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'cv' => 'uploaded[cv]|ext_in[cv,pdf]|max_size[cv,4096]',
        ];

        // jika validasi input tidak sesuai kriteria diatas maka akan menampilkan pesan kesalahan
        if (!$this->validate($rules)) {
            log_message('error', 'Validation errors: ' . print_r($this->validator->getErrors(), true));
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }
        
        //mengambil file
        $IG = $this->request->getFile('ss_ig');
        $YT = $this->request->getFile('ss_yt');
        $ktm = $this->request->getFile('ktm');
        $ijazah = $this->request->getFile('ijazah');
        $foto = $this->request->getFile('foto');
        $cv = $this->request->getFile('cv');
        $projectFile1 = $this->request->getFile('projectFile1');
        $projectFile2 = $this->request->getFile('projectFile2');
        $projectFile3 = $this->request->getFile('projectFile3');
        $projectFile4 = $this->request->getFile('projectFile4');

        //menghilangkan penamaan simbol dan karakter
        $nama = preg_replace('/[^a-zA-Z0-9-_]/', '_', $this->request->getVar('nama'));

        //mengambil nama inputan untuk ditaruh pada file yg dikirim
        $igName = $nama . '_IG_' . time() . '.' . $IG->getClientExtension();
        $ytName = $nama . '_YT_' . time() . '.' . $YT->getClientExtension();
        $ktmName = $nama . '_ktm_' . time() . '.' . $ktm->getClientExtension();
        $ijazahName = $nama . '_ijazah_' . time() . '.' . $ijazah->getClientExtension();
        $fotoName = $nama . '_foto_' . time() . '.' . $foto->getClientExtension();
        $cvName = $nama . '_cv_' . time() . '.' . $cv->getClientExtension();

        $project1Name = $projectFile1 && $projectFile1->isValid() ? $nama . '_Project1_' . time() . '.' . $projectFile1->getClientExtension() : null;
        $project2Name = $projectFile2 && $projectFile2->isValid() ? $nama . '_Project2_' . time() . '.' . $projectFile2->getClientExtension() : null;
        $project3Name = $projectFile3 && $projectFile3->isValid() ? $nama . '_Project3_' . time() . '.' . $projectFile3->getClientExtension() : null;
        $project4Name = $projectFile4 && $projectFile4->isValid() ? $nama . '_Project4_' . time() . '.' . $projectFile4->getClientExtension() : null;

        //setelah itu file akan disimpan didalam folder public\uploads
        $IG->move('uploads/ig', $igName);
        $YT->move('uploads/yt', $ytName);
        $ktm->move('uploads/ktm', $ktmName);
        $ijazah->move('uploads/ijazah', $ijazahName);
        $foto->move('uploads/foto', $fotoName);
        $cv->move('uploads/cv', $cvName);
        if ($projectFile1 && $projectFile1->isValid()) {
            $projectFile1->move('uploads/project1', $project1Name);
        }
        if ($projectFile2 && $projectFile2->isValid()) {
            $projectFile2->move('uploads/project2', $project2Name);
        }
        if ($projectFile3 && $projectFile3->isValid()) {
            $projectFile3->move('uploads/project3', $project3Name);
        }
        if ($projectFile4 && $projectFile4->isValid()) {
            $projectFile4->move('uploads/project4', $project4Name);
        }
        
        //menyimpan nilai inputan pada tbl yg ada di database
        $this->MhsModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
            'alamat' => $this->request->getVar('alamat'),
            'nomer_tlp' => $this->request->getVar('nomer_tlp'),
            'email' => $this->request->getVar('email'),
            'tempatLahir' => $this->request->getVar('tempatLahir'),
            'tglLahir' => $this->request->getVar('tglLahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'thnKelulusan' => $this->request->getVar('thnKelulusan'),
            'ss_ig' => $igName,
            'ss_yt' => $ytName,
            'ktm' => $ktmName,
            'ijazah' => $ijazahName,
            'foto' => $fotoName,
            'cv' => $cvName,
            'projectFile1' => $project1Name !== null ? $project1Name : null,
            'projectFile2' => $project2Name !== null ? $project2Name : null,
            'projectFile3' => $project3Name !== null ? $project3Name : null,
            'projectFile4' => $project4Name !== null ? $project4Name : null,
            'Description1' => $this->request->getVar('Description1'),
            'Description2' => $this->request->getVar('Description2'),
            'Description3' => $this->request->getVar('Description3'),
            'Description4' => $this->request->getVar('Description4'),
            'alasan' => $this->request->getVar('alasan'),
        ]);

        //mengambil id pendaftar yang baru saja disimpan
        $insertID = $this->MhsModel->getInsertID();
        // dd($insertID);

        //memanggil data yang disimpan menggunakan InsertID
        $mahasiswa = $this->MhsModel->find($insertID);
        
        session()->setFlashdata('pesan','pendaftaran berhasil');
        return redirect()->to('/daftar/success')->with('mahasiswa', $mahasiswa);
    }

    public function downloadAll($id)
    {
        // Ambil data mahasiswa berdasarkan ID
        $mahasiswa = $this->MhsModel->find($id);
    
        if (!$mahasiswa) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mahasiswa tidak ditemukan');
        }
    
        $files = [];
        $missingFiles = [];
    
        // Tambahkan file-file yang ingin diunduh jika ada
        if (!empty($mahasiswa['ss_ig'])) {
            $filePath = FCPATH . 'uploads/ig/' . $mahasiswa['ss_ig'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'ss_ig';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }
    
        // Lakukan hal yang sama untuk file lainnya
        if (!empty($mahasiswa['ss_yt'])) {
            $filePath = FCPATH . 'uploads/yt/' . $mahasiswa['ss_yt'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'ss_yt';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['ktm'])) {
            $filePath = FCPATH . 'uploads/ktm/' . $mahasiswa['ktm'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'ktm';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['ijazah'])) {
            $filePath = FCPATH . 'uploads/ijazah/' . $mahasiswa['ijazah'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'ijazah';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['foto'])) {
            $filePath = FCPATH . 'uploads/foto/' . $mahasiswa['foto'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'foto';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['cv'])) {
            $filePath = FCPATH . 'uploads/cv/' . $mahasiswa['cv'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'cv';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['projectFile1'])) {
            $filePath = FCPATH . 'uploads/projectFile1/' . $mahasiswa['projectFile1'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'projectFile1';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['projectFile2'])) {
            $filePath = FCPATH . 'uploads/projectFile2/' . $mahasiswa['projectFile2'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'projectFile2';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['projectFile3'])) {
            $filePath = FCPATH . 'uploads/projectFile3/' . $mahasiswa['projectFile3'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'projectFile3';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }

        if (!empty($mahasiswa['projectFile4'])) {
            $filePath = FCPATH . 'uploads/projectFile4/' . $mahasiswa['projectFile4'];
            if (file_exists($filePath)) {
                $files[] = $filePath;
            } else {
                $missingFiles[] = 'projectFile4';
                log_message('error', 'File tidak ditemukan: ' . $filePath);
            }
        }
    
        // Periksa apakah kelas ZipArchive tersedia
        if (!class_exists('ZipArchive')) {
            return redirect()->back()->with('error', 'Class ZipArchive tidak ditemukan.');
        }
    
        // Pastikan direktori temp ada dan memiliki izin yang benar
        $tempPath = WRITEPATH . 'temp/';
        if (!is_dir($tempPath)) {
            mkdir($tempPath, 0777, true);
            log_message('info', 'Folder writable/temp dibuat.');
        }

            // Pastikan folder tempPath dapat ditulis
            if (!is_writable($tempPath)) {
                log_message('error', 'Folder tempPath tidak memiliki izin tulis.');
                return redirect()->back()->with('error', 'Folder tempPath tidak memiliki izin tulis.');
            }
        
        // Atur nama file ZIP
        $zipName = $tempPath . DIRECTORY_SEPARATOR . 'download_' . uniqid() . '.zip';
    
        // Gunakan umask untuk memastikan izin file yang dibuat tidak bermasalah
        umask(0);
        
        $zip = new ZipArchive();
    if ($zip->open($zipName, ZipArchive::CREATE) === TRUE) {
        foreach ($files as $file) {
            if (file_exists($file)) {
                $zip->addFile($file, basename($file));
            } else {
                log_message('error', 'File tidak ditemukan saat menambahkan ke ZIP: ' . $file);
            }
        }
        $zip->close();

        // Pastikan file ZIP benar-benar dibuat
        if (file_exists($zipName)) {
            if (!empty($missingFiles)) {
                log_message('error', 'File berikut tidak ditemukan: ' . implode(', ', $missingFiles));
            }

            // Unduh file ZIP
            $response = $this->response->download($zipName, null)
                                ->setFileName('All_Files_' . preg_replace('/[^a-zA-Z0-9-_]/', '_', $mahasiswa['nama']) . '.zip');

            // Hapus file zip sementara setelah proses download selesai
            register_shutdown_function(function() use ($zipName) {
                if (file_exists($zipName)) {
                    unlink($zipName);
                }
            });

            return $response;
        } else {
            return redirect()->back()->with('error', 'Gagal membuat file zip.');
        }
    } else {
        return redirect()->back()->with('error', 'Gagal membuka file zip.');
    }
}
    
    
    
    
    public function success()
    {
        $mahasiswa = session()->get('mahasiswa');
        // dd($mahasiswa);

        // if (!$mahasiswa) {
        //     return redirect()->to('/daftar');
        // }

        $data = [
            'title' => 'Web Pendaftaran | Aslab INF',
            'mahasiswa' => $mahasiswa
        ];

        return view('mhs/success', $data);
    }

    public function delete($id)
    {
        //memeriksa apakah data dgn id yang diberikan ada di tabel, jika ada hapus
        $mhs = $this->MhsModel->find($id);
        if($mhs){
            //hapus data
            $this->MhsModel->delete($id);
            //set flash data untuk menampilkan pesan sukses
            session()->setFlashdata('success','Data berhasil dihapus');
        }else{
            session()->setFlashdata('error','Data tidak ditemukan');
        }

        //kembali ke hal utama
        return redirect()->to('/tabel');
    }

    public function edit($nama)
    {
        $data = [
            'title' => 'Halaman Edit Data',
            'validation' => session()->getFlashdata('validation'),
            'mahasiswa' => $this->MhsModel->getMhs($nama) //menghubungkan objek saat ini, yg berisi pesan kesalahan, untuk dikirm pd tampilan form inputan daftar
        ];
        return view('admin/edit',$data);
    }

    public function update($id)
    {
        //mengambil satu baris data mhs dari database berdasarkan id yang dikirimkan melalui form action
        $dataMhs = $this->MhsModel->find($id); //nilai tersebut nilai lama

        //setelah itu dibandinkan nilai lama dengan nilai yg baru diperbarui, apakah nilai nim yg lama sama dgn nilai nim baru
        //getVar() mengambil nilai baru yg telah disubmit dari method post yg dikirimkan
        if($dataMhs['nim'] !== $this->request->getVar('nim')){ 
            //jika nilai nim baru, maka akan divalidasi sesuai kententuan dibawa
            $nimRule = 'required|numeric|is_unique[tb_mhs.nim]|exact_length[12]';
        }else{
            //jika tidak, hanya mevalidasi required
            $nimRule = 'required';
        }

        $rules = [
            'nama' => 'required|alpha_space|min_length[3]|max_length[50]',
            'nim'  => $nimRule,
            'kelas' => 'required|in_list[A1,A2,A3,B1,B2]',
            'alamat' => 'required',
            'nomer_tlp' => 'required|numeric|min_length[12]|max_length[15]',
            'email' => 'required|valid_email|max_length[50]',
            'tempatLahir' => 'required|max_length[20]',
            'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
            'thnKelulusan' => 'required|numeric|exact_length[4]|less_than_equal_to['.date('Y') .']|greater_than_equal_to[2015]',
            'tglLahir' => 'required|valid_date',
            'ss_ig' => 'permit_empty|is_image[ss_ig]|max_size[ss_ig,1024]|mime_in[ss_ig,image/jpg,image/jpeg,image/png]',
            'ss_yt' => 'permit_empty|is_image[ss_yt]|max_size[ss_yt,1024]|mime_in[ss_yt,image/jpg,image/jpeg,image/png]',
            'ktm' => 'permit_empty|is_image[ktm]|max_size[ktm,1024]|mime_in[ktm,image/jpg,image/jpeg,image/png]',
            'projectFile1' => 'permit_empty|ext_in[projectFile1,pdf,zip]|max_size[projectFile1,2048]',
            'projectFile2' => 'permit_empty|ext_in[projectFile2,pdf,zip]|max_size[projectFile2,2048]',
            'projectFile3' => 'permit_empty|ext_in[projectFile3,pdf,zip]|max_size[projectFile3,2048]',
            'projectFile4' => 'permit_empty|ext_in[projectFile4,pdf,zip]|max_size[projectFile4,2048]',
            'Description1' => 'permit_empty|max_length[1000]',
            'Description2' => 'permit_empty|max_length[1000]',
            'Description3' => 'permit_empty|max_length[1000]',
            'Description4' => 'permit_empty|max_length[1000]',
            'alasan'       => 'required|max_length[1000]',
            'ijazah' => 'permit_empty|is_image[ijazah]|max_size[ijazah,1024]|mime_in[ijazah,image/jpg,image/jpeg,image/png]',
            'foto' => 'permit_empty|is_image[foto]|max_size[foto,1024]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'cv' => 'permit_empty|ext_in[cv,pdf]|max_size[cv,2048]',
        ];

        // jika validasi input tidak sesuai kriteria diatas maka akan menampilkan pesan kesalahan
        if (!$this->validate($rules)) {
            log_message('error', 'Validation errors: ' . print_r($this->validator->getErrors(), true));
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

    // Menangani unggahan file
    $IG = $this->request->getFile('ss_ig');
    $YT = $this->request->getFile('ss_yt');
    $ktm = $this->request->getFile('ktm');
    $ijazah = $this->request->getFile('ijazah');
    $foto = $this->request->getFile('foto');
    $cv = $this->request->getFile('cv');
    $projectFile1 = $this->request->getFile('projectFile1');
    $projectFile2 = $this->request->getFile('projectFile2');
    $projectFile3 = $this->request->getFile('projectFile3');
    $projectFile4 = $this->request->getFile('projectFile4');

    // Jika file tidak diunggah, tetap gunakan nama file lama
    $nama = preg_replace('/[^a-zA-Z0-9-_]/', '_', $this->request->getVar('nama'));

    $igName = $nama . '_IG_' . time() . '.' . $IG->getClientExtension();
    $ytName = $nama . '_YT_' . time() . '.' . $YT->getClientExtension();
    $ktmName = $ktm->isValid() && !$ktm->hasMoved() ? $ktm->getRandomName() : $dataMhs['ktm'];
    $ijazahName = $ijazah->isValid() && !$ijazah->hasMoved() ? $ijazah->getRandomName() : $dataMhs['ijazah'];
    $fotoName = $foto->isValid() && !$foto->hasMoved() ? $foto->getRandomName() : $dataMhs['foto'];
    $cvName = $cv->isValid() && !$cv->hasMoved() ? $cv->getRandomName() : $dataMhs['cv'];
    $project1Name = $projectFile1 && $projectFile1->isValid() ? $nama . '_Project1_' . time() . '.' . $projectFile1->getClientExtension() : $dataMhs['projectFile1'];
    $project2Name = $projectFile2 && $projectFile2->isValid() ? $nama . '_Project2_' . time() . '.' . $projectFile2->getClientExtension() : $dataMhs['projectFile2'];
    $project3Name = $projectFile3 && $projectFile3->isValid() ? $nama . '_Project3_' . time() . '.' . $projectFile3->getClientExtension() : $dataMhs['projectFile3'];
    $project4Name = $projectFile4 && $projectFile4->isValid() ? $nama . '_Project4_' . time() . '.' . $projectFile4->getClientExtension() : $dataMhs['projectFile4'];


        // Pindahkan file yang diunggah
        if ($ktm->isValid() && !$ktm->hasMoved()) {
            $ktm->move(WRITEPATH . 'uploads', $ktmName);
        }
        if ($ijazah->isValid() && !$ijazah->hasMoved()) {
            $ijazah->move(WRITEPATH . 'uploads', $ijazahName);
        }
        if ($foto->isValid() && !$foto->hasMoved()) {
            $foto->move(WRITEPATH . 'uploads', $fotoName);
        }
        if ($cv->isValid() && !$cv->hasMoved()) {
            $cv->move(WRITEPATH . 'uploads', $cvName);
        }
        if ($projectFile1 && $projectFile1->isValid()) {
            $projectFile1->move('uploads/project1', $project1Name);
        }
        if ($projectFile2 && $projectFile2->isValid()) {
            $projectFile2->move('uploads/project2', $project2Name);
        }
        if ($projectFile3 && $projectFile3->isValid()) {
            $projectFile3->move('uploads/project3', $project3Name);
        }
        if ($projectFile4 && $projectFile4->isValid()) {
            $projectFile4->move('uploads/project4', $project4Name);
        }

        $db = \Config\Database::connect();
        $builder = $db->table('tb_mhs');
        $builder->where('id', $id);
        //menyimpan nilai inputan pada tbl yg ada di database
        $builder->update([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
            'alamat' => $this->request->getVar('alamat'),
            'nomer_tlp' => $this->request->getVar('nomer_tlp'),
            'email' => $this->request->getVar('email'),
            'tempatLahir' => $this->request->getVar('tempatLahir'),
            'tglLahir' => $this->request->getVar('tglLahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'thnKelulusan' => $this->request->getVar('thnKelulusan'),
            'ss_ig' => $igName,
            'ss_yt' => $ytName,
            'ktm' => $ktmName,
            'ijazah' => $ijazahName,
            'foto' => $fotoName,
            'cv' => $cvName,
            'projectFile1' => $project1Name !== null ? $project1Name : null,
            'projectFile2' => $project2Name !== null ? $project2Name : null,
            'projectFile3' => $project3Name !== null ? $project3Name : null,
            'projectFile4' => $project4Name !== null ? $project4Name : null,
            'Description1' => $this->request->getVar('Description1'),
            'Description2' => $this->request->getVar('Description2'),
            'Description3' => $this->request->getVar('Description3'),
            'Description4' => $this->request->getVar('Description4'),
            'alasan' => $this->request->getVar('alasan'),
        ]);
        

        session()->setFlashdata('pesan','pendaftaran berhasil');
        return redirect()->to('/tabel');
    }

    public function get_data()
    {
        $id = $this->request->getPost('id');
        $data = $this->MhsModel->find($id);
        return $this->response->setJson($data);
    }

    public function info()
    {
        $data = [
            'title' => 'Tutup',
        ];

        return view('mhs/info',$data);
    }
}
