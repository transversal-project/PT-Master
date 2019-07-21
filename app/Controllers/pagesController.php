<?php 
namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Config\Database;

/**
 * 
 */
class PagesController
{
	private $container;
	function __construct($container)
	{
		$this ->container = $container;
	}

	public function home(RequestInterface $request, ResponseInterface $response){
		$this->container->view->render($response,'home.twig');
	}

	public function auth(RequestInterface $request, ResponseInterface $response){
		$this->container->view->render($response,'users.twig');
	}

	public function users(RequestInterface $request, ResponseInterface $response) {
		$db = new Database();
		echo json_encode( $db->query("SELECT * FROM users"));
	}

	public function user(RequestInterface $request, ResponseInterface $response)
	{	
		$id = $request->getAttribute('id');
		$db = new Database();
		echo json_encode( $db->query("SELECT * FROM users where id =$id"));
	}

	public function ajoutUser(RequestInterface $request, ResponseInterface $response)
	{	
		$nom = $request->getParam('nom');
		$prenom = $request->getParam('prenom');
		$role = $request->getParam('role');
		$login = $request->getParam('login');
		$password = $request->getParam('password');
		$inscription = $request->getParam('inscription');
		$email = $request->getParam('email');
		$db = new Database();
	 	$stmt = $db->getDB()->prepare("INSERT INTO users (nom,prenom,role,login,password,inscription,email) VALUES (:nom,:prenom,:role,:login,:password,:inscription,:email)");
		return $stmt->execute(array(
		 	':nom'=> $nom,
		 	':prenom'=> $prenom,
		 	':role'=>$role,
		 	':login'=>$login,
		 	':password'=>$password,
		 	':inscription'=>$inscription,
		 	':email'=>$email
		 ));

	}	

	public function UpdateUser(RequestInterface $request, ResponseInterface $response){
		$id = $request->getAttribute('id');
		$nom = $request->getParam('nom');
		$prenom = $request->getParam('prenom');
		$role = $request->getParam('role');
		$login = $request->getParam('login');
		$password = $request->getParam('password');
		$inscription = $request->getParam('inscription');
		$email = $request->getParam('email');
		$db = new Database();
		$stmt = $db->getDB()->prepare("UPDATE users SET nom = :nom,prenom = :prenom,role= :role,login= :login,password= :password,inscription= :inscription,email= :email WHERE id = $id ");
		return $stmt->execute(array(
		 	':nom'=> $nom,
		 	':prenom'=> $prenom,
		 	':role'=>$role,
		 	':login'=>$login,
		 	':password'=>$password,
		 	':inscription'=>$inscription,
		 	':email'=>$email
		 ));

	}

	public function deleteUser(RequestInterface $request, ResponseInterface $response){
		$id = $request->getAttribute('id');
		$db = new Database();
		$stmt= $db->getDB()->prepare("DELETE FROM users where id =$id");
		$stmt->execute();
	}

	public function collecte(RequestInterface $request, ResponseInterface $response)
	{
		$db = new Database();
		echo json_encode( $db->query("SELECT * FROM collecte"));
	}

	public function capteurs(RequestInterface $request, ResponseInterface $response)
	{
		$db = new Database();
		echo json_encode( $db->query("SELECT * FROM capteurs"));
	}

	public function ajoutCapteur(RequestInterface $request, ResponseInterface $response)
	{
		$nomCapteur = $request->getParam('nomCapteur');
		$type = $request->getParam('type');
		$db = new Database();
		$stmt = $db->getDB()->prepare("INSERT INTO capteurs (nomCapteur,type) VALUES (:nomCapteur,:type)");
		return $stmt->execute(array(
		 	':nomCapteur'=>$nomCapteur,
		 	':type'=>$type
		 ));
	}

	public function ajoutCollecte(RequestInterface $request, ResponseInterface $response)
	{	
		$trame = $request->getParam('trame');
		$tab = explode(";", $trame);
		$dateCollecte = $tab[0];
		//return json_encode($dateCollecte);
		$pm = $tab[1];
		$temperature = $tab[2];
		$idCapteur = $tab[3];
		$db = new Database();
	 	$stmt = $db->getDB()->prepare("INSERT INTO collecte (dateCollecte,pm,temperature,idCapteur) VALUES (:dateCollecte,:pm,:temperature,:idCapteur)");
		return $stmt->execute(array(
		 	':dateCollecte'=> $dateCollecte,
		 	':pm'=> $pm,
		 	':temperature'=>$temperature,
		 	':idCapteur'=>$idCapteur
		 ));

	}
}

 ?>