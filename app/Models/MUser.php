<?php

namespace App\Models;

use CodeIgniter\Model;

class MUser extends Model
{
	/**
	 * table name
	 */
	protected $table = "users";

	/**
	 * allowed Field
	 */
	protected $allowedFields = [
		'id',
		'name',
		'email',
		'aktif'
	];
	public function dataUser($id)
	{
		return $this->db->table('users')
			->join('dd_hak_unit', 'users.id = dd_hak_unit.id_user', 'left')
			->join('km_es2', 'dd_hak_unit.parameter_unit = km_es2.id', 'left')
			->where('users.id', $id)
			->get()->getRowArray();
	}
}
