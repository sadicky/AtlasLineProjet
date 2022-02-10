<?php
require_once('../../Model/Admin/categories.class.php');
$cat = new Categories();
$id=isset($_POST['id'])?$_POST['id']:'';
$cnt = 1;
foreach ($data = $cat->getCatId($id) as $cat) : ?>
    <tr class="odd gradeX">
        <td><?= $cnt ?></td>
        <td><b><?= $cat->CATEGORIE ?></b></td>
        <td><?= $cat->CREATEDAT ?></td>
    </tr>
<?php $cnt++;
endforeach ?>
?>