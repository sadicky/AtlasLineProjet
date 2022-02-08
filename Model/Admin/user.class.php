<?php
require_once("connexion.php");

Class Users
{
    public $statut = 1;
    public $email;
    public $pwd;
    public $name;
    public $type;

    //ajouter un Admin
    public function setAdmin($email,$pwd,$name,$type,$statut)
    {   
        $this->email=$email;
        $this->statut=$statut;
        $this->pwd=$pwd;
        $this->name=$name;
        $this->type=$type;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_users (EMAIL,PWD,NAME,TYPE,STATUT) VALUES (?,?,?,?,?)");
        $addline = $add->execute(array($email,$pwd,$name,$type,$statut)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher les catégories
    public function getUsers()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_users group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
}
?>