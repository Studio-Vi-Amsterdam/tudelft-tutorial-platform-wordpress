
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body data-barba="wrapper">
    <div class="preloader reloaded">
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
        <a href="#" class="header__logo" aria-label="home-page">
            <img width="300" height="74" src="<?= get_template_directory_uri() ?>/src/img/logo.svg" alt="logo">
        </a>
        <div class="header__menu">
            <div class="header__nav">
                <ul>

                    <li class="menu-item-has-children"><a href="<?= get_template_directory_uri() ?>/courses">Courses</a>
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

                    <li class="menu-item-has-children"><a href="<?= get_template_directory_uri() ?>/subjects">Subjects</a>
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

                    <li class="menu-item-has-children"><a href="<?= get_template_directory_uri() ?>/software">Software</a>
                        <div class="header__submenu header__submenu--flex">
                            <div class="menu-item-has-children__wrapper ">
                                <ul>
                                    <li><a href="#">AutoCAD</a></li>
                                    <li><a href="#">(Autodesk) BIM360</a></li>
                                    <li><a href="#">Dreamweaver</a></li>
                                    <li><a href="#">Grasshopper</a></li>
                                    <li><a href="#">Grasshopper Optimization Plugins</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Honeybee</a></li>
                                    <li><a href="#">Illustrator</a></li>
                                    <li><a href="#">InDesign</a></li>
                                    <li><a href="#">Karamba 3D</a></li>
                                    <li><a href="#">Maya</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Photoshop</a></li>
                                    <li><a href="#">Premiere</a></li>
                                    <li><a href="#">Processing</a></li>
                                    <li><a href="#">QGIS</a></li>
                                    <li><a href="#">Revit Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="menu-item-has-children"><a href="<?= get_template_directory_uri() ?>/labs">Labs</a>
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
                    <input type="text" placeholder="Search">
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
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Bachelor</a>
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
                                        <span>Bachelor</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Bachelor 1</a></li>
                                        <li><a href="#">Bachelor 2</a></li>
                                        <li><a href="#">Bachelor 3</a></li>
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
                                        <span>Master</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Architecture</a></li>
                                        <li><a href="#">Building Technology</a></li>
                                        <li><a href="#">Urbanism</a></li>
                                        <li><a href="#">Landscape Architecture</a></li>
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
                                        <span>Other</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Something Else</a></li>
                                        <li><a href="#">Something Else</a></li>
                                        <li><a href="#">Something Else</a></li>
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
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Computer Aided Design</a>
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
                                        <span>Computer Aided Design</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">2 Dimensional</a></li>
                                        <li><a href="#">3 Dimensional</a></li>
                                        <li><a href="#">Documenting</a></li>
                                        <li><a href="#">Obtaining Data</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Visualization</a>
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
                                        <span>Visualization</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">2 Dimensional</a></li>
                                        <li><a href="#">3 Dimensional</a></li>
                                        <li><a href="#">Documenting</a></li>
                                        <li><a href="#">Obtaining Data</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Physical Modeling</a>
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
                                        <span>Physical Modeling</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">2 Dimensional</a></li>
                                        <li><a href="#">3 Dimensional</a></li>
                                        <li><a href="#">Documenting</a></li>
                                        <li><a href="#">Obtaining Data</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Programming</a>
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
                                        <span>Programming</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">2 Dimensional</a></li>
                                        <li><a href="#">3 Dimensional</a></li>
                                        <li><a href="#">Documenting</a></li>
                                        <li><a href="#">Obtaining Data</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Simulation</a>
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
                                        <span>Simulation</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">2 Dimensional</a></li>
                                        <li><a href="#">3 Dimensional</a></li>
                                        <li><a href="#">Documenting</a></li>
                                        <li><a href="#">Obtaining Data</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="menu-item-has-children__title">
                                    <a href="#">Web Design</a>
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
                                        <span>Web Design</span>
                                    </div>
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
                            <li><a href="#">AutoCAD</a></li>
                            <li><a href="#">(Autodesk) BIM360</a></li>
                            <li><a href="#">Dreamweaver</a></li>
                            <li><a href="#">Grasshopper</a></li>
                            <li><a href="#">Grasshopper Optimization Plugins</a></li>
                            <li><a href="#">Honeybee</a></li>
                            <li><a href="#">Illustrator</a></li>
                            <li><a href="#">InDesign</a></li>
                            <li><a href="#">Karamba 3D</a></li>
                            <li><a href="#">Maya</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Premiere</a></li>
                            <li><a href="#">Processing</a></li>
                            <li><a href="#">QGIS</a></li>
                            <li><a href="#">Revit Architecture</a></li>
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
                            <li><a href="#">VR Lab</a></li>
                            <li><a href="#">Lama Lab</a></li>
                            <li><a href="#">GDMC Lab</a></li>
                            <li><a href="#">AiDAPT Lab</a></li>
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