<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Visit extends Model
{
    protected $table      = 'sys_visit';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'ipaddress',
        'browser',
        'version',
        'platform',
        'mobile',
        'time'
    ];


    public function count($ipaddress)
    {
        $db = \Config\Database::connect('cms');
        $agent = \Config\Services::request()->getUserAgent();

        $builder = $db->table('sys_visit');
        $builder->where(['ipaddress' => $ipaddress]);
        $builder->where('time BETWEEN DATE_SUB(NOW(), INTERVAL 2 HOUR) AND NOW()');
        $query = $builder->countAllResults();

        if (empty($query)) {
            $data = [
                'ipaddress' => $ipaddress,
                'browser'   => $agent->getBrowser(),
                'version'   => $agent->getVersion(),
                'platform'  => $agent->getPlatform(),
                'mobile'    => $agent->getMobile(),
                'time'      => date('Y-m-j H:i:s')
            ];
            $builder->insert($data);
        }
    }
}
