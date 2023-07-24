<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Team extends Model
{
	protected $table      = 'md_team';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'url_name',
        'fullname',
        'role',
        'phonenumber',
        'description',
        'path_picture'
    ];


	public function showChief()
	{
		$db = \Config\Database::connect('cms');
		$builder = $db->table('md_team');
		$builder->select('id, url_name, fullname, role, phonenumber, description, path_picture');
		$builder->where('id', 1);
		$builder->orWhere('id', 2);
		$builder->orderby('id', 'asc');
		$query = $builder->get()->getResult();
		return $query;
	}

	public function showTeam()
	{
		$db = \Config\Database::connect('cms');
		$builder = $db->table('md_team');
		$builder->select('id, url_name, fullname, role, phonenumber, path_picture');
		$builder->where('id !=', '1');
		$builder->where('id !=', '2');
		$builder->where('is_active', '1');
		$builder->orderby('id', 'asc');
		$query = $builder->get()->getResult();
		return $query;
	}

	public function getTeam($link)
	{
		$db = \Config\Database::connect('cms');
		$builder = $db->table('md_team');
		$builder->select('url_name, fullname, role, phonenumber, path_picture');
		$builder->where('url_name', $link);
		$query = $builder->get()->getRow();
		return $query;
	}
}
