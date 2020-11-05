// Code By Webdevtrick ( https://webdevtrick.com )
"use strict";
var underlineMenuItems = document.querySelectorAll("#navbarRightAlignExample a");
underlineMenuItems[0].classList.add("underline");
underlineMenuItems.forEach(function (item) {
    item.addEventListener("click", function () {
        underlineMenuItems.forEach(function (item) { return item.classList.remove("underline"); });
        item.classList.add("underline");
    });
});