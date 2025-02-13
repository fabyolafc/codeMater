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
    <link href="<?php  echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php  echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Recuperação de Senha</h1>

                                        <hr>
                                        
                                        <p class="text-justify">Insira o seu email de recuperação e enviaremos um código para que você possa recuperar o acesso à sua conta.</p>
                                    </div>

                                    <form class="user" method="post" action="<?= base_url('enviaEmail') ?>" >
                                        <div class="form-group" >
                                            <input  name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Enviar</button>
                                      
                                        <hr>
                                    </form>
                                    
                                    <div class="text-center">
                                        <a class="small" href="<?=base_url('/')?>">Lembrei a minha senha!</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('js/demo/chart-pie-demo.js')?>"></script>

</body>

</html>