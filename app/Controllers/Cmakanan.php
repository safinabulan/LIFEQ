<?php

namespace App\Controllers;

use App\Models\M_Makanan;

class Cmakanan extends BaseController
{
    protected $makanan;

    function __construct()
    {
        $this->makanan = new M_Makanan();
    }

    public function index()
    {
        //ngambil semua data yg ada di tb makanan
        $data['makanan'] = $this->makanan->findAll();
        return view('lifeq/Makanan', $data);
    }
}