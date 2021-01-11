<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		//agar tidak memanggil model setiap fungsi langsung di panggil pertama
		helper('sn');
	}
	public function index()
	{
		$data = [
			'judul' => 'Homepage'
		];

		tampilan('home/index', $data);
	}

	//--------------------------------------------------------------------

}
