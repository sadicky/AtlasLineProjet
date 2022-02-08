<?php
require_once('../../Model/Admin/user.class.php');
$cats = new Users();
 $name=isset($_POST['name'])?$_POST['name']:"";
 $email=isset($_POST['email'])?$_POST['email']:""; 
 $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";
 $pwd = password_hash($pwd,PASSWORD_BCRYPT);
 $type=isset($_POST['type'])?$_POST['type']:"";
 $statut = 1;
 $add = null;
  $add = $cats->setAdmin($email,$pwd,$name,$type,$statut);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Ajout reussi avec Succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   