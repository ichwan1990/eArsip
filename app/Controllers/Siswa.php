<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Siswa;

class Siswa extends Controller
{
    public function __construct()
    {
        //agar tidak memanggil model setiap fungsi langsung di panggil pertama
        $this->model = new M_Siswa();
    }
    public function index()
    {

        $data = [
            'judul' => 'Data Siswa',
            'siswa' => $this->model->getAllData()
        ];

        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('siswa/index', $data);
        echo view('template/v_footer');
    }

    public function tambah()
    {
        $data = [
            'nisn' => $this->request->getPost('nisn'),
            'nama' => $this->request->getPost('nama')
        ];

        //insert data
        $success = $this->model->tambah($data);

        if ($success) {
            return redirect()->to(base_url('siswa'));
        }
    }
}
