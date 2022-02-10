<?php
require_once('../../Model/Admin/users.class.php');
$cat = new Users();
$id=isset($_POST['id'])?$_POST['id']:'';

if($id)
{
    $delete = $cat->activUser($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>