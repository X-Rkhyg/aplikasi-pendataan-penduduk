<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index(): string
    {

        $data = [
            'title' => 'Dashboard',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard', $data);
    }
}
