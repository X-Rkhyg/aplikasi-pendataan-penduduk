<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{


    protected $userModel;
    protected $validation;
    protected $session;
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        $data = [
            'title' => 'Login - Aplikasi Pendataan Penduduk'
        ];
        //menampilkan halaman login
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar - Aplikasi Pendataan Penduduk'
        ];
        //menampilkan halaman register
        return view('auth/register', $data);
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/daftar');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $this->userModel->save([
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'role' => 2
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('username', $data['username'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password'] != md5($data['password']) . $user['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            } else {
                if ($user['role'] == 1) {
                    //jika benar, buat session
                    $this->session->set([
                        'username' => $user['username'],
                        'role' => $user['role'],
                        'isLogin' => true
                    ]);
                    //arahkan ke halaman admin
                    return redirect()->to('/admin');
                } else {
                    //jika benar, buat session
                    $this->session->set([
                        'username' => $user['username'],
                        'role' => $user['role'],
                        'isLogin' => true
                    ]);
                    //arahkan ke halaman user
                    return redirect()->to('/user');
                }
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/');
    }
}
