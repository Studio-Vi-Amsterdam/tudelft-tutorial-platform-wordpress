
<footer class="footer flex flex-col lg:flex-row lg:justify-between">
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
            <span>2024 All rights reserved</span>
            <a href="#">privacy policy</a>
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
            <ul>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Subjects</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Labs</a></li>
            </ul>
        </div>
        <div class="footer__list">
            <h6>About</h6>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
        </div>
    </div>
</footer>

</div>
</main>

<?php wp_footer(); ?>

</body>

</html>