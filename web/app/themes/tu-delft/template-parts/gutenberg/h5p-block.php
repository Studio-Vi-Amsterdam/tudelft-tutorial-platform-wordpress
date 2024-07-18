<?php
/**
 * Block Name: h5p Block
 * 
 */

$h5p = get_field('tu-delft-h5p_source');
?>
<?php if ( $title = get_field('tu-delft-h5p_title') ) : ?>
    <h4><?php echo $title; ?></h4>
<?php endif; ?>
<div class="h5p-block">
    <?php if ($h5p) : ?>
        <iframe src="<?php echo $h5p; ?>" width="100%" height="400" frameborder="0"></iframe>
    <?php endif; ?>
</div>