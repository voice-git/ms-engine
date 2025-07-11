$('#js-buttonHamburger').on("click", function () {
    $('body').toggleClass('is-drawerActive');
    $('.close').toggleClass('no-close');
    $('.anker-logo').toggleClass('active-ss-logo');

    if ($(this).attr('aria-expanded') == 'false') {
        $(this).attr('aria-expanded', true);
    } else {
        $(this).attr('aria-expanded', false);
    }
});

$("#js-buttonHamburger").on("click", function() {
    $(".hamburger-menu").toggleClass('active-slide');
});

$(".img-anker").on("click", function() {
    $(".hamburger-menu").toggleClass('active-slide');
    if ($('#js-buttonHamburger').attr('aria-expanded') == 'false') {
      $('#js-buttonHamburger').attr('aria-expanded', true);
  } else {
      $('#js-buttonHamburger').attr('aria-expanded', false);
  }
});


/*
$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem('access')) {
              2回目以降アクセス時の処理
     
      $(".loading-bg").addClass('is-active');
    } else {
              初回アクセス時の処理
     
      sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
      $(".loading-inner").addClass('is-active'); // loadingアニメーションを表示
      setTimeout(() => {
        $(".load1").addClass('active');
        $(".load2").addClass('active');
        $(".load3").addClass('active');
      }, 2000);
      setTimeout(function () {
        // ローディングを数秒後に非表示にする
        $(".loading-bg").addClass('is-active');
        $(".loading-inner").removeClass('is-active');
      }, 5000); // ローディングを表示する時間
    }
  }
  webStorage();
});
*/


$(function() {
  if (window.matchMedia("(max-width: 414px)").matches) {
    var bannerBtn=$('.anker-logo');
    bannerBtn.hide();
    $(window).scroll(function(){
      if($(this).scrollTop()>80){
        // 画面を80pxスクロールしたら、ボタンを表示する
        bannerBtn.fadeIn();
      }else{
        // 画面が80pxより上なら、ボタンを表示しない
        bannerBtn.fadeOut();
      }
    });
  };
});


$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

$(function(){
    $('.slide-list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2500,
      speed:1500,
      fade: true,
      cssEase: 'linear',
      pauseOnHover:false,
      arrows:false,
      dots:false,
    });
  });

$(function(){
    $('.pslide-list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed:500,
      cssEase: 'linear',
      dots:true,
    });
  });


$(".top-sec4").find(".cate").on("click", function() {
    $(".top-sec4").find(".cate").removeClass('cate-current');
    $(".top-sec4").find(".content-box").removeClass('content-current');
    $(".top-sec4").find(".cate").removeClass('no-bdl');
    $(this).addClass('cate-current');
});
$(".top-sec4").find(".cate1").on("click", function() {
    $(".top-sec4").find(".cate2").addClass('no-bdl');
    $(".top-sec4").find(".content-box1").addClass('content-current');
});
$(".top-sec4").find(".cate2").on("click", function() {
    $(".top-sec4").find(".cate3").addClass('no-bdl');
    $(".top-sec4").find(".content-box2").addClass('content-current');
});
$(".top-sec4").find(".cate3").on("click", function() {
    $(".top-sec4").find(".cate").removeClass('no-bdl');
    $(".top-sec4").find(".content-box3").addClass('content-current');
});


