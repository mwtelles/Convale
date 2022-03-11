<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Ata;
use App\Lei;
use App\Superintendencia;
use App\Transparencia;
use App\Estatuto;
use App\Licenca;
use App\Edital;
use App\Galeria;
use App\ServicosAterro;
use App\Post;
use Illuminate\Support\Facades\DB;

Auth::routes();


// ROTAS DO PAINEL ADMINISTRATIVO
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::prefix('/posts')->group(function(){
	// Route::get('block','PostsController');
	// Route::get('unblock','PostsController');
	});

	Route::resource('posts','PostsController');
	Route::resource('transparencias','TransparenciasController');
	Route::resource('atas','AtasController');
	Route::resource('licencas','LicencasController');
	Route::resource('leis','LeisController');
	Route::resource('estatutos','EstatutosController');
	Route::resource('editais','EditaisController');
	Route::resource('superintendencias','SuperintendenciasController');
	Route::resource('galerias','GaleriasController');
	Route::resource('servicosaterros','ServicosAterrosController');
	\BeautifulSea\LaravelRamodnil\LaravelRamodnilServiceProvider::routes();
});


// ============ROTAS DO SITE===================

// INICIO
Route::get('/', 'IndexController@index');

// ATA
Route::get('atas', function(){
	$atas = Ata::all()->groupBy('date');//Traz todas atas agrupadas por data
	return view('atas',[
		'atas'	=>	$atas
	]);
});

// ATERRO
Route::get('servicos-aterro', function(){
	$servicosaterros = ServicosAterro::all()->groupBy('date');//Traz todos editais agrupados por data
	return view('servicos-aterro',[
		'servicosaterros'	=>	$servicosaterros
	]);
});

// PROJETOS
Route::get('projetos', function(){
	return view('projetos',[
		'galerias'   =>  Galeria::all()
	]);
});

// NOTICIAS
Route::get('noticias', function(){
	return view('noticias',[
		'noticias'	=>	Post::orderBy('created_at','desc')->paginate(4)
	]);
});


// EDITAIS
Route::get('editais', function(){
	$editais = Edital::all()->groupBy('date');//Traz todos editais agrupados por data
	return view('editais',[
		'editais'	=>	$editais
	]);
});

// GALERIA
Route::get('galeria', function(){
	return view('galeria',[
		'galerias'   =>  Galeria::all()
	]);
});

// EVENTOS*NAO MODIFICADO*
Route::get('eventos', function(){
	return view('eventos');
});

// ESTRUTURA
Route::get('estrutura', function(){
	return view('estruturaeequipe');
});

// DIRETORIA
Route::get('diretoria', function(){
	return view('diretoria');
});

//CONSELHO *CONTATO BUGADO*
Route::get('conselho', function(){
	return view('conselho');
});

//FUNDACAO
Route::get('fundacao', function(){
	return view('fundacao');
});

//LICENCA *NAO MODIFICADO*
Route::get('licenca', function(){
	$licencas = Licenca::all()->groupBy('date');//Traz todas licencas agrupadas por data
	return view('licenca',[
		'licencas'	=>	$licencas
	]);
});

//ORCAMENTO *NAO MODIFICADO*
Route::get('orcamento', function(){
	return view('orcamento');
});

//SUPERINTENDENCIA *NAO MODIFICADO*
Route::get('superintendencia', function(){
	$superintendencias = Superintendencia::all()->groupBy('date');//Traz todas leis agrupadas por data
	return view('superintendente',[
		'superintendencias'	=>	$superintendencias
	]);
});

//SEDE *NAO MODIFICADO*
Route::get('sede', function(){
	return view('sede');
});

//APRESENTACAO *MAPA BUGADO*
Route::get('apresentacao', function(){
	return view('apresentacao');
});

//AREAS 
Route::get('areas', function(){
	return view('areas');
});

//CONSORCIO *NAO MODIFICADO*
Route::get('consorcio', function(){
	return view('consorcio');
});

//CONSORCIO 
Route::get('consorcio', function(){
	return view('consorcio');
});

//CONVENIO 
Route::get('convenio', function(){
	return view('convenio');
});

//ESTATUTO  *NAO MODIFICADO*
Route::get('estatutos', function(){
	$estatutos = Estatuto::all()->groupBy('date');//Traz todas leis agrupadas por data
	return view('estatuto',[
		'estatutos'	=>	$estatutos
	]);
});

//GONVERNANCA  *NAO MODIFICADO*
Route::get('governanca', function(){
	return view('governancia');
});

//LEIS  *NAO MODIFICADO*
Route::get('leis', function(){
	$leis = Lei::all()->groupBy('date');//Traz todas leis agrupadas por data
	return view('leis',[
		'leis'	=>	$leis
	]);
});

//MUNICIPIOS  *NAO MODIFICADO*
Route::get('municipios_integrantes', function(){
	return view('municipios');
});

//REUNIOES  *NAO MODIFICADO*
Route::get('reunioes_tecnicas', function(){
	return view('reunioes');
});

//PRODUCAO  *NAO MODIFICADO*
Route::get('producao', function(){
	return view('producao');
});

//TRANSPARENCIA  *NAO MODIFICADO*
Route::get('transparencia', function(){
	$transparencias = Transparencia::all()->groupBy('date');//Traz todas transparencias agrupadas por data
	return view('transparencia',[
		'transparencias'	=>	$transparencias
	]);
});

//ENVIAR EMAIL CONTATO
Route::post('/contato/email/', function(){
	$dados = request()->all();
	Mail::send('email-contato', ['dados'=>$dados], function($m){
		$m->from('serradelop@gmail.com','Contato');
		$m->to(request()->txtEmail);
		$m->subject('Email de contato');		
	});
	return redirect()->route('contato')->with('flash.success','Email enviado com sucesso.');;
});

//CONTATO  *BUGADASSO*
Route::get('contato', function(){
	return view('contato');
})->name('contato');


// PAGINA DA NOTICIA INDIVIDUAL
Route::get('noticia/{id}', function($id){

	return view('post',[
		'post'	=>	Post::find($id),
		'ultimas'	=>	Post::all()->except($id)
	]);
});

// RETORNA DADOS DE BUSCA
Route::any ( 'busca/{q}', function ($q) {

	$post = Post::where('title','LIKE','%'.$q.'%')->get();
	if (count ( $post ) > 0)
		return response()->json($post);
} )->name('pesquisar');


//FALTA:
//aterro,