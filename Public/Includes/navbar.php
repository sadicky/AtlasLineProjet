<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php?page=home">Atlas</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-right navbar-top-links">
          <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
             
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-tasks fa-fw"></i> New Task
                    <span class="pull-right text-muted small">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                    <span class="pull-right text-muted small">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a class="text-center" href="#">
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i> AdminName <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="index.php?page=profil"><i class="fa fa-user fa-fw"></i> Profil</a>
              </li>
              <li><a href="index.php?page=parametre"><i class="fa fa-gear fa-fw"></i> Parametres</a>
              </li>
              <li class="divider"></li>
              <li><a href="index.php?page=logout"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <input type="text" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
                <!-- /input-group -->
              </li>
              <li>
                <a href="index.php?page=home" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
              </li>              
              <li>
                <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Articles<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="index.php?page=categories">Catégories</a>
                  </li>
                  <li>
                    <a href="index.php?page=articles">Articles</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Approvisionemment de Dépot<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="index.php?page=quincailleries">Quincaillerie</a>
                  </li>
                  <li>
                    <a href="index.php?page=magasin">Magasin</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Stock Dispo<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="index.php?page=stock_quincailleries">Quincaillerie</a>
                  </li>
                  <li>
                    <a href="index.php?page=stock_magasin">Magasin</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="forms.html"><i class="fa fa-money fa-fw"></i> Vente</a>
              </li>
              <li>
                <a href="forms.html"><i class="fa fa-usd fa-fw"></i> Caisse</a>
              </li>
              <li>
                <a href="index.php?page=user"><i class="fa fa-user fa-fw"></i> Utilisateurs</a>
              
                <!-- /.nav-second-level -->
              </li>
            </ul>
          </div>
        </div>
      </nav>