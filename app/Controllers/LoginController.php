<?php

namespace App\Controllers;

use App\Models\AdminModel;

class LoginController extends BaseController
{
    //mengarahkan ke halaman login
    public function login()
    {
        return view('auth/login');
    }

    //memproses login
    public function authenticate()
    {
        //instance ke model AdminModel, untuk berinteraksi dgn database
        $AdminModel = new AdminModel();
        //Instance dari layanan validasi untuk memeriksa input.
        $validation = \Config\Services::validation();

        // Validasi input
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[255]',
            'password' => 'required|min_length[8]|max_length[255]'
        ]);

        //jika validasi tidak sesuai dgn permintaan, otomatis akan diarahkan ke halaman awal
        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Invalid input');
            return redirect()->back()->withInput();
        }

        //mengambil nilai dari form inputan
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Mengambil data admin berdasarkan username, untuk dicocokan apakah nilai dari inputan form ada di database
        $dataMember = $AdminModel->where('username', $username)->first(); //first() mengambil perbaris nilai
        //jika ada, maka cocokan nilai password berdasarkan ada yg di database
        if ($dataMember) {
            // Verifikasi password
            if (password_verify($password, $dataMember['password'])) {
                // Jika password benar, set session
                $sessionData = [
                    'id' => $dataMember['id'],
                    'username' => $dataMember['username']
                ];
                session()->set($sessionData);
                return redirect()->to('/tabel');
            } else {
                $error = 'Password tidak sesuai';
            }
        } else {
            $error = 'Username tidak ditemukan';
        }

        // Jika terjadi kesalahan, tampilkan kembali dengan pesan error
        session()->setFlashdata('username', $username);
        session()->setFlashdata('error', $error);
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
