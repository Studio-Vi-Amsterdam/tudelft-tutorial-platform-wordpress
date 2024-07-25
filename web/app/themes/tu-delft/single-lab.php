<?php
/**
 * Template Name: Lab Template
 */
use TuDelft\Theme\Modules\Lab\Lab;
use TuDelft\Theme\Modules\Chapter\Chapter;

$chapters = Lab::get_chapters_belonging_to( get_the_ID() );
$last_updated_array = Chapter::get_last_updated_chapter( $chapters );
$theme_url = get_template_directory_uri();
$parent_category_id = 0;
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
                    foreach ( $chapters as $key=>$chapter ) : 
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
                <tr>
                    <td>Last updated</td>
                    <td><?php echo $last_updated_array['date'] ?? 'N/A' ?></td>
                </tr>
                <?php if ( $lab_types = Lab::get_single_lab_types( get_the_ID() ) ) : ?>
                    <tr>
                        <td>Primary Category</td>
                        <td>
                            <ul>
                                <?php
                                    foreach ( $lab_types as $type ) :
                                ?>
                                        <li><a href="#"><?php echo $type['name']; ?></a></li>
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
                <tr>
                    <td>Faculty</td>
                    <td>
                        <ul>
                            <li><a href="#"><?php echo get_field('faculty', get_the_ID() ) ?: 'BK'; ?></a></li>
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
                <h2><?php the_title(); ?> 0/<?php echo count( $chapters ); ?></h2>
                <h3><?php the_title(); ?></h3>
                <?php echo get_field('description'); ?>
            </div>
            <?php the_content(); ?>
            <!-- Useful links -->
            <div class="tutorial__content text">
                <h5 id="useful-link-title">
                    <?php echo get_field('useful_links_title') ?: 'Useful links'; ?>
                </h5>
                <?php the_field('useful_links'); ?>
            </div>
            <div class="tutorial__content tutorial__btns tutorial__btns--end btns flex items-center justify-end">
                <a href="#" class="btn" data-next>
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
        <!-- Get all chapters and display the title and the content -->
        <?php
            foreach ( $chapters as $key=>$chapter ) :
        ?>
        <div class="tutorial__item" data-tab-content="chapter-<?= ($key+1) ?>">
            <div class="tutorial__content text">
                <h2><?php echo $chapter['title']; ?> <?= ($key + 1) ?>/<?php echo count( $chapters ); ?></h2>
                <h3><?php echo $chapter['title']; ?></h3>
            </div>
            <?php echo $chapter['content']; ?>
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