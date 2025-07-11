$(window).on('load scroll', function() {
    shituji($('.shituji-sec2'));
  });
  // スクロールで要素が表示された時にclassを付与する
  function shituji(target) {
      var winScroll = $(window).scrollTop();
      var winHeight = $(window).height();
      var scrollPos = winScroll + winHeight;
  
      if(target.offset().top < scrollPos) {
        setTimeout(() => {
          $(".bg-charas").addClass('active');
        }, 1000);
      }
  }