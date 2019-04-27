<!DOCTYPE html>
<html lang="en">
<head>
<title>front</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
	
<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">ProSystemes</a></div>
							<nav class="main_nav">
								<ul>
									<li class="">
										<a href="front.html">Home</a>
									</li>

									<li class="">
										<a href="afprod.php">Afficher Produits</a>
									</li>
									<li class="">
										<a href="chch.php">Chercher Produits</a>
									</li>
									
								</ul>
							</nav>
							
						</div>
					</div>
				</div>
			</div>
		</div>
 <div class=" col-xs-9">
       <?php
include"config.php";
include"produit.php";
$c=new config();
$conn=$c->getConnection();
$e=new produit(69,"dell","noir","laptop",22,"1998-05-03");
$e1=new produit(252,"hp","rouge","tel",22,"2015-09-01");
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>



<table   id="example1" class="table table-striped">
  <thead>
    <tr>
      <th >Code Produit</th>
      <th >Marque</th>
      <th >Couleur</th>
      <th >Type</th>
      <th> Prix </th>
      <th >Date</th>
    </tr>
  </thead>
  <tbody>
          <?php
foreach ($resultat as $res) {

  ?>
<tr>
  <td><?php echo $res['codeProd']; ?></td>
  <td><?php echo $res['marque']; ?></td>
  <td><?php echo $res['couleur']; ?></td>
  <td><?php echo $res['typee']; ?></td>
  <td><?php echo $res['prix']; ?></td>
  <td><?php echo $res['dateC']; ?></td>


</tr>
<?php
}
?>
    </tbody>
</table>


    </fieldset>  
    
		

						</div>

					</div>
						
				</div>
			</div>
		</div>
	</div>

	
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title"></div>
						<div class="icon_box_text">
							
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title"></div>
						<div class="icon_box_text">
							
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title"></div>
						<div class="icon_box_text">
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>