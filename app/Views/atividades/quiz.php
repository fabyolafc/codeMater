<?= $this->extend('layout') ?>

<?= $this->section('header') ?>

<?= $this->endSection() ?>

<?= $this->section('pageheading') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">QUIZ</h1><br>
    <a href="<?= base_url('/atividades/verquiz') ?>" class="btn btn-sm btn-primary shadow-sm"><i class="fa fa-eye"></i> VISUALIZAR QUIZ CADASTRADOS</a>
</div>
<hr />
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<style>
    .resposta {
        background-color: #4e73df;
        padding: 10px;
        color: white;
        word-wrap: break-word;
        display: none;
    }
</style>

<form class="row g-3" method="post" action="<?= base_url('inserirQuiz') ?>" onsubmit="return validarFormulario()">
    <div class="col-md-12">
        <label class="form-label">1 – Como podemos definir um Algoritmo?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz1" id="#" value="A">
            <label>
                A. Sequência de comandos ordenados, infinitos e ambíguos que são empregados para executar uma tarefa.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz1" id="#" value="B">
            <label>
                B. Sequência de instruções ordenadas, infinitas e não-ambíguas que são empregadas para executar uma tarefa.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz1" id="#" value="C">
            <label>
                C. Sequência de instruções ordenadas, finitas e não-ambíguas que são empregadas para executar uma tarefa.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz1" id="#" value="D">
            <label>
                D. Sequência de comandos ordenados, infinitos e não-ambíguos que são empregados para executar uma tarefa.
            </label><br><br>
        </div>

        <p class="resposta">C. Sequência de instruções ordenadas, finitas e não-ambíguas que são empregadas para executar uma tarefa.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">2 – Qual dos seguintes itens possui apenas tipos válidos usados em lógica de programação (tipos primitivos)?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz2" id="#" value="A">
            <label>
                A. Inteiro, Temporal, Caractere, Double.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz2" id="#" value="B">
            <label>
                B. Booleano, Real, Inteiro, Irracional.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz2" id="#" value="C">
            <label>
                C. Inteiro, Booleano, Tipografia, Double.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz2" id="#" value="D">
            <label>
                D. Inteiro, Booleano, Caractere, Double.
            </label><br><br>
        </div>

        <p class="resposta">D. Inteiro, Booleano, Caractere, Double.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">3 – Quais são todos os estados possíveis que um tipo lógico pode assumir?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz3" id="#" value="A">
            <label>
                A. Verdadeiro, Duvidoso.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz3" id="#" value="B">
            <label>
                B. Falso, Duvidoso, Verdadeiro.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz3" id="#" value="C">
            <label>
                C. Verdadeiro, Errado.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz3" id="#" value="D">
            <label>
                D. Verdadeiro, Falso.
            </label><br><br>
        </div>

        <p class="resposta">D. Verdadeiro, Falso.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">4 – Qual dos seguintes itens é melhor representado por um valor constante em um algoritmo?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz4" id="#" value="A">
            <label>
                A. Valor matemático de Pi.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz4" id="#" value="B">
            <label>
                B. Salário de um Funcionário.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz4" id="#" value="C">
            <label>
                C. Valor da Temperatura no final de semana.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz4" id="#" value="D">
            <label>
                D. Velocidade de um carro em movimento.
            </label><br><br>
        </div>

        <p class="resposta">A. Valor matemático de Pi.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">5 – Quais dos itens a seguir apresentam apenas nomes de variáveis que são válidos?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz5" id="#" value="A">
            <label>
                A. nome Aluno, nota2, CEP, RuaNumero.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz5" id="#" value="B">
            <label>
                B. AlunoNumero, nota00002, cep, ruaComNumeroDaCasa.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz5" id="#" value="C">
            <label>
                C. nomeAluno, 2nota, CEP, RuAnUmErO.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz5" id="#" value="D">
            <label>
                D. nomeAluno, nota2, CEP, Rua+Número.
            </label><br><br>
        </div>

        <p class="resposta">B. AlunoNumero, nota00002, cep, ruaComNumeroDaCasa.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">6 – O que é Compilação?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz6" id="#" value="A">
            <label>
                A. Organização do código-fonte em uma pasta contendo arquivos em ordem alfabética.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz6" id="#" value="B">
            <label>
                B. Execução das instruções contidas em um script contendo o código-fonte, de forma sequencial.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz6" id="#" value="C">
            <label>
                C. Tradução do código-fonte em um ou mais arquivos que podem ser armazenados e executados quantas vezes se desejar, sem necessitar de nova compilação.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz6" id="#" value="D">
            <label>
                D. Junção de comandos do código-fonte em um arquivo empacotado para distribuição por um meio específico para instalação do programa.
            </label><br><br>
        </div>
        <p class="resposta">C. Tradução do código-fonte em um ou mais arquivos que podem ser armazenados e executados quantas vezes se desejar, sem necessitar de nova compilação.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">7 – Qual dos seguintes itens mostra um laço for (para) escrito corretamente?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz7" id="#" value="A">
            <label>
                A. para (con = 1; con < 10; con–) { instruções }.
                    </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz7" id="#" value="B">
            <label>
                B. para (con = 10; con >= 1; con++) { instruções }.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz7" id="#" value="C">
            <label>
                C. para (con = 10; con < 10; con–) { instruções }.
                    </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz7" id="#" value="D">
            <label>
                D. para (con = 1; con <= 10; con++) { instruções }.
                    </label><br><br>
        </div>

        <p class="resposta">D. para (con = 1; con <= 10; con++) { instruções }.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">8 – O que significam, respectivamente, os símbolos de fluxograma a seguir?</label><br>
        <p>Um losango (◊) | Um retângulo (▬) | Um paralelogramo (▱)</p>
        <div class="form-check">
            <input type="radio" name="quiz8" id="#" value="A">
            <label>
                A. Processo, Decisão, Repetição.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz8" id="#" value="B">
            <label>
                B. Decisão, Processo, Entrada / Saída.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz8" id="#" value="C">
            <label>
                C. Entrada / Saída, Repetição, Decisão.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz8" id="#" value="D">
            <label>
                D. Decisão, Início / Fim, Repetição.
            </label><br><br>
        </div>

        <p class="resposta">B. Decisão, Processo, Entrada / Saída.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">9 – O que é uma Variável?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz9" id="#" value="A">
            <label>
                A. Valor que varia conforme passa o tempo, sendo sempre modificado conforme o programa vai sendo executado.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz9" id="#" value="B">
            <label>
                B. Estado lógico de uma constante, que pode variar entre verdadeiro e falso.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz9" id="#" value="C">
            <label>
                C. Valor armazenado em locais variáveis no computador, como HD, RAM ou Memória Cache.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz9" id="#" value="D">
            <label>
                D. Local na memória RAM do computador utilizado para armazenar temporariamente dados que são utilizados pelo programa.
            </label><br><br>
        </div>

        <p class="resposta">D. Local na memória RAM do computador utilizado para armazenar temporariamente dados que são utilizados pelo programa.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">10 – Como funciona um laço while (enquanto)?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz10" id="#" value="A">
            <label>
                A. Um laço while não repete o bloco de código associado enquanto um teste lógico realizado retornar verdadeiro.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz10" id="#" value="B">
            <label>
                B. Um laço while repete o bloco de código associado um número de vezes específico, determinado em sua declaração.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz10" id="#" value="C">
            <label>
                C. Um laço while repete o bloco de código associado enquanto um teste lógico realizado retornar verdadeiro.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz10" id="#" value="D">
            <label>
                D. Um laço while espera enquanto o usuário não pressiona uma tecla para decidir qual caminho tomar no fluxo do algoritmo.
            </label><br><br>
        </div>

        <p class="resposta">C. Um laço while repete o bloco de código associado enquanto um teste lógico realizado retornar verdadeiro.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">11 – Para que serve o operador aritmético de módulo (%)?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz11" id="#" value="A">
            <label>
                A. Calcular o resto de uma divisão inteira.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz11" id="#" value="B">
            <label>
                B. Operador que realiza cálculo de porcentagens.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz11" id="#" value="C">
            <label>
                C. Retornar o módulo matemático (valor absoluto).
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz11" id="#" value="D">
            <label>
                D. Calcular o retorno de uma função variável.
            </label><br><br>
        </div>

        <p class="resposta">A. Calcular o resto de uma divisão inteira.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">12 – Qual a diferença entre os operadores lógicos E (AND) e OU (OR)?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz12" id="#" value="A">
            <label>
                A.OR retorna V apenas se todas as expressões de entrada forem verdadeiras, e o AND retorna V se ao menos uma delas for verdadeira.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz12" id="#" value="B">
            <label>
                B. AND retorna V apenas se todas as expressões de entrada forem verdadeiras, e o OR retorna V se ao menos uma delas for verdadeira.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz12" id="#" value="C">
            <label>
                C. AND retorna F apenas se todas as expressões de entrada forem verdadeiras, e o OR retorna F se ao menos uma das expressões de entrada for verdadeira.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz12" id="#" value="D">
            <label>
                D. AND retorna F apenas se todas as expressões de entrada forem verdadeiras, e o OR retorna F se todas as expressões de entrada forem verdadeiras.
            </label><br><br>
        </div>

        <p class="resposta">B. AND retorna V apenas se todas as expressões de entrada forem verdadeiras, e o OR retorna V se ao menos uma delas for verdadeira.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">13 – Qual dos seguintes é um operador de concatenação de strings válido?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz13" id="#" value="A">
            <label>
                A. +.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz13" id="#" value="B">
            <label>
                B. *.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz13" id="#" value="C">
            <label>
                C. ->.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz13" id="#" value="D">
            <label>
                D. ;.
            </label><br><br>
        </div>

        <p class="resposta">A. +.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">14 – Observe o fluxograma a seguir e responda:</label><br>
        <P>Início: O processo começa com a ação de calcular a média.</P>
        <P>Decisão: Verifica-se se a média calculada é maior ou igual a 7:</P>
        <P> - Se Verdadeiro (V): A pessoa é classificada como "Aprovado".</P>
        <P> - Se Falso (F): A pessoa é classificada como "Reprovado".</P>
        <P>Fim: Após a classificação (aprovado ou reprovado), o fluxo é encerrado.</P>
        <P>Que tipo de estrutura de decisão está sendo empregada?</P>
        <div class="form-check">
            <input type="radio" name="quiz14" id="#" value="A">
            <label>
                A. Decisão Condicional Simples.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz14" id="#" value="B">
            <label>
                B. Decisão Condicional Encadeada.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz14" id="#" value="C">
            <label>
                C. Decisão Condicional Complexa.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz14" id="#" value="D">
            <label>
                D. Decisão Condicional Composta.
            </label><br><br>
        </div>

        <p class="resposta">D. Decisão Condicional Composta.</p><br>
    </div>

    <div class="col-md-12">
        <label class="form-label">15 – Para que serve uma biblioteca?</label><br>
        <div class="form-check">
            <input type="radio" name="quiz15" id="#" value="A">
            <label>
                A. Para que os programadores possam consultar a documentação da linguagem com facilidade.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz15" id="#" value="B">
            <label>
                B. Uma biblioteca é um programa que permite escrever e testar código-fonte, também conhecida como IDE.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz15" id="#" value="C">
            <label>
                C. Uma biblioteca é um arquivo que organiza código pré-definido para o uso em aplicações.
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="quiz15" id="#" value="D">
            <label>
                D. Para modularizar o desenvolvimento de estruturas de comparação e repetição.
            </label><br><br>
        </div>

        <p class="resposta">C. Uma biblioteca é um arquivo que organiza código pré-definido para o uso em aplicações.</p><br>
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
        
    </div>
</form>
<br>
<button id="verRespostas" class="btn btn-primary">Ver respostas</button>

<script>
    document.getElementById("verRespostas").addEventListener("click", function() {
        // Mostra todas as respostas ao clicar no botão
        const respostas = document.querySelectorAll('.resposta');
        respostas.forEach(function(resposta) {
            resposta.style.display = 'block'; // Exibe a resposta
        });
    });

    function validarFormulario() {
        // Obtém todos os inputs do tipo radio no formulário
        const perguntas = document.querySelectorAll('input[type="radio"]');

        // Agrupamento das perguntas por nome
        const respostas = {};
        perguntas.forEach(input => {
            if (!respostas[input.name]) {
                respostas[input.name] = false;
            }
            if (input.checked) {
                respostas[input.name] = true;
            }
        });

        // Verifica se todas as perguntas foram respondidas
        const naoRespondidas = Object.values(respostas).some(respondida => !respondida);

        if (naoRespondidas) {
            alert('Por favor, responda todas as perguntas antes de enviar o formulário.');
            return false; // Impede o envio do formulário
        }

        return true; // Permite o envio do formulário
    }
</script>


</script>

<?= $this->endSection() ?>