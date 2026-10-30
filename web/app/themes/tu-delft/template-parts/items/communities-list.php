<?php
$communities = $args['items'] ?? false;
if(!$communities) return
?>
<tr class="information">
	<td>Communities</td>
	<td>
		<ul>
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