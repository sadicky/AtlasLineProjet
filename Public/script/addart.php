<?php
require_once('../../Model/Admin/articles.class.php');
$arts = new Articles();
 $cat=isset($_POST['cat'])?$_POST['cat']:"";
 $fab=isset($_POST['fab'])?$_POST['fab']:""; 
 $dateins=isset($_POST['dateins'])?$_POST['dateins']:""; 
 $article=isset($_POST['article'])?$_POST['article']:""; 
 $prix=isset($_POST['prix'])?$_POST['prix']:""; 
 $cond= isset($_POST['cond'])?$_POST['cond']:""; 
 $expired =isset($_POST['expired'])?$_POST['expired']:""; 
 $statut = 1;
 $qte = 0; 
 $montant = 0;
//  $fab = 'bURUNDI';
 $stock = 0;
//  $cat = 19;
 $idu = 13;
 $add = null;
  $add = $arts->setArticle($article,$qte,$prix,$cond,$expired,$fab,$montant,$stock,$dateins,$statut,$cat,$idu);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Ajout reussi avec Succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   