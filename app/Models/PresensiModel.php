<?php

namespace App\Models;

use CodeIgniter\Model;

class PresensiModel extends Model
{
    protected $table      = 'presensi';
    protected $useTimestamps = true;
    protected $allowedFields = ['username',  'status', 'signature', 'nama_matakuliah', 'pertemuan', 'tanggal'];
    protected $primaryKey = 'id_presensi';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'tanggal';
    /*
    
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'email'];
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    */
}
