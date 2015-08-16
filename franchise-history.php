<?php 
	$brand = array(
		'name'	=> "Franchise History",
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
						<h2>Franchise History</h2>

						<section id="cd-timeline">
							<?php 

							$brands = array(
								0 => array(
									'name'  => "Al's Beef",
									'image' => 'als-beef.png',
									'countries' => array(
										'GCC Exclusive'
										)
									),
								1 => array(
									'name'	=> "Queen's Chips",
									'image' => 'queens-chips.jpg',
									'countries' => array(
										'GCC Exlusive - Egypt & Lebanon'
										)
									),	

								2 => array(
									'name'	=> 'Krush Burger',
									'image' => 'krush-burger.png',
									'countries' => array(
										'KSA (West Region)'
										)
									),	

								3 => array(
									'name'	=> 'French Fry Heaven',
									'image' => 'french-fry-heaven.png',
									'countries' => array(
										'UAE',
										'KSA',
										'Qatar'
										)
									),																		
								);
							foreach( $brands as $brand ) { ?>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location <?=str_replace(array('.png','.jpg'), '', $brand['image'])?>">
									<img src="public/images/icons/cd-icon-picture.svg" alt="Picture">
								</div>
						 
								<div class="cd-timeline-content">
									<div class="col-md-3">
										<img src="public/images/thumbs/<?=$brand['image']?>" alt="Al's Beef" class="img-responsive">
									</div>

									<div class="col-md-9">
										<h2>Just Sold!</h2>
										<h3><?=$brand['name']?></h3>
										<?php if( count($brand['countries']) > 0 ) {
											echo '<ul>';
											foreach( $brand['countries'] as $country ) { 
												echo '<li>'. $country . '</li>';
											}
											echo '</ul>';
										}
										?>
										<a href="#0" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inquireFormModal">Interested in different markets</a>
										
									</div>

								</div>
							</div>
							<?php } ?>
						</section>
					</div>
				</div>
			</div>
		</div>
			


<?php  include('footer.php'); ?>