
<footer class="footer flex flex-col justify-end">
    <div class="footer__container flex flex-col lg:flex-row lg:justify-between">
        <div class="footer__vector">
            <picture>
                <source media="(max-width: 1023px)" srcset="<?= get_template_directory_uri() ?>/src/img/vector/footer-vector-2.svg">
                <source media="(min-width: 1024px)" srcset="<?= get_template_directory_uri() ?>/src/img/vector/footer-vector-1.svg">
                <img width="300" height="67" src="<?= get_template_directory_uri() ?>/src/img/vector/footer-vector-1.svg"
                    alt="vector">
            </picture>

        </div>
        <div class="footer__wrapper">
            <a href="#" class="footer__logo">
                <img width="300" height="117" src="<?= get_template_directory_uri() ?>/src/img/logo-footer.svg" alt="logo">
            </a>
            <div class="footer__copyright">
                <span><?php echo date('Y'); ?> All rights reserved</span>
                <a href="<?php echo get_privacy_policy_url(); ?>">Privacy Policy</a>
            </div>
        </div>
        <div class="footer__info">
            <h5>DigiPedia</h5>
            <p>Your gateway to mastering cutting-edge tools and technologies at your own pace, propelling your
                skills to new heights</p>
        </div>
        <div class="footer__lists flex">
            <div class="footer__list">
                <h6>Tutorials</h6>
                <?php
                    wp_nav_menu( [
                        'theme_location' => 'footer2',
                        'container' => 'div',
                        'container_class' => 'footer-menu',
                        'menu_class' => '',
                    ] );
                ?>
            </div>
            <div class="footer__list">
                <h6>About</h6>
                <?php
                    wp_nav_menu( [
                        'theme_location' => 'footer1',
                        'container' => 'div',
                        'container_class' => 'footer-menu',
                        'menu_class' => '',
                    ] );
                ?>
            </div>
        </div>
    </div>
</footer>

</div>
</main>
    <div id="modal-window" class="modal-window">
        <div id="modal-video" class="modal-window__item modal-window__video modal-video-item">
        <div class="modal-window__fader"></div>
            <div class="modal-video-item__wr-iframe">
                <button aria-label="close modal window" class="modal-video-item__close modal-window__close-icon"></button>
                <iframe src="" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div id="modal-image" class="modal-window__item modal-window__video modal-video-item">
        <div class="modal-window__fader"></div>
            <div class="modal-video-item__wr-image">
                <div class="modal-video-item__image">
                    <button aria-label="close modal window" class="modal-video-item__close modal-window__close-icon"></button>
                    <img src="" alt="image">
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>

</body>

</html>