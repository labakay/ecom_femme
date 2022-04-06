<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Femme d'ynov</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/GG.jpeg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
			<img src="assets/images/act.jpg" alt="Woman"  width="50px" height="60px" />
				<a href="profile.php" class="navbar-brand">Home</a>	
			</div>
		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Page d'Inscription</div>
					<div class="panel-body">
					<div class="">
	<form method="post" action="register.php">
			<div class="container d-flex justify-content-center align-items-center">
				<div class="card">
						<div class="row">
							<div class="col-md-6">
								<div class="form">
									<div class="inputbox mt-3"> <span>NOM</span> <input type="text"  id="f_name" placeholder="Nom" name="f_name" class="form-control"> </div>
									<div class="inputbox mt-3"> <span>PRENOM</span> <input type="text"  id="l_name" placeholder="Prenom" name="l_name" class="form-control"> </div>
									<div class="inputbox mt-3"> <span>Email</span> <input type="text" id="email" placeholder="Email" name="email" class="form-control" required> </div>
									<div class="inputbox mt-3"> <span>Mot de passe</span> <input type="password" id="password" placeholder="mot de passe" name="password" class="form-control" required> </div>
									<div class="inputbox mt-3"> <span>Tel</span> <input type="text" id="mobile" placeholder="+1 455 445 4532" name="mobile" class="form-control" required> </div>
									<div class="inputbox mt-3"> <span>Adresse 1</span> <input type="text" id="address1" placeholder="addresse 1" name="address1" class="form-control" required > </div>
									<div class="inputbox mt-3"> <span>Adresse 2</span> <input type="text" id="address2" placeholder="address 2" name="address2" class="form-control" required> </div>

									<div class="d-flex justify-content-between align-items-center">
										<div class="text-right"> <button class="btn btn-success register btn-block">Inscription</button> </div> <a href="register.php">
									</div>
									<div class="form-check mt-2"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Mes données saisies sont exactes <a href="" class="login">Privacy & Policy</a> </label> </div>
								</div>
							</div>
								<div class="col-md-2">
									<div class="text-center mt-5"> <img src="https://i.imgur.com/98GXnDD.png" width="350"> </div>
								</div>
						</div>
					</div>
			</div>
		</div>      
    </form>
	</div>
	</div>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<style> .foot{text-align: center;}
</style>
</html>
