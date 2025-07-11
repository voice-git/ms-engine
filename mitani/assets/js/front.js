//追加アニメーション
$(window).on('load scroll', function() {
    add_class_in_scrolling($('.top-sec3'));
  });
  // スクロールで要素が表示された時にclassを付与する
  function add_class_in_scrolling(target) {
      var winScroll = $(window).scrollTop();
      var winHeight = $(window).height();
      var scrollPos = winScroll + winHeight;
  
      if(target.offset().top < scrollPos) {
        setTimeout(() => {
          $(".sec3_load1").addClass('active');
          $(".sec3_load2").addClass('active');
          $(".sec3_load3").addClass('active');
        }, 1000);
      }
  }


  $(window).on('load scroll', function() {
    scrolling($('.top-sec5'));
  });
  // スクロールで要素が表示された時にclassを付与する
  function scrolling(target) {
      var winScroll = $(window).scrollTop();
      var winHeight = $(window).height();
      var scrollPos = winScroll + winHeight;
  
      if(target.offset().top < scrollPos) {
        setTimeout(() => {
          $(".top-sec5 .chara-bg1").addClass('active');
        }, 1000);
      }
  }

  window.addEventListener("scroll", function () {
    const elm = document.querySelector(".top-youtube");
    const scroll = window.pageYOffset;
    if (scroll > 500) {
      elm.style.opacity = "1";
      // console.log(scroll);
    } else {
      elm.style.opacity = "0";
      // console.log(scroll);
    }
  });