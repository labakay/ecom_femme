<?php 
	session_start();
	include('dbconnect.php');
	if(isset($_POST["category"])){
		$category_query="SELECT * FROM categories";
		$run_query=mysqli_query($conn,$category_query);
		echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a><h4>Categories</h4></a></li>";
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$cid=$row['cat_id'];
				$cat_name=$row['cat_title'];
				echo "<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>";
			}
			echo "</div>";
		}
	}
	
	if(isset($_POST['getProduct']))
	{
		if(isset($_POST['price_sorted'])){
			$product_query="SELECT * FROM products ORDER BY product_price";
		}
		elseif(isset($_POST['pop_sorted'])){
			$product_query="SELECT * FROM products ORDER BY RAND()";
		}
		else{
		$product_query="SELECT * FROM products";
		}
		$run_query=mysqli_query($conn,$product_query);
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$pro_id=$row['product_id'];
				$pro_cat=$row['product_cat'];
				$title=$row['product_title'];
				$price=$row['product_price'];
				$quantity=$row['product_quantity'];
				$img=$row['product_image'];

				echo "<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$title</div>
								<div class='panel-body'>
								<a href='#' class='imageproduct' pid='$pro_id'>
									<img src='assets/prod_images/$img' style='width:180px; height:200px;' >
								</a>
								</div>
								<div class='panel-heading'>$$price Stock:$quantity
								<button pid='$pro_id' class='quicklook btn btn-primary btn-xs' style='float:right;'>AGRANDIR</button>&nbsp;
								<button pid='$pro_id' class='product btn btn-danger btn-xs' style='float:right;'> Panier</button>
								</div>
							</div></div>";
			}
		}
	}
	
	if(isset($_POST['get_selected_Category'])  || isset($_POST['search']))
	{
		if(isset($_POST['get_selected_Category']))
		{
			$cid=$_POST['cat_id'];
			$sql="SELECT * FROM products WHERE product_cat=$cid ORDER BY product_price";
		}
		elseif(isset($_POST['search']))
		{
			$keyword=$_POST['keyword'];
			$sql="SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
		}
		
		$run_query=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($run_query))
		{
			$pro_id=$row['product_id'];
				$pro_cat=$row['product_cat'];
				$title=$row['product_title'];
				$price=$row['product_price'];
				$img=$row['product_image'];
				$quantity=$row['product_quantity'];
				echo "<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$title</div>
								<div class='panel-body' class='imageproduct' pid='$pro_id'><img src='assets/prod_images/$img' style='width:200px; height:250px;'></div>
								<div class='panel-heading'>$$price Stock:$quantity
								<button pid='$pro_id' class='quicklook btn btn-warning btn-xs' style='float:right;'>Agrandir</button>&nbsp;
								<button pid='$pro_id' class='product btn btn-danger btn-xs' style='float:right;'>Panier</button>
								
								</div>
							</div></div>";
		}
	}
	
	if(isset($_POST['addToProduct']))
	{
		if(!(isset($_SESSION['uid'])))
		{
			echo "
				<div class='alert alert-danger' role='alert'>
  				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  				<strong>Désolé ,</strong> Connectez vous d'abord!
				</div>";}
		else
		{
			$pid=$_POST['proId'];
			$uid=$_SESSION['uid'];
			$sql = "SELECT * FROM cart WHERE p_id = '$pid' AND user_id = '$uid'";
			$run_query=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($run_query);
			$sql2 = "SELECT * FROM products WHERE product_id = '$pid'";
			$run_query2 = mysqli_query($conn,$sql2);
			$row2= mysqli_fetch_array($run_query2);
			$product_quantity=$row2['product_quantity'];
			if($product_quantity>0)
			{
				if($count>0)
				{
					echo "<div class='alert alert-danger' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong></strong> Already added!
					</div>";
				}
				else
				{
					$sql = "SELECT * FROM products WHERE product_id = '$pid'";
					$run_query = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($run_query);
					$id = $row["product_id"];
					$pro_title = $row["product_title"];
					//$qty = $row [ 
					$pro_image = $row["product_image"];
					$pro_price = $row["product_price"];
					$product_quantity=$row['product_quantity'];
					$sql="INSERT INTO cart(p_id,user_id,product_title,product_image,qty,price,total_amount) VALUES('$pid','$uid','$pro_title','$pro_image','1','$pro_price','$pro_price')";
					$run_query = mysqli_query($conn,$sql);
					if($run_query){
							echo "
								<div class='alert alert-success' role='alert'>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								<strong>Success!</strong> Product added to cart!
								</div>";
						}
				}
		    }
			else
			{
				echo "<div class='alert alert-danger' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong></strong> There is not enough in stock!
					  </div>";
			}
		}
	}
	
	if(isset($_POST['cartmenu']) || isset($_POST['cart_checkout']))
	{
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM cart WHERE user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		if($count>0)
		{
			$i=1;
			$total_amt=0;
		while($row=mysqli_fetch_array($run_query))
		{
			$sl=$i++;
			$pid=$row['p_id'];
			$product_image=$row['product_image'];
			$product_title=$row['product_title'];
			$product_price=$row['price'];
			$qty=$row['qty'];
			$total=$row['total_amount'];
			$price_array=array($total);
			$total_sum=array_sum($price_array);
			$total_amt+=$total_sum;

			if(isset($_POST['cartmenu']))
			{
				echo "
						<div class='row'>
							<div class='col-md-3'>$sl</div>
							<div class='col-md-3'><img src='assets/prod_images/$product_image' width='60px' height='60px'></div>
							<div class='col-md-3'>$product_title</div>
							<div class='col-md-3'>$ $product_price</div>
						</div>
			";
			}
			else
			{
				echo "
					<div class='row'>
						<div class='col-md-2'><a href='#' remove_id='$pid' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
						<a href='#' update_id='$pid' class='btn btn-success update'><span class='glyphicon glyphicon-ok-sign'></span></a>
						</div>
						<div class='col-md-2'><img src='assets/prod_images/$product_image' width='60px' height='60px'></div>
						<div class='col-md-2'>$product_title</div>
						<div class='col-md-2'><input class='form-control price' type='text' size='10px' pid='$pid' id='price-$pid' value='$product_price' disabled></div>
						<div class='col-md-2'><input class='form-control qty' type='text' size='10px' pid='$pid' id='qty-$pid' value='$qty'></div>
						<div class='col-md-2'><input class='total form-control price' type='text' size='10px' pid='$pid' id='amt-$pid' value='$total' disabled></div>
					</div>
				";
			}
		}
		if(isset($_POST['cart_checkout']))
		{
			// echo "
			// 	<div class='row'>
			// 		<div class='col-md-8'></div>
			// 		<div class='col-md-4'>
			// 			<b>Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp$total_amt</b>
			// 		</div>
			// 	</div>";
		}
	}
}

	if(isset($_POST['removeFromCart']))
	{
		$pid=$_POST['pid'];
		$uid=$_SESSION['uid'];
		$sql="DELETE FROM cart WHERE p_id='$pid' AND user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		if($run_query)
		{
			echo "
				<div class='alert alert-danger' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Item removed from cart!
				</div>
			";
		}	
	}

	if(isset($_POST['updateProduct']))
	{
		$pid=$_POST['updateId'];
		$uid=$_SESSION['uid'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		$total=$_POST['total'];
		$sql2="SELECT * FROM products WHERE product_id='$pid'";
		$run_query2=mysqli_query($conn,$sql2);
		$row=mysqli_fetch_array($run_query2);
		if($qty<$row['product_quantity']&&$qty>0)
		{
			$sql="UPDATE cart SET qty='$qty', price='$price', total_amount='$total' WHERE p_id='$pid' AND user_id='$uid'";
			$run_query=mysqli_query($conn,$sql);
			if($run_query){
				echo "
					<div class='alert alert-success' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong>Success!</strong> Item updated!
					</div>";
			}
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong></strong> No product avaliable!
				 </div>";
		}

	}

	if(isset($_POST['payment_checkout']))
	{
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM cart WHERE user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		while($cart_row=mysqli_fetch_array($run_query))
		{
			$cart_prod_id=$cart_row['p_id'];
			$sql4="SELECT * FROM products WHERE product_id='$cart_prod_id'";
			$run_query4=mysqli_query($conn,$sql4);
			$products=mysqli_fetch_array($run_query4);
			//stock update has done with trigger !!!!!!! do not have to use another sql ... // 
			//$stock_quantity=$products['product_quantity'];
			//$cart_prod_title=$cart_row['product_title'];
			 $sold_quantity=$cart_row['qty'];
			//$new_quantity=$stock_quantity-$sold_quantity;
			//$sql5="UPDATE products SET product_quantity='$new_quantity' WHERE product_id='$cart_prod_id'";
			//$run_query5=mysqli_query($conn,$sql5);
			$cart_price_total=$cart_row['total_amount'];
			$sql2="INSERT INTO customer_order (uid,pid,p_name,p_price,p_qty) VALUES ('$uid','$cart_prod_id','$cart_prod_title','$cart_price_total','$sold_quantity')";
			$run_query2=mysqli_query($conn,$sql2);
		}
		$sql3="DELETE FROM cart WHERE user_id='$uid'";
		$run_query3=mysqli_query($conn,$sql3);
		
		
	}

	if(isset($_POST['product_detail']))
	{
		$pid=$_POST['pid'];
		$sql="SELECT * FROM products WHERE product_id='$pid'";
		$run_query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($run_query);
		$pro_id=$row['product_id'];
		$image=$row['product_image'];
		$title=$row['product_title'];
		$price=$row['product_price'];
		$desc=$row['product_desc'];
		$keys=$row['product_keywords'];
		$quantity=$row['product_quantity'];
		echo "
				<div class='row'>
					<div class='col-md-6 pull-right'>
						<img src='assets/prod_images/$image' style='width:250px;height:300px;'>
					</div>
					<div class='col-md-6'>
						<div class='row'> <div class='col-md-12'><h1>$title</h1></div></div>
						<div class='row'> <div class='col-md-12'>Price:<h3 class='text-muted'>$$price</h3></div></div>
						<div class='row'> <div class='col-md-12'>Stock:<h3 class='text-muted'>$quantity</h3></div></div>
						<div class='row'> <div class='col-md-12'>Description:<h4 class='text-muted'>$desc</h4></div></div><br><br>
						<div class='row'> <div class='col-md-12'>Tags:<h4 class='text-muted'>$keys</h4></div></div>
						<button pid='$pro_id' class='product btn btn-danger'>Add to Cart</button>
					</div>
				</div>
		";
	}

 ?>

