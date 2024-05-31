<?php
/**
 * Block Name: Chapter Subtitle
 * 
 */
?>
<?php if(get_field('show_chapter_subtitle')): ?>
    <h4><?php the_field('chapter_subtitle'); ?></h4>
<?php endif; ?>