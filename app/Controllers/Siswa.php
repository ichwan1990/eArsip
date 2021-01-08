<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Siswa;

class Siswa extends Controller
{
    public function index()
    {
        $model = new M_Siswa();

        $data = [
            'judul' => 'Data Siswa',
            'siswa' => $model->getAllData()
        ];

        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('siswa/index', $data);
        echo view('template/v_footer');
    }
}