$(".top-sec5").find(".cate").on("click", function() {
    $(".top-sec5").find(".cate").removeClass('cate-current');
    $(".top-sec5").find(".cate").removeClass('no-bdl');
    $(".top-sec5").find(".content-box").removeClass('content-current');
    $(this).addClass('cate-current');
});
$(".top-sec5").find(".cate1").on("click", function() {
    $(".top-sec5").find(".cate2").addClass('no-bdl');
    $(".top-sec5").find(".content5-box1").addClass('content-current');
});
$(".top-sec5").find(".cate2").on("click", function() {
    $(".top-sec5").find(".cate3").addClass('no-bdl');
    $(".top-sec5").find(".content5-box2").addClass('content-current');
});
$(".top-sec5").find(".cate3").on("click", function() {
    $(".top-sec5").find(".cate4").addClass('no-bdl');
    $(".top-sec5").find(".content5-box3").addClass('content-current');
});
$(".top-sec5").find(".cate4").on("click", function() {
    $(".top-sec5").find(".cate5").addClass('no-bdl');
    $(".top-sec5").find(".content5-box4").addClass('content-current');
});
$(".top-sec5").find(".cate5").on("click", function() {
    $(".top-sec5").find(".cate5").addClass('no-bdl');
    $(".top-sec5").find(".content5-box5").addClass('content-current');
});


$(".img-anker").hover(
    function() {
        $(".humb-left").find("img").removeClass('current');
    }
);
$(".img1-anker").hover(
    function() {
        $(".humb-left").find(".img1").addClass('current');
    }
);
$(".img2-anker").hover(
    function() {
        $(".humb-left").find(".img2").addClass('current');
    }
);
$(".img3-anker").hover(
    function() {
        $(".humb-left").find(".img3").addClass('current');
    }
);
$(".img4-anker").hover(
    function() {
        $(".humb-left").find(".img4").addClass('current');
    }
);
$(".img5-anker").hover(
    function() {
        $(".humb-left").find(".img5").addClass('current');
    }
);
$(".img6-anker").hover(
    function() {
        $(".humb-left").find(".img6").addClass('current');
    }
);
$(".img7-anker").hover(
    function() {
        $(".humb-left").find(".img7").addClass('current');
    }
);
$(".img8-anker").hover(
    function() {
        $(".humb-left").find(".img8").addClass('current');
    }
);

$(function () {
    $('.close-box').click(function () {
        $('#overlay, .overlay2, .modal-window, .mv-popup').fadeOut();
    });
    $('.overlay').click(function () {
        $('#overlay, .overlay2, .modal-window, .mv-popup').fadeOut();
    });
    $('.top-sec4').find(".content-box").find(".item").click(function () {
        $('#overlay, .modal-window').fadeOut();
    });
    $('.popup').find(".one-more").find(".item").click(function () {
        $('.modal-window').fadeOut();
    });
    $('.item1').click(function () {
        $('#overlay, .popup1').fadeIn();
      });
    $('.item2').click(function () {
        $('#overlay, .popup2').fadeIn();
      });
    $('.item3').click(function () {
        $('#overlay, .popup3').fadeIn();
      });
    $('.item4').click(function () {
        $('#overlay, .popup4').fadeIn();
      });
    $('.item5').click(function () {
        $('#overlay, .popup5').fadeIn();
      });
    $('.item6').click(function () {
        $('#overlay, .popup6').fadeIn();
      });
    $('.item7').click(function () {
        $('#overlay, .popup7').fadeIn();
      });
    $('.item8').click(function () {
        $('#overlay, .popup8').fadeIn();
      });
    $('.item9').click(function () {
        $('#overlay, .popup9').fadeIn();
      });
    $('.item10').click(function () {
        $('#overlay, .popup10').fadeIn();
      });
    $('.item11').click(function () {
        $('#overlay, .popup11').fadeIn();
      });
    $('.item12').click(function () {
        $('#overlay, .popup12').fadeIn();
      });
    $('.item13').click(function () {
        $('#overlay, .popup13').fadeIn();
      });
    $('.item14').click(function () {
        $('#overlay, .popup14').fadeIn();
      });
    $('.item15').click(function () {
        $('#overlay, .popup15').fadeIn();
      });
    $('.item16').click(function () {
        $('#overlay, .popup16').fadeIn();
      });
    $('.item17').click(function () {
        $('#overlay, .popup17').fadeIn();
      });
    $('.item18').click(function () {
        $('#overlay, .popup18').fadeIn();
      });
    $('.item19').click(function () {
        $('#overlay, .popup19').fadeIn();
      });
    $('.item20').click(function () {
        $('#overlay, .popup20').fadeIn();
      });
    $('.item21').click(function () {
        $('#overlay, .popup21').fadeIn();
      });
    $('.item22').click(function () {
        $('#overlay, .popup22').fadeIn();
      });
    $('.item23').click(function () {
        $('#overlay, .popup23').fadeIn();
      });
    $('.item24').click(function () {
        $('#overlay, .popup24').fadeIn();
      });
    $('.item25').click(function () {
        $('#overlay, .popup25').fadeIn();
      });
    $('.item26').click(function () {
        $('#overlay, .popup26').fadeIn();
      });
    $('.item27').click(function () {
        $('#overlay, .popup27').fadeIn();
      });
    $('.item28').click(function () {
        $('#overlay, .popup28').fadeIn();
      });
    $('.item29').click(function () {
        $('#overlay, .popup29').fadeIn();
      });
    $('.item30').click(function () {
        $('#overlay, .popup30').fadeIn();
      });
    $('.item31').click(function () {
        $('#overlay, .popup31').fadeIn();
      });
    $('.item32').click(function () {
        $('#overlay, .popup32').fadeIn();
      });
    var video = document.getElementById('video');
    $('.mv-popup-anker').click(function () {
        video.currentTime = 0
        $('.overlay2, .mv-popup').fadeIn();
      });
    $('.top-sec4').find(".content-box").find(".item").click(function () {
      $('.pslide-list').slick('setPosition');
    });
    $('.popup').find(".one-more").find(".item").click(function () {
      $('.pslide-list').slick('setPosition');
    });
});

