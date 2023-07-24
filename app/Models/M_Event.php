<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Event extends Model
{
    protected $table      = 'omega_events';

	public function getEvent($link)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('omega_events');
		$builder->select('id, event, date, start_time, end_time, event_place, event_type');
		$builder->where('url_link', $link);
		$query = $builder->get()->getRow();
		return $query;
	}
}
