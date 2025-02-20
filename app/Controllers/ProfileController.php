<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function homepage()
    {
        $data = [
            'title' => 'Aslab Informatika Umsida',
        ];

        return view('profile/homepage',$data);
    }
}
