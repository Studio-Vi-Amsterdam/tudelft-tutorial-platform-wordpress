<?php
$data = get_field('banner_section');
$bg = $data['banner__background'];
$subtitle = $data['welcome_small_text'];
$title = $data['title'];
$buttons = $data['banner__buttons'];
?>
<section class="faculties-hero">
	<div class="faculties-hero__container">
		<div class="faculties-hero__banner">
			<figure class="faculties-hero__poster">
				<?= wp_get_attachment_image($bg['ID'], [1228, 658]); ?>
			</figure>

			<div class="faculties-hero__content">
				<?php if($subtitle): ?>
					<div class="faculties-hero__subtitle"><?= $subtitle; ?></div>
				<?php endif; ?>

				<?php if($title): ?>
					<h1><?= $title; ?></h1>
				<?php endif; ?>
			</div>
		</div>

		<?php if(!empty($buttons)): ?>
			<div class="faculties-hero__buttons">
				<?php foreach ($buttons as $btn): ?>
					<a href="<?= $btn['link']['url']; ?>" target="<?= $btn['link']['target']; ?>" class="faculties-hero__btn">
						<?= $btn['link']['title']; ?>
						<div class="arrow">
							<svg width="14" height="22">
								<use href="<?= THEME_URL ?>/src/sprite.svg#arrow-large"></use>
							</svg>
							<svg width="38" height="3">
								<use href="<?= THEME_URL ?>/src/sprite.svg#line"></use>
							</svg>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
