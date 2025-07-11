<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" style="margin-top:0 !important;">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D2D48RJ51G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-D2D48RJ51G');
    </script>
    <!--GoogleAnalytics-->
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-33495978-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="inner">
            <a href="<?php echo home_url(); ?>" class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-logo.png" alt="">
            </a>
            <?php if(is_page('shituji')): ?>
            <a href="tel:0120189422" class="right-tel">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/icon_tel.svg" alt="tel">
            </a>
            <?php endif; ?>
            <div class="right">
                <a href="<?php echo home_url('/contact/'); ?>" class="contact-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mail-logo.png" alt="">
                    </div>
                    <p>お申込・お問い合わせ</p>
                </a>
                <a href="https://www.instagram.com/mitani_service_engine_official/" target="_blank" class="in">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/insta.svg" alt="">
                </a>
                <a href="https://twitter.com/ms_engine" target="_blank" class="tw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/twitter.svg" alt="">
                </a>
                <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
                    <span class="p-hamburger__line"></span>
                    <p class="close no-close">Close</p>
                </button>
            </div>
        </div>
        <div class="hamburger-menu">
            <div class="humb-left">
                <img class="img1 current" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gnav-top.jpg" alt="">
                <img class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/humb-img1.jpg" alt="">
                <img class="img3" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainte/sec1-top-sp2.jpg" alt="">
                <img class="img4" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec1-top-sp2.jpg" alt="">
                <img class="img5" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec1-top-img-sp2.jpg" alt="">
                <img class="img6" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/sec1-top-sp2.jpg" alt="">
                <img class="img7" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/sec1-top-sp2.jpg" alt="">
                <img class="img8" src="<?php echo get_template_directory_uri(); ?>/assets/images/houjin/sec1-top-sp2.jpg" alt="">
            </div>
            <div class="humb-right">
                <div class="inner xpc">
                    <div class="humb-nav-left">
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img1-anker" href="<?php echo home_url(); ?>">TOP</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img1-anker" href="<?php echo home_url(); ?>#mitanimita-anker"><span>ー</span>くらしのお困りごと30選</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img1-anker" href="<?php echo home_url(); ?>#dekirukoto-anker"><span>ー</span>できること一覧</a>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img1-anker" href="<?php echo home_url(); ?>#saiyou-anker"><span>ー</span>採用情報</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img1-anker" href="<?php echo home_url(); ?>#saiyou-anker"><span>ー</span>アルバイト募集</a></li>
                        </ul>
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img6-anker" href="<?php echo home_url('/about/'); ?>">会社情報</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img6-anker" href="<?php echo home_url('/mitani-policy/'); ?>"><span>ー</span>MITANI POLICY</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img6-anker" href="<?php echo home_url('/about/'); ?>"><span>ー</span>会社概要</a></li>
                        </ul>
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img2-anker" href="<?php echo home_url('/service-station/'); ?>">サービスステーション</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img2-anker" href="<?php echo home_url('/service-station/'); ?>#anker1"><span>ー</span>SSマップ一覧</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img2-anker" href="<?php echo home_url('/service-station/'); ?>#anker2"><span>ー</span>灯油配達</a></li>
                        </ul>
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>">カーメンテナンス</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>#anker1"><span>ー</span>車検・整備</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>#anker2"><span>ー</span>カーコーティング</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>#anker3"><span>ー</span>タイヤ交換・保管</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>#anker4"><span>ー</span>オイル交換</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>#anker5"><span>ー</span>バッテリー交換</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img3-anker" href="<?php echo home_url('/mainte/'); ?>#anker6"><span>ー</span>一般修理・鈑金/塗装</a></li>
                        </ul>
                    </div>
                    <div class="humb-nav-right">
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img4-anker" href="<?php echo home_url('/sales/'); ?>">自動車販売・保険</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img4-anker" href="<?php echo home_url('/sales/'); ?>#anker1"><span>ー</span>新車・中古車販売</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img4-anker" href="<?php echo home_url('/sales/'); ?>#anker2"><span>ー</span>カーリース・ENEOSサブスク</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img4-anker" href="<?php echo home_url('/sales/'); ?>#anker3"><span>ー</span>買取・下取り</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img4-anker" href="<?php echo home_url('/sales/'); ?>#anker4"><span>ー</span>キャンピングカーレンタル</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img4-anker" href="<?php echo home_url('/sales/'); ?>#anker5"><span>ー</span>各種自動車保険</a></li>
                        </ul>
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img5-anker" href="<?php echo home_url('/shituji/'); ?>">わたしの執事さん</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img5-anker" href="<?php echo home_url('/shituji/'); ?>#anker3"><span>ー</span>庭まわりお手入れ</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img5-anker" href="<?php echo home_url('/shituji/'); ?>#anker4"><span>ー</span>家まわりのお手入れ</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img5-anker" href="<?php echo home_url('/shituji/'); ?>#anker8"><span>ー</span>ホームエネルギー</a></li>
                        </ul>
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img7-anker" href="<?php echo home_url('/news/'); ?>">MITA NEWS</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img7-anker" href="<?php echo home_url('/news/'); ?>"><span>ー</span>新着</a></li>
                            <li class="hamburger-item sub-hamburger-item dummy"><a href="">dummy</a></li>
                        </ul>
                        <ul class="hamburger-list">
                            <li class="hamburger-item"><a class="img-anker img8-anker" href="<?php echo home_url('/houjin/'); ?>">法人様について</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img8-anker" href="<?php echo home_url('/houjin/'); ?>#anker1"><span>ー</span>お得な会員サービス</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img8-anker" href="<?php echo home_url('/houjin/'); ?>#anker2"><span>ー</span>産業燃料・潤滑油</a></li>
                            <li class="hamburger-item sub-hamburger-item"><a class="img-anker img8-anker" href="<?php echo home_url('/houjin/'); ?>#anker3"><span>ー</span>軽油注文配達</a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner xsp">
                    <div class="box">
                        <a href="<?php echo home_url(); ?>" class="main">TOP<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/service-station/'); ?>" class="main">サービスステーション<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/sales/'); ?>" class="main">自動車販売・保険<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/mainte/'); ?>" class="main">カーメンテナンス<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/shituji/'); ?>" class="main">わたしの執事さん<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/about/'); ?>" class="main">会社情報<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url(); ?>#saiyou-anker" class="main">採用情報<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/news/'); ?>" class="main">MITA NEWS<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="box">
                        <a href="<?php echo home_url('/houjin/'); ?>" class="main">法人契約について<img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/footer-angle.png" alt=""></a>
                    </div>
                    <div class="sns">
                        <a href="https://www.instagram.com/mitani_service_engine_official/" target="_blank" class="in">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/insta_b.svg" alt="">
                        </a>
                        <a href="https://twitter.com/ms_engine" target="_blank" class="tw">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/twitter_b.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="humb-tel-con-box">
                    <a href="<?php echo home_url('/contact/'); ?>" class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/humb-contact-banner.jpg" alt="">
                    </a>
                    <a href="https://team-engine.jp" target="_blank" rel="noopener noreferrer" class="right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/humb-re-banner.jpg" alt="">
                    </a>
                    <a href="tel:076-214-3311" class="xsp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/humb-tel-banner.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>