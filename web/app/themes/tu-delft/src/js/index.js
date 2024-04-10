// libs
import "slick-carousel";
import 'slick-carousel/slick/slick.scss';
import { initMenu } from "./components/header";
import { tutorials } from "./components/tutorials";
import { showSearchBar } from "./components/show-search-bar";
import { smoothScroll } from "./components/smooth-scrolling";


export function runAfterDomLoad() {
    smoothScroll()
    initMenu()
    tutorials()
    showSearchBar()
}
