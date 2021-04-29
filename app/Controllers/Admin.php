<?php

namespace App\Controllers;

use App\Models\DonasiModel;
use App\Models\DanaModel;

class Admin extends BaseController
{
	public function __construct()
	{
		$this->donasiModel = new DonasiModel();
		$this->danaModel = new DanaModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('admin/home', $data);
	}

	public function list_donasi()
	{
		$donasi = $this->donasiModel->findAll();
		$dana = $this->danaModel->findAll();
		$data = [
			'title' => 'Lisa Donasi',
			'donasi' => $donasi,
			'dana' => $dana
		];
		return view('admin/list_donasi', $data);
	}

	public function save_donasi()
	{
		$gambar = $this->request->getFile('gambar');
		$gambar->move('foto_donasi');
		$filegambar = $gambar->getName();

		$this->donasiModel->save([
			'judul' => $this->request->getVar('judul'),
			'batas_waktu' => $this->request->getVar('batas_waktu'),
			'target_biaya' => $this->request->getVar('target_biaya'),
			'gambar' => $filegambar
		]);

		session()->setFlashdata('berhasil', 'Berhasil Menambahkan Artikel');
		return redirect()->to(base_url('admin/list_donasi'));
	}

	public function delete_donasi($id)
	{
		$this->donasiModel->delete($id);
		return redirect()->to(base_url('admin/list_donasi'));
	}

	public function list_pengumpulan_dana()
	{
		$dana = $this->danaModel->findAll();
		$data = [
			'title' => 'List Penggalangan Dana',
			'dana' => $dana
		];
		return view('admin/list_pengumpulan_dana', $data);
	}

	public function delete_pengumpulan_dana($id)
	{
		$this->danaModel->delete($id);
		return redirect()->to(base_url('admin/list_pengumpulan_dana'));
	}

	public function tambah_artikel()
	{
		$data = [
			'title' => 'Tambah Artikel'
		];
		return view('admin/tambah_artikel', $data);
	}

	public function list_artikel()
	{
		$data = [
			'title' => 'List Artikel'
		];
		return view('admin/list_artikel', $data);
	}

	public function donatur()
	{
		$data = [
			'title' => 'Bencana Banjir Dayeuh Kolot'
		];
		return view('admin/list_donatur', $data);
	}
}
