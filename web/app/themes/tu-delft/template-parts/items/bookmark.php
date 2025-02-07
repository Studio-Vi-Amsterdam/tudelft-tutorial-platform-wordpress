<?php
$bookmark = $args['bookmark'];
?>
<article class="bookmark-item" data-id="2201">
	<?php if($bookmark['image']): ?>
		<figure class="bookmark-item__img">
			<img src="<?php echo $bookmark['image']; ?>" alt="bookmark image">
		</figure>
	<?php endif; ?>
	<div class="bookmark-item__content">
		<div class="bookmark-item__header">
			<span><?php echo $bookmark['type']; ?></span>
			<div class="bookmark-item__buttons">
				<a href="<?php echo $bookmark['url']; ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
						<circle cx="8" cy="8" r="2.5" stroke="black" />
					</svg>
				</a>
				<button class="bookmark-button" data-bookmarked="true" data-postid="<?php echo $bookmark['id']; ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</div>
		<div class="bookmark-item__main">
			<a href="<?php echo $bookmark['url']; ?>">
				<h3>
					<?php echo $bookmark['title']; ?>
				</h3>
			</a>
			<p>
				<?php echo $bookmark['content']; ?>
			</p>
		</div>
		<div class="bookmark-item__footer">
			<span>Published:</span>
			<time><?php echo $bookmark['published_at']; ?></time>
		</div>
	</div>
</article>