<?php 
	$brand = array(
		'name'	=> "French Fry Heaven",
		'logo'	=> 'french-fry-heaven.png',
		'directory' => 'ffh',

		'slides' => array(
			0 => array(
				'background' => 'public/images/ffh/slide2.jpg',
				'content' => "
					<p class='lead'>
					Our Brands always looking to expand.<br />
					Right now we're excited about - but not limited to - opportunities in these exciting locations!
					</p>
                    <ul>
						<li>Bahrain</li>
                   		<li>Kuwait</li>
                   		<li>Oman</li>   
                   		<li>Egypt</li>     
                   		<li>For other locations:</li>   		                       		
                    </ul>					
					<p><a href='#' class='btn btn-clear' data-toggle='modal' data-target='#inquireFormModal'>Click here</a></p>
				
				",

				'class' => ''
			),

			1 => array(
				'background' => 'public/images/ffh/slide2.jpg',
				'content' => "
					<p class='lead'>
						There are two kinds of fries – Angels and Saints. Angels are classic fries topped with condiments that range from traditional ketchup to more unique flavors from around the world, like the Garlic Parmesan with Black Truffle Salt. The sweet potato fries, called Saints, are served either salty or with sweet toppings like cinnamon and sugar, caramel, and pumpkin spice.
					</p>
                    					
					<p><a href='http://frenchfryheaven.com/' class='btn btn-clear' target='_blank'>Visit Website</a></p>
				
				",

				'class' => ''
			),	

			2 => array(
				'background' => 'public/images/ffh/slide2.jpg',
				'content' => 'gallery',
				'class' => 'media-gallery'
				)
		)
	);

	include('header.php');

?>
	
	<body class="brand-page french-fry-heaven-page">
		
		<?php include('header-brand.php'); ?>

		<?php include('brand-slideshow.php'); ?>


		<a id="tellMeMore" class="btn btn-clear" href="#featuredOpportunities">Hmm...Interesting, tell me more</a>
	
		<?php include('mobile-brandsCarousel.php'); ?> <!--FOR MOBILE VIEW ONLY-->

		<?php include('mobile-mediaGallery.php'); ?> <!--FOR MOBILE VIEW ONLY-->

		<div id="featuredOpportunities" class="parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content align-left">
							<div class="row">
								<div class="col-md-2">
						            <div class="logo-inquire">
						                 <img src="public/images/thumbs/<?=$brand['logo']?>" alt="<?=$brand['name']?>" title="<?=$brand['name']?>" />
						                <p><a class="btn btn-clear" href="#" data-toggle="modal" data-target="#inquireFormModal">Inquire now</a></p>
						            </div>
							   	</div>

								<div class="col-md-10">
								
									<h2>Who we're looking for</h2>
									<ul class="lead">
										<li>People passionate about <?=$brand['name']?></li>
										<li>People who want to own their own business/control their own destiny</li>
										<li>People with strong leadership skills</li>
										<li>People who will be actively engaged in delivering the PERFECT GUEST EXPERIENCE and restaurant profitability</li>
										<li>People with a proven track record of success in business</li>
										<li>People with strong local knowledge and relationships in the community they will do business in</li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>	

			<div class="brand-overlay"></div>

		</div>


<?php include('footer.php'); ?>