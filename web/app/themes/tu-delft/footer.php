<?php
$user = wp_get_current_user();
$name = $user->display_name;
?>
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
                <span><?php echo date('Y'); ?> Published under the <a href="https://digipedia.tudelft.nl/copyright-and-open-licences/" target="_blank">MIT licence</a>.</span>
                <a href="https://www.tudelft.nl/en/privacy-statement/">Privacy Policy</a>
            </div>
        </div>
        <div class="footer__info">
            <h5>DigiPedia</h5>
            <p>Your gateway to mastering cutting-edge tools and technologies through open educational resources at your own pace, propelling your skills to new heights.</p>
        </div>
        <div class="footer__lists flex">
            <div class="footer__list">
                <h6>Tutorials</h6>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer1',
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'menu_class' => '',
                ]);
                ?>
            </div>
            <div class="footer__list">
                <h6>About</h6>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer2',
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'menu_class' => '',
                ]);
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
    <div id="modal-suggestion" class="modal-suggestion">
        <div class="modal-window__fader"></div>
        <div class="modal-suggestion__inner">
            <div class="modal-suggestion__title">
                <h2>Write your feedback.</h2>
                <button type="button" aria-label="close modal window" class="modal-window__close-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.23438L13 13.2344M1 13.2344L13 1.23438" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-suggestion__text">
                <p>Write your feedback on <span data-chapter-title><?= get_the_title(); ?></span>.</p>
                <small>If you're providing a specific feedback to a part of the tutorial, mention which part (text, image, or video) that you have specific feedback for."</small>
            </div>
						<form data-suggestion-form class="block">
							<fieldset class="modal-suggestion__field">
								<div class="modal-suggestion__author">
									<p><?= $name[0]; ?></p>
								</div>
								<div class="field">
									<input type="hidden" name="chapter-title">
									<input type="hidden" name="post-id" value="<?= get_the_ID(); ?>">
									<input type="text" placeholder="Write your feedback" required minlength="3" name="comment" id="user-suggestion-field" />
								</div>
							</fieldset>
							<p class="error hidden" data-error></p>

							<fieldset class="modal-suggestion__buttons">
								<button type="button" aria-label="close modal window" class="modal-window__close-icon btn">Cancel</button>
								<button type="submit" class="btn modal-suggestion__submit-button">
									<p>Send</p>
									<div class="modal-suggestion__loader"></div>
								</button>
							</fieldset>
						</form>
        </div>
        <div class="modal-suggestion__second modal-suggestion__second--hidden">
        <div class="modal-suggestion__title">
                <h2>Thank your for your feedback.</h2>
                <button type="button" aria-label="close modal window" class="modal-window__close-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.23438L13 13.2344M1 13.2344L13 1.23438" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-suggestion__text">
                <p>Your feedback has been submitted successfully and is now awaiting review. We appreciate your input and will ensure it aligns with our guidelines before it’s published.</p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>