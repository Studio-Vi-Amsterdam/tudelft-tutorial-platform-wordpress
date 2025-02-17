<?php
use TuDelft\Theme\Common\Student;
if(!is_user_logged_in()) {
	wp_redirect(wp_login_url());
}
get_header();
$videos = Student::get_watched_videos();
$bookmarks = Student::get_bookmarks();
$user = wp_get_current_user();
$maxPageBookmarks = round($bookmarks['countItems'] / 6, 0,PHP_ROUND_HALF_UP) - 1;
$maxPageVideos = round($videos['countItems'] / 10, 0,PHP_ROUND_HALF_UP) - 1;
?>
<div class="tutorial user-profile">
    <?php print_r($bookmarks) ?>
    <section class="user-greetings">
        <h1>Hello <?= $user->display_name; ?></h1>
    </section>
    <section class="my-bookmarks">
        <div class="my-bookmarks__title">
            <h2>My Bookmarks</h2>
        </div>
        <div class="my-bookmarks__content" data-bookmakrs>
            <?php
            foreach ($bookmarks as $bookmark) :
                if (empty($bookmark['id'])) {
                    continue;
                }
								get_template_part('template-parts/items/bookmark', false, ['bookmark' => $bookmark]);

             endforeach;
						?>

						<?php if($bookmarks['countItems'] === 0): ?>
							<div class="my-bookmarks__no-content">
									<span>Your bookmarks empty!</span>
							</div>
						<?php endif; ?>
        </div>

				<?php if($maxPageBookmarks > 0):  ?>
					<button class="btn view-all" data-max-page="<?= $maxPageBookmarks; ?>" data-view-more-bookmarks="0">View More</button>
				<?php endif; ?>
    </section>
    <section class="watched-videos">
        <div class="watched-videos__title">
            <h2>My Watched Videos</h2>
        </div>

        <div class="watched-videos__content" data-wathced-videos>
            <?php
            foreach ($videos as $video) :
                if (empty($video['video_url'])) {
                    continue;
                }
								get_template_part('template-parts/items/watched-video', false, ['video' => $video]);
								endforeach;
							?>
        </div>

				<?php if($maxPageVideos > 0): ?>
					<button class="btn view-all" data-max-page="<?= $maxPageBookmarks; ?>" data-view-more-videos="0">View More</button>
				<?php endif; ?>

				<?php if($videos['countItems'] === 0): ?>
					<div class="watched-videos__no-content">
						<span>Your watched videos empty!</span>
					</div>
				<?php endif; ?>
    </section>
</div>
<?php
get_footer();
?>