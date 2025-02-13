<?= $this->extend('layout') ?>

<?= $this->section('header') ?>

<?= $this->endSection() ?>

<?= $this->section('pageheading') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">EDITAR MATERIAL</h1>
</div>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<hr />

<form class="row g-3 form_material" method="post" action="<?= base_url('alterarMaterial/' . $material['id_material']) ?>">

  <div class="col-md-6">
    <label for="inputEmail4">Nome do material</label>
    <input type="text" name="nome_material" value="<?= $material['nome_material'] ?>" class="form-control" id="inputEmail4" placeholder="Nome">
  </div>

  <div class="col-md-6">
    <label for="inputEmail4">Link do material</label>
    <input type="text" name="link_material" value="<?= $material['link_material'] ?>" class="form-control" id="inputEmail4" placeholder="link"><br>
  </div>

  <input type="hidden" name="id" value="<?= $material['id_material'] ?>">

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</form>

<script>
    function validarFormulario(formulario) {
        const nomeMaterial = formulario.querySelector('input[name="nome_material"]');
        const linkMaterial = formulario.querySelector('input[name="link_material"]');

        // Verifica se os campos estão preenchidos
        if (nomeMaterial.value.trim() === '' || linkMaterial.value.trim() === '') {
            alert('Por favor, preencha todos os campos antes de enviar.');
            return false; // Retorna false para impedir o envio
        }
        return true; // Retorna true para permitir o envio
    }

    // Adiciona o evento de validação ao formulário
    document.querySelector('.form_material').addEventListener('submit', function(event) {
        if (!validarFormulario(this)) {
            event.preventDefault(); // Impede o envio se a validação falhar
        }
    });
</script>


<?= $this->endSection() ?>