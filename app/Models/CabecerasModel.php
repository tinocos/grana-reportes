<?php

namespace App\Models;

use CodeIgniter\Model;

class CabecerasModel extends Model{

    protected $table      = 'grana_cabeceras';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'cert_no'];

    /*protected $useTimestamps = true;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'fecha_mod';
    protected $deletedField  = 'deleted_at'; */

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}

?>
