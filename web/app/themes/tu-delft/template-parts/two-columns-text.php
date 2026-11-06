<?php
$data = get_field('two_columns_content');
$title = $data['title'];
$content = $data['content'];
$content_right = $data['content_right'];
$button = $data['button'];
?>
<section class="two-columns">
	<div class="two-columns__container ">
		<?php if($title): ?>
			<div class="two-columns__title">
				<h2><?= $title; ?></h2>
			</div>
		<?php endif; ?>

		<?php if($content || $content_right): ?>
			<div class="two-columns__flex">
				<?php if($content): ?>
					<div class="two-columns__item">
						<?= $content; ?>
					</div>
				<?php endif; ?>

				<?php if($content_right): ?>
					<div class="two-columns__item">
						<?= $content_right; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if($button): ?>
			<div class="two-columns__btn">
				<a href="<?= $button['url']; ?>" target="<?= $button['target']; ?>" class="btn">
					<span><?= $button['title']; ?></span>
					<span><?= $button['title']; ?></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>