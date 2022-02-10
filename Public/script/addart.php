<?php
require_once('../../Model/Admin/articles.class.php');
$arts = new Articles();

 if(empty($_POST['cat'])){
  echo '
 <strong style="color: red;">Erreur 403:</strong> Veuillez completer la Catégorie SVP ! 
  ';
 }elseif(empty($_POST['cond'])){
 echo '
<strong style="color: red;">Erreur 403:</strong> Veuillez completer le Conditionnement SVP !
';
 }elseif(empty($_POST['article'])){
  echo "
	<strong style='color: red;'>Erreur 403:</strong> Veuillez completer le nom de l'article SVP !
	";
 }elseif(empty($_POST['prix'])){
 echo "
   <strong style=': red;'>Erreur 403:</strong> Veuillez completer le Coût d'achat SVP !
	";
 }else{
  
 $cat=htmlspecialchars(trim($_POST['cat']));
 $cond=htmlspecialchars(trim($_POST['cond']));
 $dateins=htmlspecialchars(trim($_POST['dateins']));
 $article=htmlspecialchars(trim($_POST['article']));
 $prix=htmlspecialchars(trim($_POST['prix'])); 
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
 }
 
?>
   