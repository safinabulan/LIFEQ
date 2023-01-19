<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Riwayat extends Model
{
    protected $table = "riwayat";
    protected $primaryKey = "ID_RIWAYAT";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['ID_USER', 'ID_AKTIVITAS', 'KARBOHIDRAT', 'LEMAK', 'PROTEIN', 'CREATED_AT'];

    public function getAllByUser($id_user)
    {
        $builder = $this->db->table('riwayat');
        $builder->select('*');
        $builder->join('aktivitas', 'riwayat.ID_AKTIVITAS = aktivitas.ID_AKTIVITAS');
        $builder->join('user', 'riwayat.ID_USER = user.ID_USER');
        $builder->where('riwayat.ID_USER', $id_user);
        $query = $builder->get()->getResult();
        return $query;
    }

    public function getLastID()
    {
        $builder = $this->db->table('riwayat');
        $builder->select('*');
        $builder->orderBy('ID_RIWAYAT', 'DESC');
        $builder->limit(1);
        $query = $builder->get()->getResult();
        return $query;
    }

    public function getSaranMakanan($id_riwayat)
    {
        $builder = $this->db->table('r_saran_makanan');
        $builder->select('*');
        $builder->join('makanan', 'r_saran_makanan.ID_MAKANAN= makanan.ID_MAKANAN');
        $builder->where('r_saran_makanan.ID_RIWAYAT', $id_riwayat);
        $query = $builder->get()->getResult();
        return $query;
    }
}