<?php
/**
 * Block Name: Chapter Subtitle
 * 
 */
?>
<?php if(get_field('show_chapter_subtitle')): ?>
    <h2 class="chapter-subtitle">
        <?php the_field('chapter_subtitle'); ?>
    </h2>
<?php endif; ?>