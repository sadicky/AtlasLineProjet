<?php
require_once('../../Model/Admin/articles.class.php');
$arts = new Articles();
 $cat=isset($_POST['cat'])?$_POST['cat']:"";
 $cond=isset($_POST['cond'])?$_POST['cond']:""; 
 $dateins=isset($_POST['dateins'])?$_POST['dateins']:""; 
 $article=isset($_POST['article'])?$_POST['article']:""; 
 $prix=isset($_POST['prix'])?$_POST['prix']:""; 
 $statut = 1;
 $qte = 0; 
 $montant = 0;
 $stock = 0;
//  $cat = 19;
 $idu = 13;
 $add = null;
  $add = $arts->setArticle($article,$qte,$prix,$cond,$montant,$stock,$dateins,$statut,$cat,$idu);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Ajout reussi avec Succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   