$('.drop-down-anker').click(function () {
  $('.text-box').toggleClass("active-text-box");
  $('.drop-down-anker').toggleClass("close-btn");
  $('.drop-down-anker').toggleClass("angle-rotate");
});

$('.img-anker').click(function () {
  $('.big-img').removeClass("current");
});
$('.img1-anker').click(function () {
  $('.img1').addClass("current");
});
$('.img2-anker').click(function () {
  $('.img2').addClass("current");
});
$('.img3-anker').click(function () {
  $('.img3').addClass("current");
});

$(".keeper-btn-box").find(".btn").on("click", function() {
  $(".keeper-btn-box").find(".btn").removeClass('current');
  $(".banner-box").find(".banner").removeClass('banner-current');
});
$(".keeper-btn-box").find(".btn1").on("click", function() {
  $(".keeper-btn-box").find(".btn1").addClass('current');
  $(".banner-box").find(".banner1").addClass('banner-current');
});
$(".keeper-btn-box").find(".btn2").on("click", function() {
  $(".keeper-btn-box").find(".btn2").addClass('current');
  $(".banner-box").find(".banner2").addClass('banner-current');
});
$(".keeper-btn-box").find(".btn3").on("click", function() {
  $(".keeper-btn-box").find(".btn3").addClass('current');
  $(".banner-box").find(".banner3").addClass('banner-current');
});

$(window).scroll(function (){
  $(".pdf-scroll1").each(function(){
    var hit		= $(this).offset().top;
    var scroll	= $(window).scrollTop();
    var wHeight	= $(window).height();

    if (scroll > hit - wHeight + wHeight/100){
      setTimeout(function(){
        $(".pdf-scroll1").addClass("no-scroll");
      },3000);
    }
  });
  $(".pdf-scroll2").each(function(){
    var hit		= $(this).offset().top;
    var scroll	= $(window).scrollTop();
    var wHeight	= $(window).height();

    if (scroll > hit - wHeight + wHeight/100){
      setTimeout(function(){
        $(".pdf-scroll2").addClass("no-scroll");
      },3000);
    }
  });
  $(".pdf-scroll3").each(function(){
    var hit		= $(this).offset().top;
    var scroll	= $(window).scrollTop();
    var wHeight	= $(window).height();

    if (scroll > hit - wHeight + wHeight/100){
      setTimeout(function(){
        $(".pdf-scroll3").addClass("no-scroll");
      },3000);
    }
  });
});

