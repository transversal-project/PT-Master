<?php
  $id=$_GET['code'];
   require_once("connexion.php");
   $ps=$pdo->prepare("SELECT *FROM users WHERE id=?");
$params=array($id);
$ps->execute($params);
$user=$ps->fetch();
echo $user['inscription'];
$inscription=$user['inscription'];
 
 if($inscription==0){
 	$inscription = 1;
 	$ps = $pdo->prepare("UPDATE users set inscription=? WHERE id=?");
  $params=array($inscription,$id);
  $ps->execute($params);

  header("location:liste.php");
 }else if($inscription==1){
 	$inscription = 0;
 	$ps = $pdo->prepare("UPDATE users set inscription=? WHERE id=?");
  $params=array($inscription,$id);
  $ps->execute($params);

  header("location:liste.php");
 }
  


?>