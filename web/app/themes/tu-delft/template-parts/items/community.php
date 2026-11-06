<?php
$ID = $args['ID'] ?? false;
if(!$ID) return;
$title = get_the_title($ID);
$url = get_the_permalink($ID);
$img = get_post_thumbnail_id($ID);
?>
<div class="communities-cards__item">
	<a href="<?= $url; ?>" class="communities-cards__card">
		<figure class="communities-cards__poster">
			<?= wp_get_attachment_image($img, [599, 240]); ?>
		</figure>
		<h3><?= $title; ?></h3>
	</a>
</div>