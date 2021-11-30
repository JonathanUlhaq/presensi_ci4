<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPMatkul extends Model
{
    protected $table = "presensi_matkul";
    protected $primaryKey = "id_presensi";
    protected $allowedFields = ['mata_kuliah', 'pertemuan', 'tanggal'];
    protected $useTimestamps = true;
}
