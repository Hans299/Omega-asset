<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Registrar extends Model
{
    protected $table      = 'omega_events_register';

	public function getRegistrar($msisdn)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('omega_events_register');
		$builder->select('msisdn');
		$builder->where('msisdn', $msisdn);
		$query = $builder->get()->getRow();
		return $query;
	}

    public function saveRegistrar($data)
    {
		$db = \Config\Database::connect();
		$builder = $db->table('omega_events_register');
		$query = $builder->insert($data);
        return $query;
    }
}
