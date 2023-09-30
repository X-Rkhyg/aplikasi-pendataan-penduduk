<?php

namespace App\Controllers;

use App\Models\kelahiranModel;

class Admin extends BaseController
{

    protected $kelahiranModel;
    protected $session;
    protected $userModel;
    public function __construct()
    {
        $this->kelahiranModel = new kelahiranModel();
        $this->session = session();
    }

    public function kelahiran(): string
    {

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $kelahiran = $this->kelahiranModel->findAll();

        $data = [
            'title' => 'Data Kelahiran Sleman',
            'kelahiran' => $kelahiran
        ];

        return view('admin/kelahiran', $data);
    }

    public function dashboard()
    {

        $kelahiran = $this->kelahiranModel->findAll();

        $data = [
            'title' => 'Data Kelahiran Sleman',
            'kelahiran' => $kelahiran
        ];

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        return view('admin/dashboard', $data);
    }

    public function tambah_kelahiran()
    {

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Tambah Data Kelahiran Sleman',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambah/kelahiran', $data);
    }

}
