"use strict";

// ie 11 polyfill
if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
}

AOS.init({
  disable: function n() {
    return !!(window.navigator.userAgent.indexOf("MSIE ") > 0 || navigator.userAgent.match(/Trident.*rv\:11\./));
  },
  // disable on internet explorer
  offset: 100 // offset (in px) from the original trigger point

});
var slider__swiper = new Swiper('.slider__swiper', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  autoplay: true,
  speed: 1000,
  pagination: {
    el: '.slider__pagination',
    clickable: true
  }
});
var clients__swiper = new Swiper('.clients__swiper', {
  slidesPerView: 1,
  speed: 1000,
  spaceBetween: 30,
  pagination: {
    el: '.clients__pagination',
    clickable: true
  },
  breakpoints: {
    992: {
      slidesPerView: 2
    },
    1200: {
      slidesPerView: 3
    }
  }
}); // Burger

var burger = document.querySelector("#header__burger");
var menu = document.querySelector("#header__menu");
burger.addEventListener('click', function () {
  burger.classList.toggle("active");
  menu.classList.toggle("active");
  document.body.style.overflow = document.body.style.overflow == 'hidden' ? 'visible' : 'hidden';
});
document.querySelectorAll("#header__menu>a").forEach(function (item) {
  item.addEventListener('click', function () {
    burger.classList.remove("active");
    menu.classList.remove("active");
    document.body.style.overflow = 'visible';
  });
});