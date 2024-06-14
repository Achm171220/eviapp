<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MArsip;
use Irsyadulibad\DataTables\DataTables;
use App\Models\MUser;
use App\Models\MSubBidang;
use App\Models\MKlasifikasi;

class Arsip extends BaseController
{
	public function __construct()
	{
		helper('form', 'url', 'download');
	}
	public function json()
	{
		// $session = session();
		$id = session()->get('id');
		if ($id == null) {
			return view('auth/login');
		} else {
			return DataTables::use('ev_item_aktif')
				->select('ev_item_aktif.id as id, id_user, km_sub_bidang.nama_sub_bidang as sub_bidang, km_klasifikasi.kode_klasifikasi as kode_klas, judul_dokumen, tgl_dokumen')
				->join('km_sub_bidang', 'ev_item_aktif.id_sub_bidang = km_sub_bidang.id', 'INNER JOIN')
				->join('km_klasifikasi', 'ev_item_aktif.id_klasifikasi = km_klasifikasi.id', 'INNER JOIN')
				->where(['id_user' => $id])
				// ->join('km_sub_bidang', 'id', 'left')
				->make(true);
		}
	}
	public function index()
	{
		$id = session()->get('id');
		if ($id == null) {
			return view('auth/login');
		} else {
			$MUser 			= new MUser();
			$data = [
				'judul' 	=> 'Arsip',
				'subjudul' 	=> 'Arsip',
				'isi'   	=> 'arsip/index',
				'data_user'	=> $MUser->dataUser($id),
			];
			return view('layout/wrapper', $data);
		}
	}
	public function tambah()
	{
		$id = session()->get('id');
		$MSubBidang 	= new MSubBidang();
		$MKlasifikasi 	= new MKlasifikasi();
		$data = [
			'judul' 		=> 'Arsip',
			'subjudul' 		=> 'AddArsip',
			'isi'   		=> 'arsip/add',
			'SubBidang'		=> $MSubBidang->allData(),
			'idSubBidang'	=> $MSubBidang->idData($id),
			'klasifikasi'	=> $MKlasifikasi->allData()
		];
		return view('layout/wrapper', $data);
	}
	public function store()
	{
		$MArsip 	= new MArsip();
		$id = session()->get('id');
		$data = [
			'id_user'				=> $id,
			'id_sub_bidang'			=> $this->request->getPost('id_sub_bidang'),
			'id_klasifikasi'		=> $this->request->getPost('id_klasifikasi'),
			'no_dokumen'			=> $this->request->getPost('no_dokumen'),
			'judul_dokumen'			=> $this->request->getPost('judul_dokumen'),
			'tgl_dokumen'			=> $this->request->getPost('tgl_dokumen'),
			'tahun_cipta'			=> $this->request->getPost('tahun_cipta'),
			'jumlah'				=> $this->request->getPost('jumlah'),
			'tk_perkembangan'		=> $this->request->getPost('tk_perkembangan'),
			'lokasi_simpan'			=> $this->request->getPost('lokasi_simpan'),
			'media_simpan'			=> $this->request->getPost('media_simpan'),
			'no_box'				=> $this->request->getPost('no_box'),
			'status_arsip'			=> $this->request->getPost('status_arsip'),
			'jenis_arsip'			=> $this->request->getPost('jenis_arsip'),
			'nama_file'				=> $this->request->getPost('nama_file'),
			'nama_folder'			=> $this->request->getPost('nama_folder'),
			'nama_link'				=> $this->request->getPost('nama_link'),
			'status_siklus'			=> $this->request->getPost('status_siklus'),
			'tl_temuan'				=> $this->request->getPost('tl_temuan'),
			'dasar_catat'			=> $this->request->getPost('dasar_catat'),
			'pinjam'				=> $this->request->getPost('pinjam'),
		];
		$MArsip->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil disimpan!');
		return redirect()->to(base_url('arsip'));
	}
	public function edit($id)
	{
		//model initialize
		$MArsip 		= new MArsip();
		$MSubBidang 	= new MSubBidang();
		$MKlasifikasi 	= new MKlasifikasi();
		$data = array(
			'isi'       	=> 'arsip/edit',
			'dataId'    	=> $MArsip->find($id),
			'SubBidang'		=> $MSubBidang->allData(),
			'idSubBidang'	=> $MSubBidang->idData($id),
			'klasifikasi'	=> $MKlasifikasi->allData(),
			'IdData'		=> $MArsip->getIdData($id)
		);

		return view('layout/wrapper', $data);
	}
}
