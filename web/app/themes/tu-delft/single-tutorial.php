<?php

/**
 * Template Name: Tutorial Template
 */

use TuDelft\Theme\Modules\Tutorial\Tutorial;
use TuDelft\Theme\Modules\Chapter\Chapter;
use TuDelft\Theme\Common\Student;

$chapters = Tutorial::get_chapters_belonging_to(get_the_ID());
$last_updated_array = Chapter::get_last_updated_chapter($chapters);
$theme_url = get_template_directory_uri();

$tutorial_title = get_the_title();

$software = Tutorial::get_primary_software(get_the_ID());

?>

<?php get_header(); ?>

<section class="tutorial">
    <div class="tutorial__container md:flex md:justify-between">
        <div class="tutorial__mobile-nav flex justify-between">
            <a href="#" class="btn disabled" data-prev>
                <span>Back</span>
                <span>Back</span>
            </a>
            <a href="#" class="btn btn--white call-tutorial-nav">
                <div class="btn__icon">
                    <svg width="20" height="20">
                        <use href="<?= $theme_url ?>/src/sprite.svg#tutorial-icon"></use>
                    </svg>
                </div>
                <span>Index</span>
                <span>Index</span>


            </a>
            <a href="#" class="btn" data-next>
                <span>Next</span>
                <span>Next</span>
            </a>
        </div>
        <div class="tutorial__fader"></div>
        <div class="tutorial__aside">
            <div class="tutorial__aside-height">
                <div class="tutorial__close call-tutorial-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 1.234l12 12m-12 0l12-12" />
                    </svg>
                </div>
                <div class="tutorial__aside-wrapper" data-scrollbar>
                    <div class="tutorial__nav titles">
                        <h4><?php the_title(); ?></h4>

                        <ul>
                            <li class="titles__item " data-toc-wrapper>
                                <div class="titles__head active" data-tab-target="chapter-0">
                                    Intro
                                </div>
                                <div class="titles__body">
                                    <ul class="js-toc">
                                    </ul>
                                </div>
                            </li>
                            <?php
                            foreach ($chapters as $key => $chapter) :
                            ?>
                                <li class="titles__item " data-toc-wrapper>
                                    <div class="titles__head active" data-tab-target="chapter-<?= ($key + 1) ?>">
                                        <?php echo $chapter['title']; ?>
                                    </div>
                                    <div class="titles__body">
                                        <ul class="js-toc">
                                        </ul>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                    <div class="tutorial__nav information">
                        <h4>Information</h4>
                        <table>
                            <?php if ($software['name']) : ?>
                                <tr>
                                    <td>Primary software used</td>
                                    <td><?php echo $software['name'] ?? 'N/A'; ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if ($software['version']) : ?>
                                <tr>
                                    <td>Software version</td>
                                    <td><?php echo $software['version'] ?? 'N/A'; ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if ($course = Tutorial::get_course(get_the_ID())) : ?>
                                <tr>
                                    <td>Course</td>
                                    <td><?php echo $course; ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if ($primary_subject = Tutorial::get_primary_subject(get_the_ID())) : ?>
                                <tr>
                                    <td>Primary subject</td>
                                    <td><?php echo $primary_subject; ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if ($secondary_subject = Tutorial::get_secondary_subject(get_the_ID())) : ?>
                                <tr>
                                    <td>Secondary subject</td>
                                    <td><?php echo $secondary_subject; ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if ($level = Tutorial::get_level(get_the_ID())) : ?>
                                <tr>
                                    <td>Level</td>
                                    <td><?php echo $level; ?></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td>Last updated</td>
                                <td><?php echo $last_updated_array['date'] ?? 'N/A' ?></td>
                            </tr>
                            <?php if ($keywords = Tutorial::get_keywords(get_the_ID())) : ?>
                                <tr>
                                    <td>Keywords</td>
                                    <td>
                                        <ul>
                                            <?php
                                            foreach ($keywords as $keyword) :
                                            ?>
                                                <li><a href="#"><?php echo $keyword['name']; ?></a></li>
                                            <?php
                                            endforeach;
                                            ?>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <div class="tutorial__nav responsible">
                        <h4>Responsible</h4>
                        <table>
                            <?php
                            if ($teachers = get_the_terms(get_the_ID(), 'teachers')) :
                            ?>
                                <tr>
                                    <td>Teacher<?php echo sizeof($teachers) > 1 ? 's' : ''; ?></td>
                                    <td>
                                        <ul>
                                            <li>
                                                <?php
                                                foreach ($teachers as $i => $teacher) :
                                                ?>
                                                    <a href="#"><?php echo $teacher->name; ?></a>
                                                    <?php if ($i < sizeof($teachers) - 1) : ?>
                                                        ,
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td>Faculty</td>
                                <td>
                                    <ul>
                                        <li><a href="#"><?php echo get_field('faculty', get_the_ID()) ?: 'Bouwkunde'; ?></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tutorial__main">
            <div class="tutorial__item" data-tab-content="chapter-0">
                <div class="tutorial__content text intro">
                    <div class="tutorial__top">
                        <h2><?php the_title(); ?> 0/<?php echo count($chapters); ?></h2>
                        <?php if (is_user_logged_in()): ?>
                            <div class="tutorial__bookmark-desktop">
                                <button class="setBookmarked" data-bookmarked="<?php echo Student::is_bookmarked(get_the_ID()) ? 'true' : 'false'; ?>" data-postId="<?php echo get_the_ID(); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M16 3H8C6.89543 3 6 3.89543 6 5V21L12 18L18 21V5C18 3.89543 17.1046 3 16 3Z" stroke="#00A6D6" />
                                    </svg>
                                    <p>Bookmark<span>ed</span></p>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="tutorial__title">
                        <h3><?php the_title(); ?></h3>
                        <div class="tutorial__menu">
                            <button class="tutorial__menu-trigger" data-opened="false">
                                <span></span>
                            </button>
                            <div class="tutorial__menu-inner">
                                <button class="tutorial__button tutorialLinkCopySelector">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M15.9085 6.91436L16.162 6.70165C17.5043 5.57528 19.5056 5.75037 20.632 7.09272V7.09272C21.7583 8.43507 21.5833 10.4364 20.2409 11.5627L13.7595 17.0013C12.4171 18.1277 10.4158 17.9526 9.28946 16.6102V16.6102C8.1631 15.2679 8.33819 13.2666 9.68054 12.1402L12.8043 9.51906" stroke="#67676B" />
                                        <path d="M10.9887 15.2759L14.3575 12.394C15.6864 11.2572 15.8514 9.26199 14.7273 7.92232V7.92232C13.5956 6.57358 11.5848 6.39765 10.236 7.52938L3.76617 12.9582C2.42382 14.0846 2.24873 16.0859 3.37509 17.4282V17.4282C4.50146 18.7706 6.50275 18.9457 7.8451 17.8193L8.19172 17.5285" stroke="#67676B" />
                                    </svg>
                                    <div class="copy-checked">
                                        <svg fill="none" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 78.369 78.369"
                                            xml:space="preserve">
                                            <g>
                                                <path d="M78.049,19.015L29.458,67.606c-0.428,0.428-1.121,0.428-1.548,0L0.32,40.015c-0.427-0.426-0.427-1.119,0-1.547l6.704-6.704
		c0.428-0.427,1.121-0.427,1.548,0l20.113,20.112l41.113-41.113c0.429-0.427,1.12-0.427,1.548,0l6.703,6.704
		C78.477,17.894,78.477,18.586,78.049,19.015z" />
                                            </g>
                                        </svg>
                                    </div>

                                </button>
                                <?php if (is_user_logged_in()): ?>
                                    <button class="tutorial__button" data-modal-id='modal-suggestion'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 13.3223 4.32083 14.5697 4.88889 15.6686L4 20L8.33138 19.1111C9.43025 19.6792 10.6777 20 12 20Z" stroke="#67676B" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 9.33594V14.6693" stroke="#67676B" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.32812 12H14.6615" stroke="#67676B" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if (is_user_logged_in()): ?>
                        <div class="tutorial__bookmark-mobile">
                            <button class="setBookmarked" data-bookmarked="<?php echo Student::is_bookmarked(get_the_ID()) ? 'true' : 'false'; ?>" data-postId="<?php echo get_the_ID(); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16 3H8C6.89543 3 6 3.89543 6 5V21L12 18L18 21V5C18 3.89543 17.1046 3 16 3Z" stroke="#00A6D6" />
                                </svg>
                                <p>Bookmark<span>ed</span></p>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php echo get_field('description'); ?>
                </div>
                <?php the_content(); ?>
                <div class="tutorial__content tutorial__btns tutorial__btns--end btns flex items-center justify-end">
                    <a href="#" class="btn" data-next>
                        <span>Start</span>
                        <span>Start</span>
                    </a>
                </div>
            </div>
            <!-- Get all chapters and display the title and the content -->
            <?php
            foreach ($chapters as $key => $chapter) :
            ?>
                <div class="tutorial__item" data-tab-content="chapter-<?= ($key + 1) ?>">
                    <div class="tutorial__content text">
                        <h2><?php echo $tutorial_title; ?> <?= ($key + 1) ?>/<?php echo count($chapters); ?></h2>
                        <h3><?php echo $chapter['title']; ?> <span>link copied</span></h3>
                    </div>
                    <?php echo $chapter['content']; ?>

                    <?php if ($key === count($chapters) - 1) : ?>
                        <?php if (get_field('useful_links')) : ?>
                            <!-- Useful links -->
                            <div class="tutorial__content text">
                                <h4>
                                    <?php echo get_field('useful_links_title') ?: 'Useful links'; ?>
                                </h4>
                                <?php echo get_field('useful_links'); ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="tutorial__content tutorial__btns btns flex items-center justify-between">
                        <a href="#" class="btn" data-prev>
                            <span>Previous chapter</span>
                            <span>Previous chapter</span>
                        </a>
                        <a href="#" class="btn" data-next>
                            <span>Next chapter</span>
                            <span>Next chapter</span>
                        </a>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>