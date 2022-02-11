<?php
require_once("connexion.php");

Class Categories
{
    public $statut = 1;
    public $dateins=null;
    public $idcat;
    public $cat;

    //ajouter une categorie
    public function setCategorie($cat,$dateins,$statut)
    {   
        $this->cat=$cat;
        $this->statut=$statut;
        $this->dateins=$dateins;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_categories (CATEGORIE,,STATUT) VALUES (?,?,?)");
        $addline = $add->execute(array($cat,date("Y-m-d"),$statut)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher les catégories
    public function getCategories()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_categories group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
  
    public function getCatId($idcat)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM tbl_categories WHERE ID=? LIMIT 1");
        $matP->execute(array($idcat));
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
	
    public function updateProf($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idcat)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE Admin SET LOGIN=?,PWD=?,PRENOM=?,NOM=?,FX=?,SEXE=?,TEL=?,PHOTO=?,ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idcat)) or die(print_r($update->errorInfo()));
        return $ok;
    }

    public function deactivCat($idcat){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE tbl_categories SET STATUT='0' where ID=?");
        $ok = $sql->execute(array($idcat));
        return $ok;
    }
    public function activCat($idcat){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE tbl_categories SET STATUT='1' where ID=?");
        $ok = $sql->execute(array($idcat));
        return $ok;
    }
}
?>