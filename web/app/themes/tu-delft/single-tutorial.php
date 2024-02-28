<?php
/**
 * Template Name: Tutorial Template
 */
use TuDelft\Theme\Modules\Tutorial\Tutorial;
use TuDelft\Theme\Modules\Chapter\Chapter;

$chapters = Tutorial::get_chapters_belonging_to( get_the_ID() );
$keywords = Tutorial::get_keywords( get_the_ID() );
$last_updated_array = Chapter::get_last_updated_chapter( $chapters );

?>

<?php get_header(); ?>

<div class="tutorial-wrapper" style="display: flex;">
    <div class="info-wrapper" style="width: 35%;">
        <div class="chapters-list">
            <h4>Chapters</h4>
            <ul>
                <?php
                    foreach ( $chapters as $chapter ) {
                        echo '<li><a href="' . $chapter['permalink'] . '">' . $chapter['title'] . '</a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="info-box">
            <h4>Info</h4>
            <p>Last updated: <?php echo $last_updated_array['date'] ?? 'N/A' ?></p>
            <p>Keywords:</p>
            <div class="keywords-wrapper">
                <?php
                    foreach ( $keywords as $keyword ) {
                        echo '<span class="keyword" style="background: #F9F9F9;">' . $keyword['name'] . '</span>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="content-wrapper" style="width: 60%;">
        <p>CONTENT PAGE 0/<?php echo count( $chapters ); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php if ( !empty( $chapters ) ) : ?>
            <div class="chapters-navigation">
                <a href="<?php echo $chapters[0]['permalink']; ?>" class="btn">Start</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>