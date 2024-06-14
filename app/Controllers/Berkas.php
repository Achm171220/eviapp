<?php

namespace App\Controllers;

use App\Models\MBerkasAktif; // Ganti dengan nama model yang sesuai
use CodeIgniter\Controller;
use Irsyadulibad\DataTables\DataTables;


class Berkas extends Controller
{
    public function json()
    {
        // $session = session();
        $id = session()->get('id');
        return DataTables::use('ev_berkas_aktif')
            ->select('ev_berkas_aktif.id as id, id_user, km_sub_bidang.nama_sub_bidang as sub_bidang, km_klasifikasi.kode_klasifikasi as kode_klas, judul_dokumen, tgl_dokumen')
            ->join('km_sub_bidang', 'ev_berkas_aktif.id_sub_bidang = km_sub_bidang.id', 'INNER JOIN')
            ->join('km_klasifikasi', 'ev_berkas_aktif.id_klasifikasi = km_klasifikasi.id', 'INNER JOIN')
            ->where(['id_user' => $id])
            // ->join('km_sub_bidang', 'id', 'left')
            ->make(true);
    }
    public function index()
    {
        // Misalnya, Anda menggunakan session untuk menyimpan ID pengguna yang sedang login
        $userId = session()->get('id'); // Ganti 'user_id' dengan session key yang Anda gunakan

        // Panggil model untuk mengambil data yang diinput oleh pengguna yang sedang login
        $model = new MBerkasAktif(); // Ganti dengan nama model Anda
        $data = [
            'title'     => 'Berkas',
            'berkasID'  => $model->getDataByUserId($userId), // Buat method di model untuk mengambil data berdasarkan user ID
            'isi'       => 'berkas/index',
        ];
        // Kirim data ke view untuk ditampilkan
        return view('layout/wrapper', $data);
    }
}
