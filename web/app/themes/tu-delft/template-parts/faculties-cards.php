<?php
$data = $args['data'] ?? false;
if(!$data) return;
$title = $data['title'];
$description = $data['description'];
$faculties = $data['faculties'];
$button = $data['button'];
?>
<section class="grid-cards">
	<div class="grid-cards__container">
		<div class="grid-cards__grid">
			<?php if($title || $description): ?>
				<div class="grid-cards__title">
					<?php if($title): ?>
						<h2><?= $title; ?></h2>
					<?php endif; ?>

					<?php if($description): ?>
						<p><?= $description; ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php
				if($faculties):
					foreach ($faculties as $faculty):
						get_template_part('template-parts/items/card-with-image', false, ['ID' => $faculty]);
					endforeach;
				endif;
			?>
		</div>

		<?php if($button): ?>
			<div class="grid-cards__load">
				<a href="<?= $button['url']; ?>" target="<?= $button['target']; ?>" class="btn">
					<span><?= $button['title']; ?></span>
					<span><?= $button['title']; ?></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>
