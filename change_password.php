<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Woman</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/GG.jpeg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<div class="row1">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row1">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">CHANGER DE MOTS DE PASSE </div>
					<div class="panel-body">
				<form method="POST" action="?">
					<div class="row1">
						<div class="col-md-6">
							<label for="email">Ancien Mots de passe </label>
							<input type="password"  name="oldpass" class="form-control" required>
						</div>
						<div class="col-md-6">
							<label for="password">Nouveau Mots de passe</label>
							<input type="password"  name="newpass" class="form-control" required >
						</div>
					
					</div>
					<br><br>
					<div class="col-md-12">
						<button type="submit" name="login" class="btn">Changer Mots de passe</button>				
					</div>
			
					</div>
					</div>
					</form>
					      <?php						 
							if(isset($_POST['login'])){
								session_start();
								//error_reporting(0);
								include('dbconnect.php');
								$user_id=$_SESSION["uid"];
								$sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
								$run_query = mysqli_query($conn,$sql);
								$row=mysqli_fetch_array($run_query);
								$oldpass =$_POST['oldpass'];
								$newpass =$_POST['newpass'];
								if($row['password']==$oldpass){
									$sql=	"UPDATE user_info
											SET password = '$newpass'
											WHERE password='$oldpass'";
									$run_query = mysqli_query($conn,$sql);
									echo "
										<div class='alert alert-success'>
										<a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
										changement reussi !!!!Merci de vous reconnecter <b><a href='loginpage.php'>re-login</a></b>
										</div>";										
								}	
								else
								{
									echo "
											<div class='alert alert-success'>
											<a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
											mauvais mots de passe ! <b><a href='change_password.php'>ressayern</a></b>
											</div>";								
								}
							}
							
?>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
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
