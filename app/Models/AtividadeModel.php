<?php

namespace App\Models;

use CodeIgniter\Model;

class AtividadeModel extends Model
{
    protected $table      = 'atividade';
    protected $primaryKey = 'id_atividade';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['atividade1', 'atividade2', 'atividade3', 'atividade4', 'atividade5', 'atividade6', 'atividade7', 'atividade8', 'atividade9', 'atividade10'];

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
    public function getAtividade () {
        //$query = $this->db->query ('select * from clientes;');
        
        //$query = $this->db->table('clientes')->like('nome', 'a')->get();
        
        $query = $this->db->table('atividade')->get();

        if ($this->returnType == 'object')
            return $query->getResult();
        else
            return $query->getResultArray();
    }
}

   