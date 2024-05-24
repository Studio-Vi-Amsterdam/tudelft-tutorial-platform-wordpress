<?php
/**
 * Block Name: Download Block
 * 
 */

$file = get_field('tu-delft-download_file');
$title = get_field('tu-delft-download_title') ?: $file['title'];
$description = get_field('tu-delft-download_description') ?: $file['mime_type'];
$filesize = filesize( get_attached_file( $file['id'] ) );
$filesize = size_format($filesize);
$ext = pathinfo($file['url'], PATHINFO_EXTENSION);
$theme_url = get_template_directory_uri();
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
            <h6><?php echo $description; ?> (<?php echo strtoupper($ext); ?>, <?php echo $filesize; ?>)</h6>
        </div>
    </a>
</div>