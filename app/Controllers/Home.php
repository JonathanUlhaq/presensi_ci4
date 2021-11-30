<?php

namespace App\Controllers;

use App\Models\DataPMatkul;
use App\Models\PresensiModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->datapMatkul = new DataPMatkul();
        $this->presensiModel = new PresensiModel();
    }
    public function index()
    {
        $date = date('y/m/d');
        $session = session();
        $data = [
            'matkul' => $this->datapMatkul->where(['tanggal' => date('y/m/d')])->findAll(),
            'nama' => session()->get('name'),
            'user' => $this->presensiModel->where(['username' => session()->get('name'), 'tanggal' => date('y/m/d')])->findAll(),
            'alamat' => 'Home'
        ];
        return view('Dashboard/index', $data);
    }
}
