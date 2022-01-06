<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleModel extends Model{

    protected $table      = 'grana_detalle';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'programa_academico', 'fecha_dictamen', 'id_cabecera', 'texto', 'texto2', 'cert_no', 'institucion', 'portada', 'indice_1', 'indice_3', 'indice_3', 'indice_4', 'indice_5', 'indice_6', 'indice_7', 'indice_8', 'indice_9', 'indice_10', 'indice_11', 'indice_12', 'indice_13', 'indice_14', 'indice_15', 'indice_16'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'fecha_mod';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}

?>