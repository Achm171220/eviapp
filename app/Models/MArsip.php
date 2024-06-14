<?php

namespace App\Models;

use CodeIgniter\Model;

class MArsip extends Model
{
    /**
     * table name
     */
    protected $table = "ev_item_aktif";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id',
        'id_user',
        'id_sub_bidang',
        'id_berkas',
        'id_klasifikasi',
        'no_dokumen',
        'judul_dokumen',
        'tgl_dokumen',
        'tahun_cipta',
        'jumlah',
        'tk_perkembangan',
        'lokasi_simpan',
        'media_simpan',
        'no_box',
        'status_arsip',
        'jenis_arsip',
        'dasar_catat',
    ];
    public function count()
    {
        return $this->db->table('ev_item_aktif')
            ->countAllResults();
    }
    public function countId($id)
    {
        return $this->db->table('ev_item_aktif')
            ->where('id_user', $id)
            ->countAllResults();
    }
    public function allData()
    {
        return $this->db->table('ev_item_aktif')
            ->join('km_klasifikasi', 'ev_item_aktif.id_klasifikasi=km_klasifikasi.id')
            ->get()->getResultArray();
    }
    public function getIdData($id)
    {
        return $this->db->table('ev_item_aktif')
            ->join('km_klasifikasi', 'ev_item_aktif.id_klasifikasi=km_klasifikasi.id')
            ->join('km_sub_bidang', 'ev_item_aktif.id_sub_bidang=km_sub_bidang.id')
            ->where('ev_item_aktif.id', $id)
            ->get()->getRowArray();
    }
}
