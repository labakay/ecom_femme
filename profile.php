
<!DOCTYPE html>
<html>

<!----<body> <--->
	<?php include 'header.php' ?>
	<br><br><br><br><br><br>
	 
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat"></div>		
				<div id="get_brand"></div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="cartmsg">
					</div>
				</div>
				
				
				<div class="panel panel-info">
					<div class="panel-heading text-center">-- Produits--
							<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Prix</a> | <a href="#" id='pop_sort'>Popularit√©</a>
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
				        <h4 class="modal-title" id="myModalLabel"> Detail du Produit </h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				      </div>
				    </div>
				  </div>
				</div>

			 <!-- Modal ends-->
		</div>
	</div>
	<?php include 'footer.php'?>
</html>
