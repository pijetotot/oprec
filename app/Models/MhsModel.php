<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $table = 'tb_mhs';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama', 'nim', 'kelas', 'alamat','tempatLahir','tglLahir','jenis_kelamin','thnKelulusan','ktm', 'nomer_tlp', 'email',
        'ss_ig', 'ss_yt','ijazah', 'foto', 'cv',
        'projectFile1', 'projectFile2','projectFile3','projectFile4', 'Description1', 'Description2','Description3','Description4','alasan'
    ];

    public function getMhs($nama = false)
    {
        //jika tidak ditemukan maka akan menampilkan semua nilai yg ada ditabel
        if($nama == false)
        {
            return $this->findAll();
        }
        //jika ada, ambil
        return $this->where(['nama' => $nama]) -> first();
    }
}




?>