$(".dawn-title").on("click", function() {
  $(this).next().slideToggle();
  $(this).find('.angle').find("img").toggleClass('active');
});

$(".ss-more-btn").on("click", function() {
  $(".ss-box").toggleClass('ss-box-active');
  $(".ss-more-btn").toggleClass('close-btn');
  $(".ss-more-btn").toggleClass('angle-rotate');
});

$(window).on('scroll', function (){
  var elem = $('.content-box, .item-box');
  elem.each(function () {
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();
    if(scrollPos > elemOffset - wh + (wh / 4) ){
      $(this).addClass("content-box-big");
    }
  });
});

$(window).on('scroll', function (){
  $('.ss-box').find(".chara").each(function () {
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();
    if(scrollPos > elemOffset - wh + (wh / 3) ){
      $(this).addClass("active-chara");
    }
  });
});





  $(function(){
    const element = document.querySelectorAll( '.fadeinElem, .fadeinElem2' ),
      windowH = window.innerHeight;
  let divisor = 1.1,
      nowY,
      elementY;
  window.addEventListener( 'scroll', function () {
      nowY = window.scrollY || window.pageYOffset;
      let count = 0;
      while ( count < element.length ) {
          ( function ( args ) {
              elementY = element[ args ].getBoundingClientRect().top + nowY;
              if ( nowY > elementY - ( windowH / divisor ) ) {
                  element[ args ].classList.add( 'show' );
              }
          } ) ( count );
          count++;
      }
  }, false );
  });



  
  $(window).on('load scroll', function() {
    footer($('.footer'));
  });
  // スクロールで要素が表示された時にclassを付与する
  function footer(target) {
      var winScroll = $(window).scrollTop();
      var winHeight = $(window).height();
      var scrollPos = winScroll + winHeight;
  
      if(target.offset().top < scrollPos) {
        $(".haitatu-logo").addClass('none');
      } else {
        $(".haitatu-logo").removeClass('none');
      }
  }


  //任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
  if(hashIDName){
    //タブ設定
    $('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
      var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得 
      if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
        var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
        $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
        $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
        //表示させるエリア設定
        $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
        $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加 
        //スクロール処理
        var scroll_point = $(hashIDName).offset().top - 200;
        $('html, body').animate({
	        scrollTop: scroll_point
        }, 500);
      }
    });
  }
}

//タブをクリックしたら
$('.tab a').on('click', function() {
  var idName = $(this).attr('href'); //タブ内のリンク名を取得  
  GethashID (idName);//設定したタブの読み込みと
  return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
  var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  GethashID (hashName);//設定したタブの読み込み
});

  /*$(function() {
    $('.tabs a[href^="#panel"]').click(function(){
      $('.tabs .panel').hide();
      $('.tabs a').removeClass('active');
      $(this).toggleClass('active');
      $(this.hash).fadeIn();
      return false;
    });
    $('.tabs a[href^="#panel"]:eq(0)').trigger('click');
  });

  $(function() {
    //リンクからハッシュを取得
    var hash = location.hash;
    hash = (hash.match(/^#tab\d+$/) || [])[0];

    //リンクにハッシュが入っていればtabnameに格納
    if($(hash).length){
      var tabname = hash.slice(1) ;
    } else{
      var tabname = "tab1";
    }

    //コンテンツ非表示&amp;タブを非アクティブ
    $('.tabs .panel').hide();
    $('.tabs a').removeClass('active');
    //何番目のタブかを格納
    var tabno = $('.tabs li#' + tabname).index();
    //コンテンツ表示
    $('.tabs .panel').eq(tabno).fadeIn();
    //タブのアクティブ化
    $('.tabs a').eq(tabno).addClass('active');
  });*/