
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>femme</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fam.jpeg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="index.php" class="navbar-brand"> <img src="assets/images/act.jpg" alt="Woman Title"  width="60px" height="60px" />
				</a>
			</div>
			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<br>
				<li> <buttona> <a href="loginpage.php">connexion</a> </buttona></li>
					<ul class="dropdown-menu">
					<div style="width: 300px;">
					</div>
				</ul>
				<li> <buttona> <a href="customer_registration.php">Inscription</a></buttona></li>
			</ul>
		</div>
	</div>
		<br><br><br>
	 <div align= "center" class="one-time">
	    <div><img src="assets/images/fem.jpg"></div>
  </div>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat"></div>
			</div>
			<div class="col-md-8">
			<div class="row">
					<div class="col-md-12" id="cartmsg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">--NOTRE SELECTION--
						<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="action.php" id='price_sort'>Prix</a> | <a href="action.php" id='pop_sort'>Popularit√©</a>
						</div>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
					</div>
					<div class="panel-footer">&copy; 2022</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>
					</ul>
				</center>
			</div>
				<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Detail Produit</h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="buttons" class="btn btn-default" data-dismiss="modal">Fermer</button>
				      </div>
				    </div>
				  </div>
				</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<style> .foot{text-align: center;}
</style>
</html>
