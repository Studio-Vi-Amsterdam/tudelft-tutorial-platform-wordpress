<?php
get_header();
?>
<div class="tutorial user-profile">
    <section class="user-greetings">
        <h1>Hello James</h1>
    </section>
    <section class="my-bookmarks">
        <div class="my-bookmarks__title">
            <h2>My Bookmarks</h2>
            <a class="btn" href="#">View All</a>
        </div>
        <div class="my-bookmarks__content">
            <article class="bookmark-item" data-id="2201">
                <figure class="bookmark-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/src/img/bookmarks/bookmark-image.jpg" alt="bookmark image">
                </figure>
                <div class="bookmark-item__content">
                    <div class="bookmark-item__header">
                        <span>Course</span>
                        <div class="bookmark-item__buttons">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
                                    <circle cx="8" cy="8" r="2.5" stroke="black" />
                                </svg>
                            </button>
                            <button class="bookmark-button" data-bookmarked="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bookmark-item__main">
                        <a href="#">
                            <h3>Auditorium Technology Auditorium Technology dsfs</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet dolor amet consectetur. Condimentum imetere Condimentum imetere Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="bookmark-item__footer">
                        <span>Published:</span>
                        <time>09 June 2024</time>
                    </div>
                </div>
            </article>
            <article class="bookmark-item" data-id="2202">
                <figure class="bookmark-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/src/img/bookmarks/bookmark-image.jpg" alt="bookmark image">
                </figure>
                <div class="bookmark-item__content">
                    <div class="bookmark-item__header">
                        <span>Course</span>
                        <div class="bookmark-item__buttons">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
                                    <circle cx="8" cy="8" r="2.5" stroke="black" />
                                </svg>
                            </button>
                            <button class="bookmark-button" data-bookmarked="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bookmark-item__main">
                        <a href="#">
                            <h3>Auditorium Technology Auditorium Technology dsfs</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet dolor amet consectetur. Condimentum imetere Condimentum imetere Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="bookmark-item__footer">
                        <span>Published:</span>
                        <time>09 June 2024</time>
                    </div>
                </div>
            </article>
            <article class="bookmark-item" data-id="2203">
                <figure class="bookmark-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/src/img/bookmarks/bookmark-image.jpg" alt="bookmark image">
                </figure>
                <div class="bookmark-item__content">
                    <div class="bookmark-item__header">
                        <span>Course</span>
                        <div class="bookmark-item__buttons">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
                                    <circle cx="8" cy="8" r="2.5" stroke="black" />
                                </svg>
                            </button>
                            <button class="bookmark-button" data-bookmarked="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bookmark-item__main">
                        <a href="#">
                            <h3>Auditorium Technology Auditorium Technology dsfs</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet dolor amet consectetur. Condimentum imetere Condimentum imetere Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="bookmark-item__footer">
                        <span>Published:</span>
                        <time>09 June 2024</time>
                    </div>
                </div>
            </article>
            <article class="bookmark-item" data-id="2204">
                <figure class="bookmark-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/src/img/bookmarks/bookmark-image.jpg" alt="bookmark image">
                </figure>
                <div class="bookmark-item__content">
                    <div class="bookmark-item__header">
                        <span>Course</span>
                        <div class="bookmark-item__buttons">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
                                    <circle cx="8" cy="8" r="2.5" stroke="black" />
                                </svg>
                            </button>
                            <button class="bookmark-button" data-bookmarked="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bookmark-item__main">
                        <a href="#">
                            <h3>Auditorium Technology Auditorium Technology dsfs</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet dolor amet consectetur. Condimentum imetere Condimentum imetere Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="bookmark-item__footer">
                        <span>Published:</span>
                        <time>09 June 2024</time>
                    </div>
                </div>
            </article>
            <article class="bookmark-item" data-id="2205">
                <figure class="bookmark-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/src/img/bookmarks/bookmark-image.jpg" alt="bookmark image">
                </figure>
                <div class="bookmark-item__content">
                    <div class="bookmark-item__header">
                        <span>Course</span>
                        <div class="bookmark-item__buttons">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
                                    <circle cx="8" cy="8" r="2.5" stroke="black" />
                                </svg>
                            </button>
                            <button class="bookmark-button" data-bookmarked="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bookmark-item__main">
                        <a href="#">
                            <h3>Auditorium Technology Auditorium Technology dsfs</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet dolor amet consectetur. Condimentum imetere Condimentum imetere Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="bookmark-item__footer">
                        <span>Published:</span>
                        <time>09 June 2024</time>
                    </div>
                </div>
            </article>
            <article class="bookmark-item" data-id="2206">
                <figure class="bookmark-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/src/img/bookmarks/bookmark-image.jpg" alt="bookmark image">
                </figure>
                <div class="bookmark-item__content">
                    <div class="bookmark-item__header">
                        <span>Course</span>
                        <div class="bookmark-item__buttons">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 3.5C3.91667 3.5 1 8 1 8C1 8 3.91667 12.5 8 12.5C12.0833 12.5 15 8 15 8C15 8 12.0833 3.5 8 3.5Z" stroke="black" stroke-linejoin="round" />
                                    <circle cx="8" cy="8" r="2.5" stroke="black" />
                                </svg>
                            </button>
                            <button class="bookmark-button" data-bookmarked="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 4H9C7.89543 4 7 4.89543 7 6V19L12 16.5L17 19V6C17 4.89543 16.1046 4 15 4Z" fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bookmark-item__main">
                        <a href="#">
                            <h3>Auditorium Technology Auditorium Technology dsfs</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet dolor amet consectetur. Condimentum imetere Condimentum imetere Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="bookmark-item__footer">
                        <span>Published:</span>
                        <time>09 June 2024</time>
                    </div>
                </div>
            </article>
            <div class="my-bookmarks__no-content">
                <span>Your bookmarks empty!</span>
            </div>
        </div>
    </section>
    <section class="watched-videos">
        <div class="watched-videos__title">
            <h2>My Watched Videos</h2>
            <a class="btn" href="#">View All</a>
        </div>
        <div class="watched-videos__content">
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article>
            <article class="watched-video-item">
                <div class="watched-video-item__video video-wrapper">
                    <figure class="video__wrapper" data-video-src="https://www.youtube.com/watch?v=3NSNzxzCnNA&list=RD3NSNzxzCnNA">
                        <div class="video__preload">
                            <img fetchpriority="high" decoding="async" width="808" height="454" src="https://alt.viamsterdam.dev/tudelft-tutorials-staging/app/themes/tu-delft/src/img/tutorial/img-1.jpg" alt="">
                            <div class="video__play video__play--secondary">
                                <svg width="35" height="42">
                                    <use href="<?= get_template_directory_uri(); ?>/src/sprite.svg#play-video"></use>
                                </svg>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="watched-video-item__tag">
                    <span>Course</span>
                </div>
                <a href="#" class="watched-video-item__title">
                    <h3>Auditorium Technology</h3>
                </a>
                <div class="watched-video-item__footer">
                    <div class="watched-video-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M10.1 6C10.1 7.18347 9.1598 8.14286 8 8.14286C6.8402 8.14286 5.9 7.18347 5.9 6C5.9 4.81653 6.8402 3.85714 8 3.85714C9.1598 3.85714 10.1 4.81653 10.1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6C2.1201 3.07332 4.73522 1 8 1C11.2648 1 13.8799 3.07332 15 6C13.8799 8.92668 11.2648 11 8 11C4.73522 11 2.1201 8.92668 1 6Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p>Watched a day ago</p>
                </div>
            </article> 
        </div>
    </section>
</div>
<?php
get_footer();
?>