<head>
	<meta charset="utf-8">
	<title>femme</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fam.jpeg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="index.php" class="navbar-brand"><img src="assets/images/act.jpg" alt="Woman Title"  width="50px" height="60px" />
				</a>
			</div>
			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Bonjour, 
				<?php 
				
					session_start();
					echo $_SESSION["f_name"]." ".$_SESSION["l_name"];								
				?></a>
				<ul class="dropdown-menu">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Cart</a></li>
					<li><a href="change_password.php">Changer Mot de passe</a></li>
					<li><a href="logout.php">Deconnecter</a></li>
				</ul>
				</li>
				</ul>
		</div>
	</div>