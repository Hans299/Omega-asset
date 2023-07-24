<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Partner extends Model
{
    protected $table      = 'omega_statuses_sources';

	public function getPartner($link)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('omega_statuses_sources');
		$builder->select('id, name, category, logo_path, bg_path');
		$builder->where('name', $link);
		$query = $builder->get()->getRow();
		return $query;
	}
}
