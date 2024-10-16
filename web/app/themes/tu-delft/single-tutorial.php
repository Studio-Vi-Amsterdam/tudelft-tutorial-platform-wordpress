<?php
/**
 * Template Name: Tutorial Template
 */
use TuDelft\Theme\Modules\Tutorial\Tutorial;
use TuDelft\Theme\Modules\Chapter\Chapter;

$chapters = Tutorial::get_chapters_belonging_to( get_the_ID() );
$last_updated_array = Chapter::get_last_updated_chapter( $chapters );
$theme_url = get_template_directory_uri();

$tutorial_title = get_the_title();

$software = Tutorial::get_primary_software( get_the_ID() );

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
                <?php if ( $software['name'] ) : ?>
                    <tr>
                        <td>Primary Software Used</td>
                        <td><?php echo $software['name'] ?? 'N/A'; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( $software['version'] ) : ?>
                    <tr>
                        <td>Software Version</td>
                        <td><?php echo $software['version'] ?? 'N/A'; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( $course = Tutorial::get_course( get_the_ID() ) ) : ?>
                    <tr>
                        <td>Course</td>
                        <td><?php echo $course; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( $primary_subject = Tutorial::get_primary_subject( get_the_ID() ) ) : ?>
                    <tr>
                        <td>Primary Subject</td>
                        <td><?php echo $primary_subject; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( $secondary_subject = Tutorial::get_secondary_subject( get_the_ID() ) ) : ?>
                    <tr>
                        <td>Secondary Subject</td>
                        <td><?php echo $secondary_subject; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( $level = Tutorial::get_level( get_the_ID() ) ) : ?>
                    <tr>
                        <td>Level</td>
                        <td><?php echo $level; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td>Last updated</td>
                    <td><?php echo $last_updated_array['date'] ?? 'N/A' ?></td>
                </tr>
                <?php if ( $keywords = Tutorial::get_keywords( get_the_ID() ) ) : ?>
                    <tr>  
                        <td>Keywords</td>
                        <td>
                            <ul>
                                <?php
                                    foreach ( $keywords as $keyword ) : 
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
                    if ( $teachers = get_the_terms( get_the_ID(), 'teachers' ) ) : 
                ?>
                    <tr>
                        <td>Teacher<?php echo sizeof( $teachers ) > 1 ? 's' : ''; ?></td>
                        <td>
                            <ul>
                                <li>
                                    <?php 
                                        foreach ( $teachers as $i => $teacher ) :
                                    ?>
                                        <a href="#"><?php echo $teacher->name; ?></a>
                                        <?php if ( $i < sizeof( $teachers ) - 1 ) : ?>
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
                            <li><a href="#"><?php echo get_field('faculty', get_the_ID() ) ?: 'Bouwkunde'; ?></a></li>
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
                <h3><?php the_title(); ?> <span>link copied</span></h3>
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
            foreach ( $chapters as $key=>$chapter ) :
        ?>
        <div class="tutorial__item" data-tab-content="chapter-<?= ($key+1) ?>">
            <div class="tutorial__content text">
                <h2><?php echo $tutorial_title; ?> <?= ($key + 1) ?>/<?php echo count( $chapters ); ?></h2>
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