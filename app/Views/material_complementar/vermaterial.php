<?= $this->extend('layout') ?>
<?= $this->section('pageheading') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">LISTA DE MATERIAIS CADASTRADOS</h1>
</div>
<script>
  window.onload = function() {
    var formularios = document.getElementsByClassName("btnExcluir");
    for (var i = 0; i < formularios.length; i++) {
      formularios[i].onsubmit = function() {
        return window.confirm("Deseja excluir esse material?");
      }
    }

  }
</script>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nome do material</th>
        <th scope="col">Link do material</th>

        <th scope="col" style="width:30px">Ações</th>
        <th scope="col" style="width:30px"> </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($material as $m) { ?>
        <tr>
          <td> <?= $m['nome_material'] ?> </td>
          <td> <?= $m['link_material'] ?> </td>

          <td>
            <a href="<?= base_url('material_complementar/editarMaterial/' . $m['id_material']) ?>"><button type="button" class="btn btn-primary">Editar</button></a>
          </td>


          <td>
            <form class="btnExcluir" action="<?= base_url('excluirMaterial') ?>" method="post">
              <input type="hidden" name="id" value="<?= $m['id_material'] ?>">
              <input type="submit" class="btn btn-danger" value="Excluir" />
            </form>
          </td>

        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>