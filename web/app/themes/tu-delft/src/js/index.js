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


export function runAfterDomLoad() {
    smoothScroll()
    initMenu()
    tutorials()
    showSearchBar()
    new ModalWindow(ModalVideoWindow, ModalContentWindow)
}
