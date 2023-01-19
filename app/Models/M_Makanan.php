<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Makanan extends Model
{
    protected $table = "makanan";
    protected $primaryKey = "ID_MAKANAN ";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['KATEGORI_MAKANAN', 'NAMA_MAKANAN', 'SATUAN_GARAM', 'JUMLAH_KALORI'];

    public function getMakananByKalori($kalori)
    {
        $builder = $this->db->table('makanan');
        // $builder->select("*");
        $builder->where('JUMLAH_KALORI >=', $kalori);
        $query = $builder->get();

        return $query->getResult();
    }

    public function insertSaranMakanan($data)
    {
        $builder = $this->db->table('r_saran_makanan');
        $builder->insert($data);
    }
}