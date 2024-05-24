<?php
/**
 * Block Name: Download Block
 * 
 */

$file = get_field('tu-delft-download_file');
$title = get_field('tu-delft-download_title') ?: $file['title'];
$description = get_field('tu-delft-download_description') ?: $file['mime_type'];
$filesize = filesize( get_attached_file( $file['id'] ) );
$filesize = size_format($filesize, 2);
$ext = pathinfo($file['url'], PATHINFO_EXTENSION);
?>

<div class="download-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <a href="<?php echo $file['url']; ?>" class="tutorial__content download" download>
        <div class="download__wrapper">
            <div class="download__icon">
                <svg width="24" height="24">
                    <use href="<?= $theme_url ?>/src/sprite.svg#download-icon"></use>
                </svg>
            </div>
        </div>
        <div class="download__inner">
            <h5>Download <?php echo $title; ?></h5>
            <h6><?php echo $description; ?> (<?php echo $ext; ?>, <?php echo $filesize; ?>)</h6>
        </div>
        <div class='download-icon'>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 3L12 19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18 13L12 19L6 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 23H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="download-info">
            <div class="text-wrapper">
                <span>Download <?php echo $title; ?></span>
                <span class="info"><?php echo $description; ?></span>
            </div>
        </div>
    </a>
</div>