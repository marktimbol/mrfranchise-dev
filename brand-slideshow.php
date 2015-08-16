<div class="swiper-container">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="swiper-custom-nav">	
				    <li class="swiper-pagination-switch active">
				    	<a href="#"><strong>Immediate</strong>Opportunities</a>
				    </li>
				    <li class="swiper-pagination-switch ">
				    	<a href="#"><strong>Why</strong><?=$brand['name']?></a>
				    </li>
				    <li class="swiper-pagination-switch desktop-only">
				    	<a href="#"><strong>Media</strong>Gallery</a>
				    </li>								    
				</ul>
			</div>
		</div>
	</div>

	<div class="swiper-wrapper">

		<?php foreach( $brand['slides'] as $brandSlides ) { ?>
			<div class="swiper-slide <?=$brandSlides['class'] == 'media-gallery' ? 'desktop-only' : ''?>">

				<img src="<?=$brandSlides['background']?>" alt="<?=$brand['name']?>" title="<?=$brand['name']?>" />

				<div class="swiper-content <?=$brandSlides['class']?>">
					<div class="container">
						<div class="row">	
							<?php if($brandSlides['content'] == 'gallery') { ?>

								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<div class="no-padding">
												<?php foreach( range(1,8) as $image ) { ?>
												<div class="col-md-3">
													<a href="public/images/<?=$brand['directory']?>/gallery/<?=$image?>.jpg" rel="prettyPhoto[thumbs]">
														<img src="public/images/<?=$brand['directory']?>/gallery/<?=$image?>.jpg" alt="<?=$brand['name']?>" title="<?=$brand['name']?>" class="img-responsive" />
													</a>
												</div>
												<?php } ?>
											</div>
										</div>

										<div class="col-md-4">
											<a href="https://www.youtube.com/watch?v=-Qoa1R1Svnk" rel="prettyPhoto[video]">
												<img src="public/images/als/gallery/video-thumb.jpg" alt="" title="" class="img-responsive" />
											</a>
										</div>
										
									</div>
								</div>

							<?php } else { ?>

								<div class="col-md-10">
									<?=$brandSlides['content']?>
								</div>	

							<?php

							}

							?>
						</div>
					</div>
				</div>
				<div class="overlay"></div>
			</div>
		<?php } ?>
	</div>

	<?php /*
	<div class="container swiper-custom-nav">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<ul>	
						    <li class="swiper-pagination-switch active">
						    	<a href="#"><strong>Immediate</strong>Opportunities</a>
						    </li>
						    <li class="swiper-pagination-switch ">
						    	<a href="#"><strong>Why</strong><?=$brand['name']?></a>
						    </li>
						    <li class="swiper-pagination-switch desktop-only">
						    	<a href="#"><strong>Media</strong>Gallery</a>
						    </li>								    
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	*/ ?>		
</div>		
