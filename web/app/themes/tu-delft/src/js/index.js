// libs
import "slick-carousel";
import 'slick-carousel/slick/slick.scss';
import { initMenu } from "./components/header";
import { lazyLoad } from "./components/lazy";
import { tutorials } from "./components/tutorials";
import { showSearchBar } from "./components/show-search-bar";


export function runAfterDomLoad() {
    initMenu()
    lazyLoad()
    tutorials()
    showSearchBar()
}
