<?php
use TuDelft\Theme\Modules\Communities\Communities;

$subcategories = $args['subcategories'] ?? false;
$community_id = $args['community_id'] ?? false;
$term_id = $args['term_id'] ?? false;
$selectedSubCategory = get_query_var('subcategory');
$communitiesItems = Communities::get_communities_materials($community_id, $term_id);
?>
<section class="cards-with-categories">
	<?php if($subcategories): ?>
		<div class="cards-with-categories__wrapper">
				<div class="cards-with-categories__content active" data-category-content="chapter-1">
					<?php foreach ( $subcategories as $subcategory ): ?>
						<div class="cards-with-categories__item accordion">
							<div class="accordion__head flex items-center justify-between <?php echo $selectedSubCategory.' '; echo $subcategory->slug.' '; echo ((!empty($selectedSubCategory) && $selectedSubCategory === $subcategory->slug) ? 'opened' : ''); ?>">
								<h2><?php echo $subcategory->name; ?></h2>
								<button aria-label="open accordion"></button>
							</div>
							<div class="accordion__content" style="<?php echo ((!empty($selectedSubCategory) && $selectedSubCategory === $subcategory->slug) ? 'overflow: unset; pointer-events: all;' : ''); ?>">
								<div class="accordion__content-wrapper grid lg:grid-cols-2">
									<?php
									$items = Communities::get_communities_materials($community_id, $subcategory->term_id);

									if($items):
										foreach ( $items as $item ) :
											get_template_part('template-parts/items/card-with-image', false, ['ID' => $item]);
										endforeach;
									endif;
									?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
		</div>
	<?php endif; ?>
</section>