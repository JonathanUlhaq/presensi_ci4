<?php

namespace App\Controllers;

use App\Models\DataPMatkul;
use App\Models\DataUser;
use App\Models\DataMatkul;
use App\Models\PresensiModel;
use PhpParser\Node\Stmt\Echo_;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->datapMatkul = new DataPMatkul();
        $this->dataUser = new DataUser();
        $this->dataMatkul = new DataMatkul();
        $this->dataPresensi = new PresensiModel();
    }
    public function index()
    {
        $session = session();
        $data = [
            'matkul' => $this->dataUser->findAll(),
            'jumlah' => $this->dataUser->countAll(),
            'jumlahs' => $this->dataMatkul->countAll(),
            'alamat' => 'Dashboard'
        ];
        return view('Admin/index', $data);
    }

    public function matkul()
    {
        $data = [
            'matkul' => $this->dataMatkul->findAll(),
            'alamat' => 'Daftar Mata Kuliah'
        ];
        return view('Admin/matkul', $data);
    }

    public function tmatkul()
    {
        $data = [

            'alamat' => 'Tambah Mata Kuliah'
        ];
        return view('Admin/tmatkul', $data);
    }

    public function proses1()
    {
        if (!$this->validate([
            'nama_matakuliah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Matakuliah mohon diisi'
                ]
            ],
            'nama_dosen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Dosen mohon diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $datai = [
            'nama_matakuliah' => $this->request->getVar('nama_matakuliah'),
            'nama_dosen' => $this->request->getVar('nama_dosen')
        ];

        $this->dataMatkul->insert($datai);

        session()->setFlashdata('bisa', 'Data berhasil ditambahkan');
        return redirect()->to('/dmatkul');
    }

    public function editmk($id)
    {
        $data = [

            'matkul' => $this->dataMatkul->where(['id_matakuliah' => $id])->first(),
            'alamat' => 'Edit Mata Kuliah'
        ];
        return view('Admin/editmatkul', $data);
    }
    public function hapusmk($id)
    {

        $this->dataMatkul->delete($id);
        session()->setFlashdata('bisa', 'Data berhasil dihapus');
        return redirect()->back()->withInput();
    }

    public function proses2($id)
    {
        if (!$this->validate([
            'nama_matakuliah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Matakuliah mohon diisi'
                ]
            ],
            'nama_dosen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Dosen mohon diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $datai = [
            'nama_matakuliah' => $this->request->getVar('nama_matakuliah'),
            'nama_dosen' => $this->request->getVar('nama_dosen')
        ];

        $this->dataMatkul->update($id, $datai);

        session()->setFlashdata('bisa', 'Data berhasil diedit');
        return redirect()->to('/dmatkul');
    }

    public function pesensiMatkul()
    {
        $data = [
            'matkul' => $this->datapMatkul->orderBy('mata_kuliah', 'ASC')->findAll(),
            'alamat' => 'Presensi Mata Kuliah'
        ];
        return view('Admin/presensi_matkul', $data);
    }

    public function tmatkulp()
    {
        $data = [
            'matkul' => $this->dataMatkul->findAll(),
            'alamat' => 'Home'
        ];
        return view('Admin/tmatkulp', $data);
    }

    public function proses3()
    {
        if (!$this->validate([
            'pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Matakuliah mohon diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $datai = [
            'pertemuan' => $this->request->getVar('pertemuan'),
            'mata_kuliah' => $this->request->getVar('mata_kuliah'),
            'tanggal' => $this->request->getVar('tanggal')
        ];

        $this->datapMatkul->insert($datai);

        session()->setFlashdata('bisa', 'Data berhasil ditambahkan');
        return redirect()->to('/presensiMatkul');
    }

    public function editmkp($id)
    {
        $data = [
            'matkuls' => $this->dataMatkul->findAll(),
            'matkul' => $this->datapMatkul->where(['id_presensi' => $id])->first(),
            'alamat' => 'Edit Presensi Mata Kuliah'
        ];
        return view('Admin/editmatkulp', $data);
    }

    public function proses4($id)
    {
        if (!$this->validate([
            'pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Matakuliah mohon diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $date = date('y/m/t');
        $datai = [
            'pertemuan' => $this->request->getVar('pertemuan'),
            'mata_kuliah' => $this->request->getVar('mata_kuliah'),
            'tanggal' => $this->request->getVar('tanggal')
        ];

        $this->datapMatkul->update($id, $datai);

        session()->setFlashdata('bisa', 'Data berhasil diubah');
        return redirect()->to('/presensiMatkul');
    }
    public function hapusmkp($id)
    {

        $this->datapMatkul->delete($id);
        session()->setFlashdata('bisa', 'Data berhasil dihapus');
        return redirect()->back()->withInput();
    }

    public function mahasiswa()
    {
        $data = [
            'mahasiswa' => $this->dataPresensi->findAll(),
            'alamat' => 'Daftar Presensi Mahasiswa'
        ];
        return view('Admin/mahasiswa', $data);
    }

    public function editmhs($id)
    {
        $data = [
            'alamat' => 'Edit Presensi Mahasiswa',
            'matkul' => $this->dataPresensi->where(['id_presensi' => $id])->first()
        ];
        return view('Admin/editmhs', $data);
    }

    public function proses6($id)
    {

        $datai = [
            'status' => $this->request->getVar('status'),

        ];

        $this->dataPresensi->update($id, $datai);

        session()->setFlashdata('bisa', 'Data berhasil diubah');
        return redirect()->to('/mahasiswa');
    }
}
