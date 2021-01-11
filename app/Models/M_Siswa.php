<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Siswa extends Model
{
    protected $table = 'siswa'; // agar tidak bisa di akses oleh class yang bukan turunan siswa

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table); //untuk mempersingkat koding
    }

    public function getAllData($id = null)
    {
        //return $this->db->table('siswa')->get();
        if ($id == null) {
            return $this->builder->get();
        } else {
            $this->builder->where('id', $id);
            return $this->builder->get()->getRowArray();
        }
    }

    public function tambah($data)
    {
        //return $this->db->table('siswa')->insert($data);
        return $this->builder->insert($data);
    }

    public function hapus($id)
    {
        //return $this->db->table('siswa')->delete(['id' => $id]);
        return $this->builder->delete(['id' => $id]);
    }

    public function ubah($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }
}
