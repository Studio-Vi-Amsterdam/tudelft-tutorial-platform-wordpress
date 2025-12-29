<?php
/*
    Template Name: Communities Template
*/
?>

<?php get_header(); ?>
 <!-- <header class="header flex justify-center header--opened">
    <div class="header__container flex justify-between items-center">
        <div class="header__trigger header__icon js-menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M3 6h18M3 12h18M3 18h18"></path>
            </svg>
        </div>
        <a href="https://digipedia.tudelft.nl" class="header__logo" aria-label="home-page">
            <img width="300" height="74"
                src="https://digipedia.tudelft.nl/app/themes/tu-delft/src/img/logo.svg" alt="logo">
        </a>
        <div class="header__menu">
            <div class="header__nav">
                <ul>
                    <li class="menu-item-has-children"><a
                            href="https://digipedia.tudelft.nl/courses">Faculties</a>
                        <div class="header__fader"></div>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="https://digipedia.tudelft.nl/courses/?category=bachelor">
                                            Bachelor <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use
                                                        href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li class="menu-item-has-children">
                                                    <a
                                                        href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                        BK Bachelor </a>

                                                    <div class="header__submenu">
                                                        <ul>
                                                            <li>
                                                                <a
                                                                    href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                                    New submenu 2 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a
                                                        href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                        BK Bachelor </a>

                                                    <div class="header__submenu">
                                                        <ul>
                                                            <li>
                                                                <a
                                                                    href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                                    New submenu 2 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://digipedia.tudelft.nl/courses/?category=master">
                                            Master <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use
                                                        href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="https://digipedia.tudelft.nl/courses/?category=master&amp;subcategory=bk-master">
                                                        BK Master </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children"><a
                            href="https://digipedia.tudelft.nl/courses">Communities</a>
                        <div class="header__fader"></div>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="https://digipedia.tudelft.nl/courses/?category=bachelor">
                                            Bachelor <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use
                                                        href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li class="menu-item-has-children">
                                                    <a
                                                        href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                        BK Bachelor </a>

                                                    <div class="header__submenu">
                                                        <ul>
                                                            <li>
                                                                <a
                                                                    href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                                    New submenu 2 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a
                                                        href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                        BK Bachelor </a>

                                                    <div class="header__submenu">
                                                        <ul>
                                                            <li>
                                                                <a
                                                                    href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                                                    New submenu 2 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://digipedia.tudelft.nl/courses/?category=master">
                                            Master <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use
                                                        href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="https://digipedia.tudelft.nl/courses/?category=master&amp;subcategory=bk-master">
                                                        BK Master </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__wrapper flex items-center justify-center">
            <div class="header__search search-bar" data-search="">
                <div class="search-bar__wrapper">
                    <div data-open-search=""> </div>
                    <button class="search-bar__btn" aria-label="search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                            <path stroke="#000" stroke-width="1.5"
                                d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z">
                            </path>
                            <path fill="#000"
                                d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z">
                            </path>
                        </svg>
                    </button>
                    <div class="search-bar__close" data-close-search="">
                    </div>
                </div>
                <div class="search-bar__field flex items-center">
                    <button class="search-bar__btn" aria-label="search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                            <path stroke="#000" stroke-width="1.5"
                                d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z">
                            </path>
                            <path fill="#000"
                                d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z">
                            </path>
                        </svg>
                    </button>
                    <form id="search-form" action="https://digipedia.tudelft.nl/search" method="get">
                        <input type="text" placeholder="Search" id="global-search" name="term">
                    </form>
                </div>
            </div>
            <div data-href="https://digipedia.tudelft.nl/wp/wp-login.php"
                class="header__account header__icon" aria-label="account">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25">
                    <circle cx="11.842" cy="6.316" r="5.566" stroke="#000" stroke-width="1.5"></circle>
                    <path stroke="#000" stroke-linecap="round" stroke-width="1.5"
                        d="M3 24v-3a6 6 0 016-6h5a6 6 0 016 6v3"></path>
                </svg>
            </div>
            <div class="header__close header__icon js-menu-close">
            </div>
        </div>
    </div>
