<?php $title = 'Tableau de bord';
include 'public/includes/header.php';
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
              <h1 class="page-header"><?=$title?></h1>
            </div>
            <!-- /.col-lg-12 -->
            
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->

    </div>


    <!-- /.content-wrapper -->
    <?php
    include 'public/includes/footer.php';
    ?>
  </div>
  <!-- ./wrapper -->

</body>

<script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
          responsive: true
        });
      });
    </script>
</html>