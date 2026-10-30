<?php
$data = $args['data'] ?? false;
$class = $args['class'] ?? '';
if(!$data) return;
$title = $data['title'];
$items = $data['items'];
?>
<section class="knowledge-cards">
	<div class="knowledge-cards__container">
		<?php if($title): ?>
			<div class="knowledge-cards__title">
				<h2><?= $title; ?></h2>
			</div>
		<?php endif; ?>

		<?php if($items): ?>
			<div class="knowledge-cards__grid">
				<?php foreach ($items as $item): ?>
					<a
						href="<?= $item['url']['url'] ?>"
						target="<?= $item['url']['target']; ?>"
						class="knowledge-cards__card <?= $item['color']; ?>"
					>
						<?php if($item['title']): ?>
							<h3><?= $item['title']; ?></h3>
						<?php endif; ?>

						<?php if($item['description']): ?>
							<p><?= $item['description']; ?></p>
						<?php endif; ?>

						<div class="arrow">
							<svg id="arrow-large" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.71191 1L12.7663 11.0001L1.71191 21" stroke="#00A6D6" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<svg id="line" viewBox="0 0 30 2" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.00195 0.976562L29 1.00639" stroke="#00A6D6" stroke-width="1.5"
											stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
