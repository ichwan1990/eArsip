<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SuratMasuk extends Controller
{
    public function __construct()
    {
        helper('sn');
    }

    public function index()
    {
        $data = [
            'judul' => 'Surat Masuk',
        ];

        // load view
        tampilan('surat-masuk/index', $data);
    }
}
