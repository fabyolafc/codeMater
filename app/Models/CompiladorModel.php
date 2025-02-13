<?php

namespace App\Models;

use CodeIgniter\Model;

class CompiladorModel extends Model
{
    protected $table      = 'testa_algoritmo';
    protected $primaryKey = 'id_algoritmo';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['compilador'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

     //Retornar todos os clientes
    public function getCompilador () {
        
        $query = $this->db->table('testa_algoritmo')->get();

        if ($this->returnType == 'object')
            return $query->getResult();
        else
            return $query->getResultArray();
    }
}