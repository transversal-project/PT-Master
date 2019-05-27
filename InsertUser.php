<?php
require_once("connexion.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$role = $_POST['role']; 
$login = $_POST['login']; 
$password = md5($_POST['password']);
$inscription = 0;

echo $nom,$prenom,$role,$login,$password;
// $ps = $pdo->prepare("INSERT  INTO  users VALUES(?,?,?,?,?)"); 
$ps = $pdo->prepare("INSERT INTO users  VALUES (NULL, ?, ?, ?, ?, ?,?)");
$params=array($nom,$prenom,$role,$login,$password,$inscription);
$ps->execute($params); 
echo "<script type=\"text/javascript\">
            alert('Merci ! Veillez attendre la confirmation de votre compte');
            document.location.href='inscription.php';
            </script>";
?>