<?php

namespace App\Models;

use CodeIgniter\Model;

class ai_MDataUmum extends Model
{
    public function dataumum()
    {
        return $this->db->table('ev_ai_dt_umum_up')
            ->get()->getResultArray();
    }
    public function dtUmumId($id)
    {
        return $this->db->table('ev_ai_dt_umum_up')
            ->join('dd_hak_unit', 'ev_ai_dt_umum_up.id_es2=dd_hak_unit.parameter_unit')
            ->where('dd_hak_unit.id_user', $id)
            ->get()->getResultArray();
    }
}
