<?php
$data = $args['data'];
if(!$data) return;
$content = $data['content'];
$btn = $data['btn'];
if(!$content) return;
?>
<section class="text-wrapper">
	<div class="text-wrapper__container">
		<?= $content; ?>

		<?php if($btn): ?>
			<div class="text-wrapper__btn">
				<a href="<?= $btn['url']; ?>" target="<?= $btn['target']; ?>" class="btn">
					<span><?= $btn['title']; ?></span>
					<span><?= $btn['title']; ?></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>
