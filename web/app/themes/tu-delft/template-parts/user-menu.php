<div class="tutorial__menu">
    <button class="tutorial__menu-trigger" data-opened="false">
        <span></span>
    </button>
    <div class="tutorial__menu-inner">
        <button class="tutorial__button tutorialLinkCopySelector">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M15.9085 6.91436L16.162 6.70165C17.5043 5.57528 19.5056 5.75037 20.632 7.09272V7.09272C21.7583 8.43507 21.5833 10.4364 20.2409 11.5627L13.7595 17.0013C12.4171 18.1277 10.4158 17.9526 9.28946 16.6102V16.6102C8.1631 15.2679 8.33819 13.2666 9.68054 12.1402L12.8043 9.51906" stroke="#67676B" />
                <path d="M10.9887 15.2759L14.3575 12.394C15.6864 11.2572 15.8514 9.26199 14.7273 7.92232V7.92232C13.5956 6.57358 11.5848 6.39765 10.236 7.52938L3.76617 12.9582C2.42382 14.0846 2.24873 16.0859 3.37509 17.4282V17.4282C4.50146 18.7706 6.50275 18.9457 7.8451 17.8193L8.19172 17.5285" stroke="#67676B" />
            </svg>
            <div class="copy-checked">
                <svg fill="none" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 78.369 78.369"
                    xml:space="preserve">
                    <g>
                        <path d="M78.049,19.015L29.458,67.606c-0.428,0.428-1.121,0.428-1.548,0L0.32,40.015c-0.427-0.426-0.427-1.119,0-1.547l6.704-6.704
		c0.428-0.427,1.121-0.427,1.548,0l20.113,20.112l41.113-41.113c0.429-0.427,1.12-0.427,1.548,0l6.703,6.704
		C78.477,17.894,78.477,18.586,78.049,19.015z" />
                    </g>
                </svg>
            </div>

        </button>
        <?php if (is_user_logged_in()): ?>
            <button class="tutorial__button" data-suggestion-modal-id='modal-suggestion'>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 13.3223 4.32083 14.5697 4.88889 15.6686L4 20L8.33138 19.1111C9.43025 19.6792 10.6777 20 12 20Z" stroke="#67676B" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 9.33594V14.6693" stroke="#67676B" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.32812 12H14.6615" stroke="#67676B" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        <?php endif; ?>
    </div>
</div>