<?php $title = 'Approvisioner';
include 'public/includes/header.php';
$id =$_GET['id'];
$art = new Articles();
$data = $art->getArticleId($id);
foreach ($data as $v):
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Debut Navbar -->
    <?php
    // include 'public/includes/navbar.php';

    //MENUADIM
    // include 'public/includes/menuadmin.php';
    ?>
    <!--Fin Navbar -->
    <!-- Content Wrapper. Contains page content -->

    <div id="wrapper">

      <!-- Navigation -->
      <?php
      include 'public/includes/navbar.php';
      ?>

      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header"><?= $title ?></h1>
            </div>
            <div class='col-sm-12' id="message"></div>
            <!-- /.col-lg-12 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    Approvisioner les produits
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <!-- /.col-lg-12 -->

                    <form method="post" id="formulaire">

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Produit</label>
                            <input type="hidden" name="id" id="id" value="<?= $v->ID ?>">
                            <input readonly type="text" name="article" id="article" class="form-control" value="<?=  $v->ARTICLE ?>" placeholder="DCU du medicament Ici">
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Date de Peremption</label>
                            <?php
                            if ($v->PEREMPTION !='0000-00-00') { ?>
                              <input readonly type="date" name="expired" id="expired" value="<?= $v->PEREMPTION ?>" class="form-control">
                            <?php } else { ?>
                              <input type="date" name="expired" id="expired" required class="form-control">
                              <span class="text-danger"></span>
                            <?php   }
                            ?>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Quantite : <span style="color:red"><?= 0 ?> </span></label>
                            <input value="<?=$v->Q ?>" type="hidden" name="sqte" id="sqte">
                            <input type="number" name="qte" id="qte" class="form-control" placeholder="Quantity" required>
                            <span class="text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Pays d'Approvisionnement : </label>
                            <input type="text" name="fab" id="fab" class="form-control" placeholder="Pays d'Approvisionnement" required>
                            <span class="text-danger"></span>
                          </div>
                        <button type="submit" class="btn btn-primary pull-right">Approvisionner</button>
                        </div>

                        <!-- /.col -->
                      </div>
                    </form>

                  </div>

                </div>
                <!-- /.container-fluid -->
              </div>
              <!-- /#page-wrapper -->

            </div>


            <!-- /.content-wrapper -->
            <?php
            include 'public/includes/footer.php';
            endforeach ?>
          
          </div>
          <!-- ./wrapper -->

</body>

<script type="text/javascript" src="public/ajax/approv.js"></script>
<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>

</html>