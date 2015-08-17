<div id="mediaGallery" class="parallax dark mobile-only">
	<div class="row">
		<div class="col-md-12">
			<h3>Media Gallery</h3>
			<div class="row">
				<div class="col-md-6 col-sm-12 overflow">
					<div class="no-padding">
						<?php foreach( range(1,12) as $image ) { ?>
						<div class="col-md-3 col-xs-4">
							<a href="public/images/<?=$brand['directory']?>/gallery/full/<?=$image?>.jpg" rel="prettyPhoto[thumbs]">
								<img src="public/images/<?=$brand['directory']?>/gallery/thumb/<?=$image?>.jpg" alt="<?=$brand['name']?>" title="<?=$brand['name']?>" class="img-responsive" />
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<a href="<?=$brand['video']['url']?>" rel="prettyPhoto[video]">
						<img src="<?=$brand['video']['poster']?>" alt="" title="" class="img-responsive" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div>