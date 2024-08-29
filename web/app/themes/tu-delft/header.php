
<!--  

  ___ _ __ __ _ / _| |_ ___  __| | | |__  _   _ 
 / __| '__/ _` | |_| __/ _ \/ _` | | '_ \| | | |
| (__| | | (_| |  _| ||  __/ (_| | | |_) | |_| |
 \___|_|  \__,_|_|  \__\___|\__,_| |_.__/ \__, |
                                          |___/

   ____  _             _ _        __     ___ 
  / ___|| |_ _   _  __| (_) ___   \ \   / (_)
  \___ \| __| | | |/ _` | |/ _ \   \ \ / /| |
   ___) | |_| |_| | (_| | | (_) |   \ V / | |
  |____/ \__|\__,_|\__,_|_|\___/     \_/  |_|


     STRATEGY | WEB PRODUCTS | AI SOLUTIONS

      Visit Viamsterdam.com for more info
                                                                        
-->
<?php
    use TuDelft\Theme\Modules\Course\Course;
    use TuDelft\Theme\Modules\Software\Software;
    use TuDelft\Theme\Modules\Subject\Subject;
    use TuDelft\Theme\Modules\Lab\Lab;

    //courses
    $academic_levels = Course::get_academic_levels();

    //subjects
    $categories = Subject::get_categories();

    // software matrix
    $softwares_matrix = Software::get_softwares_matrix(3);
    $softwares = Software::get_all_softwares();

    // labs
    $labs = Lab::get_lab_types();

    function generate_url($path, $param) {
        return get_home_url() . $path . '/?' . http_build_query($param);
    }

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body data-barba="wrapper" class="opacity">
    <div class="preloader">
        <div class="preloader__yellow"></div>
        <div class="preloader__blue"></div>
    </div>

    <main id="scroll-container" data-barba="container" data-barba-namespace="page">
      <div class="disabled-horizontal-scroll">
    <header class="header flex justify-center">
        <div class="header__container flex justify-between items-center">
        <div class="header__trigger header__icon js-menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </div>
        <a href="<?php echo get_home_url(); ?>" class="header__logo" aria-label="home-page">
            <img width="300" height="74" src="<?= get_template_directory_uri() ?>/src/img/logo.svg" alt="logo">
        </a>
        <div class="header__menu">
            <div class="header__nav">
                <ul>
                    <li class="menu-item-has-children"><a href="<?php echo get_home_url();?>/courses">Courses</a>
                        <div class="header__fader"></div>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <?php foreach ($academic_levels as $category): ?>
                                        <li class="menu-item-has-children">
                                            <a href="<?php echo generate_url('/courses', ['category' => $category['category']->slug]); ?>">
                                                <?php echo $category['category']->name; ?>
                                                <div class="menu-item-has-children__trigger">
                                                    <svg width="20" height="20">
                                                        <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                    </svg>
                                                </div>
                                            </a>

                                            <div class="header__submenu">
                                                <ul>
                                                    <?php foreach ($category['subcategories'] as $subcategory): ?>
                                                        <li>
                                                            <a href="<?php echo generate_url('/courses', ['category' => $category['category']->slug, 'subcategory' => $subcategory->slug]); ?>">
                                                                <?php echo $subcategory->name; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children"><a href="<?php echo get_home_url();?>/subjects">Subjects</a>
                        <div class="header__fader"></div>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <?php foreach ($categories as $category): ?>
                                        <li class="menu-item-has-children">
                                            <a href="<?php echo generate_url('/subjects', ['category' => $category['category']->slug]); ?>">
                                                <?php echo $category['category']->name; ?>
                                                <div class="menu-item-has-children__trigger">
                                                    <svg width="20" height="20">
                                                        <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                    </svg>
                                                </div>
                                            </a>

                                            <div class="header__submenu">
                                                <ul>
                                                    <?php foreach ($category['subcategories'] as $subcategory): ?>
                                                        <li>
                                                            <a href="<?php echo generate_url('/subjects', ['category' => $category['category']->slug, 'subcategory' => $subcategory->slug]); ?>">
                                                                <?php echo $subcategory->name; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children"><a href="<?php echo get_home_url();?>/software">Software</a>
                        <div class="header__fader"></div>
                        <div class="header__submenu header__submenu--flex">
                            <div class="menu-item-has-children__wrapper ">
                                <?php foreach($softwares_matrix as $column): ?>
                                    <ul>
                                        <?php foreach($column as $software): ?>
                                            <li><a href="<?php echo get_permalink($software->ID); ?>"><?php echo $software->post_title; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children"><a href="<?php echo get_home_url();?>/labs">Labs</a>
                        <div class="header__fader"></div>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <?php foreach($labs as $lab): ?>
                                        <li class="menu-item-has-children">
                                            <a href="<?php echo generate_url('/labs', ['category' => $lab['category']->slug]); ?>">
                                                <?php echo $lab['category']->name; ?>
                                                <div class="menu-item-has-children__trigger">
                                                    <svg width="20" height="20">
                                                        <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                    </svg>
                                                </div>
                                            </a>

                                            <div class="header__submenu">
                                                <ul>
                                                    <?php foreach ($lab['subcategories'] as $subcategory): ?>
                                                        <li>
                                                            <a href="<?php echo generate_url('/labs', ['category' => $lab['category']->slug, 'subcategory' => $subcategory->slug]); ?>">
                                                                <?php echo $subcategory->name; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__wrapper flex items-center justify-center">
            <div class="header__search search-bar" data-search>
                <div class="search-bar__wrapper">
                    <div data-open-search> </div>
                    <button class="search-bar__btn" aria-label="search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                            <path stroke="#000" stroke-width="1.5"
                                d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z" />
                            <path fill="#000"
                                d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z" />
                        </svg>
                    </button>
                    <div class="search-bar__close" data-close-search>
                    </div>
                </div>
                <div class="search-bar__field flex items-center">
                    <button class="search-bar__btn" aria-label="search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                            <path stroke="#000" stroke-width="1.5"
                                d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z" />
                            <path fill="#000"
                                d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z" />
                        </svg>
                    </button>
                    <form id="search-form" action="<?php echo get_home_url(); ?>/search" method="get">
                        <input type="text" placeholder="Search" id="global-search" name="term">
                    </form>
                </div>
            </div>
            <a href="#" class="header__account header__icon" aria-label="account">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25">
                    <circle cx="11.842" cy="6.316" r="5.566" stroke="#000" stroke-width="1.5" />
                    <path stroke="#000" stroke-linecap="round" stroke-width="1.5"
                        d="M3 24v-3a6 6 0 016-6h5a6 6 0 016 6v3" />
                </svg>
            </a>
            <div class="header__close header__icon js-menu-close">
            </div>
        </div>
        </div>
    </header>

    <nav class="nav flex flex-col">
        <div class="nav__inner">
            <ul>
                <li class="menu-item-has-children">
                    <div class="menu-item-has-children__title">
                        <a href="#">Courses</a>
                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                            <svg width="20" height="20">
                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="menu-item-has-children__submenu" data-scrollbar>
                        <div class="menu-item-has-children__title title-prev">
                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                <svg width="20" height="20">
                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                </svg>
                            </div>
                            <span>Courses</span>
                        </div>

                        <ul>
                            <?php foreach($academic_levels as $category): ?>
                                <li class="menu-item-has-children">
                                    <div class="menu-item-has-children__title">
                                        <a href="#">
                                            <?php echo $category['category']->name; ?>
                                        </a>
                                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="menu-item-has-children__submenu" data-scrollbar>
                                        <div class="menu-item-has-children__title title-prev title-start">
                                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                            <span>Courses</span>
                                        </div>
                                        <div class="menu-item-has-children__title title-prev">
                                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                            <span><?php echo $category['category']->name; ?></span>
                                        </div>
                                        <ul>
                                            <?php foreach($category['subcategories'] as $subcategory): ?>
                                                <li>
                                                    <a href="<?php echo generate_url('/courses', ['category' => $category['category']->slug, 'subcategory' => $subcategory->slug]); ?>">
                                                        <?php echo $subcategory->name; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
                <li class="menu-item-has-children">
                    <div class="menu-item-has-children__title">
                        <a href="#">Subjects</a>
                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                            <svg width="20" height="20">
                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="menu-item-has-children__submenu" data-scrollbar>
                        <div class="menu-item-has-children__title title-prev">
                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                <svg width="20" height="20">
                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                </svg>
                            </div>
                            <span>Subjects</span>
                        </div>

                        <ul>
                            <?php foreach($categories as $category): ?>
                                <li class="menu-item-has-children">
                                    <div class="menu-item-has-children__title">
                                        <a href="#"><?php echo $category['category']->name; ?></a>
                                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="menu-item-has-children__submenu" data-scrollbar>
                                        <div class="menu-item-has-children__title title-prev title-start">
                                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                            <span>Subjects</span>
                                        </div>
                                        <div class="menu-item-has-children__title title-prev">
                                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                            <span><?php echo $category['category']->name; ?></span>
                                        </div>
                                        <ul>
                                            <?php foreach($category['subcategories'] as $subcategory): ?>
                                                <li>
                                                    <a href="<?php echo generate_url('/subjects', ['category' => $category['category']->slug, 'subcategory' => $subcategory->slug]); ?>">    
                                                        <?php echo $subcategory->name; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
                <li class="menu-item-has-children">
                    <div class="menu-item-has-children__title">
                        <a href="#">Software</a>
                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                            <svg width="20" height="20">
                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="menu-item-has-children__submenu" data-scrollbar>
                        <div class="menu-item-has-children__title title-prev">
                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                <svg width="20" height="20">
                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                </svg>
                            </div>
                            <span>Software</span>
                        </div>
                        <ul>
                            <?php foreach($softwares as $software): ?>
                                <li><a href="<?php echo get_permalink($software->ID); ?>"><?php echo $software->post_title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
                <li class="menu-item-has-children">
                    <div class="menu-item-has-children__title">
                        <a href="#">Labs</a>
                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                            <svg width="20" height="20">
                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="menu-item-has-children__submenu" data-scrollbar>
                        <div class="menu-item-has-children__title title-prev">
                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                <svg width="20" height="20">
                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                </svg>
                            </div>
                            <span>Labs</span>
                        </div>

                        <ul>
                            <?php foreach($labs as $lab): ?>
                                <li class="menu-item-has-children">
                                    <div class="menu-item-has-children__title">
                                        <a href="#"><?php echo $lab['category']->name; ?></a>
                                        <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="menu-item-has-children__submenu" data-scrollbar>
                                        <div class="menu-item-has-children__title title-prev title-start">
                                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                            <span>Labs</span>
                                        </div>
                                        <div class="menu-item-has-children__title title-prev">
                                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                            <span><?php echo $lab['category']->name; ?></span>
                                        </div>
                                        <ul>
                                            <?php foreach ($lab['subcategories'] as $subcategory): ?>
                                                <li>
                                                    <a href="<?php echo generate_url('/labs', ['category' => $lab['category']->slug, 'subcategory' => $subcategory->slug]); ?>">
                                                        <?php echo $subcategory->name; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav__btn">
            <a href="#" class="btn">
                <span>Log in</span>
                <span>Log in</span>
            </a>
        </div>
    </nav>
    <?php
/*
    Template Name: Tutorial Page
*/
?>
<?php $theme_url = get_template_directory_uri() ?>
<?php get_header(); ?>

<section class="tutorial">
    <div class="tutorial__container md:flex md:justify-between">
    <div class="tutorial__mobile-nav flex justify-between">
        <a href="#" class="btn disabled" data-prev>
            <span>Back</span>
            <span>Back</span>
        </a>
        <a href="#" class="btn btn--white call-tutorial-nav">
            <div class="btn__icon">
                <svg width="20" height="20">
                    <use href="<?= $theme_url ?>/src/sprite.svg#tutorial-icon"></use>
                </svg>
            </div>
            <span>Index</span>
            <span>Index</span>

            
        </a>
        <a href="#" class="btn" data-next>
            <span>Next</span>
            <span>Next</span>
        </a>
    </div>
    <div class="tutorial__fader"></div>
    <div class="tutorial__aside">
        <div class="tutorial__aside-height">
        <div class="tutorial__close call-tutorial-nav">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 1.234l12 12m-12 0l12-12" />
            </svg>
        </div>
        <div class="tutorial__aside-wrapper" data-scrollbar>
        <div class="tutorial__nav titles">
            <h4>Content Page Title</h4>

            <ul>
                <li class="titles__item ">
                    <div class="titles__head active" data-tab-target="chapter-0">
                        Chapter Title 1
                    </div>
                    <div class="titles__body">
                        <ul class="js-toc">
                        </ul>
                    </div>
                </li>
                <li class="titles__item " data-toc-wrapper>
                    <div class="titles__head active" data-tab-target="chapter-1">
                        Chapter Title 1
                    </div>
                    <div class="titles__body">
                        <ul class="js-toc">
                        </ul>
                    </div>
                </li>
                <li class="titles__item" data-toc-wrapper>
                    <div class="titles__head" data-tab-target="chapter-2">
                        Chapter Title 2
                    </div>
                    <div class="titles__body">
                        <ul class="js-toc">
                        </ul>
                    </div>
                </li>
                <li class="titles__item" data-toc-wrapper>
                    <div class="titles__head" data-tab-target="chapter-3">
                        Chapter Title 3
                    </div>
                    <div class="titles__body">
                        <ul class="js-toc">
                        </ul>
                    </div>
                </li>
                <li class="titles__item" data-toc-wrapper>
                    <div class="titles__head" data-tab-target="chapter-4">
                        Chapter Title 4
                    </div>
                    <div class="titles__body">
                        <ul class="js-toc">
                        </ul>
                    </div>
                </li>
                <li class="titles__item" data-toc-wrapper>
                    <div class="titles__head" data-tab-target="chapter-5">
                        Chapter Title 5
                    </div>
                    <div class="titles__body">
                        <ul class="js-toc">
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tutorial__nav information">
            <h4>Information</h4>
            <table>
                <tr>
                    <td>Course</td>
                    <td>Course</td>
                </tr>
                <tr>
                    <td>Last updated</td>
                    <td>23/01/2024</td>
                </tr>
                <tr>
                    <td>Keywords</td>
                    <td>
                        <ul>
                            <li><a href="#">Keyword</a></li>
                            <li><a href="#">Keyword</a></li>
                            <li><a href="#">Keyword</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tutorial__nav responsible">
            <h4>Responible</h4>
            <table>
                <tr>
                    <td>Teacher</td>
                    <td>
                        <ul>
                            <li><a href="#">Teacher Name</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Faculty</td>
                    <td>
                        <ul>
                            <li><a href="#">Faculty name</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        </div>
        </div>
    </div>
    <div class="tutorial__main">
        <div class="tutorial__item" data-tab-content="chapter-0">
            <div class="tutorial__content text">
                <h2>CONTENT PAGE TITLE 0/5</h2>
                <h3>Content Page Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare
                    volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum
                    interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <a href="#" download class="tutorial__content download">
                <div class="download__wrapper">
                    <div class="download__icon">
                        <svg width="24" height="24">
                            <use href="<?= $theme_url ?>/src/sprite.svg#download-icon"></use>
                        </svg>
                    </div>
                </div>
                <div class="download__inner">
                    <h5>Download sample files</h5>
                    <h6>Sample files to practice with (ZIP, 15MB)</h6>
                </div>
            </a>
            <div class="tutorial__content image">
                <figure>
                    <img width="808" height="454" data-image-src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
                </figure>
            </div>
            <div class="tutorial__content tutorial__btns tutorial__btns--end btns flex items-center justify-end">
                <a href="#" class="btn" data-next>
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content="chapter-1">
            <div class="tutorial__content text">
                <h2>Content Page title 1/5</h2>
                <h3>Chapter Title 1</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                </p>
            </div>
            <div class="tutorial__content image">
                <figure>
                    <img data-image-src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" width="808" height="454" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
                    <figcaption>
                        Image From: Murphy, K. P. (2021). Figure 14.4. In Machine Learning: A Probabilistic Perspective. textbook, MIT Press.
                    </figcaption>
                </figure>
            </div>
            <div class="tutorial__content video" data-video-src="https://www.youtube.com/embed/sjkrrmBnpGE">
                <figure class="video__wrapper">
                    <div class="video__preload">
                        <img width="808" height="454" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
                        <div class="video__play">
                            <svg width="35" height="42">
                                <use href="<?= $theme_url ?>/src/sprite.svg#play-video"></use>
                            </svg>
                        </div>
                    </div>
                    <figcaption>
                        Image From: Murphy, K. P. (2021). Figure 14.4. In Machine Learning: A Probabilistic Perspective. textbook, MIT Press.
                    </figcaption>
                </figure>
            </div>
            <div class="tutorial__content infobox flex items-start">
                <div class="infobox__icon">
                    <svg width="24" height="24">
                            <use href="<?= $theme_url ?>/src/sprite.svg#infobox"></use>
                    </svg>
                </div>
                <div class="infobox__content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </p>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam </h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                </p>
                <div class="grid-links grid lg:grid-cols-2">
                    <a href="#" class="link-box">
                        <div class="link-box__wrapper flex items-center">
                            <h6>
                                Create an Urban Context Model in Rhino and QGIS Create an Urban Context Model in Rhino and QGIS
                            </h6>
                            <div class="arrow">
                                <svg width="9" height="14">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                </svg>
                                <svg width="24" height="2">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="link-box">
                        <div class="link-box__wrapper flex items-center">
                            <h6>
                            Tutorial Title
                            </h6>
                            <div class="arrow">
                                <svg width="9" height="14">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                </svg>
                                <svg width="24" height="2">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="grid-links grid lg:grid-cols-2 ">
                    <a href="#" class="link-box">
                        <div class="link-box__wrapper  flex items-center">
                            <h6>
                            Tutorial Title
                            </h6>
                            <div class="arrow">
                                <svg width="9" height="14">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                </svg>
                                <svg width="24" height="2">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="link-box">
                        <div class="link-box__wrapper flex items-center">
                            <h6>
                            Tutorial Title
                            </h6>
                            <div class="arrow">
                                <svg width="9" height="14">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                                </svg>
                                <svg width="24" height="2">
                                    <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tutorial__content tutorial__btns btns flex items-center justify-between">
                <a href="#" class="btn" data-prev>
                    <span>Previous chapter</span>
                    <span>Previous chapter</span>
                </a>
                <a href="#" class="btn" data-next>
                    <span>Next chapter</span>
                    <span>Next chapter</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content="chapter-2">
            <div class="tutorial__content text">
                <h2>Content Page title 2/5</h2>
                <h3>Chapter Title 2</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                </p>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet  <span class="tooltip">technical term <span>Non-uniform rational basis spline (NURBS) is a mathematical model using basic spline that is commonly used in computer graphics for representing curves and surfaces.</span></span> adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. <mark>Auctor egestas aliquet adipiscing </mark> eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet technical term adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="two-column flex flex-col sm:flex-row items-start justify-between">
                    <div class="two-column__item two-column__item--image image">
                        <figure>
                            <img data-image-src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" width="392" height="320" src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" alt="image">
                            <figcaption>
                              Subtitle
                            </figcaption>
                        </figure>
                    </div>
                    <div class="two-column__item two-column__item--text text">
                        <p>
                            <small>
                                Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="table-box flex">
                    <div class="table-box__left-side">
                        <div class="table-box__row">
                            <div>Text Category</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                    </div>
                    <div class="table-box__body">
                        <div class="table-box__row">
                            <div>Text Category</div>
                            <div>Text Category</div>
                            <div>Value</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text </div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="table-box table-box--not-fill-title flex">
                    <div class="table-box__left-side">
                        <div class="table-box__row">
                            <div>Text Category</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                    </div>
                    <div class="table-box__body">
                        <div class="table-box__row">
                            <div>Text Category</div>
                            <div>Text Category</div>
                            <div>Value</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text </div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="table-box table-box--with-summary-price flex">
                    <div class="table-box__left-side">
                        <div class="table-box__row">
                            <div>Text Category</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div></div>
                        </div>
                    </div>
                    <div class="table-box__body">
                        <div class="table-box__row">
                            <div>Text Category</div>
                            <div>Text Category</div>
                            <div>Value</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text </div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div></div>
                            <div></div>
                            <div>36,00</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="table-box table-box--not-fill-title table-box--with-summary-price flex">
                    <div class="table-box__left-side">
                        <div class="table-box__row">
                            <div>Text Category</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div>Type</div>
                        </div>
                        <div class="table-box__row">
                            <div></div>
                        </div>
                    </div>
                    <div class="table-box__body">
                        <div class="table-box__row">
                            <div>Text Category</div>
                            <div>Text Category</div>
                            <div>Value</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text </div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div>text</div>
                            <div>text</div>
                            <div>9,00</div>
                        </div>
                        <div class="table-box__row">
                            <div></div>
                            <div></div>
                            <div>36,00</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tutorial__content tutorial__btns btns flex items-center justify-between">
                <a href="#" class="btn" data-prev>
                    <span>Previous chapter</span>
                    <span>Previous chapter</span>
                </a>
                <a href="#" class="btn" data-next>
                    <span>Next chapter</span>
                    <span>Next chapter</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content="chapter-3">
            <div class="tutorial__content text">
                <h2>Content Page title 2/5</h2>
                <h3>Chapter Title 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="two-column two-column--reversed flex flex-col sm:flex-row items-start justify-between">
                    <div class="two-column__item two-column__item--image image">
                        <figure>
                            <img data-image-src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" width="392" height="320" src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" alt="image">
                            <figcaption>
                              Subtitle
                            </figcaption>
                        </figure>
                    </div>
                    <div class="two-column__item two-column__item--text text">
                        <p>
                            <small>
                             In the next few steps, we will use the tangents of the curve to define the directions of <br>
                               the bricks. You can visualize them using the Vector Display component.
                            </small>
                        </p>
                        <p>
                            <small>
                            Create a curve from the points 
                            </small>
                        </p>
                        <div class="buttons-combination flex">
                            <div class="buttons-combination__button flex items-center">
                                <span>cmd</span>
                            </div>
                            <div class="buttons-combination__button flex items-center">
                                <span>L</span>
                            </div>
                        </div>
                        <p>
                            <small>
                            If the Vector arrows are not visible, you can make them larger by right-clicking on the icon and setting a default size in the arrow tab.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="two-column two-column--reversed flex flex-col sm:flex-row items-start justify-between">
                    <div class="two-column__item two-column__item--image image">
                        <figure>
                            <img data-image-src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" width="392" height="320" src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" alt="image">
                            <figcaption>
                              Subtitle
                            </figcaption>
                        </figure>
                    </div>
                    <div class="two-column__item two-column__item--text text">
                        <p>
                            <small>
                             In the next few steps, we will use the tangents of the curve to define the directions of <br>
                               the bricks. You can visualize them using the Vector Display component.
                            </small>
                        </p>
                        <p>
                            <small>
                            Create a curve from the points 
                            </small>
                        </p>
                        <div class="buttons-combination buttons-combination--with-arrows flex">
                            <div class="buttons-combination__button flex items-center">
                                <span>math</span>
                            </div>
                            <div class="buttons-combination__button flex items-center">
                                <span>domain</span>
                            </div>
                            <div class="buttons-combination__button flex items-center">
                                <span>domain</span>
                            </div>
                        </div>
                        <p>
                            <small>
                            If the Vector arrows are not visible, you can make them larger by right-clicking on the icon and setting a default size in the arrow tab.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet technical term adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
            </div>
            <div class="tutorial__content tutorial__btns btns flex items-center justify-between">
                <a href="#" class="btn" data-prev>
                    <span>Previous chapter</span>
                    <span>Previous chapter</span>
                </a>
                <a href="#" class="btn" data-next>
                    <span>Next chapter</span>
                    <span>Next chapter</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content="chapter-4">
            <div class="tutorial__content text">
                <h2>Content Page title 4/5</h2>
                <h3>Chapter Title 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet technical term adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
                <div class="code-block">
                    <pre>
1      {
2         <span class="pink">"collectionName"</span> <span class="orange">:</span>  <span class="green">"jsx_credits"</span>,
3         <span class="pink">"info"</span><span class="orange">:</span> {
4            <span class="pink">"displayName"</span> <span class="orange">:</span>  <span class="green">"Credits"</span>,
5            <span class="pink">"icon"</span> <span class="orange">:</span>  <span class="green">"database"</span>,
6            <span class="pink">"description"</span> <span class="orange">:</span>  <span class="green">""</span>  
7         },
8         <span class="pink">"options"</span> <span class="orange">:</span>  {},
9         <span class="pink">"attributes"</span> <span class="orange">:</span>  {
10          <span class="pink">"title"</span> <span class="orange">:</span>  {
11            <span class="pink">"type"</span> <span class="orange">:</span>  <span class="green">"string"</span>,
12            <span class="pink">"required"</span> <span class="orange">:</span>  <span class="pink">true</span>
13          },
14          <span class="pink">"actionsHeader"</span> <span class="orange">:</span>  {
15            <span class="pink">"type"</span> <span class="orange">:</span>  <span class="green">"string"</span>,
16            <span class="pink">"required"</span> <span class="orange">:</span>  <span class="pink">true</span>
17          },
18          <span class="pink">"amountsHeader"</span> <span class="orange">:</span>  {
19            <span class="pink">"type"</span> <span class="orange">:</span>  <span class="green">"string"</span>,
20            <span class="pink">"required"</span> <span class="orange">:</span>  <span claa="pink">true</span>
21          },
22          <span class="pink">"Credits"</span> <span class="orange">:</span>  {
23            <span class="pink">"type"</span> <span class="orange">:</span>  <span class="green">"component"</span>,
24            <span class="pink">"repatable"</span> <span class="orange">:</span>  <span class="pink">true</span>,
25            <span class="pink">"component"</span> <span class="orange">:</span>  <span class="green">"props.credit"</span>
26            <span class="pink">"required"</span> <span class="orange">:</span>  <span class="pink">true</span>
27          }
28        }
29      }</pre>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <div class="two-column flex flex-col sm:flex-row items-start justify-between">
                    <div class="two-column__item two-column__item--image image">
                        <figure>
                            <img data-image-src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" width="392" height="320" src="<?= $theme_url ?>/src/img/tutorial/img-2.jpg" alt="image">
                            <figcaption>
                              Subtitle
                            </figcaption>
                        </figure>
                    </div>
                    <div class="two-column__item two-column__item--text text">
                        <p>
                            <small>
                            Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tutorial__content tutorial__btns btns flex items-center justify-between">
                <a href="#" class="btn" data-prev>
                    <span>Previous chapter</span>
                    <span>Previous chapter</span>
                </a>
                <a href="#" class="btn" data-next>
                    <span>Next chapter</span>
                    <span>Next chapter</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content="chapter-5">
            <div class="tutorial__content text">
                <h2>Content Page title 5/5</h2>
                <h3>5 Content Page Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet technical term adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
                <div class="math-func">
                    <img width="149" height="48" src="<?= $theme_url ?>/src/img/tutorial/math.jpg" alt="image">
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Quiz</h4>
                <div class="quiz">
                    <p>
                        <small>
                        Ipsum facilisi morbi dapibus nullam tortor vestibulum interdum?
                        </small>
                    </p>
                    <div class="quiz__wrapper">
                        <div class="quiz__item">
                            <input type="radio" id="quest1" name="quiz1" data-valid="valid">
                            <label id="quest1">
                                <small>Answer A</small>
                                Lorem ipsum dolor sit amet consectetur.
                            </label>
                        </div>
                        <div class="quiz__item">
                            <input type="radio" id="quest2" name="quiz1" data-valid="invalid">
                            <label id="quest2">
                                <small>Answer B</small>
                                Lorem ipsum dolor sit amet consectetur.
                            </label>
                        </div>
                        <div class="quiz__item">
                            <input type="radio" id="quest3" name="quiz1" data-valid="invalid">
                            <label id="quest3">
                                <small>Answer C</small>
                                Lorem ipsum dolor sit amet consectetur.
                            </label>
                        </div>
                        <div class="quiz__item">
                            <input type="radio" id="quest4" name="quiz1" data-valid="invalid">
                            <label id="quest4">
                                <small>Answer D</small>
                                Lorem ipsum dolor sit amet consectetur.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tutorial__content text">
                <h4>Subchapter Title</h4>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet vtechnical termadipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
                <p>
                    <small>
                    Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
                    </small>
                </p>
            </div>
            <div class="tutorial__content tutorial__btns btns flex items-center justify-between">
                <a href="#" class="btn" data-prev>
                    <span>Previous chapter</span>
                    <span>Previous chapter</span>
                </a>
                <a href="#" class="btn" data-next>
                    <span>Next chapter</span>
                    <span>Next chapter</span>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>

