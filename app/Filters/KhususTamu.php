<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


//cara kerja. Pengguna -> Route -> filters -> Controller
class KhususTamu implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->get('id')){
            return redirect()->to('/tabel');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}