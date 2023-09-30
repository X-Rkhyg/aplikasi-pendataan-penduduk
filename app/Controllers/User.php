<?php

namespace App\Controllers;

class User extends BaseController
{

    protected $session;
    public function __construct()
    {
        $this->session = session();
    }

    public function dashboard()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Dashboard - Aplikasi Pendataan Penduduk',
        ];

        return view('user/dashboard', $data);
    }

    public function kelahiran(): string
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Input Data Kelahiran Sleman',
            'validation' => \Config\Services::validation()
        ];

        return view('user/kelahiran', $data);
    }
}
