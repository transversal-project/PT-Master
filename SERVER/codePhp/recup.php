<?php
require_once("connexion.php");

$login = $_POST['login'];
$password = md5($_POST['password']);
$ps=$pdo->prepare("SELECT * FROM users WHERE login=? AND password=?");
$params=array($login,$password);
$ps->execute($params);

if($user=$ps->fetch()){
    session_start();
    $_SESSION['PROFILE']=$user;
    //echo $_SESSION['PROFILE']['inscription'];
    if($_SESSION['PROFILE']['inscription']==1){
       if($_SESSION['PROFILE']['role']=='admin')
       	//echo "Bienvenue  ".$login." vous etes connecté en tant que Administrateur";
       header("location:liste.php");
       else if($_SESSION['PROFILE']['role']=='client')
        echo "Bienvenue  ".$login." vous etes connecter en tant que Client";
       else if( $_SESSION['PROFILE']['role']=='visiteur')
       	echo "Bienvenue  ".$login." vous etes connecter en tant que visiteur";
    }else
    if($_SESSION['PROFILE']['inscription']==0){
    	echo "<script type=\"text/javascript\">
            alert('Merci de Réessayer plus tard');
            document.location.href='index.php';
            </script>";
    }
    
}else{
  echo "<script type=\"text/javascript\">
            alert('Erreur d authentication');
            document.location.href='index.php';
            </script>";
}
?>
