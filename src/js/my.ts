import "../vue/vue-app.js";
import { mainMenu } from "./modules/menu";
import aboutUsTabs from './modules/aboutUsTabs';
import headerBurger from './modules/headerBurger';
import headerNav from './modules/headerNav';
import fixedHeader from "./modules/fixedHeader";
import videoPlayer from "./modules/videoPlayer";
// import fixedHeader from "./modules/header/fixed-header";
// import streetMap from "./modules/maps/streetMap.js";

document.addEventListener("DOMContentLoaded", function() {
  mainMenu();
  fixedHeader();
  aboutUsTabs();
  headerBurger();
  headerNav();
  videoPlayer();
  // fixedHeader();
  // streetMap();
});

// function isChromeOnAppleDevice() {
//   const userAgent = navigator.userAgent;
//   const isChrome = /Chrome|CriOS/.test(userAgent);
//   const isApple = /Mac|iPhone|iPad|iPod/.test(navigator.platform);
//
//   return isChrome && isApple;
// }
//
// function isAppleDevice() {
//   return /Mac|iPhone|iPad|iPod/.test(navigator.platform);
// }
