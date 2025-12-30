<?php
$data = $args['data'] ?? false;
if(!$data) return;
$title = $data['title'];
$description = $data['description'];
$communities = $data['communities'];
$button = $data['button'];
?>
<section class="communities-cards">
	<div class="communities-cards__container ">
		<div class="communities-cards__grid">
			<?php if($title || $description): ?>
				<div class="communities-cards__item">
					<?php if($title): ?>
						<h2><?= $title; ?></h2>
					<?php endif; ?>

					<?php if($description): ?>
						<p><?= $description; ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php
				if($communities):
					foreach ($communities as $community):
						  get_template_part('template-parts/items/community', false, ['ID' => $community]);
					endforeach;
				endif;
			?>
		</div>

		<?php if($button): ?>
			<div class="communities-cards__load">
				<a href="<?= $button['url']; ?>" target="<?= $button['target']; ?>" class="btn">
					<span><?= $button['title']; ?></span>
					<span><?= $button['title']; ?></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>