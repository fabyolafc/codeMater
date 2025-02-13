<?php

namespace App\Controllers;
//use DateTime;
class Home extends BaseController
{
    public function sessaoall()
    {
        //inicializar a sessão

        // inicializando a sessão
        $session = session();
        //so posso a essa área se estiber logado

        $email = $session->get('email');

        //se não está logado
        // e exibir uma mensagem informando que não está logado
        if ($email == null) {
            $session->setFlashdata('msgErro', 'Faça o login primeiro!');
            return redirect()->to(base_url('/'));
        } else {
            return "ok";
        }
    }

    public function index()
    {

        // função
        $session = session();

        // se houver alguma mensagem de erro, ela deve ser passada para a view
        $msgErro = $session->getFlashdata('msgErro');
        $email = $session->get('email');

        //se existia e-mail,já estava logado
        if ($email != null) {
            return redirect()->to(base_url('base'));
        }

        //Dados a serem enviados para a view
        $dadosView = [
            'msgErro' => $msgErro
        ];

        //pagina de login
        return view('login/login', $dadosView);
    }

    public function login()
    {
        return view('/login/login');
    }

    public function base()
    {
        // Inicializar a sessão
        $session = session();

        // Verificar se está logado
        $email = $session->get('email');

        if ($email == null) {
            $session->setFlashdata('msgErro', 'Faça o login primeiro!');
            return redirect()->to(base_url('/'));
        }

        return view('base');
    }

    // Conteúdo
    public function curso()
    {
        $log = $this->sessaoall();

        if ($log == 'ok')
            return view('conteudo/curso');
        else
            return $log;
    }
    // Fim Conteúdo

    // Quiz
    public function quiz()
    {
        $log = $this->sessaoall();

        // Criar o model
        $quizModel = new \App\Models\QuizModel();

        $quiz = $quizModel->getQuiz();

        $dadosView = [
            'quiz' => $quiz
        ];

        if ($log == 'ok')
            return view('atividades/quiz', $dadosView);
        else
            return $log;
    }

    public function inserirQuiz()
    {
        $quiz1 = $this->request->getPost('quiz1');
        $quiz2 = $this->request->getPost('quiz2');
        $quiz3 = $this->request->getPost('quiz3');
        $quiz4 = $this->request->getPost('quiz4');
        $quiz5 = $this->request->getPost('quiz5');
        $quiz6 = $this->request->getPost('quiz6');
        $quiz7 = $this->request->getPost('quiz7');
        $quiz8 = $this->request->getPost('quiz8');
        $quiz9 = $this->request->getPost('quiz9');
        $quiz10 = $this->request->getPost('quiz10');
        $quiz11 = $this->request->getPost('quiz11');
        $quiz12 = $this->request->getPost('quiz12');
        $quiz13 = $this->request->getPost('quiz13');
        $quiz14 = $this->request->getPost('quiz14');
        $quiz15 = $this->request->getPost('quiz15');

        $dados = [
            'quiz1' => $quiz1,
            'quiz2' => $quiz2,
            'quiz3' => $quiz3,
            'quiz4' => $quiz4,
            'quiz5' => $quiz5,
            'quiz6' => $quiz6,
            'quiz7' => $quiz7,
            'quiz8' => $quiz8,
            'quiz9' => $quiz9,
            'quiz10' => $quiz10,
            'quiz11' => $quiz11,
            'quiz12' => $quiz12,
            'quiz13' => $quiz13,
            'quiz14' => $quiz14,
            'quiz15' => $quiz15
        ];

        //$clienteModel = new \App\Models\ClienteModel();
        $quizModel = model('QuizModel');

        $quizModel->insert($dados);

        return redirect()->to(base_url('atividades/quiz'));
    }

    public function verQuiz()
    {
        $log = $this->sessaoall();

        if ($log == 'ok') {

            $quizModel = new \App\Models\QuizModel();
            $quiz = $quizModel->getQuiz();

            $dadosView = [
                'quiz' => $quiz
            ];

            return view('/atividades/verquiz', $dadosView);
        } else {

            return $log;
        }
    }

    public function excluirQuiz()
    {
        $log = $this->sessaoall();

        $id = $this->request->getPost('id');

        $quizModel = model('QuizModel');

        $quizModel->delete($id);

        if ($log == 'ok')
            return redirect()->to(base_url('/atividades/verquiz'));
        else
            return $log;
    }