</header>
<nav class="nav flex flex-col nav--opened">
    <div class="nav__inner">
        <ul>
            <li class="menu-item-has-children">
                <div class="menu-item-has-children__title">
                    <a href="https://digipedia.tudelft.nl/courses">Faculties</a>
                    <div class="menu-item-has-children__trigger menu-item-has-children__next">
                        <svg width="20" height="20">
                            <use
                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                            </use>
                        </svg>
                    </div>
                </div>
                <div class="menu-item-has-children__submenu active" data-lenis-prevent=""
                    style="overflow-y: hidden;">
                    <div class="menu-item-has-children__title title-prev">
                        <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                            <svg width="20" height="20">
                                <use
                                    href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                </use>
                            </svg>
                        </div>
                        <span>Faculties</span>
                    </div>

                    <ul>
                        <li class="menu-item-has-children">
                            <div class="menu-item-has-children__title">
                                <a href="https://digipedia.tudelft.nl/courses/?category=bachelor">
                                    Bachelor </a>
                                <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                    <svg width="20" height="20">
                                        <use
                                            href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-item-has-children__submenu active" data-lenis-prevent=""
                                style="overflow-y: auto;">
                                <div class="menu-item-has-children__title title-prev title-start">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Faculties</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Bachelor</span>
                                </div>
                                <ul>
                        <li class="menu-item-has-children">
                            <div class="menu-item-has-children__title">
                                <a href="https://digipedia.tudelft.nl/courses/?category=bachelor">
                                    BK Bachelor </a>
                                <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                    <svg width="20" height="20">
                                        <use
                                            href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-item-has-children__submenu active" data-lenis-prevent=""
                                style="overflow-y: auto;">
                                <div class="menu-item-has-children__title title-prev title-start">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Faculties</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Bachelor</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>BK Bachelor</span>
                                </div>
                                <ul>
                                    <li>
                                        <a
                                            href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                            New Submenu </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <div class="menu-item-has-children__title">
                                <a href="https://digipedia.tudelft.nl/courses/?category=master">
                                    Master </a>
                                <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                    <svg width="20" height="20">
                                        <use
                                            href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-item-has-children__submenu" data-lenis-prevent="">
                                <div class="menu-item-has-children__title title-prev title-start">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Faculties</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Master</span>
                                </div>
                                <ul>
                                    <li>
                                        <a
                                            href="https://digipedia.tudelft.nl/courses/?category=master&amp;subcategory=bk-master">
                                            BK Master </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item-has-children">
                <div class="menu-item-has-children__title">
                    <a href="https://digipedia.tudelft.nl/courses">Communities</a>
                    <div class="menu-item-has-children__trigger menu-item-has-children__next">
                        <svg width="20" height="20">
                            <use
                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                            </use>
                        </svg>
                    </div>
                </div>
                <div class="menu-item-has-children__submenu active" data-lenis-prevent=""
                    style="overflow-y: hidden;">
                    <div class="menu-item-has-children__title title-prev">
                        <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                            <svg width="20" height="20">
                                <use
                                    href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                </use>
                            </svg>
                        </div>
                        <span>Communities</span>
                    </div>

                    <ul>
                        <li class="menu-item-has-children">
                            <div class="menu-item-has-children__title">
                                <a href="https://digipedia.tudelft.nl/courses/?category=bachelor">
                                    Bachelor </a>
                                <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                    <svg width="20" height="20">
                                        <use
                                            href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-item-has-children__submenu active" data-lenis-prevent=""
                                style="overflow-y: auto;">
                                <div class="menu-item-has-children__title title-prev title-start">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Communities</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Bachelor</span>
                                </div>
                                <ul>
                        <li class="menu-item-has-children">
                            <div class="menu-item-has-children__title">
                                <a href="https://digipedia.tudelft.nl/courses/?category=bachelor">
                                    BK Bachelor </a>
                                <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                    <svg width="20" height="20">
                                        <use
                                            href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-item-has-children__submenu active" data-lenis-prevent=""
                                style="overflow-y: auto;">
                                <div class="menu-item-has-children__title title-prev title-start">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Communities</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Bachelor</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>BK Bachelor</span>
                                </div>
                                <ul>
                                    <li>
                                        <a
                                            href="https://digipedia.tudelft.nl/courses/?category=bachelor&amp;subcategory=bachelor-bk">
                                            New Submenu </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <div class="menu-item-has-children__title">
                                <a href="https://digipedia.tudelft.nl/courses/?category=master">
                                    Master </a>
                                <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                    <svg width="20" height="20">
                                        <use
                                            href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-item-has-children__submenu" data-lenis-prevent="">
                                <div class="menu-item-has-children__title title-prev title-start">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Communities</span>
                                </div>
                                <div class="menu-item-has-children__title title-prev">
                                    <div
                                        class="menu-item-has-children__trigger menu-item-has-children__prev">
                                        <svg width="20" height="20">
                                            <use
                                                href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-right">
                                            </use>
                                        </svg>
                                    </div>
                                    <span>Master</span>
                                </div>
                                <ul>
                                    <li>
                                        <a
                                            href="https://digipedia.tudelft.nl/courses/?category=master&amp;subcategory=bk-master">
                                            BK Master </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="nav__btn">
        <a href="https://digipedia.tudelft.nl/wp/wp-login.php" class="btn">
            <span>Log in</span>
            <span>Log in</span>
        </a>
    </div>
