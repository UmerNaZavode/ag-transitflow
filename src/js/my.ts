import "../vue/vue-app.js";
import fixedHeader from "./modules/header/fixed-header";
import streetMap from "./modules/maps/streetMap.js";
import { mainMenu } from "./modules/menu";

document.addEventListener("DOMContentLoaded", function () {
  mainMenu();
  fixedHeader();
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
