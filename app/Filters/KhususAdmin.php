<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


//cara kerja. Pengguna -> Route -> filters -> Controller
class KhususAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //memeriksa apakah session dengan kunci 'id' ada atau tidak. Jika tidak ada, pengguna akan diarahkan ke halaman login.
        if(!session()->get('id')){
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}