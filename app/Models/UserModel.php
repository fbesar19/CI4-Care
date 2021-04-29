<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'level'];

    public function cek_login($username, $password)
    {
        return $this->db->table('tbl_user')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
