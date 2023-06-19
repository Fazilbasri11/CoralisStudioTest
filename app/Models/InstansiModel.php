<?php

namespace App\Models;

use CodeIgniter\Model;

class InstansiModel extends Model
{
    protected $table = 'instansi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'telepon', 'created_at', 'updated_at', 'deleted_at'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $deletedField = 'deleted_at';
}