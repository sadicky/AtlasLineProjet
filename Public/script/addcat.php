<?php
require_once('../../Model/Admin/categories.class.php');
$cats = new Categories();

if(empty($_POST['cat'])){
  echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer le nom de Catégorie SVP !
  ';
}else{
 $cat=htmlspecialchars(trim($_POST['cat']));
 $dateins=htmlspecialchars(trim($_POST['dateins']));
 $statut = 1;
 $add = null;
 $add = $cats->setCategorie($cat,$dateins,$statut);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Ajout reussi avec Succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
}

 
?>


   