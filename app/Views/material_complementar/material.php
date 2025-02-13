<?= $this->extend('layout') ?>

<?= $this->section('header') ?>

<?= $this->endSection() ?>

<?= $this->section('pageheading') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">CADASTRO DE MATERIAL COMPLEMENTAR</h1><br>
    <a href="<?= base_url('/material_complementar/vermaterial') ?>" class="btn btn-sm btn-primary shadow-sm"><i class="fa fa-eye"></i> VISUALIZAR MATERIAIS CADASTRADOS</a>
</div>
<hr />
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<style>
    .campo-obrigatorio {
        border: 1px solid red;
    }
</style>

<form class="row g-3 form_material" method="post" action="<?= base_url('inserirMaterial') ?>">
    <div class="col-md-3">
        <input type="text" name="nome_material" class="form-control" id="inputEmail4" placeholder="Digite o nome do material">
    </div>

    <div class="col-md-6">
        <input type="text" name="link_material" class="form-control" id="inputEmail4" placeholder="Digite o link"><br>
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
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