<?php
namespace App\Models;
use CodeIgniter\Model;
class M_user extends Model
{
    protected $table = "user";
    protected $primaryKey = "ID_USER";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['EMAIL', 'NAMA_LENGKAP', 'USERNAME', 'PASSWORD', 'NO_TELP', 'USIA', 'GENDER', 'TINGGI_BADAN', 'BERAT_BADAN', 'FOTO'];
}