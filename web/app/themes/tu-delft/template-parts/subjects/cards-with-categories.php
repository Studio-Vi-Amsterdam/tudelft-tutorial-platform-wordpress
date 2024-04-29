<?php $theme_url = get_template_directory_uri() ?>
<section class="cards-with-categories">
    <div class="cards-with-categories__categories categories" data-scrollbar>
        <div class="categories__wrapper flex">
        <div class="categories__item categories__item--active transition"  data-category-target="chapter-0">
            <a href="#">Computer Aided Design
            <span class="categories__bg"></span>
            <span class="categories__text"><span>Computer Aided Design</span></span>
        </a>
        </div>
        <div class="categories__item "  data-category-target="chapter-1">
            <a href="#">Visualisation
            <span class="categories__bg"></span>
            <span class="categories__text"><span>Visualisation</span></span>
        </a>
        </div>
        <div class="categories__item"  data-category-target="chapter-2">
            <a href="#">Physical Modeling
            <span class="categories__bg"></span>
            <span class="categories__text"><span>Physical Modeling</span></span></a>
        </div>
        <div class="categories__item"  data-category-target="chapter-3">
            <a href="#">Programming
            <span class="categories__bg"></span>
            <span class="categories__text"><span>Programming</span></span>
        </a>
        </div>

        </div>
    </div>
    <div class="cards-with-categories__wrapper">
        <div class="cards-with-categories__content active" data-category-content="chapter-0">
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between opened">
                    <h2>3 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject1.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Polygonal</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Sculpting</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>NURB/Curve modeling</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Parametric</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>2 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Id vitae iaculis condimentum felis egestas habitasse fames maecenas. Risus pharetra ipsum.                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Vector Illustration</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Gravida magnis commodo suspendisse etiam maecenas. Adipiscing lectus aliquam enim sagittis ipsum.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>Documenting</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Feugiat auctor orci a id ut aliquet etiam nascetur. Eros eget dolor nec etiam ac in aliquam ultrices diam.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject5.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Documentation</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Arcu amet consectetur orci non molestie diam posuere egestas nec. Dolor mauris sed mi sed massa.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-with-categories__content" data-category-content="chapter-1">
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>3 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject1.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Polygonal</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Sculpting</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>NURB/Curve modeling</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Parametric</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>2 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Id vitae iaculis condimentum felis egestas habitasse fames maecenas. Risus pharetra ipsum.                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Vector Illustration</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Gravida magnis commodo suspendisse etiam maecenas. Adipiscing lectus aliquam enim sagittis ipsum.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>Documenting</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Feugiat auctor orci a id ut aliquet etiam nascetur. Eros eget dolor nec etiam ac in aliquam ultrices diam.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject5.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Documentation</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Arcu amet consectetur orci non molestie diam posuere egestas nec. Dolor mauris sed mi sed massa.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-with-categories__content" data-category-content="chapter-2">
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>3 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject1.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Polygonal</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Sculpting</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>NURB/Curve modeling</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Parametric</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>2 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Id vitae iaculis condimentum felis egestas habitasse fames maecenas. Risus pharetra ipsum.                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Vector Illustration</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Gravida magnis commodo suspendisse etiam maecenas. Adipiscing lectus aliquam enim sagittis ipsum.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>Documenting</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Feugiat auctor orci a id ut aliquet etiam nascetur. Eros eget dolor nec etiam ac in aliquam ultrices diam.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject5.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Documentation</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Arcu amet consectetur orci non molestie diam posuere egestas nec. Dolor mauris sed mi sed massa.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-with-categories__content" data-category-content="chapter-3">
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between ">
                    <h2>3 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject1.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Polygonal</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Sculpting</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>NURB/Curve modeling</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Parametric</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Condimentum adipiscing nisl amet egestas vulputate consequat. In in at turpis facilisi eget in.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>2 Dimensional</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject2.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Id vitae iaculis condimentum felis egestas habitasse fames maecenas. Risus pharetra ipsum.                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject3.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Vector Illustration</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Gravida magnis commodo suspendisse etiam maecenas. Adipiscing lectus aliquam enim sagittis ipsum.
                                    </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cards-with-categories__item accordion">
                <div class="accordion__head flex items-center justify-between">
                    <h2>Documenting</h2>
                    <button aria-label="open accordion"></button>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper grid lg:grid-cols-2">
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject4.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Technical Drawing</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Feugiat auctor orci a id ut aliquet etiam nascetur. Eros eget dolor nec etiam ac in aliquam ultrices diam.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="14" height="22">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                        </svg>
                                        <svg width="38" height="3">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card-with-image">
                            <div class="card-with-image__wrapper sm:flex">
                                <figure class="card-with-image__image">
                                    <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/subject5.jpg" alt="image">
                                </figure>
                                <div class="card-with-image__content">
                                    <h4>Documentation</h4>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur. Arcu amet consectetur orci non molestie diam posuere egestas nec. Dolor mauris sed mi sed massa.
                                                                </p>
                                    <div class="arrow">
                                        <svg width="9" height="14">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                        </svg>
                                        <svg width="24" height="2">
                                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>