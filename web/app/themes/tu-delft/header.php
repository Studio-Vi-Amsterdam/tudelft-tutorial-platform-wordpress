
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


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body class="preload">

    <header class="header flex justify-center">
        <div class="header__container flex justify-between items-center">
        <div class="header__trigger header__icon js-menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </div>
        <a href="#" class="header__logo">
            <img width="300" height="74" src="<?= get_template_directory_uri() ?>/src/img/logo.svg" alt="logo">
        </a>
        <div class="header__menu">
            <div class="header__nav">
                <ul>

                    <li class="menu-item-has-children"><a href="#">Courses</a>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Bachelor
                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">Bachelor 1</a></li>
                                                <li><a href="#">Bachelor 1</a></li>
                                                <li><a href="#">Bachelor 1</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Master

                                        <div class="menu-item-has-children__trigger">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">Architecture</a></li>
                                                <li><a href="#">Building Technology</a></li>
                                                <li><a href="#">Urbanism</a></li>
                                                <li><a href="#">Landscape Architecture</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Other

                                        <div class="menu-item-has-children__trigger">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">Something Else</a></li>
                                                <li><a href="#">Something Else</a></li>
                                                <li><a href="#">Something Else</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <li class="menu-item-has-children"><a href="#">Subjects</a>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Computer Aided Design
                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">2 Dimensional</a></li>
                                                <li><a href="#">3 Dimensional</a></li>
                                                <li><a href="#">Documenting</a></li>
                                                <li><a href="#">Obtaining Data</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Visualization

                                        <div class="menu-item-has-children__trigger">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">2 Dimensional</a></li>
                                                <li><a href="#">3 Dimensional</a></li>
                                                <li><a href="#">Documenting</a></li>
                                                <li><a href="#">Obtaining Data</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Physical Modeling

                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">2 Dimensional</a></li>
                                                <li><a href="#">3 Dimensional</a></li>
                                                <li><a href="#">Documenting</a></li>
                                                <li><a href="#">Obtaining Data</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Programming

                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">2 Dimensional</a></li>
                                                <li><a href="#">3 Dimensional</a></li>
                                                <li><a href="#">Documenting</a></li>
                                                <li><a href="#">Obtaining Data</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Simulation

                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">2 Dimensional</a></li>
                                                <li><a href="#">3 Dimensional</a></li>
                                                <li><a href="#">Documenting</a></li>
                                                <li><a href="#">Obtaining Data</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Web Design

                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">2 Dimensional</a></li>
                                                <li><a href="#">3 Dimensional</a></li>
                                                <li><a href="#">Documenting</a></li>
                                                <li><a href="#">Obtaining Data</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <li class="menu-item-has-children"><a href="#">Software</a>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Bachelor
                                            <div class="menu-item-has-children__trigger">
                                                <svg width="20" height="20">
                                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </div>
                                        </a>

                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">Bachelor 1</a></li>
                                                <li><a href="#">Bachelor 1</a></li>
                                                <li><a href="#">Bachelor 1</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Master

                                        <div class="menu-item-has-children__trigger">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">Master 2</a></li>
                                                <li><a href="#">Master 2</a></li>
                                                <li><a href="#">Master 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Other

                                        <div class="menu-item-has-children__trigger">
                                            <svg width="20" height="20">
                                                <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </div>
                                    </a>
                                        
                                        <div class="header__submenu">
                                            <ul>
                                                <li><a href="#">Other 2</a></li>
                                                <li><a href="#">Other 2</a></li>
                                                <li><a href="#">Other 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>

                    <li class="menu-item-has-children"><a href="#">Labs</a>
                        <div class="header__submenu">
                            <div class="menu-item-has-children__wrapper">
                                <ul>
                                    <li><a href="#">VR Lab</a></li>
                                    <li><a href="#">Lama Lab</a></li>
                                    <li><a href="#">GDMC Lab</a></li>
                                    <li><a href="#">AiDAPT Lab</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
        <div class="header__wrapper flex">
            <a href="#" class="header__search header__icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                    <path stroke="#000" stroke-width="1.5"
                        d="M19.64 10.832c0 4.99-4.202 9.082-9.445 9.082-5.242 0-9.445-4.091-9.445-9.082 0-4.99 4.203-9.082 9.445-9.082 5.243 0 9.446 4.092 9.446 9.082z" />
                    <path fill="#000"
                        d="M23.123 24.137a.784.784 0 001.08 0 .718.718 0 000-1.042l-1.08 1.042zm-6.27-6.046l6.27 6.046 1.08-1.042-6.27-6.045-1.08 1.04z" />
                </svg>
            </a>
            <a href="#" class="header__account header__icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25">
                    <circle cx="11.842" cy="6.316" r="5.566" stroke="#000" stroke-width="1.5" />
                    <path stroke="#000" stroke-linecap="round" stroke-width="1.5"
                        d="M3 24v-3a6 6 0 016-6h5a6 6 0 016 6v3" />
                </svg>
            </a>
            <div class="header__close header__icon js-menu-close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M1 1.234l12 12m-12 0l12-12" />
                </svg>
            </div>
        </div>
        </div>
    </header>

    <nav class="nav">
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
                    <div class="menu-item-has-children__submenu">
                        <div class="menu-item-has-children__title title-prev">
                            <div class="menu-item-has-children__trigger menu-item-has-children__prev">
                                <svg width="20" height="20">
                                    <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                </svg>
                            </div>
                            <span>Courses</span>
                        </div>

                        <ul>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Bachelor</a>
                                    <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                        <svg width="20" height="20">
                                            <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="menu-item-has-children__submenu">
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
                                        <span>Bachelor</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Bachelor 1</a></li>
                                        <li><a href="#">Bachelor 1</a></li>
                                        <li><a href="#">Bachelor 1</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Master</a>
                                    <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                        <svg width="20" height="20">
                                            <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="menu-item-has-children__submenu">
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
                                        <span>Master</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Master 1</a></li>
                                        <li><a href="#">Master 1</a></li>
                                        <li><a href="#">Master 1</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Other</a>
                                    <div class="menu-item-has-children__trigger menu-item-has-children__next">
                                        <svg width="20" height="20">
                                            <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="menu-item-has-children__submenu">
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
                                        <span>Other</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Other 1</a></li>
                                        <li><a href="#">Other 1</a></li>
                                        <li><a href="#">Other 1</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">View all</a></li>

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
                </li>
            </ul>
        </div>
    </nav>

    <main class="preload">