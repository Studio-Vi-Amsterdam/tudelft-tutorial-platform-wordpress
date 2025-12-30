<?php
$data = $args['data'];
$class = $args['class'];
$title = $data['title'];
$description = $data['description'];
$breadcrumbs = $data['breadcrumbs'];
?>
<section class="hero-overview <?= $class; ?>">
	<div class="hero-overview__container">
		<?php
			if ($breadcrumbs) {
				get_template_part('template-parts/breadcrumbs', false, ['items' => $breadcrumbs]);
			}
		?>
		<div class="hero-overview__flex">
			<div class="hero-overview__text">
				<?php if($title): ?>
					<h1><?= $title; ?></h1>
				<?php endif; ?>

				<?php if($description): ?>
					<p><?= $description; ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
