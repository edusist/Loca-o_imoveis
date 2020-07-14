<?php

//Rotas
Route::get('/', function () {
    return view('index');
})->name('tela.login');



Route::get('/home', 'HomeController@index'); //Apenas Usuários(User) comuns autênticados tem acesso a está página 

Auth::routes();


Route::get('/admin', 'AdminController@saldo')->name('admin.painel'); //Apenas Administradores(Admin) autênticados tem acesso a está página 
Route::get('/admin/login', 'adminAuth\AdminLoginController@showLoginForm')->name('admin.login'); //admin/
Route::post('/admin/login', 'adminAuth\AdminLoginController@login')->name('admin.login.submit'); //admin/login foi sustituido pelo atual
Route::get('/admin/logout', 'adminAuth\AdminLoginController@logout')->name('admin.logout');
Route::get('/admin/register', 'adminAuth\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'adminAuth\RegisterController@register')->name('admin.register');
/* * **********************************Rotas de Imóveis******************************************************************** */

Route::get('/corretor', 'sistema\CorretorController@index')->name('inicio.corretor');

Route::get('/inquilino', 'sistema\InquilinoController@index')->name('inicio.inquilino');

Route::get('/proprietario', 'sistema\ProprietarioController@index')->name('inicio.proprietario');

Route::get('/imovel', 'sistema\ImovelController@index')->name('inicio.imovel');

Route::get('/aluguel', 'sistema\AluguelController@index')->name('inicio.aluguel');
/* * **********************************Rotas de Recebimento******************************************************************** */
Route::resource('/admin/recebimento', 'sistema\receiptsController');
Route::get('/admin/receber-pdf', 'sistema\receiptsController@pdf')->name('receber.pdf');


//Pesquisar contas á receber
Route::get('/admin/pesquisar', 'sistema\receiptsController@pesquisar')->name('pesquisar');
Route::get('/admin/informacaoPesquisaReceber', 'sistema\receiptsController@informacaoPesquisaRec')->name('informacaoPesquisaReceber');
//Filtrar por período
Route::get('/admin/filtro-por-periodo/{id}', 'sistema\receiptsController@filtroPorPeriodo')->name('filtroPorPeriodo');

//Excluir tudo
Route::get('/admin/excluir-todas-rec', 'sistema\receiptsController@getExcluirTodasRec')->name('getExcluirTodasRec');
Route::delete('/admin/excluir-todas-rec', 'sistema\receiptsController@DeleteTodasRec')->name('DeleteTodasRec');


//Pesquisa por data Recebimento
Route::get('/admin/pesquisar-data-receber', 'sistema\receiptsController@pesquisarDataReceber')->name('pesquisarDataReceber');
Route::post('/admin/pesquisar-data-receber', 'sistema\receiptsController@postPesquisarDataReceber')->name('postPesquisarDataReceber');

//Importar e exportar Excel Recebimento
Route::get('/admin/getImportar', 'ExcelController@getImportar')->name('getImportar');
Route::post('/admin/postImportar', 'ExcelController@postImportar')->name('postImportar');
Route::get('/admin/getExportar', 'ExcelController@getExportar')->name('getExportar');

//Gráfico Recebimento
Route::get('/admin/grafico-recebimento', 'ExcelController@graficoRecebimento')->name('graficoRecebimento');
Route::get('/admin/getGrafico', 'ExcelController@getGrafico')->name('getGrafico');
Route::get('/admin/empresaRecebimento/{empresa}', 'sistema\receiptsController@empresaRecebimento')->name('empresaRecebimento');




/* * ********************************************************************************************************************** */









/* * **********************************Rotas do Usuário**************************************************************** */
Route::resource('/admin/usuarios', 'sistema\UserController');

//Rotas do sistema
Route::get('/admin/cadastroform', 'sistema\UserController@cadastroform');
Route::get('/admin/official', 'sistema\UserController@relacionatblUserOfficial');
/* * *********************************Rotas do fornecedor************************************************************** */
Route::resource('/admin/fornecedor', 'sistema\ProviderController');
/* * *********************************Rotas do empresa****************************************************************** */
Route::resource('/admin/empresa', 'sistema\CompanieController');
/* * *********************************Rotas do banco********************************************************************** */
Route::resource('/admin/banco', 'sistema\BankController');
//Rotas do Empresa_banco controller
Route::resource('/admin/empresa_banco_ctrl', 'sistema\CompanieBankController');

//Forma de pagamento
Route::resource('/admin/forma-pagamento', 'sistema\FormaPagamentosController');