</nav> -->
<section class="hero-overview hero-overview--small-gap hero-overview--large-width-text">
    <div class="hero-overview__container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current" aria-current="page">Current Page</span>
                </li>
            </ol>
        </nav>
        <div class="hero-overview__flex">
            <div class="hero-overview__text">
                <h1>Discover TU Delft’s <mark>Communities</mark></h1>
                <p>Welcome to the TU Delft learning experience, where you can explore innovative tools and technologies at your own pace, enhancing your skills and knowledge across various faculties and tutorials.</p>
            </div>
        </div>
    </div>
</section>
<section class="hero-overview hero-overview--large-gap hero-overview--large-width-text">
    <div class="hero-overview__container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current" aria-current="page">Current Page</span>
                </li>
            </ol>
        </nav>
        <div class="hero-overview__flex">
            <div class="hero-overview__text">
                <h1>Discover TU Delft’s <mark>Faculties</mark></h1>
                <p>Welcome to the TU Delft learning experience, where you can explore innovative tools and technologies at your own pace, enhancing your skills and knowledge across various faculties and tutorials.</p>
            </div>
        </div>
    </div>
</section>
<section class="hero-overview">
    <div class="hero-overview__container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current" aria-current="page">Current Page</span>
                </li>
            </ol>
        </nav>
        <div class="hero-overview__flex">
            <div class="hero-overview__text">
                <h1>Category 2</h1>
                <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational courses</p>
            </div>
        </div>
    </div>
</section>
<section class="hero-overview">
    <div class="hero-overview__container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current" aria-current="page">Current Page</span>
                </li>
            </ol>
        </nav>
        <div class="hero-overview__flex">
            <div class="hero-overview__text">
                <h1>Category</h1>
                <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational courses</p>
            </div>
            <figure class="hero-overview__image">
                    <svg width="288" height="224" viewBox="0 0 288 224" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M158.183 154.229H98.7666V213.599H158.183V154.229Z" fill="#FFB81C" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M217.6 111.064H158.184V213.599H217.6V111.064Z" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M277.026 68.2256H217.61V213.608H277.026V68.2256Z" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M232.093 60.8493C245.786 60.8493 256.886 49.7575 256.886 36.0751C256.886 22.3926 245.786 11.3008 232.093 11.3008C218.4 11.3008 207.3 22.3926 207.3 36.0751C207.3 49.7575 218.4 60.8493 232.093 60.8493Z" fill="#00A6D6" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M34.6759 213.609C48.3688 213.609 59.469 202.517 59.469 188.835C59.469 175.152 48.3688 164.061 34.6759 164.061C20.9831 164.061 9.88281 175.152 9.88281 188.835C9.88281 202.517 20.9831 213.609 34.6759 213.609Z" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M35.583 156.355C35.583 156.355 41.9615 112.798 74.4001 112.001C106.839 111.205 118.427 140.475 118.427 140.475C118.427 140.475 120.841 90.5667 146.3 83.6692C171.759 76.7717 183.195 103.074 183.195 103.074C183.195 103.074 174.916 36.0742 202.035 36.0742" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>

            </figure>
        </div>
    </div>
