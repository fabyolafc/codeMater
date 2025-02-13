<?= $this->extend('layout') ?>

<?= $this->section('pageheading') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">LISTA DE QUIZ CADASTRADOS</h1>
</div>

<script>
    window.onload = function() {
        var formularios = document.getElementsByClassName("btnExcluir");
        for (var i = 0; i < formularios.length; i++) {
            formularios[i].onsubmit = function() {
                return window.confirm("Deseja excluir esse quiz?");
            }
        }
    }
</script>

<!-- Tornar a tabela responsiva -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Quiz 1</th>
                <th scope="col">Quiz 2</th>
                <th scope="col">Quiz 3</th>
                <th scope="col">Quiz 4</th>
                <th scope="col">Quiz 5</th>
                <th scope="col">Quiz 6</th>
                <th scope="col">Quiz 7</th>
                <th scope="col">Quiz 8</th>
                <th scope="col">Quiz 9</th>
                <th scope="col">Quiz 10</th>
                <th scope="col">Quiz 11</th>
                <th scope="col">Quiz 12</th>
                <th scope="col">Quiz 13</th>
                <th scope="col">Quiz 14</th>
                <th scope="col">Quiz 15</th>

                <th scope="col" style="width:30px">Ações</th>
                <th scope="col" style="width:30px"> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quiz as $q) { ?>
                <tr>
                    <td> <?= $q['quiz1'] ?> </td>
                    <td> <?= $q['quiz2'] ?> </td>
                    <td> <?= $q['quiz3'] ?> </td>
                    <td> <?= $q['quiz4'] ?> </td>
                    <td> <?= $q['quiz5'] ?> </td>
                    <td> <?= $q['quiz6'] ?> </td>
                    <td> <?= $q['quiz7'] ?> </td>
                    <td> <?= $q['quiz8'] ?> </td>
                    <td> <?= $q['quiz9'] ?> </td>
                    <td> <?= $q['quiz10'] ?> </td>
                    <td> <?= $q['quiz11'] ?> </td>
                    <td> <?= $q['quiz12'] ?> </td>
                    <td> <?= $q['quiz13'] ?> </td>
                    <td> <?= $q['quiz14'] ?> </td>
                    <td> <?= $q['quiz15'] ?> </td>

                    <td>
                        <a href="<?= base_url('atividades/editarQuiz/' . $q['id_quiz']) ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                    </td>

                    <td>
                        <form class="btnExcluir" action="<?= base_url('excluirQuiz') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $q['id_quiz'] ?>">
                            <input type="submit" class="btn btn-danger" value="Excluir" />
                        </form>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
