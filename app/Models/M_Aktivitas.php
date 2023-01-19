<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Aktivitas extends Model
{
    protected $table = "aktivitas";
    protected $primaryKey = "ID_AKTIVITAS";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['KATEGORI_KEGIATAN', 'NAMA_KEGIATAN', 'GBR_AKTIVITAS'];
}