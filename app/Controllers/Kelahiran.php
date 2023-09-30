<?php

namespace App\Controllers;

use App\Models\KelahiranModel;

class Kelahiran extends BaseController
{

    protected $session;
    protected $kelahiranModel;
    public function __construct()
    {
        $this->session = session();
        $this->kelahiranModel = new KelahiranModel();
    }

    public function save()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        // validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'nik' => [
                'rules' => 'required',
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ],
            'nama_ibu' => [
                'rules' => 'required',
            ],
            'nama_ayah' => [
                'rules' => 'required',
            ],
            'alamat' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/user/ldata')->withInput()-> with('validation', $validation);
        }

        $this->kelahiranModel->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/user/ldata');
    }

    public function saveadmin()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        // validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'nik' => [
                'rules' => 'required',
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ],
            'nama_ibu' => [
                'rules' => 'required',
            ],
            'nama_ayah' => [
                'rules' => 'required',
            ],
            'alamat' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambah/kelahiran')->withInput()-> with('validation', $validation);
        }

        $this->kelahiranModel->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/ldata');
    }

    public function delete($id)
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }


        $this->kelahiranModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/ldata');
    }

    public function edit($id)
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Edit Data Kelahiran',
            'validation' => \Config\Services::validation(),
            'kelahiran' => $this->kelahiranModel->getKelahiran($id)
        ];

        return view('admin/edit/kelahiran', $data);
    }

    public function update($id) {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        
        // validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'nik' => [
                'rules' => 'required',
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ],
            'nama_ibu' => [
                'rules' => 'required',
            ],
            'nama_ayah' => [
                'rules' => 'required',
            ],
            'alamat' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit/kelahiran' . $this->request->getVar('id'))->withInput()-> with('validation', $validation);
        }

        $this->kelahiranModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/admin/ldata');
    }

}
