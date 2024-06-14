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
    public function dtUmumId2($id)
    {
        return $this->db->table('ev_ai_dt_umum_up')
            ->join('dd_hak_unit', 'ev_ai_dt_umum_up.id_es2=dd_hak_unit.parameter_unit')
            ->join('km_es2', 'dd_hak_unit.parameter_unit=km_es2.id')
            ->where('dd_hak_unit.id_user', $id)
            ->get()->getRowArray();
    }
    public function dtUmumId($id)
    {
        return $this->db->table('ev_ai_dt_umum_up')
            ->join('dd_hak_unit', 'ev_ai_dt_umum_up.id_es2=dd_hak_unit.parameter_unit')
            ->where('dd_hak_unit.id_user', $id)
            ->get()->getResultArray();
    }
    public function edit($data)
    {
        $this->db->table('ev_ai_dt_umum_up')
            ->where('id_es2', $data['id_es2'])
            ->update($data);
    }
}
