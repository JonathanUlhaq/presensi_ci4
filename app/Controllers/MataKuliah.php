<?php

namespace App\Controllers;

use App\Models\PresensiModel;
use App\Models\DataMatkul;

class MataKuliah extends BaseController
{
    public function __construct()
    {
        $this->datapMatkul = new PresensiModel();
        $this->dataMatkul = new DataMatkul();
    }
    public function index()
    {
        $session = session();
        $data = [
            'matkul' => $this->dataMatkul->findAll(),
            'nama' => session()->get('name'),
            'alamat' => 'matkul'
        ];
        return view('MataKuliah/mata_kuliah', $data);
    }

    public function detailMatkul($id)
    {
        $session = session();
        $nama = session()->get('name');
        $data = [
            'matkul' => $this->datapMatkul->where(['nama_matakuliah' => $id, 'username' => $nama])->findAll(),
            'matkuls' => $this->dataMatkul->where(['nama_matakuliah' => $id])->first(),
            'nama' => session()->get('name'), 'alamat' => 'matkul'
        ];
        return view('MataKuliah/detail', $data);
    }
}
