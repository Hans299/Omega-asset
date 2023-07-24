<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Blog extends Model
{
	protected $table      = 'wp_posts';

	public function showLatestPost()
	{
		$db = \Config\Database::connect('wordpress');
		// $sql = $db->query ("
		// 	SELECT parent.post_title, parent.id, parent.post_date, parent.post_content, parent.post_name, inherit.guid
		// 	FROM wp_posts as parent
		// 	LEFT JOIN wp_posts as inherit ON parent.id = inherit.post_parent
		// 	WHERE parent.post_type = 'post' AND parent.post_status = 'publish' AND inherit.guid LIKE '%wp-content%'
		// 	GROUP BY parent.id
		// 	ORDER BY parent.post_date DESC
		// 	LIMIT 3
        // ");
		// $query = $sql->getResult();
		// return $query;

		$builder = $db->table('wp_posts');
		$builder->select('wp_posts.post_date, wp_posts.post_title, wp_posts.post_content, wp_posts.post_name, inherit.guid');
		$builder->join('wp_posts as inherit', 'wp_posts.id = inherit.post_parent','inner');
		$builder->where('wp_posts.post_type','post');
		$builder->where('wp_posts.post_status','publish');
		$builder->where('inherit.guid LIKE "%wp-content%"');
		$builder->groupby('wp_posts.id');
		$builder->orderby('wp_posts.post_date', 'desc');
        $builder->limit(3);
		$query = $builder->get()->getResult();
		return $query;
	}
}
