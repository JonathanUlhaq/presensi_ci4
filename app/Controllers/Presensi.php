<?php

namespace App\Controllers;

use App\Models\PresensiModel;
use App\Models\DataPMatkul;
use App\Models\DataMatkul;

class Presensi extends BaseController
{
    public function __construct()
    {
        $this->presensiModel = new PresensiModel();
        $this->datapMatkul = new DataPMatkul();
        $this->dataMatkul = new DataMatkul();
    }
    public function index($id, $di, $status)
    {
        helper(['url', 'form']);
        $data = [
            'validation' => \Config\Services::validation(),
            'tittle' => 'Presensi',
            'matkul' => $this->datapMatkul->where(['mata_kuliah' => $id, 'pertemuan' => $di])->first(),
            'user' => $this->presensiModel->where(['nama_matakuliah' => $id, 'pertemuan' => $di, 'username' => $status])->first(),
            'matkuls' => $this->dataMatkul->where(['nama_matakuliah' => $id])->first(),
            'alamat' => 'Home',

            'nama' => session()->get('name')

        ];
        return view('Presensi/presensi', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'signature' => [
                'rules' => 'required|min_length[1]',
                'errors' => [
                    'required' => '{field} Mohon diisi',
                    'min_length' => 'Diisi minimal 1 karakter'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/Home/index')->withInput()->with('validation', $validation);
        }



        $file_string = $this->request->getVar('signature');

        $image = explode(";base64,", $file_string);

        $image_type = explode("image/", $image[0]);

        $image_type_png = $image_type[1];

        $image_base64 = base64_decode($image[1]);

        $folderPath = ROOTPATH . 'public/images/';

        $id_image = uniqid();

        $file = $folderPath . $id_image . '.' . $image_type_png;

        $session = session();

        file_put_contents($file, $image_base64);

        $session->setFlashdata("success", "Signature saved successfully");




        $simpan = [
            'username' => session()->get('name'),
            'status' => $this->request->getVar('status'),
            'created_at' => $this->request->getVar('created_at'),
            'nama_matakuliah' => $this->request->getVar('matkul'),
            'pertemuan' => $this->request->getVar('pertemuan'),
            'tanggal' => $this->request->getVar('tanggal'),
            'signature' => $id_image

        ];

        $this->presensiModel->insert($simpan);


        $validation = \Config\Services::validation();
        session()->setFlashdata('sukses', 'Presensi Telah Sukses Dilakukan');
        return redirect()->to('/Home/index')->withInput()->with('validation', $validation);
    }
}
