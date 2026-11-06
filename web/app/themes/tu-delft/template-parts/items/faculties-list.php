<?php
$faculties = $args['items'] ?? false;
$title = $args['title'] ?? 'Faculties';
if(!$faculties) return
?>
<tr class="information">
	<td><?= $title; ?></td>
	<td>
		<ul>
			<?php foreach ($faculties as $faculty): ?>
				<li>
					<a href="<?= get_the_permalink($faculty) ?>">
						<?= get_the_title($faculty); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</td>
</tr>