</section>
<section class="hero-overview hero-overview--image-to-bord">
    <div class="hero-overview__container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current" aria-current="page">Current Page</span>
                </li>
            </ol>
        </nav>
        <div class="hero-overview__flex">
            <div class="hero-overview__text">
                <h1>
                    <mark>Faculty</mark><br>
                    Additive Manufacturing
                </h1>
            </div>
            <figure class="hero-overview__image">
                <img width="1228" height="658" src="<?= get_template_directory_uri() ?>/src/img/new-home.jpg" alt="image">
            </figure>
        </div>
    </div>
</section>
<section class="communities-cards communities-cards--equal-size">
    <div class="communities-cards__container ">
        <div class="communities-cards__grid">
            <div class="communities-cards__item">
                 <a href="#" class="communities-cards__card">
                    <figure class="communities-cards__poster">
                        <img width="599" height="240" src="<?= get_template_directory_uri() ?>/src/img/communities/card1.jpg" alt="image">
                    </figure>
                    <h3>Material Movement</h3>
                 </a> 
            </div>
            <div class="communities-cards__item">
                 <a href="#" class="communities-cards__card">
                    <figure class="communities-cards__poster">
                        <img width="599" height="240" src="<?= get_template_directory_uri() ?>/src/img/communities/card1.jpg" alt="image">
                    </figure>
                    <h3>Material Movement</h3>
                 </a>       
            </div>
            <div class="communities-cards__item">
                 <a href="#" class="communities-cards__card">
                    <figure class="communities-cards__poster">
                        <img width="599" height="240" src="<?= get_template_directory_uri() ?>/src/img/communities/card2.jpg" alt="image">
                    </figure>
                    <h3>Digital Heat Hub Initiative</h3>
                 </a>       
            </div>
            <div class="communities-cards__item">
                 <a href="#" class="communities-cards__card">
                    <figure class="communities-cards__poster">
                        <img width="599" height="240" src="<?= get_template_directory_uri() ?>/src/img/communities/card3.jpg" alt="image">
                    </figure>
                    <h3>Makers</h3>
                 </a>       
            </div>
            <div class="communities-cards__item">
                 <a href="#" class="communities-cards__card">
                    <figure class="communities-cards__poster">
                        <img width="599" height="240" src="<?= get_template_directory_uri() ?>/src/img/communities/card4.jpg" alt="image">
                    </figure>
                    <h3>Additive Manufacturing</h3>
                 </a>       
            </div>
            <div class="communities-cards__item">
                 <a href="#" class="communities-cards__card">
                    <figure class="communities-cards__poster">
                        <img width="599" height="240" src="<?= get_template_directory_uri() ?>/src/img/communities/card5.jpg" alt="image">
                    </figure>
                    <h3>Circular Built Environment</h3>
                 </a>       
            </div>
        </div>
    </div>
</section>
<section class="text-wrapper">
    <div class="text-wrapper__container">
        <h2>About this Faculty</h2>
        <p>
            The Digital Heat Hub Initiative is a vibrant community focused on harnessing innovative software solutions to tackle energy challenges. By bringing together experts, students, and industry leaders, this initiative fosters collaboration and knowledge sharing, aiming to create a sustainable future through digital technology. Join us to explore cutting-edge tutorials and resources that align with our mission!
        </p>
        <div class="text-wrapper__btn">
            <a href="#" class="btn">
                <span>Join now!</span>
                <span>Join now!</span>
            </a>
        </div>
    </div>
</section>
<section class="knowledge-cards">
    <div class="knowledge-cards__container">
        <div class="knowledge-cards__title">
            <h2>Explore our knowledge hubs</h2>
        </div>
        <div class="knowledge-cards__grid">
            <a href="#" class="knowledge-cards__card knowledge-cards__card--blue-bg">
                <h3>Communities</h3>
                <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational courses.</p>
                <div class="arrow">
                        <svg id="arrow-large"  viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.71191 1L12.7663 11.0001L1.71191 21" stroke="#00A6D6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<svg id="line"  viewBox="0 0 30 2" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.00195 0.976562L29 1.00639" stroke="#00A6D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </div>
            </a>
            <a href="#" class="knowledge-cards__card knowledge-cards__card--green-bg">
                <h3>Communities</h3>
                <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational courses.</p>
                <div class="arrow">
                    <svg width="14" height="22">
                        <use href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-large"></use>
                    </svg>
                    <svg width="38" height="3">
                        <use href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#line"></use>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>