<?php
require_once 'bootstrap.php';
$app = new \Slim\Slim();
$app->config(array(
	"debug" => true,
	"templates.path"=> 'views'
	));

/*$app->map('/home/:name', function ($name) use($app){
	$data =  array('name'=>$name, 'idade'=> 35);
    $app->render('template.php', $data);
})->via('GET','POST')->conditions(array(
		'name'=>'[a-zA-Z]{3,}'
	))->name('inicio');

$app->get('/chamada', function() use($app){
	$url = $app->urlFor('inicio', array('name'=>'Josias'));
	echo '<a href="'.$url.'">Ir a home</a>';
});*/

/* Chamada da connexao singleton */

$db = Connect::getInstance();

$app->get('/', function(){
	echo 'ola';
});

$app->get('/usuarios', function() use($app, $db){
	$listar = $db->prepare("SELECT * FROM pessoa");
	$listar->execute();
	$dados['usuarios'] = $listar->fetchALL(PDO::FETCH_OBJ);
	$app->render('usuarios.php', $dados);
});



$app->run();

