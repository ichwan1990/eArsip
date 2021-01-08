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
        if (isset($_POST['tambah'])) {
            $val = $this->validate([
                'nisn' => [
                    'label' => 'Nomor Induk Siswa Nasional',
                    'rules' => 'required|numeric|max_length[10]|is_unique[siswa.nisn]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                        'numeric' => '{field} hanya boleh angka.',
                        'max_length' => '{field} maksimal 10 karakter.',
                        'is_unique' => '{field} tidak boleh sama.'
                    ]
                ],
                'nama' => [
                    'label' => 'Nama Siswa',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.'
                    ]
                ]
            ]);

            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Siswa',
                    'siswa' => $this->model->getAllData()
                ];

                echo view('template/v_header', $data);
                echo view('template/v_sidebar');
                echo view('template/v_topbar');
                echo view('siswa/index', $data);
                echo view('template/v_footer');
            } else {
                $data = [
                    'nisn' => $this->request->getPost('nisn'),
                    'nama' => $this->request->getPost('nama')
                ];

                //insert data
                $success = $this->model->tambah($data);

                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url('/siswa'));
                }
            }
        } else {
            return redirect()->to(base_url('/siswa'));
        }
    }

    public function hapus()
    {
        $id = $this->request->getPost('idSiswa');
        $success = $this->model->hapus($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus!');
            return redirect()->to(base_url('/siswa'));
        }
    }
}
