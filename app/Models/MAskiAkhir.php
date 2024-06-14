<?php

namespace App\Models;

use CodeIgniter\Model;

class MAskiAkhir extends Model
{
    protected $table = 'view_sum_ai_auditee';
    protected $primaryKey = 'id';

    public function nilai_akhir($id)
    {
        $builder = $this->db->table($this->table);
        $builder->join('dd_hak_unit', 'view_sum_ai_auditee.id_es2=dd_hak_unit.parameter_unit', 'inner');
        $builder->join('users', 'dd_hak_unit.id_user=users.id', 'inner');
        $builder->where('users.id', $id);

        $query = $builder->get();
        return $query->getRowArray();
    }
}
