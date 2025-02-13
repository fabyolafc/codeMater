<?= $this->extend('layout') ?>

<?= $this->section('pageheading') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">LISTA DE ATIVIDADES COMPILADAS</h1>
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
                <th scope="col">Atividade 1</th>
                <th scope="col">Atividade 2</th>
                <th scope="col">Atividade 3</th>
                <th scope="col">Atividade 4</th>
                <th scope="col">Atividade 5</th>
                <th scope="col">Atividade 6</th>
                <th scope="col">Atividade 7</th>
                <th scope="col">Atividade 8</th>
                <th scope="col">Atividade 9</th>
                <th scope="col">Atividade 10</th>

                <th scope="col" style="width:30px">Ações</th>
                <th scope="col" style="width:30px"> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atividade as $a) { ?>
                <tr>
                    <td> <?= $a['atividade1'] ?> </td>
                    <td> <?= $a['atividade2'] ?> </td>
                    <td> <?= $a['atividade3'] ?> </td>
                    <td> <?= $a['atividade4'] ?> </td>
                    <td> <?= $a['atividade5'] ?> </td>
                    <td> <?= $a['atividade6'] ?> </td>
                    <td> <?= $a['atividade7'] ?> </td>
                    <td> <?= $a['atividade8'] ?> </td>
                    <td> <?= $a['atividade9'] ?> </td>
                    <td> <?= $a['atividade10'] ?> </td>

                    <td>
                        <a href="<?= base_url('atividades/editarAtividade/' . $a['id_atividade']) ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                    </td>

                    <td>
                        <form class="btnExcluir" action="<?= base_url('excluirAtividade') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $a['id_atividade'] ?>">
                            <input type="submit" class="btn btn-danger" value="Excluir" />
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>

<?= $this->endSection() ?>