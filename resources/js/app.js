import "./bootstrap";

import Alpine from "alpinejs";
import { Collapse, Carousel, Dropdown, Ripple, initTE } from "tw-elements";

window.Alpine = Alpine;

Alpine.start();

initTE({ Collapse, Carousel, Dropdown, Ripple });
