<?php
function generate_pagination(int $currentPage = 1, int $totalPages = 1, int $numAround = 1): string
{
	$totalPages  = max(1, $totalPages);
	$currentPage = max(1, min($currentPage, $totalPages));
	$numAround   = max(0, $numAround);

	if ($totalPages <= 1) {
		return '';
	}

	$btnClasses = '';

	$makeBtn = function (int $page, bool $isActive = false, bool $isLast = false) use ($btnClasses): string {
		$liClasses = ['pagination-number'];
		if ($isActive) $liClasses[] = 'active';
		if ($isLast) $liClasses[] = 'last';

		$attrActive = $isActive ? ' data-active="true"' : '';

		return sprintf(
			'<li class="%s"><button type="button" data-page="%d" class="%s"%s aria-label="Page-%d"><span>%d</span><span>%d</span></button></li>',
			esc_attr(implode(' ', $liClasses)),
			$page,
			esc_attr($btnClasses),
			$attrActive,
			$page,
			$page,
			$page + 1
		);
	};

	$makeDots = fn() => '<li class="pagination-dots">...</li>';

	$start = max(2, $currentPage - $numAround);
	$end   = min($totalPages - 1, $currentPage + $numAround);

	ob_start();
	?>
	<ul class="flex items-center justify-center">
		<?= $makeBtn(1, $currentPage === 1, $totalPages === 1); ?>

		<?php if ($start > 2): ?>
			<?= $makeDots(); ?>
		<?php endif; ?>

		<?php for ($i = $start; $i <= $end; $i++): ?>
			<?= $makeBtn($i, $currentPage === $i, false); ?>
		<?php endfor; ?>

		<?php if ($end < $totalPages - 1): ?>
			<?= $makeDots(); ?>
		<?php endif; ?>

		<?php if ($totalPages > 1): ?>
			<?= $makeBtn($totalPages, $currentPage === $totalPages, true); ?>
		<?php endif; ?>
	</ul>
	<?php

	return ob_get_clean();
}