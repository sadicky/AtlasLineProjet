<?php
require_once('../../Model/Admin/categories.class.php');
$cat = new Categories();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $delete = $cat->activCat($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>