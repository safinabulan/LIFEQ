<?php
namespace App\Models;
use CodeIgniter\Model;
class M_Status_Badan extends Model
{
    protected $table = "status_badan";
    protected $primaryKey = "ID_STATUS";
    protected $returnType = "object";
    protected $allowedFields = ['ID_USER', 'ID_PERHITUNGANGIZI', 'ID_PERHITUNGAN', 'KARBOHIDRAT', 'LEMAK', 'PROTEIN', 'PROTEIN_HEWANI', 'PROTEIN_NABATI'];
     
    function getAll(){
        $builder = $this->db->table('status_badan');
        $builder->join('user', 'user.ID_USER = status_badan.ID_USER');
        $query = $builder->get();

        return $query->getResult();
    }

    public function getDataIDStatus($id_status)
    {
        $builder = $this->db->table('status_badan');
        // $builder->select("*");
        $builder->where(['ID_STATUS' => $id_status]);
        $query = $builder->get();

        return $query->getResult();
        // return 2;
    }
    
    public function KarboId ($GIKarbo){
		return ((80/100) * $GIKarbo) / 175;
	}

	public function LemakId($GILemak){
		return $GILemak/6;
	}

	public function ProteHId($GIProte){
		return ((1/3) * $GIProte)/7;
	}
    
	public function ProteNId($GIProte){
		return ((2/3) * $GIProte)/5;
	}
}