    public function editarQuiz($id)
    {

        $log = $this->sessaoall();

        $quizModel = model('QuizModel');

        $quiz = $quizModel->find($id);

        if ($quiz == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {

            $dados = [
                'quiz' => $quiz
            ];

            if ($log == 'ok')
                return view('/atividades/editarQuiz', $dados);
            else
                return $log;
        }
    }

    public function alterarQuiz($id)
    {
        $log = $this->sessaoall();

        $quiz1 = $this->request->getPost('quiz1');
        $quiz2 = $this->request->getPost('quiz2');
        $quiz3 = $this->request->getPost('quiz3');
        $quiz4 = $this->request->getPost('quiz4');
        $quiz5 = $this->request->getPost('quiz5');
        $quiz6 = $this->request->getPost('quiz6');
        $quiz7 = $this->request->getPost('quiz7');
        $quiz8 = $this->request->getPost('quiz8');
        $quiz9 = $this->request->getPost('quiz9');
        $quiz10 = $this->request->getPost('quiz10');
        $quiz11 = $this->request->getPost('quiz11');
        $quiz12 = $this->request->getPost('quiz12');
        $quiz13 = $this->request->getPost('quiz13');
        $quiz14 = $this->request->getPost('quiz14');
        $quiz15 = $this->request->getPost('quiz15');


        $dados = [
            'quiz1' => $quiz1,
            'quiz2' => $quiz2,
            'quiz3' => $quiz3,
            'quiz4' => $quiz4,
            'quiz5' => $quiz5,
            'quiz6' => $quiz6,
            'quiz7' => $quiz7,
            'quiz8' => $quiz8,
            'quiz9' => $quiz9,
            'quiz10' => $quiz10,
            'quiz11' => $quiz11,
            'quiz12' => $quiz12,
            'quiz13' => $quiz13,
            'quiz14' => $quiz14,
            'quiz15' => $quiz15
        ];

        //$clienteModel = new \App\Models\ClienteModel();
        $quizModel = model('QuizModel');

        $quizModel->update($id, $dados);

        if ($log == 'ok')
            return redirect()->to(base_url('/atividades/verquiz'));
        else
            return $log;
    }


    // Fim Quiz

    // Atividade
    public function atividade()
    {
        $log = $this->sessaoall();

        // Criar o model
        $atividadeModel = new \App\Models\AtividadeModel();

        $atividade = $atividadeModel->getAtividade();

        $dadosView = [
            'atividade' => $atividade
        ];


        if ($log == 'ok')
            return view('atividades/atividade', $dadosView);
        else
            return $log;
    }

    // public function inserirAtividade()
    // {
    //     $resultados = [];
    //     $atividadeModel = model('AtividadeModel'); // Carregar o modelo para inserir no banco de dados

    //     for ($i = 1; $i <= 10; $i++) {
    //         $atividade = $this->request->getPost("atividade$i");

    //         // Salvar o código em um arquivo temporário
    //         $filePath = WRITEPATH . "uploads/code_$i.cpp";
    //         file_put_contents($filePath, $atividade);

    //         // Comando para compilar e capturar erros
    //         $outputFile = WRITEPATH . "uploads/output_$i";
    //         $command = "g++ $filePath -o $outputFile 2>&1"; // Captura erros de compilação
    //         $output = shell_exec($command);

    //         // Verifica se houve erro de compilação
    //         if (empty($output)) {
    //             // Se compilou com sucesso, executa e captura a saída
    //             $executionOutput = shell_exec("$outputFile 2>&1");
    //             $resultados["atividade$i"] = "✅ Código compilado e executado. Resultado: " . ($executionOutput ?: "Sem saída.");
    //         } else {
    //             // Traduzindo e simplificando o erro
    //             $resultados["atividade$i"] = "❌ Erro na compilação. Verifique seu código.";
    //         }

    //         // Inserir a atividade no banco de dados
    //         $dados = [
    //             "atividade$i" => $atividade
    //         ];
    //         $atividadeModel->insert($dados); // Inserir os dados no banco de dados
    //     }

    //     return view('atividades/atividade', ['resultados' => $resultados]);
    // }

    // public function inserirAtividade()
    // {
    //     $atividadeModel = model('AtividadeModel'); // Carrega o modelo para inserir no banco de dados

    //     // Array para armazenar os resultados das compilações
    //     $resultados = [];

    //     // Array para armazenar os dados que serão inseridos no banco de dados
    //     $dadosParaInserir = [];

    //     // Loop para processar as 10 questões
    //     for ($i = 1; $i <= 10; $i++) {
    //         $atividade = $this->request->getPost("atividade$i");

    //         if (!empty($atividade)) {
    //             // Salva o código em um arquivo temporário
    //             $filePath = WRITEPATH . "uploads/code_$i.cpp";
    //             file_put_contents($filePath, $atividade);

    //             // Comando para compilar e capturar erros
    //             $outputFile = WRITEPATH . "uploads/output_$i";
    //             $command = "g++ $filePath -o $outputFile 2>&1"; // Captura erros de compilação
    //             $output = shell_exec($command);

    //             // Verifica se houve erro de compilação
    //             if (empty($output)) {
    //                 // Se compilou com sucesso, executa e captura a saída
    //                 $executionOutput = shell_exec("$outputFile 2>&1");
    //                 $resultados["atividade$i"] = "✅ Código compilado e executado. Resultado: " . ($executionOutput ?: "Sem saída.");
    //             } else {
    //                 // Se houver erros de compilação, armazena a mensagem de erro
    //                 $resultados["atividade$i"] = "❌ Erro na compilação. Verifique seu código.";
    //             }

    //             // Armazena a questão e o código submetido no array
    //             $dadosParaInserir["atividade$i"] = $atividade;
    //         } else {
    //             // Caso a questão não tenha sido preenchida
    //             $resultados["atividade$i"] = "❌ Nenhuma atividade enviada.";
    //         }
    //     }

    //     // Verifica se há dados para inserir no banco
    //     if (!empty($dadosParaInserir)) {
    //         // Insere os dados no banco de dados em um único registro
    //         $atividadeModel->insert($dadosParaInserir);
    //     }

    //     // Retorna a view com os resultados das compilações
    //     return view('atividades/atividade', ['resultados' => $resultados]);
    // }

    public function inserirAtividade()
    {
        $atividadeModel = model('AtividadeModel'); // Carrega o modelo para inserir no banco de dados

        // Array para armazenar os resultados das compilações
        $resultados = [];

        // Array para armazenar os dados que serão inseridos no banco de dados
        $dadosParaInserir = [];

        // Loop para processar as 10 questões
        for ($i = 1; $i <= 10; $i++) {
            $atividade = $this->request->getPost("atividade$i");

            if (!empty($atividade)) {
                // Salva o código em um arquivo temporário
                $filePath = WRITEPATH . "uploads/code_$i.cpp";
                file_put_contents($filePath, $atividade);

                // Comando para compilar e capturar erros
                $outputFile = WRITEPATH . "uploads/output_$i";
                $command = "g++ $filePath -o $outputFile 2>&1"; // Captura erros de compilação
                $output = shell_exec($command);

                // Verifica se houve erro de compilação
                if (empty($output)) {
                    // Se compilou com sucesso, executa e captura a saída
                    $executionOutput = shell_exec("$outputFile 2>&1");
                    $resultados["atividade$i"] = "✅ Código compilado e executado. Resultado: " . ($executionOutput ?: "Sem saída.");
                } else {
                    // Se houver erros de compilação, armazena a mensagem de erro
                    $resultados["atividade$i"] = "❌ Erro na compilação. Verifique seu código.";
                }

                // Armazena a questão e o código submetido no array
                $dadosParaInserir["atividade$i"] = $atividade;
            } else {
                // Caso a questão não tenha sido preenchida
                $resultados["atividade$i"] = "❌ Nenhuma atividade enviada.";
            }
        }

        // Verifica se há dados para inserir no banco
        if (!empty($dadosParaInserir)) {
            // Insere os dados no banco de dados em um único registro
            $atividadeModel->insert($dadosParaInserir);
        }

        // Armazena os resultados e o código no session para repopulação
        session()->setFlashdata('resultados', $resultados);
        session()->setFlashdata('codigo', $this->request->getPost());

        // Retorna a view com os resultados das compilações
        return view('atividades/atividade', ['resultados' => $resultados]);
    }


    public function editarAtividade($id)
    {

        $log = $this->sessaoall();

        $atividadeModel = model('AtividadeModel');

        $atividade = $atividadeModel->find($id);

        if ($atividade == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {

            $dados = [
                'atividade' => $atividade
            ];

            if ($log == 'ok')
                return view('atividades/editarAtividade', $dados);
            else
                return $log;
        }
    }

    // public function alterarAtividade($id)
    // {
    //     // Carregar o modelo
    //     $atividadeModel = model('AtividadeModel');

    //     // Buscar a atividade pelo ID
    //     $atividade = $atividadeModel->find($id);

    //     if (!$atividade) {
    //         return redirect()->to('/atividades')->with('error', 'Atividade não encontrada!');
    //     }

    //     // Array para armazenar os resultados das compilações
    //     $resultados = [];

    //     // Processa as 10 questões
    //     for ($i = 1; $i <= 10; $i++) {
    //         $atividadePost = $this->request->getPost("atividade$i");

    //         if (!empty($atividadePost)) {
    //             $filePath = WRITEPATH . "uploads/code_$i.cpp";
    //             file_put_contents($filePath, $atividadePost);

    //             // Compilação e execução
    //             $outputFile = WRITEPATH . "uploads/output_$i";
    //             $command = "g++ $filePath -o $outputFile 2>&1";
    //             $output = shell_exec($command);

    //             if (empty($output)) {
    //                 $executionOutput = shell_exec("$outputFile 2>&1");
    //                 $resultados["atividade$i"] = "✅ Código compilado e executado. Resultado: " . ($executionOutput ?: "Sem saída.");
    //             } else {
    //                 $resultados["atividade$i"] = "❌ Erro na compilação. Verifique seu código.";
    //             }
    //         } else {
    //             $resultados["atividade$i"] = "❌ Nenhuma atividade enviada.";
    //         }
    //     }

    //     // Atualiza os dados no banco
    //     $dadosParaInserir = [];
    //     for ($i = 1; $i <= 10; $i++) {
    //         $dadosParaInserir["atividade$i"] = $this->request->getPost("atividade$i");
    //     }

    //     if (!empty($dadosParaInserir)) {
    //         $atividadeModel->update($id, $dadosParaInserir);
    //     }

    //     // Retorna a view com os resultados
    //     return view('atividades/veratividade', ['atividade' => $atividade, 'resultados' => $resultados]);
    // }

    public function alterarAtividade($id)
    {
        $log = $this->sessaoall(); // Verifica se o usuário está logado

        if ($log == 'ok') {
            // Carrega o modelo de Atividades
            $atividadeModel = model('AtividadeModel');

            // Obtém a atividade que será editada
            $atividade = $atividadeModel->find($id);

            // Se a atividade não existir, lança um erro 404
            if ($atividade == null) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }

            // Se os dados forem enviados via POST (formulário de edição)
            if ($this->request->getMethod() == 'post') {
                // Atualiza os dados da atividade
                $dadosAtualizados = [
                    'atividade1' => $this->request->getPost('atividade1'),
                    'atividade2' => $this->request->getPost('atividade2'),
                    'atividade3' => $this->request->getPost('atividade3'),
                    'atividade4' => $this->request->getPost('atividade4'),
                    'atividade5' => $this->request->getPost('atividade5'),
                    'atividade6' => $this->request->getPost('atividade6'),
                    'atividade7' => $this->request->getPost('atividade7'),
                    'atividade8' => $this->request->getPost('atividade8'),
                    'atividade9' => $this->request->getPost('atividade9'),
                    'atividade10' => $this->request->getPost('atividade10'),
                ];

                // Realiza a atualização no banco de dados
                $atividadeModel->update($id, $dadosAtualizados);

                // Redireciona para a página de lista de atividades com uma mensagem de sucesso
                return redirect()->to(base_url('/atividades/veratividade'))->with('resultado', 'Atividade atualizada com sucesso!');
            }

            // Passa os dados da atividade para a view de edição
            $dados = [
                'atividade' => $atividade
            ];

            // Exibe a view de edição
            return view('atividades/editarAtividade', $dados);
        } else {
            // Caso o usuário não esteja logado
            return $log;
        }
    }

    public function verAtividade()
    {
        $log = $this->sessaoall();

        if ($log == 'ok') {

            $atividadeModel = new \App\Models\AtividadeModel();
            $atividade = $atividadeModel->getAtividade();

            $dadosView = [
                'atividade' => $atividade
            ];

            return view('/atividades/veratividade', $dadosView);
        } else {

            return $log;
        }
    }

    public function excluirAtividade()
    {
        $log = $this->sessaoall();

        $id = $this->request->getPost('id');

        $atividadeModel = model('AtividadeModel');

        $atividadeModel->delete($id);


        if ($log == 'ok')
            return redirect()->to(base_url('/atividades/veratividade'));
        else
            return $log;
    }
    // Fim Atividade

    // Compilador
    public function compilador()
    {
        $log = $this->sessaoall();

        $compiladorModel = new \App\Models\CompiladorModel();
        $compilador = $compiladorModel->getCompilador();

        $dadosView = [
            'compilador' => $compilador
        ];

        if ($log == 'ok')
            return view('/testaAlgoritmo/compilador', $dadosView);
        else
            return $log;
    }

    public function inserirCompilador()
    {
        $compiladorModel = model('CompiladorModel'); // Carrega o modelo para inserir no banco de dados

        // Array para armazenar o resultado da compilação
        $resultados = [];

        // Dados para salvar no banco de dados
        $dadosParaInserir = [];

        // Recebe o código C++ do formulário
        $compilador = $this->request->getPost('compilador');

        if (!empty($compilador)) {
            // Salva o código em um arquivo temporário
            $filePath = WRITEPATH . "uploads/code_compilador.cpp";
            file_put_contents($filePath, $compilador);

            // Comando para compilar e capturar erros
            $outputFile = WRITEPATH . "uploads/output_compilador";
            $command = "g++ $filePath -o $outputFile 2>&1"; // Captura erros de compilação
            $output = shell_exec($command);

            // Verifica se houve erro de compilação
            if (empty($output)) {
                // Se compilou com sucesso, executa e captura a saída
                $executionOutput = shell_exec("$outputFile 2>&1");
                $resultados['compilador'] = "✅ Código compilado e executado. Resultado: " . ($executionOutput ?: "Sem saída.");
            } else {
                // Se houver erros de compilação, armazena a mensagem de erro
                $resultados['compilador'] = "❌ Erro na compilação. Verifique seu código.";
            }

            // Armazena o código no banco de dados
            $dadosParaInserir['compilador'] = $compilador;
        } else {
            // Caso o campo do código esteja vazio
            $resultados['compilador'] = "❌ Nenhum código enviado.";
        }

        // Verifica se há dados para inserir no banco
        if (!empty($dadosParaInserir)) {
            // Insere os dados no banco de dados
            $compiladorModel->insert($dadosParaInserir);
        }

        // Armazena o resultado na sessão (flashdata)
        session()->setFlashdata('resultado', $resultados['compilador']);

        // Retorna a view com os resultados da compilação
        return redirect()->to(base_url('testaAlgoritmo/compilador'));
    }

    // Fim Compilador

    // Material
    public function material()
    {
        $log = $this->sessaoall();

        $materialModel = new \App\Models\MaterialModel();
        $material = $materialModel->getMaterial();

        $dadosView = [
            'material' => $material
        ];

        if ($log == 'ok')
            return view('/material_complementar/material', $dadosView);
        else
            return $log;
    }

    public function inserirMaterial()
    {
        $log = $this->sessaoall();

        $nome_material = $this->request->getPost('nome_material');
        $link_material = $this->request->getPost('link_material');

        $dados = [
            'nome_material' => $nome_material,
            'link_material' => $link_material
        ];

        $materialModel = model('MaterialModel');

        $materialModel->insert($dados);

        if ($log == 'ok')
            return redirect()->to(base_url('/material_complementar/material'));
        else
            return $log;
    }

    public function verMaterial()
    {
        $log = $this->sessaoall();

        if ($log == 'ok') {

            $materialModel = new \App\Models\MaterialModel();
            $material = $materialModel->getMaterial();

            $dadosView = [
                'material' => $material
            ];

            return view('/material_complementar/vermaterial', $dadosView);
        } else {

            return $log;
        }
    }

    public function excluirMaterial()
    {
        $log = $this->sessaoall();

        $id = $this->request->getPost('id');

        $materialModel = model('MaterialModel');

        $materialModel->delete($id);


        if ($log == 'ok')
            return redirect()->to(base_url('/material_complementar/vermaterial'));
        else
            return $log;
    }

    public function editarMaterial($id)
    {

        $log = $this->sessaoall();

        $materialModel = model('MaterialModel');

        $material = $materialModel->find($id);

        if ($material == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {

            $dados = [
                'material' => $material
            ];

            if ($log == 'ok')
                return view('/material_complementar/editarMaterial', $dados);
            else
                return $log;
        }
    }

    public function alterarMaterial($id)
    {
        $log = $this->sessaoall();

        $nome_material = $this->request->getPost('nome_material');
        $link_material = $this->request->getPost('link_material');

        $dados = [
            'nome_material' => $nome_material,
            'link_material' => $link_material
        ];

        //$clienteModel = new \App\Models\ClienteModel();
        $materialModel = model('MaterialModel');

        $materialModel->update($id, $dados);

        if ($log == 'ok')
            return redirect()->to(base_url('/material_complementar/vermaterial'));
        else
            return $log;
    }
    // Fim Material




}




































//     public function cadcontasapagar()
//     {
//         $log = $this->sessaoall();

//         //Listar fornecedor
//         $fornecedorModel = new \App\Models\FornecedorModel();

//         $listfornecedorcontaspagar = $fornecedorModel->getFornecedor();

//         //Lista caixa/banco
//         $bancoModel = new \App\Models\BancoModel();

//         $listcaixabancocontaspagar = $bancoModel->getBanco();

//         //Lista planno de contas
//         $planoModel = new \App\Models\PlanoModel();

//         $listplanodecontascontaspagar = $planoModel->getPlano();


//         $dadosView = [
//             'listfornecedorcontaspagar' => $listfornecedorcontaspagar,
//             'listcaixabancocontaspagar' => $listcaixabancocontaspagar,
//             'listplanodecontascontaspagar' => $listplanodecontascontaspagar
//         ];



//         if ($log == 'ok')
//             return view('/financeiro/cadcontasapagar', $dadosView);
//         else
//             return $log;
//     }

//     public function cadcontasareceber()
//     {
//         $log = $this->sessaoall();

//         //Listar cliente
//         $clienteModel = new \App\Models\ClienteModel();
        
//         $listclientecontaspagar = $clienteModel->getClientes();

//         //Lista caixa/banco
//         $bancoModel = new \App\Models\BancoModel();

//         $listcaixabancocontaspagar = $bancoModel->getBanco();

//         //Lista planno de contas
//         $planoModel = new \App\Models\PlanoModel();

//         $listplanodecontascontaspagar = $planoModel->getPlano();


//         $dadosView = [
//             'listclientecontaspagar' => $listclientecontaspagar,
//             'listcaixabancocontaspagar' => $listcaixabancocontaspagar,
//             'listplanodecontascontaspagar' => $listplanodecontascontaspagar
//         ];

//         if ($log == 'ok')
//             return view('financeiro/cadcontasareceber', $dadosView);
//         else
//             return $log;
//     }

//     public function cadmovimentocaixa()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('financeiro/cadmovimentocaixa');
//         else
//             return $log;
//     }

//     public function cliente()
//     {

//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('cadastro/cliente');
//         else
//             return $log;
//     }

//     public function fornecedor()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('cadastro/fornecedor');
//         else
//             return $log;
//     }

//     public function caixabanco()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('cadastro/caixabanco');
//         else
//             return $log;
//     }

//     public function planodecontas()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('cadastro/planodecontas');
//         else
//             return $log;
//     }

//     public function relcontaspagar()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('relatorio/relcontaspagar');
//         else
//             return $log;
//     }

//     public function relcontasreceber()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('relatorio/relcontasreceber');
//         else
//             return $log;
//     }

//     public function relextrato()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok')
//             return view('relatorio/relextrato');
//         else
//             return $log;
//     }


//     public function salvarcliente()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {


//             $nome = $this->request->getPost('nome');
//             $cnpjcpf = $this->request->getPost('cnpjcpf');
//             $email = $this->request->getPost('email');
//             $telefone = $this->request->getPost('telefone');
//             $rua = $this->request->getPost('rua');
//             $uf = $this->request->getPost('uf');
//             $cep = $this->request->getPost('cep');
//             $numero = $this->request->getPost('numero');
//             $sexo = $this->request->getPost('sexo');
//             $bairro = $this->request->getPost('bairro');
//             $cidade = $this->request->getPost('cidade');

//             $dados = [
//                 'cnpjcpf' => $cnpjcpf,
//                 'nome_cliente' => $nome,
//                 'rua' => $rua,
//                 'telefone' => $telefone,
//                 'email' => $email,
//                 'sexo' => $sexo,
//                 'bairro' => $bairro,
//                 'cidade' => $cidade,
//                 'uf' => $uf,
//                 'cep' => $cep,
//                 'numero' => $numero


//             ];



//             $clienteModel = new \App\Models\ClienteModel();
//             //$clienteModel
//             $clienteModel->insert($dados);

//             return redirect()->to(base_url('/cadastro/cliente'));
//         } else {

//             return $log;
//         }
//     }

//     public function viewclientes()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {

//             $clienteModel = new \App\Models\ClienteModel();
//             $cliente = $clienteModel->getClientes();

//             $dadosView = [
//                 'cliente' => $cliente
//             ];

//             return view('cadastro/viewclientes', $dadosView);
//         } else {

//             return $log;
//         }
//     }


//     public function excluircliente()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {


//             $id = $this->request->getPost('id');
//             $clienteModel = model('ClienteModel');
//             $clienteModel->delete($id);

//             return redirect()->to(base_url('cadastro/viewclientes'));
//         } else {
//             return $log;
//         }
//     }

//     // função de fabiola 
//     public function vizaltclientes($id)
//     {

//         $log = $this->sessaoall();

//         if ($log == 'ok') {


//             $clienteModel = model('ClienteModel');

//             $cliente = $clienteModel->find($id);


//             if ($cliente == null) {
//                 throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             } else {

//                 $dados = [
//                     'cliente' => $cliente
//                 ];

//                 /*$clienteModel->update($id, $dados);*/

//                 return view('cadastro/vizaltclientes', $dados);
//             }
//         } else
//             return $log;
//     }


//     public function atualizarcliente($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {

//             $nome = $this->request->getPost('nome');
//             $cnpjcpf = $this->request->getPost('cnpjcpf');
//             $email = $this->request->getPost('email');
//             $telefone = $this->request->getPost('telefone');
//             $rua = $this->request->getPost('rua');
//             $uf = $this->request->getPost('uf');
//             $cep = $this->request->getPost('cep');
//             $numero = $this->request->getPost('numero');
//             $sexo = $this->request->getPost('sexo');
//             $bairro = $this->request->getPost('bairro');
//             $cidade = $this->request->getPost('cidade');

//             $dados = [
//                 'cnpjcpf' => $cnpjcpf,
//                 'nome_cliente' => $nome,
//                 'rua' => $rua,
//                 'telefone' => $telefone,
//                 'email' => $email,
//                 'sexo' => $sexo,
//                 'bairro' => $bairro,
//                 'cidade' => $cidade,
//                 'uf' => $uf,
//                 'cep' => $cep,
//                 'numero' => $numero


//             ];


//             //$clienteModel = new \App\Models\ClienteModel();
//             $clienteModel = model('ClienteModel');

//             $clienteModel->update($id, $dados);

//             return redirect()->to(base_url('/cadastro/viewclientes'));
//         } else
//             return $log;
//     }

//     public function salvarfornecedor()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {


//             $nome_fornecedor = $this->request->getPost('nome_fornecedor');
//             $cnpjcpf = $this->request->getPost('cnpjcpf');
//             $email = $this->request->getPost('email');
//             $telefone = $this->request->getPost('telefone');
//             $rua = $this->request->getPost('rua');
//             $uf = $this->request->getPost('uf');
//             $cep = $this->request->getPost('cep');
//             $numero = $this->request->getPost('numero');
//             $sexo = $this->request->getPost('sexo');
//             $bairro = $this->request->getPost('bairro');
//             $cidade = $this->request->getPost('cidade');

//             $dados = [
//                 'cnpjcpf' => $cnpjcpf,
//                 'nome_fornecedor' => $nome_fornecedor,
//                 'rua' => $rua,
//                 'telefone' => $telefone,
//                 'email' => $email,
//                 'sexo' => $sexo,
//                 'bairro' => $bairro,
//                 'cidade' => $cidade,
//                 'uf' => $uf,
//                 'cep' => $cep,
//                 'numero' => $numero


//             ];

//             $fornecedorModel = new \App\Models\FornecedorModel();
//             $fornecedorModel->insert($dados);

//             return redirect()->to(base_url('/cadastro/fornecedor'));
//         } else {
//             return $log;
//         }
//     }

//     public function listarfornecedor()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {



//             $fornecedorModel = new \App\Models\FornecedorModel();

//             $listarfornecedor = $fornecedorModel->getFornecedor();

//             $dadosView = [
//                 'listarfornecedor' => $listarfornecedor
//             ];

//             return view('/cadastro/listarfornecedor', $dadosView);
//         } else
//             return $log;
//     }

//     public function excluirfornecedor()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {


//             $id = $this->request->getPost('id');

//             $fornecedorModel = model('FornecedorModel');

//             $fornecedorModel->delete($id);

//             return redirect()->to(base_url('cadastro/listarfornecedor'));
//         } else
//             return $log;
//     }

//     public function editarfornecedor($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {



//             $fornecedorModel = model('FornecedorModel');

//             $fornecedor = $fornecedorModel->find($id);


//             if ($fornecedor == null) {
//                 throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             } else {

//                 $dados = [
//                     'fornecedor' => $fornecedor
//                 ];

//                 return view('/cadastro/editarfornecedor', $dados);
//             }
//         } else
//             return $log;
//     }

//     public function alterarfornecedor($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {


//             $nome_fornecedor = $this->request->getPost('nome_fornecedor');
//             $cnpjcpf = $this->request->getPost('cnpjcpf');
//             $email = $this->request->getPost('email');
//             $telefone = $this->request->getPost('telefone');
//             $rua = $this->request->getPost('rua');
//             $uf = $this->request->getPost('uf');
//             $cep = $this->request->getPost('cep');
//             $numero = $this->request->getPost('numero');
//             $sexo = $this->request->getPost('sexo');
//             $bairro = $this->request->getPost('bairro');
//             $cidade = $this->request->getPost('cidade');

//             $dados = [
//                 'cnpjcpf' => $cnpjcpf,
//                 'nome_fornecedor' => $nome_fornecedor,
//                 'rua' => $rua,
//                 'telefone' => $telefone,
//                 'email' => $email,
//                 'sexo' => $sexo,
//                 'bairro' => $bairro,
//                 'cidade' => $cidade,
//                 'uf' => $uf,
//                 'cep' => $cep,
//                 'numero' => $numero


//             ];


//             $fornecedorModel = model('FornecedorModel');

//             $fornecedorModel->update($id, $dados);

//             return redirect()->to(base_url('/cadastro/listarfornecedor'));
//         } else
//             return $log;
//     }
    




//     public function base()
//     {
//         // Inicializar a sessão
//         $session = session();
    
//         // Verificar se está logado
//         $email = $session->get('email');
    
//         if ($email == null) {
//             $session->setFlashdata('msgErro', 'Faça o login primeiro!');
//             return redirect()->to(base_url('/'));
//         }
    
//         // Obter os valores totais por mês dos títulos a pagar nos últimos três meses
//         $contasPagarModel = new \App\Models\ContasPagarModel();
//         $valoresPorMesVencimento = $contasPagarModel->valoresTotaisUltimosSeisMeses();
//         $valoresPorMesEmissao = $contasPagarModel->valoresTotaisUltimosSeisMesesDataEmissao();
    
//         // Adicionando as duas funções do ContasReceberModel
//         $contasReceberModel = new \App\Models\ContasReceberModel();
//         $valoresPorMesEmitidos = $contasReceberModel->valoresTotaisUltimosSeisMesesEmitidos();
//         $valoresPorMesVencidos = $contasReceberModel->valoresTotaisUltimosSeisMesesVencidos();
    
//         // Dados a serem enviados para a view
//         $dadosView = [
//             'valoresPorMesVencimento' => $valoresPorMesVencimento,
//             'valoresPorMesEmissao' => $valoresPorMesEmissao,
//             'valoresPorMesEmitidos' => $valoresPorMesEmitidos, // Adicionando os valores totais por mês emitidos
//             'valoresPorMesVencidos' => $valoresPorMesVencidos // Adicionando os valores totais por mês vencidos
//         ];
    
//         return view('base', $dadosView);
//     }
    
    
    

//     //Funções de Bárbara
//     public function salvarbanco()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $codigo = $this->request->getPost('codigo');
//             $numero = $this->request->getPost('numero');
//             $agencia = $this->request->getPost('agencia');
//             $caixabanco = $this->request->getPost('caixabanco');
//             $conta = $this->request->getPost('conta');
//             $saldo_inicial = $this->request->getPost('saldo_inicial');
//             $uf = $this->request->getPost('uf');

//             $dadosB = [
//                 'codigo' => $codigo,
//                 'numero' => $numero,
//                 'agencia' => $agencia,
//                 'caixabanco' => $caixabanco,
//                 'conta' => $conta,
//                 'saldo_inicial' => $saldo_inicial,
//                 'uf' => $uf
//             ];

//             $bancoModel = new \App\Models\BancoModel();
//             $bancoModel->insert($dadosB);

//             return redirect()->to(base_url('/cadastro/caixabanco'));
//         } else
//             return $log;
//     }

//     public function atualizarbanco($idbanco)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $codigo = $this->request->getPost('codigo');
//             $numero = $this->request->getPost('numero');
//             $agencia = $this->request->getPost('agencia');
//             $caixabanco = $this->request->getPost('caixabanco');
//             $conta = $this->request->getPost('conta');
//             $saldo_inicial = $this->request->getPost('saldo_inicial');
//             $uf = $this->request->getPost('uf');

//             $dadosB = [
//                 'codigo' => $codigo,
//                 'numero' => $numero,
//                 'agencia' => $agencia,
//                 'caixabanco' => $caixabanco,
//                 'conta' => $conta,
//                 'saldo_inicial' => $saldo_inicial,
//                 'uf' => $uf
//             ];


//             //$bancoModel = new \App\Models\BancoModel();
//             $bancoModel = model('BancoModel');
//             $bancoModel->update($idbanco, $dadosB);

//             return redirect()->to(base_url('/cadastro/listarcaixabanco'));
//         } else
//             return $log;
//     }

//     public function alterarbanco($id)
//     {

//         $log = $this->sessaoall();

//         if ($log == 'ok') {

//             $bancoModel = model('BancoModel');
//             $listarcaixabanco = $bancoModel->find($id);

//             if ($listarcaixabanco == null) {
//                 throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             } else {

//                 $dados = [
//                     'listarcaixabanco' => $listarcaixabanco
//                 ];

//                 //$bancoModel->update($id, $dados);

//                 return view('cadastro/alterarbanco', $dados);
//             }
//         } else
//             return $log;
//     }

//     public function listarcaixabanco()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $bancoModel = new \App\Models\BancoModel();

//             $listarcaixabanco = $bancoModel->getBanco();

//             $dadosView = [
//                 'listarcaixabanco' => $listarcaixabanco
//             ];

//             return view('/cadastro/listarcaixabanco', $dadosView);
//         } else
//             return $log;
//     }

//     public function excluirbanco()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $id = $this->request->getPost('idbanco');
//             $bancoModel = model('BancoModel');
//             $bancoModel->delete($id);

//             return redirect()->to(base_url('cadastro/listarcaixabanco'));
//         } else
//             return $log;
//     }

//     //Funções do Plano de Contas
//     public function salvarplano()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $codigo = $this->request->getPost('codigo');
//             $descricao = $this->request->getPost('descricao');
//             $tipo_titulo = $this->request->getPost('tipo_titulo');
//             $classificacao = $this->request->getPost('classificacao');

//             $dadosP = [
//                 'codigo' => $codigo,
//                 'descricao' => $descricao,
//                 'tipo_titulo' => $tipo_titulo,
//                 'classificacao' => $classificacao
//             ];

//             $planoModel = new \App\Models\PlanoModel();
//             $planoModel->insert($dadosP);

//             return redirect()->to(base_url('/cadastro/planodecontas'));
//         } else
//             return $log;
//     }

//     public function atualizarplano($idplano)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $codigo = $this->request->getPost('codigo');
//             $descricao = $this->request->getPost('descricao');
//             $tipo_titulo = $this->request->getPost('tipo_titulo');
//             $classificacao = $this->request->getPost('classificacao');

//             $dadosP = [
//                 'codigo' => $codigo,
//                 'descricao' => $descricao,
//                 'tipo_titulo' => $tipo_titulo,
//                 'classificacao' => $classificacao
//             ];

//             //$bancoModel = new \App\Models\BancoModel();
//             $planoModel = model('PlanoModel');
//             $planoModel->update($idplano, $dadosP);

//             return redirect()->to(base_url('/cadastro/listarplanodecontas'));
//         } else
//             return $log;
//     }

//     public function alterarplano($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {

//             $planoModel = model('PlanoModel');
//             $listarplanodecontas = $planoModel->find($id);

//             if ($listarplanodecontas == null) {
//                 throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             } else {

//                 $dados = [
//                     'listarplanodecontas' => $listarplanodecontas
//                 ];

//                 return view('cadastro/alterarplano', $dados);
//             }
//         } else
//             return $log;
//     }

//     public function listarplanodecontas()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $planoModel = new \App\Models\PlanoModel();

//             $listarplanodecontas = $planoModel->getPlano();

//             $dadosView = [
//                 'listarplanodecontas' => $listarplanodecontas
//             ];

//             return view('/cadastro/listarplanodecontas', $dadosView);
//         } else
//             return $log;
//     }

//     public function excluirplano()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $id = $this->request->getPost('idplano');
//             $planoModel = model('PlanoModel');
//             $planoModel->where('id_plano', $id)->delete();

//             return redirect()->to(base_url('cadastro/listarplanodecontas'));
//         } else
//             return $log;
//     }
//     //Fim das funções de Bárbara

//     public function salvarcontaspagar()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $nfe = $this->request->getPost('nfe');
//             $data_emissao = $this->request->getPost('data_emissao');
//             $data_venc = $this->request->getPost('data_venc');
//             $cod_fornecedor = $this->request->getPost('cod_fornecedor');
//             $id_fornecedor = $this->request->getPost('id_fornecedor');
//             $valor_bruto = $this->request->getPost('valor_bruto');
//             $id_plano = $this->request->getPost('id_plano');
//             $id_banco = $this->request->getPost('id_banco');
//             $cod_barras = $this->request->getPost('cod_barras');
//             $historico = $this->request->getPost('historico');

//             /* Formatar a data usando a classe DateTime
//             $data_emissao_formatada = (new DateTime($data_emissao))->format('Y-m-d H:i:s');*/
            
//             $dados = [
//                 'nfe' => $nfe,
//                 'data_emissao' => $data_emissao,
//                 'data_venc' => $data_venc,
//                 'cod_fornecedor' => $cod_fornecedor,
//                 'id_fornecedor' => $id_fornecedor,
//                 'valor_bruto' => $valor_bruto,
//                 'id_plano' => $id_plano,
//                 'id_banco' => $id_banco,
//                 'cod_barras' => $cod_barras,
//                 'historico' => $historico
//             ];
      

//             $contasPagarModel = new \App\Models\ContasPagarModel();
//             $contasPagarModel->insert($dados);

//             return redirect()->to(base_url('/financeiro/cadcontasapagar'));
//         } else
//             return $log;
//     }
    
    

//     public function listarcontaspagar()
//     {

//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $contasPagarModel = new \App\Models\ContasPagarModel();

//             $listarcontaspagar = $contasPagarModel->getContasPagar();

//             $dadosView = [
//                 'listarcontaspagar' => $listarcontaspagar
//             ];

//             return view('/financeiro/listarcontaspagar', $dadosView);
//         } else
//             return $log;
//     }

//     public function excluircontaspagar()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $id = $this->request->getPost('id');

//             $contasPagarModel = model('ContasPagarModel');

//             $contasPagarModel->delete($id);

//             return redirect()->to(base_url('financeiro/listarcontaspagar'));
//         } else
//             return $log;
//     }

//     public function editarcontaspagar($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {

//             $contasPagarModel = model('ContasPagarModel');

//             $contaspagar = $contasPagarModel->find($id);


//             //Model fornecedor
//             $fornecedorModel = model('FornecedorModel');
//             $fornecedor = $fornecedorModel->find($id);

//             //Listar do fornecedor
//             $fornecedorModel = new \App\Models\FornecedorModel();
//             $listfornecedorcontaspagar = $fornecedorModel->getFornecedor();


//             //Model caixa/banco
//             $bancoModel = model('BancoModel');
//             $caixa_banco = $bancoModel->find($id);
    
//             //Lista caixa/banco
//             $bancoModel = new \App\Models\BancoModel();
//             $listcaixabancocontaspagar = $bancoModel->getBanco();


//             //Model plano de contas
//             $planoModel = model('PlanoModel');
//             $plano_contas = $planoModel->find($id);

//             //Lista planno de contas
//             $planoModel = new \App\Models\PlanoModel();
//             $listplanodecontascontaspagar = $planoModel->getPlano();
    

//             if ($contaspagar == null) {
//                 throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             } else {

//                 $dados = [
//                     'contaspagar' => $contaspagar,
//                     'fornecedor' => $fornecedor,
//                     'listfornecedorcontaspagar' => $listfornecedorcontaspagar,
//                     'caixa_banco' => $caixa_banco,
//                     'listcaixabancocontaspagar' => $listcaixabancocontaspagar,
//                     'plano_contas' => $plano_contas,
//                     'listplanodecontascontaspagar' => $listplanodecontascontaspagar
//                 ];

                
//                 return view('financeiro/editarcontaspagar', $dados);
//             }
//         } else
//             return $log;
//     }

//     public function alterarcontaspagar($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $nfe = $this->request->getPost('nfe');
//             $data_emissao = $this->request->getPost('data_emissao');
//             $data_venc = $this->request->getPost('data_venc');
//             $cod_fornecedor = $this->request->getPost('cod_fornecedor');
//             $id_fornecedor = $this->request->getPost('id_fornecedor');
//             $valor_bruto = $this->request->getPost('valor_bruto');
//             $id_plano = $this->request->getPost('id_plano');
//             $id_banco = $this->request->getPost('id_banco');
//             $cod_barras = $this->request->getPost('cod_barras');
//             $historico = $this->request->getPost('historico');


//             $dados = [
//                 'nfe' => $nfe,
//                 'data_emissao' => $data_emissao,
//                 'data_venc' => $data_venc,
//                 'cod_fornecedor' => $cod_fornecedor,
//                 'id_fornecedor' => $id_fornecedor,
//                 'valor_bruto' => $valor_bruto,
//                 'id_plano' => $id_plano,
//                 'id_banco' => $id_banco,
//                 'cod_barras' => $cod_barras,
//                 'historico' => $historico
//             ];


//             $contasPagarModel = model('ContasPagarModel');

//             $contasPagarModel->update($id, $dados);

//             return redirect()->to(base_url('/financeiro/listarcontaspagar'));
//         } else
//             return $log;
//     }




//     public function salvarcontasreceber()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $nfe = $this->request->getPost('nfe');
//             $data_emissao = $this->request->getPost('data_emissao');
//             $data_venc = $this->request->getPost('data_venc');
//             $cod_cliente = $this->request->getPost('cod_cliente');
//             $id_cliente = $this->request->getPost('id_cliente');
//             $valor_bruto = $this->request->getPost('valor_bruto');
//             $id_plano = $this->request->getPost('id_plano');
//             $id_banco = $this->request->getPost('id_banco');
//             $cod_barras = $this->request->getPost('cod_barras');
//             $historico = $this->request->getPost('historico');

//             /* Formatar a data usando a classe DateTime
//             $data_emissao_formatada = (new DateTime($data_emissao))->format('Y-m-d H:i:s');*/
            
//             $dados = [
//                 'nfe' => $nfe,
//                 'data_emissao' => $data_emissao,
//                 'data_venc' => $data_venc,
//                 'cod_cliente' => $cod_cliente,
//                 'id_cliente' => $id_cliente,
//                 'valor_bruto' => $valor_bruto,
//                 'id_plano' => $id_plano,
//                 'id_banco' => $id_banco,
//                 'cod_barras' => $cod_barras,
//                 'historico' => $historico
//             ];
      

//             $contasReceberModel = new \App\Models\ContasReceberModel();
//             $contasReceberModel->insert($dados);

//             return redirect()->to(base_url('/financeiro/cadcontasareceber'));
//         } else
//             return $log;
//     }

//     public function listarcontasreceber()
//     {

//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $contasReceberModel = new \App\Models\ContasReceberModel();

//             $listarcontasreceber = $contasReceberModel->getContasReceber();

//             $dadosView = [
//                 'listarcontasreceber' => $listarcontasreceber
//             ];

//             return view('/financeiro/listarcontasreceber', $dadosView);
//         } else
//             return $log;
//     }

//     public function excluircontasreceber()
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $id = $this->request->getPost('id');

//             $contasReceberModel = model('ContasReceberModel');

//             $contasReceberModel->delete($id);

//             return redirect()->to(base_url('financeiro/listarcontasreceber'));
//         } else
//             return $log;
//     }

//     public function editarcontasreceber($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {

//             $contasReceberModel = model('ContasReceberModel');

//             $contasreceber = $contasReceberModel->find($id);


//             //Model cliente
//             $clienteModel = model('ClienteModel');
//             $cliente = $clienteModel->find($id);

//             //Listar cliente
//             $clienteModel = new \App\Models\ClienteModel();
//             $listclientecontaspagar = $clienteModel->getClientes();


//             //Model caixa/banco
//             $bancoModel = model('BancoModel');
//             $caixa_banco = $bancoModel->find($id);
    
//             //Lista caixa/banco
//             $bancoModel = new \App\Models\BancoModel();
//             $listcaixabancocontaspagar = $bancoModel->getBanco();


//             //Model plano de contas
//             $planoModel = model('PlanoModel');
//             $plano_contas = $planoModel->find($id);

//             //Lista planno de contas
//             $planoModel = new \App\Models\PlanoModel();
//             $listplanodecontascontaspagar = $planoModel->getPlano();
    

//             if ($contasreceber == null) {
//                 throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             } else {

//                 $dados = [
//                     'contasreceber' => $contasreceber,
//                     'cliente' => $cliente,
//                     'listclientecontaspagar' => $listclientecontaspagar,
//                     'caixa_banco' => $caixa_banco,
//                     'listcaixabancocontaspagar' => $listcaixabancocontaspagar,
//                     'plano_contas' => $plano_contas,
//                     'listplanodecontascontaspagar' => $listplanodecontascontaspagar
//                 ];

                
//                 return view('financeiro/editarcontasreceber', $dados);
//             }
//         } else
//             return $log;
//     }

//     public function alterarcontasreceber($id)
//     {
//         $log = $this->sessaoall();

//         if ($log == 'ok') {
//             $nfe = $this->request->getPost('nfe');
//             $data_emissao = $this->request->getPost('data_emissao');
//             $data_venc = $this->request->getPost('data_venc');
//             $cod_cliente = $this->request->getPost('cod_cliente');
//             $id_cliente = $this->request->getPost('id_cliente');
//             $valor_bruto = $this->request->getPost('valor_bruto');
//             $id_plano = $this->request->getPost('id_plano');
//             $id_banco = $this->request->getPost('id_banco');
//             $cod_barras = $this->request->getPost('cod_barras');
//             $historico = $this->request->getPost('historico');


//             $dados = [
//                 'nfe' => $nfe,
//                 'data_emissao' => $data_emissao,
//                 'data_venc' => $data_venc,
//                 'cod_cliente' => $cod_cliente,
//                 'id_cliente' => $id_cliente,
//                 'valor_bruto' => $valor_bruto,
//                 'id_plano' => $id_plano,
//                 'id_banco' => $id_banco,
//                 'cod_barras' => $cod_barras,
//                 'historico' => $historico
//             ];


//             $contasReceberModel = model('ContasReceberModel');

//             $contasReceberModel->update($id, $dados);

//             return redirect()->to(base_url('/financeiro/listarcontasreceber'));
//         } else
//             return $log;
//     }




//     public function login()
//     {
//         return view('/login/login');
//     }
// }
