<?php
/**
 * Template Name: Chapter Template
 */
use TuDelft\Theme\Modules\Chapter\Chapter;
use TuDelft\Theme\Modules\Tutorial\Tutorial;

$parent_chapters = Chapter::get_chapters_belonging_to( get_the_ID() );

if ( $parent_chapters === false ) {
    wp_redirect( home_url() );
    exit;
}

$keywords = Tutorial::get_keywords( $parent_chapters['parent_id'] );
$last_updated_array = Chapter::get_last_updated_chapter( $parent_chapters['chapters'] );

?>

<?php get_header(); ?>

<div class="tutorial-wrapper" style="display: flex;">
    <div class="info-wrapper" style="width: 35%;">
        <div class="chapters-list">
            <h4>Chapters</h4>
            <ul>
                <?php
                    foreach ( $parent_chapters['chapters'] as $id => $chapter ) {
                        $is_current = $id === $parent_chapters['position'];
                        echo "<li>";
                        if ( $is_current ) {
                            echo "<div style='background: red;'>";
                        }
                        echo "<a href='" . $chapter['url'] . "'>" . $chapter['title'] . "</a>";
                        if ( $is_current ) {
                            echo "</div>";
                        }
                        echo "</li>";
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
        <p>CONTENT PAGE <?php echo $parent_chapters['position'] + 1; ?>/<?php echo count( $parent_chapters['chapters'] ); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <div class="chapters-navigation" style="display: flex; justify-content: space-between;">
            <?php if ( $parent_chapters['position'] > 0 ) : ?>
                <a href="<?php echo $parent_chapters['chapters'][ $parent_chapters['position'] - 1 ]['url']; ?>" class="btn">Previous Chapter</a>
            <?php else: ?>
                <a href="<?php the_permalink( $parent_chapters['parent_id'] ); ?>" class="btn">Back to intro</a>
            <?php endif; ?>
            <?php if ( $parent_chapters['position'] < count( $parent_chapters['chapters'] ) - 1 ) : ?>
                <a href="<?php echo $parent_chapters['chapters'][ $parent_chapters['position'] + 1 ]['url']; ?>" class="btn">Next Chapter</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>