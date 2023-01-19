<?php 
namespace App\Controllers;
use App\Models\M_user;
use App\Models\M_Perhitungan_Harris;
use App\Models\M_Aktivitas;
use App\Models\M_Status_Badan;
use App\Models\M_makanan;
class Csaran extends BaseController
{
    protected $user;
    protected $Perhitungan_Harris;
    protected $akti;
    protected $SB;
	protected $saran_m;
 
    function __construct()
    {
        $this->user = new M_user();
        $this->hitungharris = new M_Perhitungan_Harris();
        $this->akti = new M_Aktivitas();
        $this->SB = new M_Status_Badan();
        $this->saran_m = new M_Makanan();
    }
 
    public function SaranM()
    {
        //baca data dari form cpharis
        $id_status = $_POST['id_status'];
        $id_riwayat = $_POST['id_riwayat'];

        // hitung total kalori yang kurang
        $persen_kalori = $_POST['persen_kalori'];
        $kalori = $_POST['kalori'];
        if($kalori > $persen_kalori){
            $data['kalori_kurang'] = $kalori - $persen_kalori;
        }else{
            $data['kalori_kurang'] = 2000;
        }

        // ambil daftar makanan dengan kalori >= $data['kalori_kurang']
        $data['saran_makanan'] = $this->saran_m->getMakananByKalori($data['kalori_kurang']);

        // masukkan data ke tabel riwayat saran makanan
        foreach ($data['saran_makanan'] as $sm) {
            // insert ke tabel riwayat saran makanan
            $dataSRM = [
                'ID_RIWAYAT' => $id_riwayat,
                'ID_MAKANAN' => $sm->ID_MAKANAN,
            ];
            $this->saran_m->insertSaranMakanan($dataSRM);
        }

        
        $data['status_badan'] = $this->SB->getDataIDStatus($id_status);
        $GKarbo = $data['status_badan'][0]->KARBOHIDRAT;
        $data['karbohidrat'] = $this->SB->KarboId($GKarbo);
        $GLemak = $data['status_badan'][0]->LEMAK;
        $data['lemak'] = $this->SB->LemakId($GLemak);
        $GProteH = $data['status_badan'][0]->PROTEIN;
        $data['proteinh'] = $this->SB->ProteHId($GProteH);
        $GProteN = $data['status_badan'][0]->PROTEIN;
        $data['proteinn'] = $this->SB->ProteNId($GProteN);
        $data['saran_m'] = $this->saran_m->findAll();

        return view('lifeq/Saran', $data);
    }

    // function hitungSM()
    // {
    //     $this->SB =new M_Status_Badan();
    //     $data['GIK'] = session()->get('hasilSKarbo');
    //     $data['GIL'] = session()->get('LEMAK');
    //     $data['GIPH'] = session()->get('PROTEIN_HEWANI');
    //     $data['GIPN'] = session()->get('PROTEIN_NABATI');

    //     $data['GIKARBO'] = (float) $this->saran_m->hitung($data['Gender'],$data['TB'],$data['BB'],$data['U']);
    // }

    // function tampilKarbo(){
    //     $id_user = session()->get('ID_USER');
    //     $karbo = $this->SB->findAll();
    //     dd($karbo->get_object_vars());

    //     $data['karbo'] = $this->SB->findAll();
    //     dd($data['karbo']);

    // }

    function saranmakan()
    {
        $SB = new M_Status_Badan();
        $saran_karbo = $this->request->getVar('KARBOHIDRAT'); //ambil dr form
        $builder = $SB ;
        $builder->select('KARBOHIDRAT');       // names of your columns
        $builder->where('ID_USER', $saran_karbo);                // where clause
        $query = $builder->get()->getResult();

        $data['hasilSKarbo'] = (float) $this->hitungharris->SKarbo($data['hasilGIKarbo']);
        $data['hasilSLemak'] = (float) $this->hitungharris->SLemak($data['hasilGILemak']);
        $data['hasilSProteH'] = (float) $this->hitungharris->SProteH($data['hasilGIProte']);
        $data['hasilSProteN'] = (float) $this->hitungharris->SProteN($data['hasilGIProte']);
    }
  
}