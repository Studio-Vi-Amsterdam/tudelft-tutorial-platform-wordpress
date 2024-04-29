<?php $theme_url = get_template_directory_uri() ?>
<section class="section-wrapper">
    <div class="section-wrapper__text">
        <div class="text">
            <h2>DIGIPEDIA</h2>
            <h3>Feedback</h3>
            <p>
            Lorem ipsum dolor sit amet consectetur. Sed dui risus et habitasse consectetur leo. Ac placerat aliquam nulla suspendisse semper. Auctor egestas aliquet adipiscing eget. At purus ornare volutpat sed in habitasse ligula. Diam ipsum facilisi morbi dapibus nullam tortor vestibulum interdum. Ac est gravida id sit aliquam diam vulputate scelerisque massa.
            </p>
        </div>
        <div class="form">
            <form action="#">
                <div class="field">
                    <div class="field__dropdown" data-dropdown>
                        <label>Feedback about</label>
                        <div class="field__dropdown-head flex items-center justify-between" data-dropdown-open>
                           <span>Feedback about</span>
                           <svg width="20" height="20">
                             <use href="<?= $theme_url ?>/src/sprite.svg#select"></use>
                           </svg>
                        </div>
                        <div class="field__dropdown-content" >
                            <div>
                            <div class="field__dropdown-item">
                                <input type="radio" id="item1" name="radio">
                                <label for="item1">Course / Tutorial content</label>
                            </div>
                            <div class="field__dropdown-item">
                                <input type="radio" id="item2" name="radio">
                                <label for="item2">Platform / Digipedia</label>
                            </div>
                            <div class="field__dropdown-item">
                                <input type="radio" id="item3" name="radio">
                                <label for="item3">Report a bug</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field field--textarea" data-scrollbar>
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Message" data-scrollbar></textarea>
                    <span></span>
                </div>
                <button class="btn">
                    <span>Give feedback</span>
                    <span>Give feedback</span>
                </button>
            </form>
        </div>
    </div>
</section>