<?php
$video = $args['video'];
?>
<article class="watched-video-item">
	<div class="watched-video-item__video video-wrapper">
		<figure class="video__wrapper" data-video-src="<?php echo $video['video_url']; ?>">
			<div class="video__preload">
				<?php if($video['video_thumbnail']):
					$attachment_id = attachment_url_to_postid( $video['video_thumbnail'] );
					echo wp_get_attachment_image($attachment_id, [330, 200]);
				endif; ?>

				<div class="video__play video__play--secondary">
					<svg width="35" height="42">
						<use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
					</svg>
				</div>
			</div>
		</figure>
	</div>
	<div class="watched-video-item__tag">
			<span>
					<?php
					echo ucfirst($video['type']);
					?>
			</span>
	</div>
	<a href="<?php echo $video['page_url']; ?>" class="watched-video-item__title">
		<h3>
			<?= $video['video_name']; ?>
		</h3>
	</a>
	<div class="watched-video-item__footer">
		<div class="watched-video-item__icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
				<path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
		<p>Watched <?= $video['watched_at']; ?></p>
	</div>
</article>