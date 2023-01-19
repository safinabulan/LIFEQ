<?php

namespace App\Controllers;

use App\Models\M_Aktivitas;

class Caktivitas extends BaseController
{
    protected $akti;
    protected $aktivitas;

    function __construct()
    {
        $this->akti = new M_Aktivitas();
        $this->aktivitas = new M_Aktivitas();
    }

    public function Akti()
    {
        $data['akti'] = $this->akti->findAll();
        return view('lifeq/Akti', $data);
    }

    public function Aktivitas()
    {
        $data['aktivitas'] = $this->aktivitas->findAll();
        return view('lifeq/Aktivitas', $data);
    }
}