"use strict";

$(function () {
  var topBtn = $('#page-top');
  topBtn.hide(); // スクロール量が350に達したらボタンを表示する

  $(window).scroll(function () {
    if ($(this).scrollTop() > 350) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  }); // スクロールしてトップへ

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});