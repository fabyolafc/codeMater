<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Helpers\EmailHelper;

class Reset extends BaseController
{
    public function resetsenha()
    {
        return view('/resetuser/resetsenha');
    }

    public function resetsenhasucesso()
    {
        return view('/resetuser/resetsenhasucesso');
    }

    public function resetsenhafalha()
    {
        return view('/resetuser/resetsenhafalha');
    }

    public function newPassword($token)
    {
        $userModel = new \App\Models\UserModel();
        $usuario = $userModel->where('token', $token)->first();

        if ($usuario) {
            // Formulário de redefinição de senha.
            return view('/resetuser/resetsenhatoken', ['token' => $token]);
        } else {
            return view('/resetuser/resetsenha');
        }
    }

    public function processaRedefinicao()
    {
        $token = $this->request->getPost('token');
        $novaSenha = $this->request->getPost('nova_senha');
        $confirmacaoSenha = $this->request->getPost('nova_senha_confirmacao');

        // Verifique se as senhas inseridas são iguais
        if ($novaSenha !== $confirmacaoSenha) {
            return redirect()->to(base_url('/resetuser/resetsenhafalha'));
        }

        $userModel = new \App\Models\UserModel();
        $usuario = $userModel->where('token', $token)->first();

        if ($usuario && $usuario['token'] !== null) {
            // Atualize a senha do usuário com a nova senha.
            $data = [
                'senha' => $novaSenha,
                'token' => null
            ];
            $userModel->update($usuario['id_usuario'], $data);
            return redirect()->to(base_url('/resetuser/resetsenhasucesso'));
        } else {
            return redirect()->to(base_url('/resetuser/resetsenhafalha'));
        }
    }
    
    public function enviaEmail()
    {
        $session = session();

        // Requisita o email do formulário via post.
        $mail = $this->request->getPost('email');

        // Verifica se o email do usuário está no banco de dados.
        $user = new \App\Models\UserModel();
        $verifyuser = $user->where('email', $mail)->first();

        if($verifyuser){
            // Gera um token de recuperação.
            $token = md5(uniqid(mt_rand(), true));
            $resetToken =  site_url("/resetuser/resetsenhatoken/{$token}");

            // Atualiza o token no banco de dados para o usuário.
            $user->update($verifyuser['id_usuario'], ['token' => $token]);

            //Processo para enviar email.
            $email = \Config\Services::email();
            $email->setFrom('ifnmgaluno3@gmail.com', 'Finae');
            $email->setTo($mail);
            $email->setSubject('Recuperação de Senha');
            $email->setMessage('<h3>Olá! </h3> <p>Clique <a href="' . $resetToken . '">neste link</a>' . ' para redefinir a sua senha.
            Se você não solicitou uma redefinição de senha pode ignorar este email.</p>');

            if ($email->send()) {
                // E-mail enviado com sucesso
                $session->setFlashdata('msgErro', 'Email de recuperação enviado, verifique sua caixa de entrada ou spam.');
                return redirect()->to(base_url('/'));
            }

        } else {
            $session->setFlashdata('msgErro', 'Email não encontrado no registro de cadastros, verifique se você digitou corretamente.');
            return redirect()->to(base_url('/'));
        }
    }
}