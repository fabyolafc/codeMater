<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'home::index');
$routes->get('/base', 'Home::base');

// Rota Conteúdo
$routes->get('/conteudo/curso', 'Home::curso');

// Rota Atividades (QUIZ)
$routes->get('/atividades/quiz', 'Home::quiz');

$routes->post('inserirQuiz', 'Home::inserirQuiz');
$routes->get('/atividades/verquiz','home::verQuiz');
$routes->post('excluirQuiz', 'Home::excluirQuiz');
$routes->get('atividades/editarQuiz/(:num)', 'Home::editarQuiz/$1');
$routes->post('alterarQuiz/(:num)', 'Home::alterarQuiz/$1');


// Rota Atividades (ATIVIDADES)
$routes->get('/atividades/atividade', 'Home::atividade');
$routes->post('inserirAtividade', 'Home::inserirAtividade');
$routes->get('/atividades/veratividade','home::verAtividade');
$routes->post('excluirAtividade', 'Home::excluirAtividade');
$routes->get('atividades/editarAtividade/(:num)', 'Home::editarAtividade/$1');
$routes->post('alterarAtividade/(:num)', 'Home::alterarAtividade/$1');

// Rota Compilador (COMPILADOR)
$routes->get('/testaAlgoritmo/compilador', 'Home::compilador');
$routes->post('inserirCompilador', 'Home::inserirCompilador');

// Rota Material
$routes->get('/material_complementar/material', 'Home::material');
$routes->post('inserirMaterial', 'Home::inserirMaterial');
$routes->get('/material_complementar/vermaterial','home::verMaterial');
$routes->post('excluirMaterial', 'Home::excluirMaterial');
$routes->get('material_complementar/editarMaterial/(:num)', 'Home::editarMaterial/$1');
$routes->post('alterarMaterial/(:num)', 'Home::alterarMaterial/$1');




// $routes->get('/financeiro/cadcontasapagar', 'Home::cadcontasapagar');
// $routes->get('/financeiro/cadcontasareceber', 'Home::cadcontasareceber');
// $routes->get('/financeiro/cadmovimentocaixa', 'Home::cadmovimentocaixa');
// $routes->get('/cadastro/caixabanco', 'Home::caixabanco');
// $routes->get('/cadastro/planodecontas', 'Home::planodecontas');
// $routes->get('/cadastro/fornecedor', 'Home::fornecedor');
// $routes->get('relatorio/relcontaspagar', 'Home::relcontaspagar');
// $routes->get('relatorio/relcontasreceber', 'Home::relcontaspagar');
// $routes->get('relatorio/relextrato', 'Home::relextrato');


//rotas do formulário de clientes
// $routes->post('salvarcliente', 'Home::salvarcliente');
// $routes->get('cadastro/viewclientes','home::viewclientes');
// $routes->post('excluircliente', 'Home::excluircliente');


//rotas para fazer alteração no cadastro de clientes
// $routes->get('cadastro/viewclientes/vizaltclientes/(:num)', 'Home::vizaltclientes/$1');

// $routes->post('atualizarcliente/(:num)', 'Home::atualizarcliente/$1');



//rotas dos formularios do fornecedor
// $routes->post('salvarfornecedor', 'Home::salvarfornecedor');
// $routes->get('cadastro/listarfornecedor', 'Home::listarfornecedor');
// $routes->get('cadastro/listarfornecedor/editarfornecedor/(:num)', 'Home::editarfornecedor/$1');
// $routes->post('excluirfornecedor', 'Home::excluirfornecedor');
// $routes->post('alterarfornecedor/(:num)', 'Home::alterarfornecedor/$1');


//rotas do cadastro de bancos
// $routes->post('salvarbanco', 'Home::salvarbanco');
// $routes->get('/cadastro/listarcaixabanco', 'Home::listarcaixabanco');
//rotas para fazer alteração no cadastro de bancos
// $routes->post('atualizarbanco/(:num)', 'Home::atualizarbanco/$1');
// $routes->get('/cadastro/listarcaixabanco/alterarbanco/(:num)', 'Home::alterarbanco/$1');
// $routes->post('excluirbanco', 'Home::excluirbanco');

//rotas do plano de contas
// $routes->post('salvarplano', 'Home::salvarplano');
// $routes->get('/cadastro/listarplanodecontas', 'Home::listarplanodecontas');
//rotas para fazer alteração no cadastro de bancos
// $routes->post('atualizarplano/(:num)', 'Home::atualizarplano/$1');
// $routes->get('/cadastro/listarplanodecontas/alterarplano/(:num)', 'Home::alterarplano/$1');
// $routes->post('excluirplano', 'Home::excluirplano');

//rotas do formulário de contas a pagar
// $routes->post('salvarcontaspagar', 'Home::salvarcontaspagar');
// $routes->get('/financeiro/listarcontaspagar', 'Home::listarcontaspagar');
// $routes->post('excluircontaspagar', 'Home::excluircontaspagar');
// $routes->get('/financeiro/listarcontaspagar/editarcontaspagar/(:num)', 'Home::editarcontaspagar/$1');
// $routes->post('alterarcontaspagar/(:num)', 'Home::alterarcontaspagar/$1');

//rotas do formulário de contas a receber
// $routes->post('salvarcontasreceber', 'Home::salvarcontasreceber');
// $routes->get('/financeiro/listarcontasreceber', 'Home::listarcontasreceber');
// $routes->post('excluircontasreceber', 'Home::excluircontasreceber');
// $routes->get('/financeiro/listarcontasreceber/editarcontasreceber/(:num)', 'Home::editarcontasreceber/$1');
// $routes->post('alterarcontasreceber/(:num)', 'Home::alterarcontasreceber/$1');

//login
$routes->get('login', 'Login::login');
$routes->post('dadoslogin', 'Login::dadoslogin');
$routes->get('logout', 'Login::logout');
$routes->get('newuser', 'Login::newuser');
$routes->post('novousuario', 'Login::novousuario');

//recuperação de senha
$routes->get('/resetuser/resetsenha', 'Reset::resetsenha');
$routes->post('enviaEmail', 'Reset::enviaEmail');
$routes->get('/resetuser/resetsenhatoken/(:segment)', 'Reset::newPassword/$1');
$routes->post('processaRedefinicao', 'Reset::processaRedefinicao');
$routes->get('/resetuser/resetsenhasucesso', 'Reset::resetsenhasucesso');
$routes->get('/resetuser/resetsenhafalha', 'Reset::resetsenhafalha');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
