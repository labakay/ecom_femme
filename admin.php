<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Woman</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/act.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
						<h1>BIENVENU SUR LA PAGE ADMINISTRATEUR ,
							<?php 				
								session_start();
								echo $_SESSION["f_name"]." ".$_SESSION["l_name"];
							?>
							<div class="text-right"> <button class="btn btn-dark"> <a href="logout.php">DECONNECTER</a></button> </div>

						</h1>						 
						<form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading">Ajoutez Categorie</div>
									<div class="row">
											<div class="col-md-6">
												<div class="form">
													<div class="inputbox mt-3"> <span>Nom de la cagtegrorie</span> <input type="text"  id="cat" placeholder="libellé" name="cat" class="form-control" required> </div>							
														<div class="d-flex justify-content-between align-items-center">
															<div class="text-right"> <button class="btn btn-success" type="submit" name="insert_category">Inserer la Categorie </button> </div>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>		      
 					   </form>
						<form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading">Supprimer Categorie</div>
									<div class="row">
											<div class="col-md-6">
												<div class="form">
													<div class="inputbox mt-3"> <span>Nom de la cagtegrorie</span> <input type="text"  id="cat_name" placeholder="libellé" name="cat_name" class="form-control"> </div>							
														<div class="d-flex justify-content-between align-items-center">
															<div class="text-right"> <button class="btn btn-success register btn-block" type="submit" name="delete_category">Supprimer </button> </div>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>		      
 					   </form>

												
						<form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading">AJOUTER CATEGORIE</div>
								<div class="panel-body"></div>
								<br>
									<div class="row" >
										<div class="col-md-2">
											<label for="cat">Nom de CATEGORIE </label>
											<input type="text" id="cat" name="cat" class="form-control" required>
											</div>

											<div class="col-md-2">
												<label for="quantity">QUANTITE</label>
												<input type="text" id="quantity" name="quantity" class="form-control" required>
											</div>
									</div>			
									<div class="row">
										<div class="col-md-2">
											<label for="pro_title">Titre Produit</label>
											<input type="text" id="title" name="title" class="form-control" required>
										</div>
										<div class="col-md-2">
											<label for="price">prix du produit</label>
											<input type="text" id="price" name="price" class="form-control" required>
										</div>
									</div>

								<div class="row">
									<div class="col-md-2">
										<label for="price">prix du produit</label>
										<input type="text" id="price" name="price" class="form-control" required>
									</div>
									<div class="col-md-2">
										<label for="img"> Image du produit</label>
										<input type="textarea" id="img" name="img" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label for="key">clé du Produit</label>
										<input type="text" id="key" name="key" class="form-control" required>
									</div>
									<div class="col-md-2">
										<label for="desc">Description du produit</label>
										<input type="text" id="desc" name="desc" class="form-control" required>
									</div>
								</div>	
								<br>					
								<div class="d-flex justify-content-between align-items-center">
									<div class="text-right"  type="submit" name="insert_product"> <button class="btn-success register btn-block">Ajouter</button>
							    </div>	
								<br>	
						</form>				
						
						<!-- <form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading"> LA LISTE DES UTILISATEURS</div>
								<div class="panel-body"></div>
								<div class="row">
									<div class="col-md-12">
										<button class='btn btn-success' type="submit" name="show" class="btn">VOIR</button>
									</div>
								</div>
							</div>
						</form> 
						<form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading"> utilisateurs supprimés</div>
								<div class="panel-body"></div>
								<div class="row">
									<div class="col-md-12">
										<button class='btn btn-success' type="submit" name="showbanned" class="btn">VOIR</button>
									</div>
								</div>
							</div>
						</form>  -->

							<form method="post" action="?">
								<div class="panel panel-primary text-center">
									<div class="panel-heading">Mise à jour stock</div>
									<div class="panel-body"></div>
									<div class="row">
										<div class="col-md-2">
											<label for="product_id"> ID DU PRODUIT</label>
											<div class="inputbox mt-3"><input type="text"  id="product_id" placeholder="identifiant" name="product_id" class="form-control"> </div>						
										</div>
										<div class="col-md-2">
										<label for="product_newstock">Nouveau Stock</label>
											<div class="inputbox mt-3">  <input type="text"  id="product_newstock" placeholder="Nouveau stock" name="product_newstock" class="form-control"> </div>						
										</div>			
										<div class="d-flex justify-content-between align-items-center">
											<div class="btn"> <button class="btn btn-success  " name="update_stock" >Mise à jour</button> </div>
										</div>
									</div>
								</div>
							</form>	

						<form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading">SUPPRIMER UTULISATEUR</div>
									<div class="row">
											<div class="col-md-6">
												<div class="form">
													<div class="inputbox mt-3"> <span>ID du User</span> <input type="text"  id="us_id" placeholder="Identifiant" name="us_id" class="form-control"> </div>							
														<div class="d-flex justify-content-between align-items-center">
															<div class="text-right"> <button class="btn btn-success register btn-block">Supprimer</button> </div>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>		      
 					   </form>

	
						<!-- <form method="post" action="?">
							<div class="panel panel-primary text-center">
								<div class="panel-heading">VOIR TOUT LES LOGS DANS LA BASE DE DONNEES - MYSQL</div>
								<div class="panel-body"></div>
								<div class="row">
									<div class="col-md-12">
										<button class='btn btn-success' type="submit" name="dblogs" class="btn">VOIR</button>
									</div>
								</div>
							</div>
						</form>  -->
						
						<?php
							if(isset($_POST['insert_product']))
							{
								include('dbconnect.php');
								$product_category_name =$_POST['cat'];
								$product_quantity =$_POST['quantity'];
								$product_title =$_POST['title'];
								$product_price =$_POST['price'];
								$product_description =$_POST['desc'];
								$product_image =$_POST['img'];
								$product_keywords =$_POST['key'];
								$sql = "SELECT * FROM categories WHERE cat_title='$product_category_name'";							
								$run_query = mysqli_query($conn,$sql);
								$row = mysqli_fetch_array($run_query);
								$cid=$row['cat_id'];
								if($product_category_name==$row['cat_title'])
								{
									
									$sql="INSERT INTO products (product_cat,product_quantity,product_title, product_price, product_desc,product_image,product_keywords) VALUES ('$cid','$product_quantity','$product_title',$product_price,'$product_description','$product_image','$product_keywords')"; 
									$result=mysqli_query($conn,$sql);
									if ($result==0)
										echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Please check the product!</div>";

									else
										echo "
											<div class='alert alert-success'>
												<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
												<strong></strong>The product was inserted.
											</div>";
									
								}	
								else
									echo "<div class='alert alert-danger' role='alert'>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
											<strong></strong> There is no that category name.Please check categories!
										</div>";

							}
							
							//
							elseif(isset($_POST['update_stock']))
							{
								include('dbconnect.php');
								$product_newstock=$_POST['product_newstock'];
								$product_id = $_POST['product_id'];
								$sql = "UPDATE products SET product_quantity = '$product_newstock' WHERE product_id = '$product_id' ";
								$row = mysqli_fetch_array($run_query);
								$run_query = mysqli_query($conn,$sql);

								
									echo "<div class='row'>
												<div class='col-md-2'>Updated</div>	
											</div>";
							}
							//
							elseif(isset($_POST['dblogs']))
							{
								
								include('dbconnect.php');
								$sql = "select * from mysql.general_log";
								$run_query = mysqli_query($conn,$sql);
								$count=mysqli_num_rows($run_query);
								
									while($row=mysqli_fetch_array($run_query))
									{
										$event_time=$row['event_time'];
										$user_host=$row['user_host'];
										$thread_id = $row['thread_id'];
										$server_id  = $row['server_id'];
										$command_type = $row['command_type'];
										$argument = $row['argument'];
										
										echo "
										
											<div class='row'>
												<div class='col-md-2'>event_time: $event_time</div>
												<div class='col-md-2'>user_host: $user_host</div>
												<div class='col-md-2'>thread_id: $thread_id</div>
												<div class='col-md-2'>server_id : $server_id</div>
												<div class='col-md-2'>command_type: $command_type</div>
												<div class='col-md-2'>argument: $argument</div>
													
											</div>";
									}
							
							}
							
							//
							
							elseif(isset($_POST['ban_user']))
							{
								include('dbconnect.php');
								$user_id=$_POST['us_id'];
								$sql = "DELETE from user_info WHERE user_id = '$user_id' ";
								$row = mysqli_fetch_array($run_query);
								$run_query = mysqli_query($conn,$sql);

								
									echo "<div class='row'>
												<div class='col-md-2'>Banned!</div>	
											</div>";
							}
							//
							
							elseif(isset($_POST['insert_category']))
							{
								include('dbconnect.php');
								$product_category_name=$_POST['cat'];
								$sql = "SELECT * FROM categories WHERE cat_title='$product_category_name'";
								$row = mysqli_fetch_array($run_query);
								$run_query = mysqli_query($conn,$sql);
								if($product_category_name!=$row['cat_title'])
								{
									$sql = "INSERT INTO categories (cat_title) VALUES ('$product_category_name')";
									$run_query = mysqli_query($conn,$sql);
								}	
								else 
									echo "<div class='alert alert-danger' role='alert'>
								    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								    		<strong></strong> Already added that category!
								    	</div>";
							}
							elseif(isset($_POST['delete_category']))
							{
								include('dbconnect.php');
								$product_category_name =$_POST['cat_name'];
								$sql = "SELECT * FROM categories WHERE cat_title='$product_category_name'";
								$run_query = mysqli_query($conn,$sql);
								$row = mysqli_fetch_array($run_query);
								$cid=$row['cat_id'];								
								if($product_category_name==$row['cat_title'])
								{
									$sql = "DElETE FROM categories WHERE cat_title='$product_category_name'";
									$sql2 = "DElETE FROM products WHERE product_id='$cid'";
									$run_query = mysqli_query($conn,$sql);
									$run_query2= mysqli_query($conn,$sql2);
								}	
								else
									echo "<div class='alert alert-danger' role='alert'>
								        	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								        	<strong></strong> There is no that category!
								       	</div>";
							}
							elseif(isset($_POST['show']))
							{
								$total_sale=0;
								include('dbconnect.php');
								$sql = "SELECT * FROM customer_order";
								$run_query = mysqli_query($conn,$sql);
								$count=mysqli_num_rows($run_query);
								if($count>0)
								{
									while($row=mysqli_fetch_array($run_query))
									{
										$user_id=$row['uid'];
										$product_name=$row['p_name'];
										$sql2="SELECT * FROM user_info WHERE user_id='$user_id'";
										$run_query2 = mysqli_query($conn,$sql2);
										$row2=mysqli_fetch_array($run_query2);
										$user_fname=$row2['first_name'];
										$user_lname=$row2['last_name'];
										$product_name=$row['p_name'];
										$p_qty=$row['p_qty'];
										$p_price=$row['p_price'];
										$total_sale=$total_sale+$p_price;
										echo "
										
											<div class='row'>
												<div class='col-md-2'>User Name: $user_fname</div>
												<div class='col-md-2'>User Surname: $user_lname</div>
												<div class='col-md-2'>Product Name: $product_name</div>		
												<div class='col-md-2'>Quantity: $p_qty</div>	
												<div class='col-md-2'>Price: $$p_price</div>	
											</div>";
									}
									echo "
											<div class='row'>
												<div class='col-md-2'>Total Sale : $$total_sale</div>
											</div>";
								}
								else
										echo "<div class='alert alert-danger' role='alert'>
									    		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
									    		<strong></strong> There is no sale not yet!
									    	</div>";
							}
							
							/// 
							
								elseif(isset($_POST['showbanned']))
							{
								include('dbconnect.php');
								$sql = "SELECT * FROM removed_users";
								$run_query = mysqli_query($conn,$sql);
								$count=mysqli_num_rows($run_query);
								
									while($row=mysqli_fetch_array($run_query))
									{
										$user_id=$row['user_id'];
										$date=$row['expiration_date'];
										
										echo "
										
											<div class='row'>
												<div class='col-md-2'>User ID: $user_id</div>
												<div class='col-md-2'>Expiration Date: $date</div>
													
											</div>";
									}
							}
								
								
							
							///
						?>
						
</body>
</html>
