"use strict";

$(function () {
  var width = $(window).width; // ハンバーガーメニューの表示

  $('.menu-btn').on('click', function () {
    $('.menu').toggleClass('is-active').fadeIn(500);
  }); // ハンバーガーメニュー内のリンクをクリックするとクラスをとる

  $('.menu__item').on('click', function () {
    $('.menu').toggleClass('is-active');
  });
}());