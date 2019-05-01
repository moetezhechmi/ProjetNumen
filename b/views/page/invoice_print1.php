
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

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
          <i class="fa fa-globe"></i> AdminLTE, Inc.
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>   

         <?PHP
            include "../../cores/adminC.php";
            $admin1C=new AdminC();
            $listeAdmins=$admin1C->afficherAdmins();

            //var_dump($listeEmployes->fetchAll());
          ?>   



  <table id="example1" class="table table-striped">
      <thead>
    <tr>
      <th >Identifiant</th>
      <th >Nom d'utlisateur</th>
      <th >Email</th>
      <th >Mot de passe</th>
       
    </tr>
  </thead>
  <tbody>
          <?php foreach ($listeAdmins as $row): ?> 
              <tr>
                <td><?PHP echo $row['id']; ?></td>
                <td><?PHP echo $row['username']; ?></td>
                <td><?PHP echo $row['email']; ?></td>
                <td><?PHP echo $row['password']; ?></td>
                
                <td>
                  <form name="f" action="supprimerAdmin.php" method="post">
                  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                  <input type="hidden" name="email" value="<?= $admin['email'] ?>" >
                  
                </form>



                </td>
                
              </tr>
                  <?php endforeach; ?>
    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Payment Methods:</p>
        <img src="../dist/img/credit/visa.png" alt="Visa">
        <img src="../dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../dist/img/credit/american-express.png" alt="American Express">
        <img src="../dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
          jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>
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
