<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['email','senha', 'primeiro_nome', 'ultimo_nome', 'token', 'id_usuario'];

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

    //todos as funções sql devem ser feitas no model
    public function getFornecedor(){

        $query = $this->db->table('usuario')->get();


        if($this->returnType=='object')
            return $query->getResult();
        else
            return $query->getResultArray();    
        
        //return $query->getResult();

        
    }

    public function verificarLogin($email, $senha)
    {
        return $this->where('email', $email)
                    ->where('senha', $senha)
                    ->first();
    }

    public function emaildobanco($email)
    {
        
        return $this->where('email', $email) ->first();
    }

    

}