<?php 
namespace App\Controllers;
use App\Models\M_user;
use App\Models\M_Perhitungan_Harris;
class Cuser extends BaseController
{
	protected $user;
    protected $akti;
    protected $Perhitungan_Harris;
 
    function __construct()
    {
        $this->user = new M_user();
        $this->hitungharris = new M_Perhitungan_Harris();
    }
 
    public function index()
    {
        $data['user'] = $this->user->findAll();
        return view('lifeq/Login', $data);
    }
    public function home()
    {
        return view('lifeq/Vhome');
    }
    public function store()
    {
        $this->user->insert([
            'EMAIL' => $this->request->getVar('email'),
            'USERNAME' => $this->request->getVar('username'),
            'PASSWORD' => $this->request->getVar('password')
        ]);

        return redirect()->to('/cuser');
    }

    public function prosesLogin()
    {
        $user = new M_user();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $user->where([
            'USERNAME' => $username
        ])->first();
        if ($dataUser) {
            if ($password == $dataUser->PASSWORD){
                //print_r($dataUser);
                session()->set([
                    'ID_USER' => $dataUser->ID_USER,
                    'PASSWORD' => $dataUser->PASSWORD,
                    'NAMA_LENGKAP' => $dataUser->NAMA_LENGKAP,
                    'EMAIL' => $dataUser->EMAIL,
                    'username'  => $dataUser->USERNAME,
                    'TINGGI_BADAN'=> $dataUser->TINGGI_BADAN,
                    'BERAT_BADAN' => $dataUser->BERAT_BADAN,
                    'USIA' => $dataUser->USIA,
                    'gender' => $dataUser->GENDER,
                    'FOTO' => $dataUser->FOTO,
                    'logged_in' => TRUE
                ]);
                // var_dump(session()->get('NAMA_LENGKAP'));
                // die;
                return view('lifeq/Vhome');
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $dataUser = $this->user->find($id);
        if (empty($dataUser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $data['user'] = $dataUser;
        return view('lifeq/editprofile', $data);
    }

    public function update($id)
    {
        $user = new M_user();
        $upload = $this->request->getFile('profile');
        $newName = $upload->getRandomName();
        $upload->move(WRITEPATH . '../public/profile', $newName);
        $this->user->update($id, [
            'NAMA_LENGKAP' => $this->request->getVar('namaL'),
            'EMAIL' => $this->request->getVar('email'),
            'USERNAME' => $this->request->getVar('username'),
            'USIA' => $this->request->getVar('usia'),
            'GENDER' => $this->request->getVar('gender'),
            'TINGGI_BADAN' => $this->request->getVar('tinggiB'),
            'BERAT_BADAN' => $this->request->getVar('beratB'),
            'FOTO' => $newName
        ]);
        $dataUser = $user->where([
            'ID_USER' => session()->get('ID_USER')
        ])->first();
        session()->set([
            'NAMA_LENGKAP' => $dataUser->NAMA_LENGKAP,
            'EMAIL' => $dataUser->EMAIL,
            'username'  => $dataUser->USERNAME,
            'TINGGI_BADAN'=> $dataUser->TINGGI_BADAN,
            'BERAT_BADAN' => $dataUser->BERAT_BADAN,
            'USIA' => $dataUser->USIA,
            'gender' => $dataUser->GENDER,
            'FOTO' => $dataUser->FOTO
        ]);
        return redirect()->to('/cuser/profile');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/cuser');
    }

    public function profile()
    {
        return view('lifeq/profile');
    }
    public function gpass()
    {
        return view('lifeq/gantiPassword');
    }
    public function pass($id)
    {
        $user = new M_user();
        $password = $this->request->getVar('passLama');
        $passwordB = $this->request->getVar('passB');
        $dataUser = $user->where([
            'ID_USER' => session()->get('ID_USER')
        ])->first();
        if ($dataUser) {
            if ($password == session()->get('PASSWORD')){
                if ($passwordB == $this->request->getVar('passB2')){
                    $this->user->update($id, [
                        'PASSWORD' => $passwordB
                    ]);
                    session()->set([
                        'PASSWORD' => $dataUser->PASSWORD
                    ]);
                    return redirect()->to('/cuser/profile');
                }echo("baru gak sama");
            }echo("lama gak sama");
        }
    }

    public function delete($id)
    {
        $this->user->delete($id);
        return redirect()->to('/cuser');
        session()->destroy();
    }
    public function about()
    {
        return view('lifeq/about');
    }
}