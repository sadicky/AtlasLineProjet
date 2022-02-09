<?php
require_once('../../Model/Admin/user.class.php');
$cats = new Users();

$email = htmlspecialchars(trim($_POST['email']));
$name = htmlspecialchars(trim($_POST['name']));
$type = htmlspecialchars(trim($_POST['type']));

$add = $cats->setAdmin($email,$name,$type);
  if($add){
	echo "<span class='alert alert-success alert-lg col-sm-12'>
	<strong>Utilisateur</strong> est enregistre avec succes.<br/>
      Les donnees de connexion sont : <ul>
                                      <li>Email '".$add['EMAIL']."'</li>
                                      <li>Mot de passe '".$add['PWD']."'</li>                                  
                                      </ul>
	<button type='button' class='close' data-dismiss='alert'>x</button></span>";
    
  }
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
	//
?>
   