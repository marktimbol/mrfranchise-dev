<?php 
	$brand = array(
		'name'	=> "About Us",
		'logo'	=> 'logo.png',
		'directory' => ''
		);	

	include('header.php');

?>
	
	<body class="page-default">
		
		<?php include('header-default.php'); ?>

		<?php include('mobile-slideshow.php'); ?>

		<?php include('mobile-brandsCarousel.php'); ?>	
		

		<div class="page-content parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>About Mr. Franchise</h2>

						<div class="row">
							<?php
							$photos = array(
								'Karim_El_Ghazl.jpg',
								'Jim_Underwood.jpg',
								'Paul_Fuller.jpg',
								'Sara_Mahdi.jpg'
								);
							
							foreach( $photos as $photo ) {
							?>

								<div class="col-md-3 col-xs-6">
									<img src="public/images/<?=$photo?>" alt="" title="" class="img-responsive img-thumbnail" />
								</div>	

							<?php } ?>	
						</div>	

						<p>&nbsp;</p>															

						<p class="lead">
							Mr. Franchise is a full service franchise brokerage firm. We are proud to have established a unique presence in the franchising sector in that all our affiliated brokers are not only trained and experienced franchise brokers, but also franchise and/or business owners themselves. When clients pose questions regarding franchising our answers are derived not only from classroom training but from real world experience. We have found that real life rarely co-operates with textbook business examples!
						</p>
						<p class="lead">
							We currently hold relationships with over 100 of the U.S. leading franchise brands. Our expansive portfolio provides our franchise buyer clients with a much broader and varied pool of franchises to research. Having more choices means our clients can choose the most appropriate franchise based on their background, skills and goals – rather than having to compromise.
						</p>
						<div>
							<a href="contact-us.php" class="btn btn-clear">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			


<?php  include('footer.php'); ?>