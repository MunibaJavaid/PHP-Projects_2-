<?php include 'Header.php'?>
<?php include '../confiq/connection.php';?>

<?php
    $query = "select * from manufactureproducts where Status = 'Manufactured'";
    $res = mysqli_query($con,$query)or die("Incorrect Query!!");

    $rows = mysqli_num_rows($res); 

?>
	
				
				<br><br><br><br><br>
		<?php if($rows>0)
                    {?>
				<div class="fullwidth-block">
					
				<div class="container">
				<h1 class="page-title">Our Verified Products</h1>
</div>
			
					<div class="container">
						<div class="project-list">
						<?php
                        while($data = mysqli_fetch_assoc($res)){
                        ?>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?=@$data['Image']?>" alt="Project"></figure>
									<div class="row">
										<div class="col-lg-6">
										<h2 class="project-title"><?= @$data['Prodname'] ?></h2>
										</div>
										<div class="col-lg-6">
										<h3 class="project-title">Rs <?= @$data['Price'] ?></h3>
										</div>
									</div>
									
									<p> <?= @$data['description'] ?> </p>
									<a href="viewproduct.php?id=<?=@$data['ProdId']?>" class="button">Learn more</a>
								</div>
							</div>
						<?php }?>
							
						</div>
					</div>
				</div>

				<?php
				}
				?>
			

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
