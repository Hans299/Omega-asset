<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Student extends Model
{
    protected $table      = 'omega_students';

    public function saveStudent($data)
    {
		$db = \Config\Database::connect();
		$builder = $db->table('omega_students');
		$query = $builder->insert($data);
        return $query;
    }
    
    public function saveRegisterStudent($data)
    {
		$db = \Config\Database::connect();
		$builder = $db->table('omega_register_students');
		$query = $builder->insert($data);
        return $query;
    }
}
