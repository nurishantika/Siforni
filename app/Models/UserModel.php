<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['id_alumni', 'id_nilai', 'email', 'password'];

    public function getUser($id_user = null)
    {
        $this->join('alumni', 'alumni.id = user.id_alumni', 'LEFT');
        if ($id_user != null) {
            $this->where(['id_user' => $id_user]);
        }
        $result = $this->findAll();
        return $result;
    }
}
