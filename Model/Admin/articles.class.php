<?php
require_once("connexion.php");

Class Articles
{
    public $statut = 1;
    public $dateins=null;
    public $article;
    public $prix;
    public $qte;
    public $montant;
    public $idu;
    public $stockout;
    public $idcat;
    public $cond;
    public $expired=null;
    public $fab;


    //ajouter un article
    public function setArticle($article,$qte,$prix,$cond,$expired,$fab,$montant,$stock,$dateins,$statut,$idcat,$idu)
    {   
        $this->idcat=$idcat;
        $this->statut=$statut;
        $this->dateins=$dateins;
        $this->article=$article;
        $this->prix=$prix;
        $this->montant=$montant;
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->stock=$stock;
        $this->cond=$cond;
        $this->idu=$idu;
        $this->qte=$qte;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_articles (ARTICLE,QTE,PRIX,CONDITIONEMMENT,PEREMPTION,PAYSFABR,MONTANT,STOCK_OUT,DATECREAT,STATUT,IDCAT,IDUSER	
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline1 = $add1->execute(array($article,$qte,$prix,$cond,$expired,$fab,$montant,$stock,$dateins,$statut,$idcat,$idu)) or die(print_r($add1->errorInfo()));
        
        $add2 = $db->prepare("INSERT INTO tbl_stockm (ARTICLE,QTE,PRIX,CONDITIONEMMENT,PEREMPTION,PAYSFABR,MONTANT,STOCK_OUT,DATERECEIVE,STATUT,IDCAT,IDUSER	
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline2 = $add2->execute(array($article,$qte,$prix,$cond,$expired,$fab,$montant,$stock,$dateins,$statut,$idcat,$idu)) or die(print_r($add2->errorInfo()));
       
        $add3 = $db->prepare("INSERT INTO tbl_stockq (ARTICLE,QTE,PRIX,CONDITIONEMMENT,PEREMPTION,PAYSFABR,MONTANT,STOCK_OUT,DATERECEIVE,STATUT,IDCAT,IDUSER	
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline3 = $add3->execute(array($article,$qte,$prix,$cond,$expired,$fab,$montant,$stock,$dateins,$statut,$idcat,$idu)) or die(print_r($add3->errorInfo()));
       
        
        return $addline1;
    }

    
    //ajouter un article
    public function Approvisionner($qte,$expired,$dateins,$fab,$idu,$id)
    {   
        $this->fab=$fab;          
        $this->expired=$expired;
        $this->idu=$idu;
        $this->qte=$qte;
        $this->id=$id;
        $db = getConnection();
        $update = $db->prepare("UPDATE tbl_articles SET QTE=?,PEREMPTION=?,DATECREAT=?,PAYSFABR=?,IDUSER=?, WHERE ID =?");
        $ok = $update->execute(array($qte,$expired,date('Y-m-d H:i:s'),$fab,$idu,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }

    //afficher les catégories
    public function getArticlesId()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT tbl_articles.ID,tbl_articles.ARTICLE,tbl_articles.QTE,tbl_articles.PRIX,tbl_articles.PEREMPTION,tbl_articles.STATUT,tbl_categories.CATEGORIE FROM tbl_articles,tbl_categories WHERE  tbl_articles.IDCAT=tbl_categories.ID");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
      //afficher les catégories
      public function StockQId()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT * FROM tbl_stockq,tbl_categories WHERE  tbl_stockq.IDCAT=tbl_categories.ID");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
      
    
	public function OutOfStock($table){
        $db = getConnection();
		$statement =$db->prepare("SELECT * FROM tbl_articles WHERE QTE <= 20 LIMIT 5"); 
         $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
	}
      public function StockMId()
      {
          $db = getConnection();
          $statement = $db->prepare("SELECT * FROM tbl_stockm,tbl_categories WHERE  tbl_stockm.IDCAT=tbl_categories.ID");
          $statement->execute();
          $tbP = array();
          while($data =  $statement->fetchObject()){
              $tbP[] = $data;
          }
           return $tbP;
      }
  
    public function getArticleId($idart)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM tbl_articles WHERE tbl_articles.ID=? LIMIT 1");
        $matP->execute(array($idart));
        $res = array();
        while($data = $matP->fetchObject())
        {
            $res[] = $data;
        }
        return $res;
    }
    public function deleteCat($idcat)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM tbl_categories WHERE ID =?");
        $ok = $delete->execute(array($idcat));
        return $ok;
    }
	
    public function updateProf($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idprof)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE Admin SET LOGIN=?,PWD=?,PRENOM=?,NOM=?,FX=?,SEXE=?,TEL=?,PHOTO=?,ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idadmin)) or die(print_r($update->errorInfo()));
        return $ok;
    }

     public function activArt($idart){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE tbl_articles SET STATUT='1' where ID=?");
         $ok = $sql->execute(array($idart));
        return $ok;
     }
     
    public function deactivArt($idcat){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE tbl_articles SET STATUT='0' where ID=?");
        $ok = $sql->execute(array($idcat));
        return $ok;
    }
}
?>