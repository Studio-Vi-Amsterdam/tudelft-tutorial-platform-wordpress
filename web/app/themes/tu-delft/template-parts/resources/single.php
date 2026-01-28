<?php
use TuDelft\Theme\Modules\Resources\Resources;
$ID = get_the_ID();
$content = get_field('resource__content', $ID);
$authors = get_field('resource__authors', $ID);
$editors = get_field('resource__editors', $ID);
$publisher = get_field('resource__publisher', $ID);
$license = get_field('resource__license', $ID);
$pdf = get_field('resource__pdf', $ID);
$doi = get_field('resource__doi', $ID);
$keywords = Resources::get_keywords($ID);
?>
<section class="tutorial resource-page">
	<div class="tutorial__container md:flex md:justify-between">
		<div class="tutorial__aside">
			<div class="tutorial__aside-height">
				<div class="tutorial__close call-tutorial-nav">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
									d="M1 1.234l12 12m-12 0l12-12"/>
					</svg>
				</div>

				<div class="tutorial__aside-wrapper" data-lenis-prevent>
					<div class="tutorial__nav responsible">
						<h4>Responsible</h4>
						<?php if ($authors): ?>
							<table>
								<tr>
									<td>Author(s)</td>
									<td>
										<ul class="colored-list">
											<?php foreach ($authors as $author):
												$id = $author['orcid_id'];
												?>
												<li>
													<?= $author['author']; ?>

													<svg width="14" height="14">
														<use href="<?= THEME_URL; ?>/src/sprite.svg#orcid-id"></use>
													</svg>

													<a href="<?= $id['url']; ?>" target="_blank">
														<?= $id['title']; ?>
													</a>
												</li>
											<?php endforeach; ?>
										</ul>
									</td>
								</tr>
							</table>
						<?php endif; ?>

						<?php if ($editors): ?>
							<table>
								<tr>
									<td>Editor(s)</td>
									<td>
										<ul class="colored-list">
											<?php foreach ($editors as $editor):
												$id = $editor['orcid_id'];
												?>
												<li>
													<?= $editor['author']; ?>

													<svg width="14" height="14">
														<use href="<?= THEME_URL; ?>/src/sprite.svg#orcid-id"></use>
													</svg>

													<a href="<?= $id['url']; ?>" target="_blank">
														<?= $id['title']; ?>
													</a>
												</li>
											<?php endforeach; ?>
										</ul>
									</td>
								</tr>
							</table>
						<?php endif; ?>

						<table>
							<?php
							$faculties = get_field('faculty', get_the_ID());
							get_template_part('template-parts/items/faculties-list', false, ['items' => $faculties, 'title' => 'Affiliation']);
							?>
						</table>


						<?php if ($publisher): ?>
							<table>
								<tr>
									<td>Publisher</td>
									<td>
										<ul class="colored-list">
											<li><?= $publisher; ?></li>
										</ul>
									</td>
								</tr>
							</table>
						<?php endif; ?>
					</div>


					<div class="tutorial__nav information">
						<h4>Information</h4>
						<table>

							<?php if ($content['publication_date']): ?>
								<tr>
									<td>Published</td>
									<td>
										<ul>
											<li><?= $content['publication_date']; ?></li>
										</ul>
									</td>
								</tr>
							<?php endif; ?>

							<?php if($keywords): ?>
								<tr>
									<td>Keywords</td>
									<td>
										<ul>
											<?php
											foreach ($keywords as $keyword) :
												?>
												<li><a href="#"><?= $keyword['name']; ?></a></li>
											<?php
											endforeach;
											?>
										</ul>
									</td>
								</tr>
							<?php endif; ?>

							<?php if ($license): ?>
								<tr>
									<td>License</td>
									<td>
										<ul class="colored-list">
											<li><?= $license ?></li>
										</ul>
									</td>
								</tr>
							<?php endif; ?>

							<?php if ($doi): ?>
								<tr>
									<td>DOI</td>
									<td>
										<ul>
											<li>
												<a href="<?= $doi['url']; ?>" target="_blank"><?= $doi['title']; ?></a>
											</li>
										</ul>
									</td>
								</tr>
							<?php endif; ?>
						</table>
					</div>

				</div>
			</div>
		</div>

		<div class="tutorial__main">
			<div class="tutorial__item active" data-tab-content="chapter-0">
				<div class="tutorial__content text intro">
					<div class="tutorial__title">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>

				<?php if ($content['subtitle']): ?>
					<h2><?= $content['subtitle']; ?></h2>
				<?php endif; ?>

				<?php if ($pdf): ?>
					<div>
						<a href="<?= $pdf['url']; ?>" target="_blank" rel="noreferrer" class="btn">
							Download PDF
						</a>
						<?= round($pdf['filesize'] / 1024 / 1024, 2); ?>MB • <?= $pdf['filename'] ?>
					</div>
				<?php endif; ?>

				<?php if ($content['abstract']): ?>
					<div>
						<h3>Abstract</h3>
						<?= $content['abstract']; ?>
					</div>
				<?php endif; ?>

				<?php if ($content['recommended_citation']): ?>
					<div>
						<h3>Recommended Citation</h3>
						<?= $content['recommended_citation']; ?>
					</div>
				<?php endif; ?>

				<?php if ($content['references']): ?>
					<div>
						<h3>References</h3>
						<?= $content['references']; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>