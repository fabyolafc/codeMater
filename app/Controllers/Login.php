<?php

namespace App\Controllers;

class Login extends BaseController
{





    public function dadoslogin2 () {
        //inicializar a sessão
        $session=session();
        //faz o login
        $email =$this->request->getPost('email');
        $senha =$this->request->getPost('senha');
    
        //verificar se os dados estão ok
        if($email =='fabyola@gmail.com' &&
        $senha == '1234'){

            //gravas os dados na sessão
            $dadosSessao=[
                'email'=> 'fabyola@gmail.com',
                'nome'=> 'fabyola'
            
            ];
            $session->set($dadosSessao);
         // redicioncionar para area restrita 
         return redirect()->to(base_url('/base'));

        }else{
            //redicionar para a tela de login, informando que houve um erro
            $session->setFlashdata('msgErro','Usuário ou senha inválidos!');
            return redirect()->to(base_url('/'));
            
        }

      
    }

    public function dadoslogin()
    {
        // Inicializar a sessão
        $session = session();

        // Faz o login
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        // Carregar o model de usuário

        $UserModel = new \App\Models\UserModel();

        // Verificar os dados de login no banco de dados
        $user = $UserModel->verificarLogin($email, $senha);

        if ($user) {
            // Gravar os dados na sessão
            $dadosSessao = [
                'email' => $user['email'],
                'nome' => $user['primeiro_nome'] . ' ' . $user['ultimo_nome']
            ];
            $session->set($dadosSessao);

            // Redirecionar para a área restrita
            return redirect()->to(base_url('/base'));
        } else {
            // Redirecionar para a tela de login, informando que houve um erro
            $session->setFlashdata('msgErro', 'Usuário ou senha inválidos!');
            return redirect()->to(base_url('/'));
        }
    }





    




    public function logout(){
        //faz o logout
        $session = session();
        $session->remove(['email','nome']);
        //redirecionar para tela de login
        return redirect()->to(base_url('/'));
    }

    public function newuser(){

        return view('login/newuser');
    }

    public function novousuario(){
        $primeiro_nome=$this->request->getPost('primeiro_nome');
        $ultimo_nome=$this->request->getPost('ultimo_nome');
        $email_user=$this->request->getPost('email_user');
        $senha=$this->request->getPost('senha');


        $dados = [
            'primeiro_nome'=>$primeiro_nome,
            'ultimo_nome'=>$ultimo_nome,
            'email'=>$email_user,
            'senha'=>$senha,
    


        ];

        
        
        $UserModel = new \App\Models\UserModel();
        //$clienteModel
        $UserModel->insert($dados);

        

        return redirect()->to(base_url('/'));
    }

    

}