    <?php
/*
    Template Name: All components Template
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
                    <p>Welcome to the TU Delft learning experience, where you can explore innovative tools and
                        technologies at your own pace, enhancing your skills and knowledge across various faculties and
                        tutorials.</p>
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
                    <p>Welcome to the TU Delft learning experience, where you can explore innovative tools and
                        technologies at your own pace, enhancing your skills and knowledge across various faculties and
                        tutorials.</p>
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
                    <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational
                        courses</p>
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
                    <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational
                        courses</p>
                </div>
                <figure class="hero-overview__image">
                    <svg width="288" height="224" viewBox="0 0 288 224" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M158.183 154.229H98.7666V213.599H158.183V154.229Z" fill="#FFB81C" stroke="black"
                            stroke-width="2" stroke-miterlimit="10" />
                        <path d="M217.6 111.064H158.184V213.599H217.6V111.064Z" stroke="black" stroke-width="2"
                            stroke-miterlimit="10" />
                        <path d="M277.026 68.2256H217.61V213.608H277.026V68.2256Z" stroke="black" stroke-width="2"
                            stroke-miterlimit="10" />
                        <path
                            d="M232.093 60.8493C245.786 60.8493 256.886 49.7575 256.886 36.0751C256.886 22.3926 245.786 11.3008 232.093 11.3008C218.4 11.3008 207.3 22.3926 207.3 36.0751C207.3 49.7575 218.4 60.8493 232.093 60.8493Z"
                            fill="#00A6D6" stroke="black" stroke-width="2" stroke-miterlimit="10" />
                        <path
                            d="M34.6759 213.609C48.3688 213.609 59.469 202.517 59.469 188.835C59.469 175.152 48.3688 164.061 34.6759 164.061C20.9831 164.061 9.88281 175.152 9.88281 188.835C9.88281 202.517 20.9831 213.609 34.6759 213.609Z"
                            stroke="black" stroke-width="2" stroke-miterlimit="10" />
                        <path
                            d="M35.583 156.355C35.583 156.355 41.9615 112.798 74.4001 112.001C106.839 111.205 118.427 140.475 118.427 140.475C118.427 140.475 120.841 90.5667 146.3 83.6692C171.759 76.7717 183.195 103.074 183.195 103.074C183.195 103.074 174.916 36.0742 202.035 36.0742"
                            stroke="black" stroke-width="2" stroke-miterlimit="10" />
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
                    <img width="1228" height="658" src="<?= get_template_directory_uri() ?>/src/img/new-home.jpg"
                        alt="image">
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
                            <img width="599" height="240"
                                src="<?= get_template_directory_uri() ?>/src/img/communities/card1.jpg" alt="image">
                        </figure>
                        <h3>Material Movement</h3>
                    </a>
                </div>
                <div class="communities-cards__item">
                    <a href="#" class="communities-cards__card">
                        <figure class="communities-cards__poster">
                            <img width="599" height="240"
                                src="<?= get_template_directory_uri() ?>/src/img/communities/card1.jpg" alt="image">
                        </figure>
                        <h3>Material Movement</h3>
                    </a>
                </div>
                <div class="communities-cards__item">
                    <a href="#" class="communities-cards__card">
                        <figure class="communities-cards__poster">
                            <img width="599" height="240"
                                src="<?= get_template_directory_uri() ?>/src/img/communities/card2.jpg" alt="image">
                        </figure>
                        <h3>Digital Heat Hub Initiative</h3>
                    </a>
                </div>
                <div class="communities-cards__item">
                    <a href="#" class="communities-cards__card">
                        <figure class="communities-cards__poster">
                            <img width="599" height="240"
                                src="<?= get_template_directory_uri() ?>/src/img/communities/card3.jpg" alt="image">
                        </figure>
                        <h3>Makers</h3>
                    </a>
                </div>
                <div class="communities-cards__item">
                    <a href="#" class="communities-cards__card">
                        <figure class="communities-cards__poster">
                            <img width="599" height="240"
                                src="<?= get_template_directory_uri() ?>/src/img/communities/card4.jpg" alt="image">
                        </figure>
                        <h3>Additive Manufacturing</h3>
                    </a>
                </div>
                <div class="communities-cards__item">
                    <a href="#" class="communities-cards__card">
                        <figure class="communities-cards__poster">
                            <img width="599" height="240"
                                src="<?= get_template_directory_uri() ?>/src/img/communities/card5.jpg" alt="image">
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
                The Digital Heat Hub Initiative is a vibrant community focused on harnessing innovative software
                solutions to tackle energy challenges. By bringing together experts, students, and industry leaders,
                this initiative fosters collaboration and knowledge sharing, aiming to create a sustainable future
                through digital technology. Join us to explore cutting-edge tutorials and resources that align with our
                mission!
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
                    <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational
                        courses.</p>
                    <div class="arrow">
                        <svg id="arrow-large" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.71191 1L12.7663 11.0001L1.71191 21" stroke="#00A6D6" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg id="line" viewBox="0 0 30 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.00195 0.976562L29 1.00639" stroke="#00A6D6" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
                <a href="#" class="knowledge-cards__card knowledge-cards__card--green-bg">
                    <h3>Communities</h3>
                    <p>Explore customised tutorials designed to meet the distinctive needs of TU Delft's educational
                        courses.</p>
                    <div class="arrow">
                        <svg width="14" height="22">
                            <use href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#arrow-large">
                            </use>
                        </svg>
                        <svg width="38" height="3">
                            <use href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#line"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="tutorial">
        <div class="tutorial__container md:flex md:justify-between">
            <div class="tutorial__mobile-nav flex justify-between">
                <a href="#" class="btn" data-prev="">
                    <span>Back</span>
                    <span>Back</span>
                </a>
                <a href="#" class="btn btn--white call-tutorial-nav">
                    <div class="btn__icon">
                        <svg width="20" height="20">
                            <use href="https://digipedia.tudelft.nl/app/themes/tu-delft/src/sprite.svg#tutorial-icon">
                            </use>
                        </svg>
                    </div>
                    <span>Index</span>
                    <span>Index</span>


                </a>
                <a href="#" class="btn" data-next="">
                    <span>Next</span>
                    <span>Next</span>
                </a>
            </div>
            <div class="tutorial__fader"></div>
            <div class="tutorial__aside">
                <div class="tutorial__aside-height">
                    <div class="tutorial__close call-tutorial-nav">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M1 1.234l12 12m-12 0l12-12"></path>
                        </svg>
                    </div>
                    <div class="tutorial__aside-wrapper" data-lenis-prevent="">
                        <div class="tutorial__nav responsible">
                            <h4>Responsible</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Teachers</td>
                                        <td>
                                            <ul>
                     <!-- New component responsible__item -->
                                                <li class="responsible__item">
                                                    Lotte van Dijk 
                                                    <span>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5268_43135)">
                                                        <path d="M14 7C14 10.8664 10.8664 14 7 14C3.13359 14 0 10.8664 0 7C0 3.13359 3.13359 0 7 0C10.8664 0 14 3.13359 14 7Z" fill="#A6CE39"/>
                                                        <path d="M4.71951 10.1828H3.87732V4.32578H4.71951V6.97265V10.1828Z" fill="white"/>
                                                        <path d="M5.95544 4.32578H8.23044C10.3961 4.32578 11.3476 5.87343 11.3476 7.25703C11.3476 8.76093 10.1719 10.1883 8.24138 10.1883H5.95544V4.32578ZM6.79763 9.42812H8.13748C10.0461 9.42812 10.4836 7.9789 10.4836 7.25703C10.4836 6.08124 9.73435 5.08593 8.09373 5.08593H6.79763V9.42812Z" fill="white"/>
                                                        <path d="M4.85078 3.10624C4.85078 3.40702 4.60469 3.65858 4.29844 3.65858C3.99219 3.65858 3.74609 3.40702 3.74609 3.10624C3.74609 2.79999 3.99219 2.55389 4.29844 2.55389C4.60469 2.55389 4.85078 2.80546 4.85078 3.10624Z" fill="white"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_5268_43135">
                                                        <rect width="14" height="14" fill="white"/>
                                                        </clipPath>
                                                        </defs>
                                                        </svg>
                                                        0000-0002-1825-0097
                                                    </span>
                                                </li>
                                                <li class="responsible__item">
                                                    Lotte van Dijk 
                                                    <a href="#">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5268_43135)">
                                                        <path d="M14 7C14 10.8664 10.8664 14 7 14C3.13359 14 0 10.8664 0 7C0 3.13359 3.13359 0 7 0C10.8664 0 14 3.13359 14 7Z" fill="#A6CE39"/>
                                                        <path d="M4.71951 10.1828H3.87732V4.32578H4.71951V6.97265V10.1828Z" fill="white"/>
                                                        <path d="M5.95544 4.32578H8.23044C10.3961 4.32578 11.3476 5.87343 11.3476 7.25703C11.3476 8.76093 10.1719 10.1883 8.24138 10.1883H5.95544V4.32578ZM6.79763 9.42812H8.13748C10.0461 9.42812 10.4836 7.9789 10.4836 7.25703C10.4836 6.08124 9.73435 5.08593 8.09373 5.08593H6.79763V9.42812Z" fill="white"/>
                                                        <path d="M4.85078 3.10624C4.85078 3.40702 4.60469 3.65858 4.29844 3.65858C3.99219 3.65858 3.74609 3.40702 3.74609 3.10624C3.74609 2.79999 3.99219 2.55389 4.29844 2.55389C4.60469 2.55389 4.85078 2.80546 4.85078 3.10624Z" fill="white"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_5268_43135">
                                                        <rect width="14" height="14" fill="white"/>
                                                        </clipPath>
                                                        </defs>
                                                        </svg>
                                                        0000-0002-1825-0097
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Faculty</td>
                                        <td>
                                            <ul>
                                                <li><a href="#">Bouwkunde</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tutorial__nav information">
                            <h4>Information</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Course Code</td>
                                        <td>BKB3WV4</td>
                                    </tr>
                                    <tr>
                                        <td>Last updated</td>
                                        <td>November 8, 2025</td>
                                    </tr>
                                    <tr>
                                        <td>Keywords</td>
                                        <td>
                                            <ul>
                                                <li><a href="#">Data Analysis</a></li>
                                                <li><a href="#">Data Generation</a></li>
                                                <li><a href="#">Machine Learning</a></li>
                                                <li><a href="#">Optimization</a></li>
                                                <li><a href="#">Simulation</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Primary study</td>
                                        <td>
                                            <a href="#">Bachelor</a> </td>
                                    </tr>
                                    <tr>
                                        <td>Secondary study</td>
                                        <td>
                                            <mark>BK Bachelor</mark> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tutorial__main transition">
                <div class="tutorial__item active" data-tab-content="chapter-0" style="overflow: hidden;">
                    <div class="tutorial__content text intro">
                        <div class="tutorial__title">
                            <h3>Parametric Dataset Generation in Grasshopper 2</h3>
                        </div>

                        <p>A step-by-step workflow for generating, validating, and publishing research-ready datasets (PDF)</p>
                     <!-- New component btn -->
                        <a href="#" class="btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_5274_44710)">
                            <path d="M7 21C5.89543 21 5 20.1046 5 19V3H14L19 8V19C19 20.1046 18.1046 21 17 21H7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 3V9H19" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_5274_44710">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            Download PDF
                        </a>
                        <p>8.4 MB • v1.0</p>
                    </div>

                     <!-- New component text-large -->
                    <div class="tutorial__content text text-large">
                        <h4 id="h01">Abstract<span>link copied</span></h4>
                        <p>This PDF provides a practical workflow for generating parametric datasets in Grasshopper 2, aimed at educators and researchers developing Open Educational Resources (OER). It covers dataset design principles, parameter sampling strategies, validation checks, file naming conventions, and recommendations for publishing and citing downloadable learning materials. The guide is intended to improve reuse and discoverability by pairing the downloadable file with structured metadata (e.g., author identifiers, license, and DOI) and a stable landing page that can be indexed by scholarly search engines.</p>
                    </div>
                    <!-- New component citation -->
                    <div class="tutorial__content citation text">
                        <h4 id="h01">Recommended Citation<span>link copied</span></h4>
                        <div class="citation__box" data-copy="https://doi.org/10.0000/digipedia.oer.pdf.2026.001">
                            <p>van Dijk, L., & Chen, R. (2026). Parametric Dataset Generation in Grasshopper 2… (Version 1.0) [PDF]. DigiPedia, TU Delft. https://doi.org/10.0000/digipedia.oer.pdf.2026.001</p>
                            <button class="citation__copy">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M8 8V7C8 5.89543 8.89543 5 10 5H17C18.1046 5 19 5.89543 19 7V14C19 15.1046 18.1046 16 17 16H16" stroke="black"/>
															<rect x="5" y="8" width="11" height="11" rx="2" stroke="black"/>
															</svg>
                            </button>

                        </div>
                    </div>
                    <div class="tutorial__content text">
                        <h4 id="h01">References<span>link copied</span></h4>
                            <p>Ahmed, S. (2023). Quality checks and validation patterns for open educational datasets. Delft Open Education Working Paper Series, 12, 1–19. https://example.org/delft-oer/working-papers/12</p>
                            <p>
                                Pereira, M., & Koster, J. (2022). Publishing OER with persistent identifiers: A practical guide for educators. Journal of Open Learning Materials, 4(1), 33–49. https://doi.org/10.0000/jolm.2022.04103
                            </p>
                            <p>
                                TU Delft Open Education Team. (2025). Metadata checklist for OER landing pages (v1.3). TU Delft Internal Guides. https://example.org/tudelft/oer/metadata-checklist-v1-3
                            </p>
                            <p>
                                Sato, K. (2021). Discoverability of downloadable educational resources: Landing pages, indexing, and citation formats. Open Scholarship Quarterly, 9(3), 101–118. https://doi.org/10.0000/osq.2021.09307
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>