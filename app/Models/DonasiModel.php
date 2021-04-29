<?php

namespace App\Models;

use CodeIgniter\Model;

class DonasiModel extends Model
{
    protected $table = 'tbl_donasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'batas_waktu', 'target_biaya', 'gambar'];

    public function hitungDonasi()
    {
        $dbResult = $this->db->query("SELECT COUNT(id) FROM tbl_donasi");
        return $dbResult->getResult();
    }
}
