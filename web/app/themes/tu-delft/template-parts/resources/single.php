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
$domain_to_remove = 'https://orcid.org/';
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
										<ul>
											<?php foreach ($authors as $author):
												$orcid_id = $author['orcid_id'];
											?>
												<li class="responsible__item">
														<?= $author['author']; ?>
														<?php if($orcid_id): ?>
															<span class="relative block">
																<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0_5268_43135)">
																	<path d="M14 7C14 10.8664 10.8664 14 7 14C3.13359 14 0 10.8664 0 7C0 3.13359 3.13359 0 7 0C10.8664 0 14 3.13359 14 7Z" fill="#A6CE39"/>
																	<path d="M4.71951 10.1828H3.87732V4.32578H4.71951V6.97265V10.1828Z" fill="white"/>
																	<path d="M5.95544 4.32578H8.23044C10.3961 4.32578 11.3476 5.87343 11.3476 7.25703C11.3476 8.76093 10.1719 10.1883 8.24138 10.1883H5.95544V4.32578ZM6.79763 9.42812H8.13748C10.0461 9.42812 10.4836 7.9789 10.4836 7.25703C10.4836 6.08124 9.73435 5.08593 8.09373 5.08593H6.79763V9.42812Z" fill="white"/>
																	<path d="M4.85078 3.10624C4.85078 3.40702 4.60469 3.65858 4.29844 3.65858C3.99219 3.65858 3.74609 3.40702 3.74609 3.10624C3.74609 2.79999 3.99219 2.55389 4.29844 2.55389C4.60469 2.55389 4.85078 2.80546 4.85078 3.10624Z" fill="white"/>
																	</g>
																	<defs>
																	<clipPath id="clip0_5268_43135">
																	<rect width="14" height="14" fill="white"/>
																	</clipPath>
																	</defs>
																</svg>
																<?= str_replace($domain_to_remove, "", $orcid_id); ?>
																<a class="absolute opacity-0 top-0 left-0 w-full h-full" href="<?= $orcid_id; ?>" target="_blank"><?= $orcid_id; ?></a>
															</span>
														<?php endif; ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</td>
								</tr>
							</table>
						<?php endif; ?>

						<?php if ($editors): ?>
							<table class="mt-6">
								<tr>
									<td>Editor(s)</td>
									<td>
										<ul>
											<?php foreach ($editors as $editor):
												$orcid_id = $editor['orcid_id'];
											?>
												<li class="responsible__item">
													<?= $editor['author']; ?>
													<?php if($orcid_id): ?>
														<span class="relative block">
																<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0_5268_43135)">
																	<path d="M14 7C14 10.8664 10.8664 14 7 14C3.13359 14 0 10.8664 0 7C0 3.13359 3.13359 0 7 0C10.8664 0 14 3.13359 14 7Z" fill="#A6CE39"/>
																	<path d="M4.71951 10.1828H3.87732V4.32578H4.71951V6.97265V10.1828Z" fill="white"/>
																	<path d="M5.95544 4.32578H8.23044C10.3961 4.32578 11.3476 5.87343 11.3476 7.25703C11.3476 8.76093 10.1719 10.1883 8.24138 10.1883H5.95544V4.32578ZM6.79763 9.42812H8.13748C10.0461 9.42812 10.4836 7.9789 10.4836 7.25703C10.4836 6.08124 9.73435 5.08593 8.09373 5.08593H6.79763V9.42812Z" fill="white"/>
																	<path d="M4.85078 3.10624C4.85078 3.40702 4.60469 3.65858 4.29844 3.65858C3.99219 3.65858 3.74609 3.40702 3.74609 3.10624C3.74609 2.79999 3.99219 2.55389 4.29844 2.55389C4.60469 2.55389 4.85078 2.80546 4.85078 3.10624Z" fill="white"/>
																	</g>
																	<defs>
																	<clipPath id="clip0_5268_43135">
																	<rect width="14" height="14" fill="white"/>
																	</clipPath>
																	</defs>
																</svg>
																<?= str_replace($domain_to_remove, "", $orcid_id); ?>
																<a class="absolute opacity-0 top-0 left-0 w-full h-full" href="<?= $orcid_id; ?>" target="_blank"><?= $orcid_id; ?></a>
															</span>
													<?php endif; ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</td>
								</tr>
							</table>
						<?php endif; ?>

						<table class="mt-6">
							<?php
								$faculties = get_field('faculty', get_the_ID());
								get_template_part('template-parts/items/faculties-list', false, ['items' => $faculties, 'title' => 'Affiliation']);
							?>
						</table>


						<?php if ($publisher): ?>
							<table class="mt-6">
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

							<?php if ($content['publication_date']):
								$date = new DateTime($content['publication_date']);
							?>
								<tr>
									<td>Published</td>
									<td>
										<ul>
											<li><?= $date->format('d/m/Y') ?></li>
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
										<ul class="colored-list">
											<li>
												<?php if($doi): ?>
													<a href="<?= $doi; ?>" class="simple-link" target="_blank">
														<?= str_replace('https://doi.org/', "", $doi); ?>
													</a>
												<?php endif; ?>
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

					<?php if ($content['subtitle']): ?>
						<p><?= $content['subtitle']; ?></p>
					<?php endif; ?>

					<?php if ($pdf): ?>
							<a href="<?= $pdf['url']; ?>" target="_blank" rel="noreferrer" class="btn">
								Download PDF
							</a>
							<p class="!font-normal"><?= round($pdf['filesize'] / 1024 / 1024, 2); ?>MB • <?= $pdf['filename'] ?></p>
					<?php endif; ?>
				</div>

				<?php if ($content['abstract']): ?>
					<div class="tutorial__content text">
						<h4>Abstract</h4>
						<?= $content['abstract']; ?>
					</div>
				<?php endif; ?>

				<?php if ($content['recommended_citation']): ?>
					<div class="tutorial__content citation text">
						<h4>Recommended Citation</h4>
						<div class="citation__box" data-copy="<?= $content['recommended_citation']; ?>">
							<?= $content['recommended_citation']; ?>
							<button class="citation__copy">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 8V7C8 5.89543 8.89543 5 10 5H17C18.1046 5 19 5.89543 19 7V14C19 15.1046 18.1046 16 17 16H16" stroke="black"/>
									<rect x="5" y="8" width="11" height="11" rx="2" stroke="black"/>
								</svg>
							</button>
						</div>
					</div>
				<?php endif; ?>

				<?php if ($content['references']): ?>
					<div class="tutorial__content text">
						<h4>References</h4>
						<?= $content['references']; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>