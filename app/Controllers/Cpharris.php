<?php 
namespace App\Controllers;
use App\Models\M_user;
use App\Models\M_Perhitungan_Harris;
use App\Models\M_Aktivitas;
use App\Models\M_Riwayat;
use App\Models\M_Status_Badan;
class Cpharris extends BaseController
{
    protected $user;
    protected $Perhitungan_Harris;
    protected $akti;
    protected $SB;
 
    function __construct()
    {
        $this->user = new M_user();
        $this->hitungharris = new M_Perhitungan_Harris();
        $this->akti = new M_Aktivitas();
        $this->SB = new M_Status_Badan();
        $this->riwayat = new M_Riwayat();
    }
    function AKE()
    {
        $this->hitungharris =new M_Perhitungan_Harris();
        $data['Gender'] = session()->get('gender');
        $data['TB'] = session()->get('TINGGI_BADAN');
        $data['BB'] = session()->get('BERAT_BADAN');
        $data['U'] = session()->get('USIA');
        $data['hasilKalSem'] = (float) $this->hitungharris->hitung($data['Gender'],$data['TB'],$data['BB'],$data['U']);
        
        $akti= new M_Aktivitas();
        $pilihan = $this->request->getVar('pilkeg');
        $builder = $akti ;
        $builder->select('KATEGORI_KEGIATAN');       // names of your columns
        $builder->where('NAMA_KEGIATAN', $pilihan);                // where clause
        $query = $builder->get()->getResult();
        $data['Nkategori'] =  json_encode($query);
        
        $data['hasilAKE'] = (float) $this->hitungharris->AKE($data['hasilKalSem'], $data['Nkategori']);
        $data['hasilGIKarbo'] = (float) $this->hitungharris->AKEKarbo($data['hasilAKE']);
        $data['hasilGILemak'] = (float) $this->hitungharris->AKELemak($data['hasilAKE']);
        $data['hasilGIProte'] = (float) $this->hitungharris->AKEProte($data['hasilAKE']);

        //$data['hasilSKarbo'] = (float) $this->hitungharris->SKarbo($data['hasilGIKarbo']);
        //$data['hasilSLemak'] = (float) $this->hitungharris->SLemak($data['hasilGILemak']);
        //$data['hasilSProteH'] = (float) $this->hitungharris->SProteH($data['hasilGIProte']);
        //$data['hasilSProteN'] = (float) $this->hitungharris->SProteN($data['hasilGIProte']);
        
        $SB = new M_Status_Badan();
        $dataSB['DSB'] = $SB->where([
            'ID_USER' => session()->get('ID_USER')
        ])->first();
        if($dataSB['DSB']== NULL){
            $SB->INSERT([
                'ID_USER' => session()->get('ID_USER'),
                'KARBOHIDRAT'=> $data['hasilGIKarbo'],
                'LEMAK' => $data['hasilGILemak'],
                'PROTEIN' => $data['hasilGIProte']
            ]);
        } 
        $data['id_status'] = $dataSB['DSB']->ID_STATUS;
        
        
        if ($dataSB['DSB']!==NULL) {
            $IDSTATUS = $dataSB['DSB']->ID_STATUS;
            $SB->UPDATE($IDSTATUS, [
                'KARBOHIDRAT'=> $data['hasilGIKarbo'],
                'LEMAK' => $data['hasilGILemak'],
                'PROTEIN' => $data['hasilGIProte']
            ]);
            //$data['HK'] = $dataSB['DSB']->KARBOHIDRAT;
            //$data['HL'] = $dataSB['DSB']->LEMAK;
            //$data['HP'] = $dataSB['DSB']->PROTEIN;
        }
        $data['Persen']  = (float) $this->hitungharris->Persen($data['Gender'], $data['hasilGIKarbo'], $data['hasilGILemak'], $data['hasilGIProte']);
        $data['Kalori'] = (float) $this->hitungharris->kal($data['Gender']);
        $data['PersenKalori'] = (float) $this->hitungharris->Perkal($data['Gender'], $data['Persen']);

        // ambil id_aktivitas
        $builder->select('ID_AKTIVITAS');
        $builder->where('NAMA_KEGIATAN', $pilihan);
        $query = $builder->get()->getResult();
        $id_aktivitas = $query[0]->ID_AKTIVITAS; //array ambil data yg pertama
        // ambil id_user
        $id_user = session()->get('ID_USER');
        // data riwayat
        $dataRiwayat = [
            'ID_USER'       => $id_user,
            'ID_AKTIVITAS'  => $id_aktivitas,
            'KARBOHIDRAT'   => $data['hasilGIKarbo'],
            'LEMAK'         => $data['hasilGILemak'],
            'PROTEIN'       => $data['hasilGIProte'],
            'CREATED_AT'    => date('Y-m-d H:i:s'),
        ];
        // insert riwayat
        $this->riwayat->INSERT($dataRiwayat);
        
        // ambil id_riwayat terbaru
        $data['id_riwayat'] = $this->riwayat->getLastID();
        // var_dump($data['id_riwayat']); die;
        return view('lifeq/Harris', $data);
    }
}