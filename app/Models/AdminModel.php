<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    //menghubungkan ke tabel
    protected $table = 'tb_admin';

    //mempresentasikan kolom yg primarykey
    protected $primaryKey = 'id';

    //mempresentasikan kolom apa yg wajib diisi
    protected $allowedFields = ['username','password'];
}