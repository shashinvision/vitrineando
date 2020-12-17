<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('layout/mainContent');
		echo view('layout/footer');
	}

	public function busqueda(){
		echo view('layout/header');
		echo view('layout/mainSearch');
		echo view('layout/footer');
	}

	public function detail(){
		echo view('layout/header');
		echo view('layout/mainDetail');
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}