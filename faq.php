<?php 
	$brand = array(
		'name'	=> "Frequently Asked Questions",
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
						<h2>FAQs</h2>
						<p class="lead">
							With over 800 units across the country and hundreds of Franchisees there are some frequently asked questions that should help guide you through this process.
						</p>
						<?php
							$faqs = array(
								'How long will it take to be approved and open a new Franchise?' => 'The application process from the date of your initial inquiry to approval by our executive team can vary depending on a number of factors (such as strength of the franchisee’s application and availability of real estate) but is typically a two to eight week process. We will work with you to determine together whether this is the right opportunity for you. Once approved by our executive team, depending on the real estate status you will be eight to sixteen months away from opening your doors.',
								'How much money will I make?' => 'Your return on investment depends on many variables such as market size, lease terms, market demographics and most importantly your hard work. A key component in our franchising process is due diligence. During due diligence you will be put in contact with members of our franchise community in an effort to better understand all aspects of running a franchised business, including whether or not this will meet your financial expectations.',
								'How do I know if I am qualified?' => 'Restaurant experience, although a definite asset, is not mandatory – instead we look for franchisees who are passionate about the brand and about delivering a perfect guest experience. Beyond that we want people with strong leadership skills, community ties, and a drive to control their own destiny.',
								'Are there existing restaurants for sale? What is the process of buying one?' => 'There are always times when existing franchisees are ready for a new challenge and may entertain selling their business. The initial process for securing a new restaurant or completing the transfer of an existing location is exactly the same. We ask that candidates first submit their applications to the Franchising Team and we will help you through the franchising process. Once screened by the Franchising Team, we will help you determine the best opportunity for you.',
							);

							$collapseId = 1;
						?>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<?php foreach($faqs as $question => $answer) { ?>
								<div class="panel-heading" role="tab" id="heading<?=$collapseId?>">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$collapseId?>" aria-expanded="true" aria-controls="collapse<?=$collapseId?>">
											<?=$question?>
										</a>
									</h4>
								</div>
								<div id="collapse<?=$collapseId?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?=$collapseId?>">
									<div class="panel-body">
										<p>
											<?=$answer?>
										</p>	
									</div>
								</div>
								<?php 
									$collapseId++;
								} ?>
							</div>
						</div>
						 
					</div>
				</div>
			</div>
		</div>
			


<?php  include('footer.php'); ?>