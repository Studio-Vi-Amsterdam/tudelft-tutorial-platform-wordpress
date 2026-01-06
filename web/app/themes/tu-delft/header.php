
<!--  

  ___ _ __ __ _ / _| |_ ___  __| | | |__  _   _ 
 / __| '__/ _` | |_| __/ _ \/ _` | | '_ \| | | |
| (__| | | (_| |  _| ||  __/ (_| | | |_) | |_| |
 \___|_|  \__,_|_|  \__\___|\__,_| |_.__/ \__, |
                                          |___/

   ____  _             _ _        __     ___ 
  / ___|| |_ _   _  __| (_) ___   \ \   / (_)
  \___ \| __| | | |/ _` | |/ _ \   \ \ / /| |
   ___) | |_| |_| | (_| | | (_) |   \ V / | |
  |____/ \__|\__,_|\__,_|_|\___/     \_/  |_|


     STRATEGY | WEB PRODUCTS | AI SOLUTIONS

      Visit Viamsterdam.com for more info
                                                                        
-->
<?php
		use \TuDelft\Theme\Modules\Faculties\Faculties;
		use \TuDelft\Theme\Modules\Course\Course;
		use \TuDelft\Theme\Modules\Lab\Lab;
		use \TuDelft\Theme\Modules\Communities\Communities;

		$faculties = Faculties::get_all_faculties();
		$communities = Communities::get_all_communities();

    function generate_url($path, $param) {
        return get_home_url() . $path . '/?' . http_build_query($param);
    }

		$userID = get_current_user_id();

  	$homeUrl = get_home_url();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiPedia - Tu Delft</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <?php if(is_user_logged_in()): ?>
			<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <?php endif; ?>
		<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2Z1B8SEERW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2Z1B8SEERW');
    </script>
    <meta property="og:type" content="website">
    <meta property="og:title" content="DigiPedia - Tu Delft">
    <meta property="og:image" content="https://digipedia.tudelft.nl/app/uploads/2024/11/LogoDesign-01.jpg">
    <meta property="og:description" content="Your gateway to mastering computational methods, techniques, and tools at your own pace.">
    <link rel="icon" type="image/png" href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/img/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/img/favicons/favicon.svg" />
    <link rel="shortcut icon" href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/img/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/img/favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="DigiPedia" />
    <?php wp_head(); ?>
</head>

<body data-barba="wrapper" class="opacity" data-authorized=<?= is_user_logged_in(); ?>>
    <div class="preloader">
        <div class="preloader__yellow"></div>
        <div class="preloader__blue"></div>
    </div>

    <main id="scroll-container" data-barba="container" data-barba-namespace="page">
      <div class="disabled-horizontal-scroll">
    <header class="header !fixed flex justify-center">
        <div class="header__container flex justify-between items-center">
					<div class="header__trigger header__icon js-menu-toggle">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
									<path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
											d="M3 6h18M3 12h18M3 18h18" />
							</svg>
					</div>
					<a href="<?= $homeUrl; ?>" class="header__logo" aria-label="home-page">
							<img width="300" height="74" src="<?= get_template_directory_uri() ?>/src/img/logo.svg" alt="logo">
					</a>

					<div class="header__menu">
							<div class="header__nav">
									<ul>

										<li class="<?= !empty($faculties) ? 'menu-item-has-children' : '' ?>">
											<a
												href="<?= $homeUrl; ?>/faculties"
											>
												Faculties
											</a>
											<div class="header__fader"></div>
											<?php if(!empty($faculties)): ?>
												<div class="header__submenu">
													<div class="menu-item-has-children__wrapper">
														<ul>
															<?php foreach ($faculties as $faculty):
																$facultyUrl = get_the_permalink($faculty);
																$gridLinksData = get_field('single-communities__cards', $faculty);
																if(!$gridLinksData['items']) {
																	$gridLinksData['items'] = get_field('faculties_cards', 'options')['items'];
																}
																if(!$gridLinksData['title']) {
																	$gridLinksData['title'] = get_field('faculties_cards', 'options')['title'];
																}
															?>
																<li class="<?= !empty($gridLinksData['items']) ? 'menu-item-has-children' : '' ?>">
																	<a href="<?= $facultyUrl; ?>">
																		<?= get_the_title($faculty); ?>

																		<?php if(!empty($gridLinksData['items'])): ?>
																			<div class="menu-item-has-children__trigger">
																				<svg width="20" height="20">
																					<use
																						href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																					</use>
																				</svg>
																			</div>
																		<?php endif; ?>
																	</a>
																	<?php if(!empty($gridLinksData['items'])): ?>
																		<div class="header__submenu">
																			<ul>
																				<?php foreach ($gridLinksData['items'] as $item):
																					$url = $item['url']['url'];
																					$facultySlug = get_post_field('post_name', $faculty);
																					$isCourse = str_contains($url, 'courses');
																					$isLabs = str_contains($url, 'labs');
																					$terms = [];
																					if($isCourse) {
																						$terms = Course::get_academic_levels();
																					}
																					if($isLabs) {
																						$terms = Lab::get_lab_types();
																					}
																				?>
																					<li class="<?= !empty($terms) ? 'menu-item-has-children' : '' ?>">
																						<a
																							href="<?= $url; ?>?faculty=<?= $facultySlug; ?>"
																						>
																							<?= $item['title']; ?>

																							<?php if(!empty($terms)): ?>
																								<div class="menu-item-has-children__trigger">
																									<svg width="20" height="20">
																										<use
																											href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																										</use>
																									</svg>
																								</div>
																							<?php endif; ?>
																						</a>

																						<?php if(!empty($terms)): ?>
																							<div class="header__submenu">
																								<ul>
																									<?php foreach ($terms as $term): ?>
																										<li>
																											<a
																												href="<?= $url; ?>?faculty=<?= $facultySlug; ?>&category=<?= $term['category']->slug; ?>"
																											>
																												<?= $term['category']->name; ?>
																											</a>
																										</li>
																									<?php endforeach; ?>
																								</ul>
																							</div>
																						<?php endif; ?>

																					</li>
																				<?php endforeach; ?>
																			</ul>
																		</div>
																	<?php endif; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													</div>
												</div>
											<?php endif; ?>
										</li>

										<li class="<?= !empty($communities) ? 'menu-item-has-children' : ''; ?>">
											<a
												href="<?= $homeUrl; ?>/communities">
												Communities
											</a>
											<div class="header__fader"></div>

											<?php if(!empty($communities)): ?>
												<div class="header__submenu">
													<div class="menu-item-has-children__wrapper">
														<ul>
															<?php foreach ($communities as $community):
																$url = get_the_permalink($community);
																$parentCats = Communities::get_parent_categories_by_community($community);
															?>
																<li class="<?= !empty($parentCats) ? 'menu-item-has-children' : '' ?>">
																	<a href="<?= $url; ?>">

																		<?= get_the_title($community); ?>

																		<?php if (!empty($parentCats)): ?>
																			<div class="menu-item-has-children__trigger">
																				<svg width="20" height="20">
																					<use
																						href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																					</use>
																				</svg>
																			</div>
																		<?php endif; ?>
																	</a>

																	<?php if(!empty($parentCats)): ?>
																		<div class="header__submenu">
																			<ul>
																				<?php foreach ($parentCats as $parentCat):
																					$subcategories = Communities::get_child_categories_by_parent_term_id($parentCat->term_id);
																					$parentUrl = $url . $parentCat->slug
																				?>
																					<li class="<?= !empty($subcategories)? 'menu-item-has-children' : ''; ?>">
																						<a
																							href="<?= $parentUrl; ?>"
																						>
																							<?= $parentCat->name; ?>

																							<?php if (!empty($subcategories)): ?>
																								<div class="menu-item-has-children__trigger">
																									<svg width="20" height="20">
																										<use
																											href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																										</use>
																									</svg>
																								</div>
																							<?php endif; ?>
																						</a>

																						<?php if(!empty($subcategories)): ?>
																							<div class="header__submenu">
																								<ul>
																									<?php foreach ($subcategories as $subcategory): ?>
																										<li>
																											<a
																												href="<?= $parentUrl; ?>?subcategory=<?= $subcategory->slug; ?>"
																											>
																												<?= $subcategory->name; ?>
																											</a>
																										</li>
																									<?php endforeach; ?>
																								</ul>
																							</div>
																						<?php endif; ?>
																					</li>
																				<?php endforeach; ?>
																			</ul>
																		</div>
																	<?php endif; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													</div>
												</div>
											<?php endif; ?>
										</li>
									</ul>
							</div>
					</div>

					<div class="header__wrapper flex items-center justify-center">
							<div class="header__search search-bar" data-search>
									<div class="search-bar__wrapper">
											<div data-open-search> </div>
											<button class="search-bar__btn" aria-label="search-button">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
															<path stroke="#000" stroke-width="1.5"
																	d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z" />
															<path fill="#000"
																	d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z" />
													</svg>
											</button>
											<div class="search-bar__close" data-close-search>
											</div>
									</div>
									<div class="search-bar__field flex items-center">
											<button class="search-bar__btn" aria-label="search-button">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
															<path stroke="#000" stroke-width="1.5"
																	d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z" />
															<path fill="#000"
																	d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z" />
													</svg>
											</button>
											<form id="search-form" action="<?= $homeUrl; ?>/search" method="get">
													<input type="text" placeholder="Search" id="global-search" name="term">
											</form>
									</div>
							</div>
							<div data-href="<?= $userID ? get_author_posts_url($userID) : wp_login_url(); ?>" class="header__account header__icon" aria-label="account">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25">
											<circle cx="11.842" cy="6.316" r="5.566" stroke="#000" stroke-width="1.5" />
											<path stroke="#000" stroke-linecap="round" stroke-width="1.5"
													d="M3 24v-3a6 6 0 016-6h5a6 6 0 016 6v3" />
									</svg>
							</div>
							<div class="header__close header__icon js-menu-close">
							</div>
					</div>
        </div>
    </header>

    <nav class="nav flex flex-col">
        <div class="nav__inner">
            <ul>
							<?php if(!empty($faculties)): ?>
								<li class="menu-item-has-children">
									<div class="menu-item-has-children__title">
										<a href="<?= $homeUrl; ?>/faculties">
											Faculties
										</a>

										<div class="menu-item-has-children__trigger menu-item-has-children__next">
											<svg width="20" height="20">
												<use
													href="<?= THEME_URL ?>/src/sprite.svg#arrow-right">
												</use>
											</svg>
										</div>
									</div>

									<div class="menu-item-has-children__submenu">
										<div class="menu-item-has-children__title title-prev">
											<div class="menu-item-has-children__trigger menu-item-has-children__prev">
												<svg width="20" height="20">
													<use
														href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
													</use>
												</svg>
											</div>
											<span>Faculties</span>
										</div>

										<ul>
											<?php foreach ($faculties as $faculty):
												$facultyUrl = get_the_permalink($faculty);
												$gridLinksData = get_field('single-communities__cards', $faculty);
												$facultyTitle = get_the_title($faculty);
												if(!$gridLinksData['items']) {
													$gridLinksData['items'] = get_field('faculties_cards', 'options')['items'];
												}
												if(!$gridLinksData['title']) {
													$gridLinksData['title'] = get_field('faculties_cards', 'options')['title'];
												}
											?>
												<li class="<?= !empty($gridLinksData['items']) ? 'menu-item-has-children' : '' ?>">
													<div class="menu-item-has-children__title">
														<a href="<?= $facultyUrl; ?>">
															<?= $facultyTitle; ?>
														</a>

														<?php if(!empty($gridLinksData['items'])): ?>
															<div class="menu-item-has-children__trigger menu-item-has-children__next">
																<svg width="20" height="20">
																	<use
																		href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																	</use>
																</svg>
															</div>
														<?php endif; ?>
													</div>

													<?php if(!empty($gridLinksData['items'])): ?>

														<div class="menu-item-has-children__submenu" data-lenis-prevent>
															<div class="menu-item-has-children__title title-prev title-start">
																<div
																	class="menu-item-has-children__trigger menu-item-has-children__prev">
																	<svg width="20" height="20">
																		<use
																			href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																		</use>
																	</svg>
																</div>
																<span>Faculties</span>
															</div>

															<div class="menu-item-has-children__title title-prev">
																<div
																	class="menu-item-has-children__trigger menu-item-has-children__prev">
																	<svg width="20" height="20">
																		<use
																			href="<?= THEME_URL ?>/src/sprite.svg#arrow-right">
																		</use>
																	</svg>
																</div>
																<span><?= $facultyTitle; ?></span>
															</div>

															<ul>
																<?php foreach ($gridLinksData['items'] as $item):
																		$itemUrl = $item['url']['url'];
																		$facultySlug = get_post_field('post_name', $faculty);
																		$isCourse = str_contains($itemUrl, 'courses');
																		$isLabs = str_contains($itemUrl, 'labs');
																		$terms = [];
																		if($isCourse) {
																			$terms = Course::get_academic_levels();
																		}
																		if($isLabs) {
																			$terms = Lab::get_lab_types();
																		}
																?>
																	<li class="menu-item-has-children">
																		<div class="menu-item-has-children__title">
																			<a href="<?= $itemUrl . '?faculty=' . $facultySlug ?>">
																				<?= $item['title']; ?>
																			</a>
																			<?php if(!empty($terms)): ?>
																				<div class="menu-item-has-children__trigger menu-item-has-children__next">
																					<svg width="20" height="20">
																						<use
																							href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																						</use>
																					</svg>
																				</div>
																			<?php endif; ?>
																		</div>

																		<?php if(!empty($terms)): ?>
																			<div class="menu-item-has-children__submenu" data-lenis-prevent>
																				<div class="menu-item-has-children__title title-prev title-start">
																					<div
																						class="menu-item-has-children__trigger menu-item-has-children__prev">
																						<svg width="20" height="20">
																							<use
																								href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																							</use>
																						</svg>
																					</div>
																					<span>Communities</span>
																				</div>

																				<div class="menu-item-has-children__title title-prev">
																					<div
																						class="menu-item-has-children__trigger menu-item-has-children__prev">
																						<svg width="20" height="20">
																							<use
																								href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																							</use>
																						</svg>
																					</div>
																					<span><?= $facultyTitle; ?></span>
																				</div>

																				<div class="menu-item-has-children__title title-prev">
																					<div
																						class="menu-item-has-children__trigger menu-item-has-children__prev">
																						<svg width="20" height="20">
																							<use
																								href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																							</use>
																						</svg>
																					</div>
																					<span><?= $item['title']; ?></span>
																				</div>

																				<ul>
																					<?php foreach ($terms as $term): ?>
																						<li>
																							<a
																								href="<?= $itemUrl; ?>?faculty=<?= $facultySlug; ?>&category=<?= $term['category']->slug; ?>">
																								<?= $term['category']->name; ?>
																							</a>
																						</li>
																					<?php endforeach; ?>
																				</ul>
																			</div>
																		<?php endif; ?>
																	</li>
																<?php endforeach; ?>
															</ul>
														</div>

													<?php endif; ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</li>
							<?php endif; ?>

							<?php if(!empty($communities)): ?>
								<li class="menu-item-has-children">
									<div class="menu-item-has-children__title">
										<a href="<?= $homeUrl; ?>/communities">
											Communities
										</a>

										<div class="menu-item-has-children__trigger menu-item-has-children__next">
											<svg width="20" height="20">
												<use
													href="<?= THEME_URL ?>/src/sprite.svg#arrow-right">
												</use>
											</svg>
										</div>
									</div>

									<div class="menu-item-has-children__submenu">
										<div class="menu-item-has-children__title title-prev">
											<div class="menu-item-has-children__trigger menu-item-has-children__prev">
												<svg width="20" height="20">
													<use
														href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
													</use>
												</svg>
											</div>
											<span>Communities</span>
										</div>

										<ul>
											<?php foreach ($communities as $community):
												$url = get_the_permalink($community);
												$communityTitle = get_the_title($community);
												$parentCats = Communities::get_parent_categories_by_community($community);
												?>
												<li class="<?= !empty($parentCats) ? 'menu-item-has-children' : '' ?>">
													<div class="menu-item-has-children__title">
														<a href="<?= $url; ?>">
															<?= $communityTitle; ?>
														</a>

														<?php if(!empty($parentCats)): ?>
															<div class="menu-item-has-children__trigger menu-item-has-children__next">
																<svg width="20" height="20">
																	<use
																		href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																	</use>
																</svg>
															</div>
														<?php endif; ?>
													</div>

													<?php if(!empty($parentCats)): ?>
														<div class="menu-item-has-children__submenu" data-lenis-prevent>
															<div class="menu-item-has-children__title title-prev title-start">
																<div
																	class="menu-item-has-children__trigger menu-item-has-children__prev">
																	<svg width="20" height="20">
																		<use
																			href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																		</use>
																	</svg>
																</div>
																<span>Communities</span>
															</div>

															<div class="menu-item-has-children__title title-prev">
																<div
																	class="menu-item-has-children__trigger menu-item-has-children__prev">
																	<svg width="20" height="20">
																		<use
																			href="<?= THEME_URL ?>/src/sprite.svg#arrow-right">
																		</use>
																	</svg>
																</div>
																<span><?= $communityTitle; ?></span>
															</div>

															<ul>

																<?php foreach ($parentCats as $parentCat):
																	$subcategories = Communities::get_child_categories_by_parent_term_id($parentCat->term_id);
																	$parentUrl = $url . $parentCat->slug
																?>
																	<li class="menu-item-has-children">
																		<div class="menu-item-has-children__title">
																			<a href="<?= $parentUrl; ?>">
																				<?= $parentCat->name; ?>
																			</a>
																			<?php if(!empty($subcategories)): ?>
																				<div class="menu-item-has-children__trigger menu-item-has-children__next">
																					<svg width="20" height="20">
																						<use
																							href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																						</use>
																					</svg>
																				</div>
																			<?php endif; ?>
																		</div>

																		<?php if(!empty($subcategories)): ?>
																			<div class="menu-item-has-children__submenu" data-lenis-prevent>
																				<div class="menu-item-has-children__title title-prev title-start">
																					<div
																						class="menu-item-has-children__trigger menu-item-has-children__prev">
																						<svg width="20" height="20">
																							<use
																								href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																							</use>
																						</svg>
																					</div>
																					<span>Communities</span>
																				</div>

																				<div class="menu-item-has-children__title title-prev">
																					<div
																						class="menu-item-has-children__trigger menu-item-has-children__prev">
																						<svg width="20" height="20">
																							<use
																								href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																							</use>
																						</svg>
																					</div>
																					<span><?= $communityTitle; ?></span>
																				</div>

																				<div class="menu-item-has-children__title title-prev">
																					<div
																						class="menu-item-has-children__trigger menu-item-has-children__prev">
																						<svg width="20" height="20">
																							<use
																								href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right">
																							</use>
																						</svg>
																					</div>
																					<span><?= $parentCat->name; ?></span>
																				</div>

																				<?php if($subcategories): ?>
																				<ul>
																					<?php foreach ($subcategories as $subcategory): ?>
																						<li>
																							<a
																								href="<?= $parentUrl; ?>?subcategory=<?= $subcategory->slug; ?>">
																								<?= $subcategory->name; ?>
																							</a>
																						</li>
																					<?php endforeach; ?>
																				</ul>
																				<?php endif; ?>
																			</div>
																		<?php endif; ?>
																	</li>
																<?php endforeach; ?>
															</ul>
														</div>
													<?php endif; ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</li>
							<?php endif; ?>
            </ul>
        </div>

        <div class="nav__btn">
            <a href="<?= $userID ? get_author_posts_url($userID) : wp_login_url(); ?>" class="btn">
                <span><?= $userID ? 'View dashboard' : 'Log in'; ?></span>
                <span><?= $userID ? 'View dashboard' : 'Log in'; ?></span>
            </a>
        </div>
    </nav>