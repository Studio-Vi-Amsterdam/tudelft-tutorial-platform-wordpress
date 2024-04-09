<?php
/*
    Template Name: Tutorial Page
*/
?>
<?php $theme_url = get_template_directory_uri() ?>
<?php get_header(); ?>

<section class="tutorial md:flex md:justify-between">
    <div class="tutorial__mobile-nav flex justify-between">
        <a href="#" class="btn">
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
        <a href="#" class="btn">
            <span>Next</span>
            <span>Next</span>
        </a>
    </div>
    <div class="tutorial__fader"></div>
    <div class="tutorial__aside">
        <div class="tutorial__close call-tutorial-nav">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 1.234l12 12m-12 0l12-12" />
            </svg>
        </div>
        <div class="tutorial__aside-wrapper">
        <div class="tutorial__nav titles">
            <h4>Content Page Title</h4>

            <ul>
                <li class="titles__item ">
                    <div class="titles__head active" data-tab-target="#chapter-1">
                        Chapter Title 1
                    </div>
                    <div class="titles__body">
                        <ul>
                            <li><a href="#">Subchapter title</a></li>
                            <li><a href="#">Subchapter title</a></li>
                        </ul>
                    </div>
                </li>
                <li class="titles__item">
                    <div class="titles__head" data-tab-target="#chapter-2">
                        Chapter Title 2
                    </div>
                    <div class="titles__body">
                        <ul>
                            <li><a href="#">Subchapter title</a></li>
                            <li><a href="#">Subchapter title</a></li>
                        </ul>
                    </div>
                </li>
                <li class="titles__item">
                    <div class="titles__head" data-tab-target="#chapter-3">
                        Chapter Title 3
                    </div>
                    <div class="titles__body">
                        <ul>
                            <li><a href="#">Subchapter title</a></li>
                            <li><a href="#">Subchapter title</a></li>
                        </ul>
                    </div>
                </li>
                <li class="titles__item">
                    <div class="titles__head" data-tab-target="#chapter-4">
                        Chapter Title 4
                    </div>
                    <div class="titles__body">
                        <ul>
                            <li><a href="#">Subchapter title</a></li>
                            <li><a href="#">Subchapter title</a></li>
                        </ul>
                    </div>
                </li>
                <li class="titles__item">
                    <div class="titles__head" data-tab-target="#chapter-5">
                        Chapter Title 5
                    </div>
                    <div class="titles__body">
                        <ul>
                            <li><a href="#">Subchapter title</a></li>
                            <li><a href="#">Subchapter title</a></li>
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
    <div class="tutorial__main">
        <div class="tutorial__item active" data-tab-content id="chapter-1">
            <div class="tutorial__content text">
                <h3>CONTENT PAGE TITLE 0/X</h3>
                <h1>Content Page Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare
                    volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum
                    interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <a href="#" class="tutorial__content download">
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
                <img width="808" height="454" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
            </div>
            <div class="tutorial__content tutorial__btns btns">
                <a href="#" class="btn btn--next">
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content id="chapter-2">
            <div class="tutorial__content text">
                <h3>CONTENT PAGE TITLE 0/X</h3>
                <h1>2 Content Page Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare
                    volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum
                    interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare
                    volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum
                    interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <a href="#" class="tutorial__content download">
                <div class="download__wrapper">
                    <div class="download__icon">
                        <svg width="24" height="24">
                            <use href="/src/sprite.svg#download-icon"></use>
                        </svg>
                    </div>
                </div>
                <div class="download__inner">
                    <h5>Download sample files</h5>
                    <h6>Sample files to practice with (ZIP, 15MB)</h6>
                </div>
            </a>
            <div class="tutorial__content image">
                <img width="808" height="454" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
            </div>
            <div class="tutorial__content tutorial__btns btns">
                <a href="#" class="btn btn--next">
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content id="chapter-3">
            <div class="tutorial__content text">
                <h3>CONTENT PAGE TITLE 0/X</h3>
                <h1>3 Content Page Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare
                    volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum
                    interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <a href="#" class="tutorial__content download">
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
            <div class="tutorial__content tutorial__btns btns">
                <a href="#" class="btn btn--next">
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content id="chapter-4">
            <div class="tutorial__content text">
                <h3>CONTENT PAGE TITLE 0/X</h3>
                <h1>4 Content Page Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget.</p>
            </div>
            <a href="#" class="tutorial__content download">
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
                <img width="808" height="454" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
            </div>
            <div class="tutorial__content tutorial__btns btns">
                <a href="#" class="btn btn--next">
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
        <div class="tutorial__item" data-tab-content id="chapter-5">
            <div class="tutorial__content text">
                <h3>CONTENT PAGE TITLE 0/X</h3>
                <h1>5 Content Page Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac
                    placerat
                    aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare
                    volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum
                    interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.</p>
            </div>
            <div class="tutorial__content tutorial__btns btns">
                <a href="#" class="btn btn--next">
                    <span>Start</span>
                    <span>Start</span>
                </a>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>