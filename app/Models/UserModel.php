<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'omega_students';
    protected $allowedFields = ['id', 'msisdn', 'first_name', 'last_name', 'email', 'password', 'birth_date', 'birth_place', 'address', 'city', 'postal_code', 'parents', 'status', 'flag', 'school_id', 'created', 'updated', 'handled_by', 'admission_by', 'future', 'date', 'source', 'ssa_no', 'university_id'];
}
