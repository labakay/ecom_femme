<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Woman Web</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/GG.jpeg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="assets/images/GG.jpeg" alt="Woman"  width="50px" height="60px" />
				<a href="index.php" class="navbar-brand">Femme d'ynov</a>			
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
					<div class="panel-heading">Enregistrer vous</div>
					<div class="panel-body">
				<!-- <form method="POST" action="?">
					<div class="row1">
						<div class="col-md-6">
							<label for="email">E-mail</label>
							<input type="text"  name="user_email" class="form-control" required>
						</div>
						<div class="col-md-6">
							<label for="password">Mots de passe</label>
							<input type="password"  name="user_password" class="form-control" required >
						</div>
					</div>
					<br><br>
					<div class="col-md-12">
						<button type="submit" name="login" class="btn">Connexion</button>				
					</div>
					</div>
					</div> -->
					<div class="limit">
    <div class="login-container">
        <div class="bb-login">
            <form method="POST" action="?" class="bb-form validate-form"> <span class="bb-form-title p-b-26"> Bienvenue </span> <span class="bb-form-title p-b-48"> <i class="mdi mdi-symfony"></i> </span>
            <label for="email">E-mail</label>   
			<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> <input class="input100" type="text" name="user_email"> <span class="bbb-input" data-placeholder=""></span> </div>
			<label for="password">Mots de passe</label>
			<div class="wrap-input100 validate-input" data-validate="Enter password"> <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span>
				 <input class="input100" type="password"  name="user_password"> <span class="bbb-input" data-placeholder=""></span> </div>
              
				 <form method="POST" action="?">
				 <div class="login-container-form-btn">
                    <div class="bb-login-form-btn">
                        <div class="bb-form-bgbtn"></div> <button class="bb-form-btn" name="login" Type="submit"> Connexion </button>
                    </div>
                </div>
            </form> 
  
<?php
include('dbconnect.php');
$con=mysqli_connect("localhost","root","","db3205");
if($_POST){
	
	$email =$_POST['user_email'];
	$pass =$_POST['user_password'];
	//error_reporting(0);
	$control =mysqli_query($con,"SELECT * FROM user_info WHERE email='$email'");
	if(mysqli_num_rows($control) >0)
	{	
		
		$par = mysqli_fetch_array($control);
		$realpass =$par['password'];
		$usertype=$par['user_type'];
		if($realpass==$pass&&$usertype=="Admin"){
		$_SESSION["f_name"]=$par['first_name'];
		$_SESSION["l_name"]=$par['last_name'];
			header('location:admin.php');
		}
		else if($realpass==$pass)
		{
			$_SESSION["f_name"]=$par['first_name'];
			$_SESSION["l_name"]=$par['last_name'];
			$_SESSION["uid"]=$par['user_id'];
			$_SESSION["email"]=$par['email'];
			header('location:profile.php');
		}
		else
		{
			echo "
				<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
				Wrong e-meail or password.Please,Try again to <b><a href='loginpage.php'>login</a></b>
				</div>";	
		}									
	}
	else
	{
		echo "
			<div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
			There is no that user.Please,Click<b><a href='customer_registration.php'> here</a></b> to register
			</div>";										
	}
}

?>
					<div class="panel-footer">&copy; ynov 2022</div>
					
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
