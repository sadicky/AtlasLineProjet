<?php
require_once('../../Model/Admin/login.class.php');
$log = new Login();
$email = isset($_POST['email']) ? $_POST['email'] : "";
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
$pwd = password_hash($pwd,PASSWORD_BCRYPT);
$add = null;
$add = $log->login($email);
if($add){
    foreach ($add as $d) {
        if (password_verify($pwd, $d->PWD)) {
            if ($d->STATUT == 1) {
                $_SESSION['id'] = $d->ID;
                $_SESSION['name'] = $d->NAME;
                if ($d->TYPE == 'admin') {
                    $_SESSION['type'] = $d->TYPE;
    
                    header("location:index.php?page=home");
                }
            } else {
                echo "<span class='alert alert-danger alert-lg col-sm-6'>Votre compte est desactivé, Contacter l'admin <button type='button' class='close' data-dismiss='alert'>x</button></span>";
            }
        }
        else{
            echo "<span class='alert alert-danger alert-lg col-sm-6'> Mot de Passe incorrect<button type='button' class='close' data-dismiss='alert'>x</button></span>";
           }
    }
}
else{
    echo "<span class='alert alert-danger alert-lg col-sm-6'>Adresse Mail inexistante<button type='button' class='close' data-dismiss='alert'>x</button></span>";
           
}

