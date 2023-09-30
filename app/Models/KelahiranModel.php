<?php

namespace App\Models;

use CodeIgniter\Model;

class KelahiranModel extends Model
{
    protected $table      = 'kelahiran';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nik', 'tanggal_lahir', 'jenis_kelamin', 'nama_ibu', 'nama_ayah', 'alamat'];

    public function getKelahiran($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}