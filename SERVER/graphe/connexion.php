<?php
    $serveur = "localhost";
    $user="root";
    $pass="";
    try{
    $strconnexion ='mysql:host=localhost;dbname=projetTrans';
    $pdo = new PDO ($strconnexion,'root','');
        //echo 'connexin reussi';     
    }
    catch(PDOException $e){
        $msg='Echec de la connexion:'.$e->getMessage();
        die($msg);
    }
   
 ?>
