<?php
require_once('../../Model/Admin/user.class.php');
$cat = new Users();
$id=isset($_POST['id'])?$_POST['id']:'';
// $id = 13;
if($id)
{
    $delete = $cat->deactivUser($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>