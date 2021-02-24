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
}
