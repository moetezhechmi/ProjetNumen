<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
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
<script>
  function lettersonly(input){
    var regex =/[^a-z]/gi;
    input.value=input.value.replace(regex,"");
  }
  function numbersonly(input){
    var regex =/[^0-9]/gi;
    input.value=input.value.replace(regex,"");
  }
</script>
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
    <a href="../../index2.html" class="logo">
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
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
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
    <form method="POST" action="trierEmploye.php">
  <!--    <h6>trier selon:</h6>
      <select id="trie" name="trie" onchange="chargerElt()">
<option></option>
<option value="m">idC</option>
<option value="p">idP</option>
</select>-->
    <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Liste des Commandes</h3>
            </div>
            <div class="box-body">
              <div class="box-footer">
                <?PHP
include "commandeC.php";
$employe1C=new commandeC();
$listeEmployes=$employe1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
                <table class="table">
<tr>
<td>id de la commande</td>
<td>id duproduit</td>
<td>id du client</td>
<td>nom</td>
<td>prenom</td>
<td>numero</td>
<td>email</td>
<td>code_postal</td>
<td>ville</td>
<td>date livraison</td>
<!--
<td colspan="2">trier selon: </td>
<td><select id="trie" name="trie" onchange="chargerElt()">
<option value="idC">idC</option>
<option value="idP">idP</option>
<option value="idClient">idClient</option>
</select></td>
-->
</tr>

<?PHP
foreach($listeEmployes as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idC']; ?></td>
  <td><?PHP echo $row['idP']; ?></td>
  <td><?PHP echo $row['idClient']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['num_tel']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['code_postal']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $row['dateL']; ?></td>
  </tr>
  <?PHP
}
?>
</table>
                
              </div>
            </div>
          </div>
          <!-- /.box -->
        </form>
    <form method="POST" action="ajoutCommande.php">
    <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Ajouter une commande</h3>
            </div>
            <div class="box-body">
            <div class="form-group">
                  <label>id de la commande</label>
                  <input type="text"  name="idC" class="form-control" placeholder="Enter un id non utilisé...">
                </div>
            <div class="form-group">
                  <label>id du client</label>
                  <input type="text"  name="idClient" class="form-control" placeholder="Enter id du client">
                </div>
              <!-- Date Debut -->
              <div class="form-group">
                <label>id du produit</label>

                <div class="form-group">
                  
                  <input type="text" name="idP" class="form-control" placeholder="Enter id du produit" >
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- Date fin -->
              <div class="form-group">
                <label>Date Livraison:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="dateL" class="form-control pull-right" >
                </div>
                <!-- /.input group -->
              </div>
            <!-- /.box-body -->
            <!-- time Picker -->
              
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
          </div>
          </form>
          
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
          <section class="content">
    <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
            </div>
    </div>
    </section>
        
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
<!-- Page script -->
<script>
   $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
     
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
