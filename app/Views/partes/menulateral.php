<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/base')?>">
                <div class="sidebar-brand-icon ">
                    <!-- <i class="fas fa-laugh-wink"></i> rotate-n-15-->
                    <img style="width: 50px;" src="<?php  echo base_url('img/icon.png')?>">

                </div>
                
                <div class="sidebar-brand-text mx-3">CodeMaster</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('/base')?>">
                <i class="fa-solid fa-lightbulb"></i>
                    <span>Plataforma CodeMaster</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
             Lógica de programação
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
         


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-code" aria-hidden="true"></i>
                    <span>Curso de Algoritmo</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Curso de Algoritmo:</h6>
                        <a class="collapse-item" href="<?= base_url('conteudo/curso')?>">Conteúdo</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-laptop-code"></i>
                    <span>Atividades</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Atividades:</h6>
                        <a class="collapse-item" href="<?= base_url('atividades/quiz')?>">Quiz</a>
                        <a class="collapse-item" href="<?= base_url('atividades/atividade')?>">Atividade</a>
                        <a class="collapse-item" href="<?= base_url('testaAlgoritmo/compilador')?>">Compilador</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFor"
                    aria-expanded="true" aria-controls="collapseFor">
                    <!-- <i class="fa fa-address-card"></i> -->
                    <i class="fa-solid fa-book"></i>
                    <span>Material Complementar</span>
                </a>
                <div id="collapseFor" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Material Complementar:</h6>
                        <a class="collapse-item"  href="<?= base_url('material_complementar/material')?>">Material</a>   
                    </div>
                </div>
            </li>
            

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!--        
                <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->


        </ul>
  
