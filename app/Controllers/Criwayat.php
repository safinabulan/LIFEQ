<?php 
namespace App\Controllers;
use App\Models\M_Riwayat;
class Criwayat extends BaseController
{
	protected $riwayat;
 
    function __construct()
    {
        $this->riwayat = new M_Riwayat();
    }
 
    public function index()
    {
        $data['riwayat'] = $this->riwayat->getAllByUser(session()->get('ID_USER'));
        return view('lifeq/Riwayat', $data);
    }

    public function saran_makanan($id_riwayat)
    {
        $data['saran_makanan'] = $this->riwayat->getSaranMakanan($id_riwayat);
        
        return view('lifeq/RSaranMakanan', $data);
    }
}