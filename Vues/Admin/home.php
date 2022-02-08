<?php $title = 'Tableau de bord';
include 'public/includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="public/Images/logo.png" type="image/x-icon"> 
    <meta name="description" content="Atlas">
    <meta name="author" content="SpaceLine">

        <!-- Bootstrap Core CSS -->
        <link href="plugins/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="plugins/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="plugins/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="plugins/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="plugins/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="plugins/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
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
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">26$</div>
                      <div>Ventes</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-green">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">0</div>
                      <div>Epuisé</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-yellow">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">124</div>
                      <div>Articles</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-red">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-warning fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">13</div>
                      <div>Expiré</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-8">
              <!-- /.panel -->
              <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                  <!-- /.row -->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          Statistique
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">                          
                        <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>
                        </div>
                        <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                  </div>

                </div>
                <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-bell fa-fw"></i> Epuisé
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <i class="fa fa-envelope fa-fw"></i> Message Sent
                      <span class="pull-right text-muted small"><em>27 minutes ago</em>
                      </span>
                    </a>
                    <a href="#" class="list-group-item">
                      <i class="fa fa-tasks fa-fw"></i> New Task
                      <span class="pull-right text-muted small"><em>43 minutes ago</em>
                      </span>
                    </a>
                  </div>
                  <!-- /.list-group -->
                  <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                </div>
                <!-- /.panel-body -->
              </div>
            </div>
            <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->

    </div>

   <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="plugins/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="plugins/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="plugins/js/metisMenu.min.js"></script>

        
        <!-- DataTables JavaScript -->
        <script src="plugins/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="plugins/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="plugins/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

</body>

</html>