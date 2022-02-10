<?php
require_once('../../Model/Admin/user.class.php');
$user = new Users();
$cnt=1; foreach($users=$user->getUsers() as $user){
    echo '<tr class="odd gradeX">';
    echo '<td><center>'.$cnt.'</center></td>';
    echo '<td><center><b>'.$user->NAME.'</b></center></td>';
    echo '<td><center>'.$user->TYPE.'</center></td>';
    echo '<td><center>'.$user->EMAIL.'</center></td>';      
    if($cat->STATUT == 0){
       echo "<td> <span class='label label-danger'> Desactiver</span></td>";
       }
       else{
       echo "<td> <span class='label label-info'> Activer</span></td>";
       }
if ($cat->STATUT == 0) {
echo "<td><button type='button'  id='" . $user->ID . "' name='activer' class='btn btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";
} else {
echo "<td>  <button type='button'  id='" . $user->ID . "' name='desactiver' class='btn btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
</td>";
}
    echo "<td class='center'>
         <center>      
         <button 
         class='btn btn-info btn-xs view_data' 
         id='".$user->ID."' title='Modification'>
            <span class='glyphicon glyphicon-edit'></span>
          </button>
         </center>
        </td>";
    echo '</tr>';
    $cnt++;
}