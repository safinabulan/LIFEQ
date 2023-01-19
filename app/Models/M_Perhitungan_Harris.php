<?php
namespace App\Models;

use CodeIgniter\Model;

class M_Perhitungan_Harris extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function hitung($Gender,$TB,$BB,$U){
		switch ($Gender) {
			case 'Laki-laki':
				return (66.42 + (13.75*$BB) + (5*$TB) - (6.78*$U))*10;
				break;
			case 'Perempuan':
				return (655.1 + (9.65*$BB) + (1.85*$TB) - (4.68*$U))*10;
				break;
			default:
				return '';
				break;
		}
	}
	public function AKE($hasilKalSem,$Nkategori){
		switch ($Nkategori) {
			case '[{"KATEGORI_KEGIATAN":"sangat ringan"}]':
				return (10/100) * $hasilKalSem;
				break;
			case '[{"KATEGORI_KEGIATAN":"ringan"}]':
				return (20/100) * $hasilKalSem;
				break;
			case '[{"KATEGORI_KEGIATAN":"sedang"}]':
				return (30/100) * $hasilKalSem;
				break;
			case '[{"KATEGORI_KEGIATAN":"berat"}]':
				return (40/100) * $hasilKalSem;
				break;
			default:
				return '';
				break;
		}
	}
	public function AKEKarbo($hasilAKE){
		return ((65/100) * $hasilAKE)/4;
	}

	public function AKELemak($hasilAKE){
		return ((22/100) * $hasilAKE)/9;
	}

	public function AKEProte($hasilAKE){
		return ((13/100) * $hasilAKE)/4;
	}

	public function SKarbo($hasilGIKarbo){
		return ((80/100) * $hasilGIKarbo)/175;
	}

	public function SLemak($hasilGILemak){
		return $hasilGILemak/6;
	}

	public function SProteH($hasilGIProte){
		return ((1/3) * $hasilGIProte)/7;
	}
	public function SProteN($hasilGIProte){
		return ((2/3) * $hasilGIProte)/5;
	}
	
	public function Persen($Gender, $hasilGIKarbo, $hasilGILemak, $hasilGIProte){
		switch ($Gender) {
			case 'Laki-laki':
				return ((($hasilGIKarbo*4)/2500) * 100) + ((($hasilGILemak*9)/2500) * 100) + ((($hasilGIProte*4)/2500) * 100);
				break;
			case 'Perempuan':
				return ((($hasilGIKarbo*4)/2000) * 100) + ((($hasilGILemak*9)/2500) * 100) + ((($hasilGIProte*4)/2500) * 100);
				break;
			default:
				return '';
				break;
		}
	}

	public function kal($Gender){
		switch ($Gender) {
			case 'Laki-laki':
				return 2500;
				break;
			case 'Perempuan':
				return 2000;
				break;
			default:
				return '';
				break;
		}
	}

	public function Perkal($Gender, $Persen){
		switch ($Gender) {
			case 'Laki-laki':
				return ($Persen/100)*2500;
				break;
			case 'Perempuan':
				return ($Persen/100)*2000;
				break;
			default:
				return '';
				break;
		}
	}

}