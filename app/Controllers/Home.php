<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Homepage'
		];
		echo view('template/v_header', $data);
		echo view('template/v_sidebar');
		echo view('template/v_topbar');
		echo view('home/index');
		echo view('template/v_footer');
	}

	//--------------------------------------------------------------------

}
