<?= $this->extend('layout') ?>

<?= $this->section('header') ?>

<?= $this->endSection() ?>

<?= $this->section('pageheading') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">EDITAR ATIVIDADE</h1>
</div>
<hr />
<?= $this->endSection() ?>


<?= $this->section('content') ?>


<form class="row g-3 form_atividades" method="post" action="<?= base_url('alterarAtividade/' . $atividade['id_atividade']) ?>">
    <?php 
    $questoes = [
        1 => "Crie um programa que defina as variáveis a e b com valores predefinidos, respectivamente, e exiba a soma desses valores.",
        2 => "Crie um programa que defina as variáveis nota1 e nota2 com valores predefinidos, e calcule a média.",
        3 => "Escreva um programa que defina uma variável num com um valor predefinido e exiba se o número é 'Par' ou 'Ímpar'.",
        4 => "Crie um programa que utilize um loop para exibir os números de 1 a 5 na tela.",
        5 => "Crie um programa que defina uma variável num com um valor predefinido e calcule o seu fatorial.",
        6 => "Crie um programa que defina as variáveis x e y com valores predefinidos e exiba o maior valor entre eles.",
        7 => "Crie um programa que defina um número predefinido e exiba a tabuada desse número de 1 a 10.",
        8 => "Crie um programa que utilize um loop para exibir apenas os números pares de 1 a 10 na tela.",
        9 => "Crie um programa que defina uma variável idade com um valor predefinido e exiba 'Maior de idade' se for 18 ou mais, senão exiba 'Menor de idade'.",
        10 => "Crie um programa que defina uma variável nota com um valor predefinido e exiba 'Aprovado' se for maior ou igual a 7, senão exiba 'Reprovado'."
    ];

    for ($i = 1; $i <= 10; $i++): ?>
        <div class="col-md-12">
            <label for="atividade<?= $i ?>" class="form-label">Questão <?= $i ?>: <?= $questoes[$i] ?></label><br>
            <textarea name="atividade<?= $i ?>" id="atividade<?= $i ?>" rows="5" cols="70" placeholder="Digite seu código C++ aqui..."><?= isset($atividade["atividade$i"]) ? $atividade["atividade$i"] : '' ?></textarea><br>

            <?php if (isset($resultados["atividade" . $i])): ?>
                <div class="alert alert-info mt-2">
                    <?= $resultados["atividade" . $i] ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endfor; ?>

    <div class="col-12 btn_compilar">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>



<div class="resultado_compilado">
    <?php if (session()->getFlashdata('resultado')): ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('resultado') ?>
        </div>
    <?php endif; ?>
</div>


<?= $this->endSection() ?>