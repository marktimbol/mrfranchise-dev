<div class="mobile-only">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php foreach( range(1,5) as $index) { ?>
			<div class="swiper-slide">
				<img src="public/images/slides/slide<?=$index?>.jpg" class="slide-background" />
				<div class="swiper-content">
					<div class="col-md-6">
						<h2>Explore dozens of franchises not only one. Speak with existing owners. More information is better than less.</h2>
						<p class="mt-40"><a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Inquire here</a></p>
					</div>
				</div>
				<div class="overlay"></div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>