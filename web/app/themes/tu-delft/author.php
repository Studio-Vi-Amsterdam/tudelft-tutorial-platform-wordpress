<?php

use TuDelft\Theme\Common\Student;

get_header();
?>
<div class="tutorial user-profile">
    <section class="user-greetings">
        <h1>Hello James</h1>
    </section>
    <section class="my-bookmarks">
        <div class="my-bookmarks__title">
            <h2>My Bookmarks</h2>
            <a class="btn" href="#">View All</a>
        </div>
        <div class="my-bookmarks__content">
            <?php
            foreach (Student::get_bookmarks() as $bookmark) :
                if (empty($bookmark['id'])) {
                    continue;
                }
            ?>
                <article class="bookmark-item" data-id="2201">
                    <figure class="bookmark-item__img">
                        <img src="<?php echo $bookmark['image']; ?>" alt="bookmark image">
                    </figure>
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
            <?php endforeach; ?>

            <div class="my-bookmarks__no-content">
                <span>Your bookmarks empty!</span>
            </div>
        </div>
    </section>
    <section class="watched-videos">
        <div class="watched-videos__title">
            <h2>My Watched Videos</h2>
            <a class="btn" href="#">View All</a>
        </div>
        <div class="watched-videos__content">
            <?php
            foreach (Student::get_watched_videos() as $video) :
                if (empty($video['video_url'])) {
                    continue;
                }
            ?>
                <article class="watched-video-item">
                    <div class="watched-video-item__video video-wrapper">
                        <figure class="video__wrapper" data-video-src="<?php echo $video['video_url']; ?>">
                            <div class="video__preload">
                                <img fetchpriority="high" decoding="async" width="808" height="454" src="<?php echo $video['video_thumbnail']; ?>" alt="<?php echo $video['video_name']; ?>">
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
                            <?php
                                echo $video['video_name'];
                            ?>
                        </h3>
                    </a>
                    <div class="watched-video-item__footer">
                        <div class="watched-video-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                                <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p>Watched <?php echo $video['watched_at']; ?></p>
                    </div>
                </article>

            <?php endforeach; ?>
        </div>
    </section>
</div>
<?php
get_footer();
?>