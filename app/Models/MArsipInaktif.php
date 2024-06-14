<?php

namespace App\Models;

use CodeIgniter\Model;

class MArsipInaktif extends Model
{
    /**
     * table name
     */
    protected $table = "ev_item_inaktif";

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
        return $this->db->table('ev_item_inaktif')
            ->countAllResults();
    }
    public function countId($id)
    {
        return $this->db->table('ev_item_inaktif')
            ->where('id_user', $id)
            ->countAllResults();
    }
}
