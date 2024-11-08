<?php

/**
 * Block Name: Video URL Block
 * 
 */

$theme_url = get_template_directory_uri();
$video = get_field('tu-delft-video-url_url');
$placeholder = get_field('tu-delft-video-url_thumbnail');

?>


<iframe src="<?php echo $video; ?>" width="100%" height="500px" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>