<?php
require_once('../../Model/Admin/categories.class.php');
$cat = new Categories();
$cnt = 1;
foreach ($data = $cat->getCategories() as $cat) : ?>
    <tr class="odd gradeX">
        <td><?= $cnt ?></td>
        <td><b><?= $cat->CATEGORIE ?></b></td>
        <td><?= $cat->CREATEDAT ?></td>
        <?php
                                                         if($cat->STATUT == 0){
                                                            echo "<td> <span class='label label-danger'> Desactiver</span></td>";
                                                            }
                                                            else{
                                                            echo "<td> <span class='label label-info'> Activer</span></td>";
                                                            }
        if ($cat->STATUT == 0) {
            echo "<td><button type='button'  id='" . $cat->ID . "' name='activer' class='btn btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";
        } else {
            echo "<td>  <button type='button'  id='" . $cat->ID . "' name='desactiver' class='btn btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
              </td>";
        }
        ?>
        <td class="center">
            <a data-toggle="modal" data-target="#Modifier"  type='button'  id='" . $cat->ID . "' type='submit' name='update' class='btn btn-xs btn-info update' title='Modifier Categorie'><span class='glyphicon glyphicon-edit'></span></a>
        </td>
    </tr>
<?php $cnt++;
endforeach ?>
?>