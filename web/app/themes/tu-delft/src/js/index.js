// libs
import "slick-carousel";
import 'slick-carousel/slick/slick.scss';
import ModalContentWindow from "./components/ModalWindow/ModalContentWindow";
import ModalWindow from "./components/ModalWindow/ModalWindow";
import ModalVideoWindow from "./components/ModalWindow/ModalVideoWindow";
import { initMenu } from "./components/header";
import { tutorials } from "./components/tutorials";
import { showSearchBar } from "./components/show-search-bar";
import { smoothScroll } from "./components/smooth-scrolling";
import { tabOfContent } from "./components/toc";
import { changeCategory } from "./components/category-change";
import { accordion } from "./components/accordion";


export function runAfterDomLoad() {
    tabOfContent()
    smoothScroll()
    initMenu()
    tutorials()
    showSearchBar()
    changeCategory()
    accordion()
    new ModalWindow(ModalVideoWindow, ModalContentWindow)
}
