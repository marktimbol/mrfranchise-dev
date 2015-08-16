<div class="mobile-only">
	<?php
	$thumbs = array(
		'als-beef.png',
		'french-fry-heaven.png',
		'krush-burger.png',
		//'lobster-joint.png',
		'nancy-pizza.png',
		'queens-chips.png',
		'backyard-burger.png',
		//'max-burger.png'
	);
	?>
	<ul class="brands">
		<?php foreach($thumbs as $thumb) { ?>
		<li class="col-xs-2 <?=str_replace(array('.png', '.jpg'), '', $thumb) ?>">
			<a href="<?=str_replace('.png', '.php', $thumb) ?>">
			<img src="public/images/thumbs/<?=$thumb?>" class="img-responsive" alt="" title="" />	
			</a>						
		</li>
		<?php } ?>
		<li>
	</ul>
</div>	