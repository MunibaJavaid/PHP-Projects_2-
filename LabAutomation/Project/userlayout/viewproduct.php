<?php include 'Header.php';?>
<?php include '../confiq/connection.php'; ?>
<?php
    $pid = $_GET['id'];
    $query = "select * from manufactureproducts where ProdId = $pid";
	$data = mysqli_query($con,$query)or die("Incorrect Query!!");
	$res = mysqli_fetch_assoc($data);
?>

<style>
.prodimg{
	display:block;
	margin-left: auto;
  margin-right: auto;
width: 60%;
}
#margin{
	margin-top:50px;
}
</style>
 <br>
 <br>

<div class="site-content">
	

			<main class="main-content" id = "margin">
               
				<div class="fullwidth-block">
					<div class="container">
						<a href="products.php" class="button back"><img src="Assets/images/arrow-back.png" alt="">Back to projects</a>
						<div class="row">
							<div class="col-md-6">
							<figure class="prodimg"><img src="<?=@$res['Image']?>" alt="Project"></figure>
							</div>
							<div class="col-md-6">
								<h2 class="section-title"><?=@$res['Prodname']?></h2>
								<ul class="project-info">
									<li><strong>Price:</strong> <?=@$res['Price']?></li>
									<li><strong>Category:</strong> <?=@$res['category']?></li>
									<li><strong>Status:</strong>  <?=@$res['Status']?></li>
									<li><strong>Description:</strong>  <?=@$res['description']?></li>

								</ul>
							</div>
						</div>
					</div>
				</div>

				
			

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="#">
								<input type="text" placeholder="Enter your email">
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Our address</h3>
								<strong>Company name INC</strong>
								<address>592 Avenue Street, Los Angeles, CA 90012</address>
								<a href="tel:+1 800 931 812">+1 800 931 812</a> <br>
								<a href="mailto:office@companyname.com">office@companyname.com</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Press room</h3>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque</a></li> 
									<li><a href="#">Laudantium totam aperiam</a></li>
									<li><a href="#">Eaque ipsa quae illo inventore</a></li> 
									<li><a href="#">Veritatis et quasi architecto</a></li>
									<li><a href="#">Vitae dicta sunt explicabo</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Research summary</h3>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque</a></li> 
									<li><a href="#">Laudantium totam aperiam</a></li>
									<li><a href="#">Eaque ipsa quae illo inventore</a></li> 
									<li><a href="#">Veritatis et quasi architecto</a></li>
									<li><a href="#">Vitae dicta sunt explicabo</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social media</h3>
								<p>Deserunt mollitia animi id est laborum dolorum fuga harum quidem rerum facilis.</p>
								<div class="social-links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon">copyright 2014 Company name. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by VandelayDesign.com" target="_blank">VandelayDesign.com</a>. All rights reserved</p>
				</div> <!-- .container -->
			</footer>
		</div>
