<?php
require_once("connexion.php");

Class Users
{
    public $email; 
    public $pwd;
    public $name;
    public $type;
    public $statut;

    //ajouter un Admin
    public function setAdmin($email,$name,$type)
    {   
    //   PWD
    $pwdg = substr(sha1(time()),0,8);
    $pwd_encrypt=password_hash($pwdg,PASSWORD_BCRYPT);

        $this->email=$email;
        $pwds = $this->pwd=$pwd_encrypt;
        $this->name=$name;
        $this->type=$type;
        $statuts = $this->statut=1;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_users (EMAIL,PWD,NAME,TYPE,STATUT) VALUES (?,?,?,?,?)");
        $addline = $add->execute(array($email,$pwds,$name,$type,$statuts)) or die(print_r($add->errorInfo()));
        return !$addline?false:[
               'EMAIL'=>$this->email,
               'PWD'=>$pwdg
        ];
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
    public function deactivUser($idcat){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE tbl_users SET STATUT='0' where ID=?");
        $ok = $sql->execute(array($idcat));
        return $ok;
    }
    public function activUser($idcat){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE tbl_users SET STATUT='1' where ID=?");
        $ok = $sql->execute(array($idcat));
        return $ok;
    }
}


?>