<?php

namespace App\Controllers;

use App\Models\DonasiModel;
use App\Models\DanaModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->donasiModel = new DonasiModel();
		$this->danaModel = new DanaModel();
	}

	public function index()
	{
		$donasi = $this->donasiModel->findAll(4);
		$dana = $this->danaModel->findAll();
		$data = [
			'title' => 'List Donasi',
			'donasi' => $donasi,
			'dana' => $dana
		];
		return view('home', $data);
	}

	public function detail_donasi($id)
	{
		$data['detail'] = $this->donasiModel->where('id', $id)->findAll();
		$data['detail_dana'] = $this->danaModel->where('detail_donasi', $id)->findAll();
		$data['donatur'] = $this->danaModel->where('detail_donasi', $id)->findAll(4);
		$data['donasi'] = $this->donasiModel->findAll(4);
		$data['dana'] = $this->danaModel->findAll();
		$data['id'] = $id;
		return view('detail_donasi', $data);
	}

	public function berdonasi($id)
	{
		$tgl = date('Y-m-d');
		$this->danaModel->save([
			'tgl_donasi' => $tgl,
			'nama_donatur' => $this->request->getVar('nama_donatur'),
			'nominal' => $this->request->getVar('nominal'),
			'detail_donasi' => $id
		]);
		return redirect()->to(base_url('/home/detail_donasi/' . $id));
	}
}
