<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Destination extends Model
{
    protected $table      = 'md_destination';
    protected $primaryKey = 'md_destination_id';
    protected $allowedFields = [
        'name',
        'description',
        'why',
        'livingcost',
        'requirement',
        'md_image_id',
        'isactive'
    ];
    protected $useTimestamps = true;
    protected $returnType = 'App\Entities\Destination';

    public function detail($field, $where = null)
    {
        $db = \Config\Database::connect();
        if (!empty($where)) {
            return $db->query("SELECT
						mdp.md_destination_id,
						mdp.isactive,
						mdp.name,
						mdp.description,
						mdp.why,
						mdp.livingcost,
						mdp.requirement,
						mdi.name as image,
						mdi.image_url as md_image_id,
						mdp.md_image_id as image_id
						FROM $this->table mdp
						LEFT JOIN md_image mdi ON mdp.md_image_id = mdi.md_image_id
						WHERE $field = $where");
        } else {
            return $where;
        }
    }

    public function showAll($limit = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('md_destination');
        $builder->select('md_destination.name as partner_name, description, why, livingcost, requirement, image_url');
        $builder->join('md_image', 'md_image.md_image_id = md_destination.md_image_id');
    		$builder->where('md_destination.isactive', 'Y');
        $builder->limit($limit);
        $query = $builder->get()->getResult();
        return $query;
    }

    public function getDetail($country)
  	{
  		$db = \Config\Database::connect();
  		$builder = $db->table('md_destination');
  		$builder->select('md_destination.name, description, why, livingcost, requirement, image_url');
  		$builder->join('md_image', 'md_image.md_image_id = md_destination.md_image_id');
  		$builder->where('md_destination.name', $country);
  		$query = $builder->get()->getRow();
  		return $query;
  	}
}
