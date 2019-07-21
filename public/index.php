<?php
#php -S localhost:8089 -t public/  -ddisplay_errors=1 -dzned_extension=debug.so

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


require '../vendor/autoload.php';
require '../app/config/database.php';


$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);


require '../app/container.php';
$app->get('/',\App\Controllers\PagesController::class.':home');
//$app->get('/authentification',\App\Controllers\PagesController::class.':auth')->setName('users');


$app->get('/users', \App\Controllers\PagesController::class.':users');
/*Get un user*/
$app->get('/user/{id}', \App\Controllers\PagesController::class.':user');
/*Ajout d'un user*/
$app->post('/user/ajout', \App\Controllers\PagesController::class.':ajoutUser');
/*update un user*/
$app->put('/user/update/{id}',\App\Controllers\PagesController::class.':updateUser');
/*Supprimer un user*/
$app->delete('/user/delete/{id}', \App\Controllers\PagesController::class.':deleteUser') ;

/*Route vers les utilisateurs*/
$app->get('/collecte', \App\Controllers\PagesController::class.':collecte');
/*Ajout collecte*/
$app->get('/collecte/ajout', \App\Controllers\PagesController::class.':ajoutCollecte');
/*afficher les capteurs*/
$app->get('/capteurs', \App\Controllers\PagesController::class.':capteurs') ;
/*ajout d'un capteur*/
$app->post('/capteur/ajout', \App\Controllers\PagesController::class.':ajoutCapteur') ;
/*courbe d'un seul capteur*/
$app->get('/capteur/{idCapteur}', function (Request $request, Response $response) {
	$idCapteur = $request->getAttribute('idCapteur');

	$sql = "SELECT * FROM capteurs where idCapteur =$idCapteur";
	try {
		#Get un objet de la base
		$db = new Database();
		#connexion
		$db = $db->connexion();
		$stmt = $db->query($sql);
		$cap = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($cap);

	}catch(PDOException $e){
		echo '{"error":{"text":'.$e->getMessage().'}';
	}
    return $response;});
/*update un capteur*/
$app->put('/capteur/update/{idCapteur}', function (Request $request, Response $response) {
	$idCapteur = $request->getAttribute('idCapteur');
	$nomCapteur = $request->getParam('nomCapteur');
	$type= $request->getParam('type');

	$sql = "UPDATE capteurs SET nomCapteur = :nomCapteur,type = :type WHERE idCapteur = $idCapteur ";
	try {
		#Get un objet de la base
		$db = new Database();
		#connexion
		$db = $db->connexion();
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':nomCapteur',$nomCapteur);
		$stmt->bindParam(':type',$type);
		$stmt->execute();
		echo '{"notice":{"text:"Mise a jours ok"}';
	}catch(PDOException $e){
		echo '{"error":{"text":'.$e->getMessage().'}';
	}
    return $response;});
/*supprimer un capteur*/
$app->delete('/capteur/delete/{idCapteur}', function (Request $request, Response $response) {
	$idCapteur = $request->getAttribute('idCapteur');

	$sql = "DELETE FROM capteurs where idCapteur =$idCapteur";
	try {
		#Get un objet de la base
		$db = new Database();
		#connexion
		$db = $db->connexion();
		$stmt = $db->prepare($sql);
		$stmt->execute();

		$db = null;
		echo '{"notice":{"text":"Suppression reussi"}';

	}catch(PDOException $e){
		echo '{"error":{"text":'.$e->getMessage().'}';
	}
    return $response;});


$app->run();