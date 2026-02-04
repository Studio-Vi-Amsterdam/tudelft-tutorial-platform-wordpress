<?php
$communities = $args['items'] ?? false;
if(!$communities) return
?>
<tr>
	<td>Communities</td>
	<td>
		<ul class="colored-list">
			<?php foreach ($communities as $community): ?>
				<li>
					<a href="<?= get_the_permalink($community) ?>">
						<?= get_the_title($community); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</td>
</tr>