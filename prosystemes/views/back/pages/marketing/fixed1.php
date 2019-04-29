<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Consulter Evenements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="fixed.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/admin.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
   <<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        
         
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>ADMIN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../compte/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="../compte/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="../compte/listeuser.php"><i class="fa fa-circle-o"></i> Consulter clients</a></li>
            <li><a href="../compte/afficherAdmin.php"><i class="fa fa-circle-o"></i> Consulter Admins</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Marketing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="#"><i class="fa fa-circle-o"></i> Liste des evenements</a></li-->
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Evenements
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../marketing/fixed1.php"><i class="fa fa-circle-o"></i> Listes des Evenements</a></li>
                <li><a href="../marketing/fixed2.php"><i class="fa fa-circle-o"></i> Ajouter un Evenement</a></li>
                <li><a href="../marketing/fixed3.php"><i class="fa fa-circle-o"></i> Modifier un Evenement</a></li>
                <li><a href="../marketing/fixed4.php"><i class="fa fa-circle-o"></i> Supprimer un Evenement</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Promotions
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../marketing/promo1"><i class="fa fa-circle-o"></i> Listes des Promotions</a></li>
                <li><a href="../marketing/promo2"><i class="fa fa-circle-o"></i> Ajouter une Promotion</a></li>
                <li><a href="../marketing/promo3"><i class="fa fa-circle-o"></i> Modifier une Promotion</a></li>
                <li><a href="../marketing/promo4"><i class="fa fa-circle-o"></i> Supprimer une Promotion</a></li>
              </ul>
            </li>
            <!--li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li-->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Produit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../produit_stock/aprod.html"><i class="fa fa-circle-o"></i> Ajout Produit</a></li>
            <li><a href="../produit_stock/mprod.html"><i class="fa fa-circle-o"></i> Modifier produit</a></li>
            <li><a href="../produit_stock/sprod.html"><i class="fa fa-circle-o"></i> Supprimer Produit</a></li>
            <li><a href="../produit_stock/afffprod.php"><i class="fa fa-circle-o"></i> Affiche Produit</a></li>
            <li><a href="../produit_stock/chercherr.php"><i class="fa fa-circle-o"></i> Chercher Produit</a></li>
          </ul>
        </li>
       

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../produit_stock/astock.html"><i class="fa fa-circle-o"></i> Ajout Stock</a></li>
            <li><a href="../produit_stock/mstock.html"><i class="fa fa-circle-o"></i> Modifier Stock</a></li>
            <li><a href="../produit_stock/sstock.html"><i class="fa fa-circle-o"></i> Supprimer Stock</a></li>
            <li><a href="../produit_stock/afffstock.php"><i class="fa fa-circle-o"></i> Affiche Stock</a></li>
                        <li><a href="triio.php"><i class="fa fa-circle-o"></i> tri Stock</a></li>
                                   <li><a href="rechsto1.php"><i class="fa fa-circle-o"></i> Chercher Stock</a></li>

          </ul>
        </li>

<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Commandes & factures</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../commande/fixed.php"><i class="fa fa-circle-o"></i> gestion des commandes</a></li>
            <li><a href="../facture/fixed.php"><i class="fa fa-circle-o"></i> gestion des factures</a></li>

          </ul>
        </li>
<li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Installations
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../services/inst1.php"><i class="fa fa-circle-o"></i> Listes des Installations</a></li>
                <li><a href="../services/inst2.php"><i class="fa fa-circle-o"></i> Ajouter une Installation</a></li>
                <li><a href="../services/inst3.php"><i class="fa fa-circle-o"></i> Modifier une Installation</a></li>
                <li><a href="../services/inst4.php"><i class="fa fa-circle-o"></i> Supprimer une Installation</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Réparations
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../services/rep1"><i class="fa fa-circle-o"></i> Listes des Réparations</a></li>
                <li><a href="../services/rep2"><i class="fa fa-circle-o"></i> Ajouter une Réparation</a></li>
                <li><a href="../services/rep3"><i class="fa fa-circle-o"></i> Modifier une Réparation</a></li>
                <li><a href="../services/rep4"><i class="fa fa-circle-o"></i> Supprimer une Réparation</a></li>
              </ul>
            </li>
            <!--li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li-->
          </ul>
        </li>

    </ul></section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Events List</h3>
            </div>
            <div class="box-body">
              <div class="box-footer">
                <form method="POST" action="" style="display:inline;">
                <div class="form-group">
                  <input type="text"  name="enter" id="search" placeholder="Enter...">
                </div>
                </form>
                <?php
                include "../../../cores/evenementC.php";
                $evenement1C=new EvenementC();
                $listeEvenements=$evenement1C->afficherEvenements();
                ?>
 <div id="a">
               <table class="table">
<tr>
<td>Nom</td>
<td>Description</td>
<td>Debut</td>
<td>Fin</td>
<td>Ouverture</td>
<td >Action</td>
</tr>

<?PHP
foreach($listeEvenements as $row){
  ?>
  <tr>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['date_debut']; ?></td>
  <td><?PHP echo $row['date_fin']; ?></td>
  <td><?PHP echo $row['ouverture']; ?></td>
  <td><form method="POST" action="supprimerEvenement.php">
  <input type="submit" name="supprimer" value="supprimer" class="form-control">
  <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
  </form>
  </td>
  </tr>
  <?PHP
}
?>

</table>
               </div>
              <form method="POST" action="name.php" style="display:inline;">
                <button type="submit" name="name" class="btn btn-primary">Display by Name</button>
              </form>
              <form method="POST" action="date.php" style="display:inline;">
                <button type="submit" name="date" class="btn btn-primary">Display by Debut</button>
              </form>
                <form method="POST" action="hour.php" style="display:inline;">
                <button type="submit" name="hour" class="btn btn-primary">Display by Opening hour</button>
              </form>
              </div>
            </div>
          </div>
          <!-- /.box -->
          <!--div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <div class="box-body">
              <form role="form">
                < input states -->
                <!--div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                    warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                  <span class="help-block">Help block with warning</span>
                </div>
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                  <span class="help-block">Help block with error</span>
                </div>

              </form>
            </div>
          </div-->
        </div>

  </div>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!--div class="control-sidebar-bg"></div-->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- fullCalendar -->
<script src="../../bower_components/moment/moment.js"></script>
<script src="../../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="func.js"></script>
</body>
</html>
