<?php 
	$brand = array(
		'name'	=> "Mr. Franchise",
		'logo'	=> 'logo.png',
		'directory' => ''
		);	

	include('header.php');

?>
	<body>
		
		<?php include('header-default.php'); ?>
		
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach( range(1,5) as $index) { ?>
				<div class="swiper-slide">
					<img src="public/images/slides/slide<?=$index?>.jpg" />
					<div class="swiper-content">
						<div class="col-md-7">
							<h2>Explore dozens of franchises not only one. Speak with existing owners. More information is better than less.</h2>
							<p class="mt-40"><a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Inquire here</a></p>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<?php include('mobile-brandsCarousel.php'); ?>	
	

		<div id="featuredOpportunities" class="parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content">
							<h2>Featured Opportunities</h2>
							<p class="lead">
								We are always looking to expand.<br />
								Right now we're excited about - but not limited to - opportunities in these exciting locations!
							</p>

							<?php
							$thumbs = array(
								'als-beef.png',
								'french-fry-heaven.png',
								'krush-burger.png',
								//'lobster-joint.png',
								'nancy-pizza.png',
								'queens-chips.jpg',
								'backyard-burger.png',
								//'max-burger.png'
							);
							?>
							<ul class="brands owl-carousel">
								<?php foreach($thumbs as $thumb) { ?>
								<li>
									<figure class="brand">
										<img src="public/images/thumbs/<?=$thumb?>" class="" alt="" title="" />
										<figcaption>
											<div class="info"></div>		

											<div class="inquiry">
												<a href="#" class="btn btn-clear btn-sm btn-block" data-toggle="modal" data-target="#inquireFormModal">Inquire</a>
											</div>															
										</figcaption>
									</figure>									
								</li>
								<?php } ?>
								<li>
							</ul>
							

						</div>
					</div>
				</div>
			</div>	

			<div class="overlay"></div>

		</div>

		<div id="about" class="parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content align-left">
							<p class="lead">
								Mr. Franchise is a full service franchise brokerage firm. We are proud to have established a unique presence in the franchising sector in that all our affiliated brokers are not only trained and experienced franchise brokers, but also franchise and/or business owners themselves. When clients pose questions regarding franchising our answers are derived not only from classroom training but from real world experience. We have found that real life rarely co-operates with textbook business examples!
							</p>

							<p class="mt-40">
								<a href="about-us.php" class="btn btn-clear">Learn More</a> &nbsp; <a href="franchise-history.php" class="btn btn-clear">Franchise History</a>
							</p>
						</div>
					</div>
				</div>
			</div>	

			<div class="overlay"></div>

		</div>	

<?php include('footer.php'); ?>