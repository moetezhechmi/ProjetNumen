<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=prosysteme', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT * FROM installation ORDER BY numero_inst ASC ');
  $executeIsOK = $pdoStat->execute();
  $listeInstallations= $pdoStat->fetchAll();

 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prosystemes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Liste des installations
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>

        <address>
          <strong>Directeur</strong><br>
          Sousse<br>
          Phone: (+216) 29194048<br>
          Email: Prosystemes@gmail.tn

        </address>
      </div>
      <br>
      <!-- /.col -->

      <!-- /.col -->

      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
         <table class="table">
                
<tr>
<td>Numero d'installation</td>
<td>id client</td>
<td>Nb Produits</td>
<td>Progres</td>
<td>Prix</td>
<td>date debut</td>
<td>date_fin</td>
<td colspan="2">Action</td>
</tr>

<?PHP
foreach($listeInstallations as $row){
  ?>
  <tr>
  <td><?PHP echo $row['numero_inst']; ?></td>
  <td><?PHP echo $row['id_client']; ?></td>
  <td><?PHP echo $row['nombre_produit']; ?></td>
  <td><?PHP echo $row['progres']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['date_debut']; ?></td>
  <td><?PHP echo $row['date_fin']; ?></td>
   </tr>
  <?PHP
}
?>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->

      <!-- /.col -->

      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>