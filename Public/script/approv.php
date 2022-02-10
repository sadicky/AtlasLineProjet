<?php
require_once('../../Model/Admin/articles.class.php');
$arts = new Articles();
 $expired=isset($_POST['expiry'])?$_POST['expiry']:""; 
 $article=isset($_POST['article'])?$_POST['article']:""; 
 $fab=isset($_POST['fab'])?$_POST['fab']:"Inconnu"; 
 $aqte=isset($_POST['qte'])?$_POST['qte']:0;  
 $sqte=isset($_POST['sqte'])?$_POST['sqte']:0;
 $cond= isset($_POST['cond'])?$_POST['cond']:""; 
 $id= isset($_POST['id'])?$_POST['id']:24; 
 // Calculs	
//  $balance = intval($sqte) + intval($aqte);
 $balance = 20;
 $date = date('Y-m-d');
 $idu = 13;
 $add = null;
  $add = $arts->Approvisionner($balance,$expired,$date,$fab,$idu,$id);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Ajout reussi avec Succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   