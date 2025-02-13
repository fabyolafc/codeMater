<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CodeMaster</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/codemaster.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('partes/menulateral') ?>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?= $this->include('partes/header') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <section class="container-codemaster">
                    <h1 class="titulo-codemaster">Bem-vindo ao CodeMaster – Aprenda Programação de Forma Simples e Eficiente</h1>
                    <div class="container-conteudo">
                        <img src="<?= base_url('./img/jovem.png') ?>" />

                        <div class="conteudo-codemaster">
                            <p>O CodeMaster é uma plataforma desenvolvida especialmente para facilitar o aprendizado de programação para iniciantes. Entendemos que começar a programar pode ser um desafio, e por isso criamos um ambiente intuitivo e prático, onde você pode explorar conceitos fundamentais, como algoritmos, estruturas de controle e variáveis, de maneira descomplicada.</p>

                            <p>Nosso objetivo é transformar a aprendizagem em uma experiência acessível e motivadora, por meio de cursos, atividades práticas e materiais complementares. Aqui, você poderá testar seus conhecimentos, resolver problemas reais e avançar no seu ritmo, enquanto desenvolve habilidades essenciais para o mundo da tecnologia.</p>

                            <p>Junte-se a nós e descubra como o CodeMaster pode ajudar você a dar os primeiros passos no universo da programação e superar barreiras iniciais de aprendizado. Aprender programação nunca foi tão simples!</p>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?= $this->include('partes/footer') ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se estiver pronto para encerrar sua sessão atual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?= base_url('logout') ?>">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?php echo base_url('js/demo/chart-pie-demo.js') ?>"></script>

</body>

</html>