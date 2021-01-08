<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Siswa extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('siswa')->get();
    }

    public function tambah($data)
    {
        return $this->db->table('siswa')->insert($data);
    }
}
