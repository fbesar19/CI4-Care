<?php

namespace App\Models;

use CodeIgniter\Model;

class DanaModel extends Model
{
    protected $table = 'tbl_pengumpulan_dana';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tgl_donasi', 'nama_donatur', 'nominal', 'detail_donasi'];
}
