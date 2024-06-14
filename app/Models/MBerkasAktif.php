<?php

namespace App\Models;

use CodeIgniter\Model;

class MBerkasAktif extends Model
{
    protected $table = 'ev_berkas_aktif'; // Ganti dengan nama tabel Anda

    public function getDataByUserId($userId)
    {
        // Query untuk mengambil data berdasarkan user ID
        return $this->where('id_user', $userId)->findAll();
    }
}
