<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('navbar');
        echo view('sidebar');
        echo view('content');
        echo view('footer');
        echo view('js');
	}

	public function test()
	{
		$db = \Config\Database::connect();

		$query   		= $db->query('SELECT * FROM tblusers');
		$data['users'] 	= $query->getResultArray();

		echo view('head');
		echo view('navbar');
        echo view('sidebar');
        echo view('pages/test',$data);
        echo view('footer');
        echo view('js');
	}
}
