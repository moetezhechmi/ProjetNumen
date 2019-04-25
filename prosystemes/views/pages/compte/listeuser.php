<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=prosysteme', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT * FROM client ORDER BY nom ASC ');
  $executeIsOK = $pdoStat->execute();
  $client= $pdoStat->fetchAll();
 ?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    
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
          
               


        







                  
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          
         
              
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consulter clients
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Consulter Clients</li>
      </ol>
    </section>

   

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-7">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
          </h2>
        </div>

      </div>
     
<table   id="example1" class="table table-striped">
  <thead>
    <tr>
      <th >Identifiant</th>
      <th >Nom</th>
      <th >Prenom</th>
      <th >Date de naissance</th>
      <th >Sexe</th>
      <th >Code postal</th>
      <th >Ville</th>
      <th >Numero Tel</th>
      <th >Email</th>
       <th >operations</th>
    </tr>
  </thead>
  <tbody>
        	<?php foreach ($client as $client): ?> 
              <tr>
                <td><?PHP echo $client['id']; ?></td>
                <td><?PHP echo $client['nom']; ?></td>
                <td><?PHP echo $client['prenom']; ?></td>
                <td><?PHP echo $client['date_naissance']; ?></td>
                <td><?PHP echo $client['sexe']; ?></td>
                <td><?PHP echo $client['code_postal']; ?></td>
                <td><?PHP echo $client['ville']; ?></td>
                <td><?PHP echo $client['num_tel']; ?></td>
                <td><?PHP echo $client['email']; ?></td>
                <td>
                  <form name="f" action="supprimeruser.php" method="post">
                    <input type="hidden" name="id" value="<?= $client['id'] ?>" >
                    <input type="hidden" name="email" value="<?= $client['email'] ?>" >
                    <button type="submit" name="del" value="supprimer" class="btn btn-danger">supprimer</button>
                  </form>
                </td>
                
              </tr>
                  <?php endforeach; ?>
    </tbody>
</table>


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
         
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>



<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
