<?php $theme_url = get_template_directory_uri() ?>
<section class="search">
     <div class="search__search">
        <form action="#">
            <button class="search__btn" aria-label="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                    <path stroke="#000" stroke-width="1.5"
                        d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z" />
                    <path fill="#000"
                        d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z" />
                </svg>
            </button>
            <input type="text" placeholder="architecture">
        </form>
     </div>
     <div class="search__row md:flex items-center justify-between">
        <div class="search__result">
            <h1>17 search results for architecture</h1>
        </div>
        <div class="search__filters flex max-sm:flex-wrap items-center justify-start md:justify-end">
            <div class="filter" data-sort>
                <div class="filter__head flex items-center">
                    <span>Sort</span>
                    <svg width="24" height="25">
                        <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#sort"></use>
                    </svg>
                </div>
                <div class="filter__fader filter__close"></div>
                <div class="filter__content">
                        <div class="filter__top flex items-center justify-between">
                            <h5>Sort</h5>
                            <div class="filter__close">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6.44336L18 18.4434M6 18.4434L18 6.44336" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    <div class="filter__content-wrapper" data-scrollbar>
                        <ul>
                            <li><a href="#">Newest first</a></li>
                            <li><a href="#">Oldest first</a></li>
                            <li><a href="#">Level easy to difficult</a></li>
                            <li><a href="#">Level difficult to easy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter"data-filter>
                <div class="filter__head flex items-center" >
                    <span>Filter <sup></sup></span>
                    <svg width="24" height="25">
                        <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#filter"></use>
                    </svg>
                </div>
                <div class="filter__fader filter__close"></div>
                <div class="filter__content">
                        <div class="filter__top  flex items-center justify-between">
                            <h5>Filter</h5>
                            <div class="filter__close">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6.44336L18 18.4434M6 18.4434L18 6.44336" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    <div class="filter__content-wrapper" data-scrollbar>
                        <h6>Content</h6>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check1" name="content">
                            <label for="check1">Courses</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check2" name="content">
                            <label for="check2">Subjects</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check3" name="content">
                            <label for="check3">Software</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check4" name="content">
                            <label for="check4">Labs</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check5" name="content">
                            <label for="check5">Tutorials</label>
                        </div>
                        <h6>Level of difficulty</h6>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check11" name="level">
                            <label for="check11">easy</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check12" name="level">
                            <label for="check12">medium</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check13" name="level">
                            <label for="check13">difficult</label>
                        </div>
                        <h6>Other</h6>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check21" name="other">
                            <label for="check21">easy</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check22" name="other">
                            <label for="check22">medium</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" id="check23" name="other">
                            <label for="check23">difficult</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div class="search__content" data-pages>

     <div class="search__wrapper">
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Course</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Subject</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Course</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Subject</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="search-link" data-card>
            <div class="search-link__row">
                <a href="#" class="search-link__col">
                    <h2>Ladybug Light Analysis</h2>
                </a>
                <div class="search-link__col">
                    <h3>Tutorial</h3>
                </div>
            </div>
            <div class="search-link__row">
                <div class="search-link__col">
                    <ul>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                        <li><a href="#">Keyword</a></li>
                    </ul>
                </div>
                <div class="search-link__col">
                    <p>
                        In this tutorial you will learn how to analyze the sunlight hours of a Rhino model. Using this analysis, you can change your design based on expected performance or optimize it using an algorithm.
                    </p>
                </div>
            </div>
            <div class="search-link__arrow">
                <a href="#" class="arrow">
                    <svg width="14" height="22">
                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                    </svg>
                </a>
            </div>
        </div>
     </div>
     <div class="search__pagination pagination flex items-center justify-center">
        <a href="#" class="pagination__button pagination__button--prev flex items-center justify-center">
            <svg width="20" height="20">
                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
            </svg>

        </a>
        <div class="pagination__list">
            <div class="pagination__bg"></div>
            <ul class="flex items-center justify-center">

            </ul>
        </div>
        <a href="#" class="pagination__button pagination__button--next flex items-center justify-center">
            <svg width="20" height="20">
                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
            </svg>
            
        </a>
     </div>
     </div>
</section>