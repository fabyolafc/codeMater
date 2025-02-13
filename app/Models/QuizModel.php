<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
    protected $table      = 'quiz';
    protected $primaryKey = 'id_quiz';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['quiz1', 'quiz2', 'quiz3', 'quiz4', 'quiz5', 'quiz6', 'quiz7', 'quiz8', 'quiz9', 'quiz10', 'quiz11', 'quiz12', 'quiz13', 'quiz14', 'quiz15'];

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
    public function getQuiz () {
        //$query = $this->db->query ('select * from clientes;');
        
        //$query = $this->db->table('clientes')->like('nome', 'a')->get();
        
        $query = $this->db->table('quiz')->get();

        if ($this->returnType == 'object')
            return $query->getResult();
        else
            return $query->getResultArray();
    }
}

   