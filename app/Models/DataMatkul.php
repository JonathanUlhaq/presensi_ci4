<?php

namespace App\Models;

use CodeIgniter\Model;

class DataMatkul extends Model
{
    protected $table = "mata_kuliah";
    protected $primaryKey = "id_matakuliah";
    protected $allowedFields = ['nama_matakuliah', 'nama_dosen'];
}
