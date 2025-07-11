<?php
/*
Template Name: 自動車販売・保険
*/
?>

<?php get_header(); ?>

    <a href="<?php echo home_url( '/service-station/' ); ?>#anker1" class="haitatu-logo ss-logo anker-logo">
        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainte/ss-logo.svg" alt="">
        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/mainte/ss-logo-sp.png" alt="">
    </a>

    <div class="sale-sec1 common-sec1">
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo.png" alt="">
        </a>
        <div class="bg"></div>
        <div class="inner">
            <h1>自動車販売・保険</h1>
        </div>
    </div>

    <div class="common-anker-btn">
        <a href="#anker1" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>新車・中古車販売</p>
        </a>
        <a href="#anker2" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>カーリース<br>ENEOSサブスク</p>
        </a>
        <a href="#anker3" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>買取・下取り</p>
        </a>
        <a href="#anker4" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>キャンピングカー<br>レンタル</p>
        </a>
        <a href="#anker5" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>各種自動車保険</p>
        </a>
    </div>

    <div class="sale-sec2" id="anker1">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p id="newcar-anker">新車・中古車販売</p>
        </div>
        <h3 class="com-black-title">新車</h3>
        <!--<p class="title1">国産メーカーを<br class="xsp">各車取り扱っております！<br>お気軽にお問い合わせください。</p>-->
        <div class="img">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-img-sp.jpg" alt="">
        </div>

        <h3 class="com-black-title" id="usedcar-anker">中古車</h3>
        <a href="https://newcartrade.jp/SA286365/" target="_blank" rel="noopener noreferrer" class="bnr">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-bnr.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-bnr-sp.jpg" alt="">
        </a>
        <!-- <div class="used-car-box">
            <p class="text1">常時６万台の車を保有している全国自動車<br class="xsp">オークション会場と業務提携しており、<br>豊富な保有車の中から<br class="xsp">ご希望の車をお探しします。<br>ご購入時の面倒な手続きはもとより、<br>中間業者を介さず直接取引きするため、<br class="xsp">無駄なコストが発生せず、<br>お客様にとって安心・納得の低価格で<br class="xsp">ご提供します。</p>
        </div>
        <div class="recom-car-box">
            <div class="bg">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/recom-car-bg.png" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/recom-car-bg-sp.png" alt="">
            </div>
            <div class="inner">
                <div class="box">
                    <?php $args = array(
                            'post_status'=> 'publish',
                            'post_type'=> 'sale',
                            'order'=>'DESC',
                            'posts_per_page'=>3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'sale-cat',
                                    'field' => 'slug',
                                    'terms' => 'recommend'
                                )
                            ),
                            'paged'=>$paged
                        );
                        $blog_query = new WP_Query( $args );
                        if ( $blog_query->have_posts() ):
                            $x=1; while ( $blog_query->have_posts() ):
                                $blog_query->the_post();
                                $title = get_the_title( $post->ID );
                                $link = get_permalink( $post->ID );
                    ?>
                    <a href="<?php echo $link;?>" class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec2-chara<?php echo $x ?>.png" alt="" class="chara<?php echo $x ?>">
                        <img src="<?php the_field('image1'); ?>" alt="">
                        <p class="title"><?php echo $title;?></p>
                        <p class="price">車両価格　<span><?php the_field('price'); ?></span> 万円</p>
                        <p class="year">年式　　　<?php the_field('years'); ?></p>
                        <p class="mileage">走行距離　<?php the_field('metar'); ?></p>
                    </a>
                    <?php $x++; endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <a href="<?php echo home_url( '/car-archive/' ); ?>" class="more-btn">中古車一覧へ<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
            </div>
        </div> -->
    </div>

    <div class="sale-sec3" id="anker2">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>カーリース・<br class="xsp">ENEOSサブスク</p>
        </div>
        <p class="top-text1">欲しかったあの新車にも手が届く！<br>月々定額だから、無理せず車を維持していけます。</p>
        <div class="gray-box gray-box1 fadeinElem toUp">
            <div class="title-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/gray-box-title1.png" alt="">
            </div>
            <div class="box">
                <div class="item">
                    <div class="chara">
                        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/gray-box-rgbchara.png" alt="">
                        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/gray-box-rgbchara-sp.png" alt="">
                    </div>
                    <div class="bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mainte/gray-box-bg.png" alt="">
                    </div>
                    <p class="title">リースとレンタルの違いって何？</p>
                    <div class="text-box">
                        <div class="side">
                            <p class="p1">カーレンタル</p>
                            <p class="p2">半日や1日あるいは2～3日などの、ごく短期間の契約。週末や休日にちょっとお出かけしたい時、少量の荷物の移動、近所への買い物や、急な用事で遠出をするため車が必要になった人におすすめです。</p>
                        </div>
                        <div class="side">
                            <p class="p1">カーリース・ENEOSサブスク</p>
                            <p class="p2">年単位での長期間契約。契約期間中は自分の車のように占有することができます。「新車に乗りたいけど、高くて買えない」「まとまったお金を用意するのは大変」そんな方におすすめです。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pdf-box">
            <div class="pdf-box2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/pdf-scroll.png" alt="" class="pdf-scroll pdf-scroll2 xsp">
                <a href="<?php the_field('pdf2'); ?>" class="pdf-img" target="_blank" rel="noopener noreferrer">
                    <img src="<?php the_field('pdf_image2'); ?>" alt="">
                </a>
            </div>
        </div>
        <div class="release-box">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-banner1.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-banner1-sp.png" alt="">
        </div>
        <p class="banner-text">もっと詳しく知りたい方は、<br class="xsp">店頭または以下のHPから！</p>
        <a href="https://joycal.jp" target="_blank" rel="noopener noreferrer" class="banner2">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-banner2.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-banner2-sp.png" alt="">
        </a>
        <a href="https://eneos-cl.com/" target="_blank" rel="noopener noreferrer" class="banner3">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-banner3.jpg" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec3-banner3-sp.jpg" alt="">
        </a>
    </div>

    <div class="sale-sec4" id="anker3">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>買取・下取り</p>
        </div>
        <p class="top-text1">全国自動車オークション会場と提携している<br class="xsp">当社だからできる高価買取。<br>大切な愛車をできるだけ高く売りたい!!<br>そんなお客様のご希望を強力サポートいたします。</p>
        <div class="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-banner.png" alt="">
        </div>
        <div class="gray-box gray-box2 fadeinElem toUp">
            <div class="title-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/gray-box-title2.png" alt="">
            </div>
            <div class="box">
                <div class="item">
                    <div class="chara">
                        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/gray-box-rgbchara.png" alt="">
                        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/gray-box-rgbchara-sp.png" alt="">
                    </div>
                    <div class="bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mainte/gray-box-bg.png" alt="">
                    </div>
                    <p class="title">どんな車でも<br class="xxsp">買い取ってもらえるの？</p>
                    <p class="rtext">例えば、<br class="xsp">こんなお車でも大丈夫です！</p>
                    <div class="box">
                        <div class="img-box">
                            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img1.png" alt="">
                            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img1-sp.png" alt="">
                        </div>
                        <div class="img-box">
                            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img2.png" alt="">
                            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img2-sp.png" alt="">
                        </div>
                        <div class="img-box">
                            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img3.png" alt="">
                            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img3-sp.png" alt="">
                        </div>
                        <div class="img-box img-box-last">
                            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img4.png" alt="">
                            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec4-img4-sp.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tel-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/tel_box.png" alt="">
            <div class="xsp box1">
                <p class="text1">即日査定</p>
                <p class="text2">出張査定無料です!</p>
            </div>
            <div class="xsp box2">
                <p><span>TEL.</span>076-294-8612</p>
            </div>
            <div class="xsp box3">
                <p>不要車の引取りサービスや<br>廃車手続きも承っておりますので、<br>何でもご相談ください。</p>
            </div>
        </div>
    </div>

    <div class="sale-sec5" id="anker4">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p style="text-align:center;">キャンピングカー<br class="xsp">レンタル</p>
        </div>
        <p class="top-text1">石川県でキャンピングカーをレンタルするなら<br>三谷サービスエンジンで！</p>
        <div class="com-point-box com-point-box1 fadeinElem toUp">
            <div class="chara">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-point-chara.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-point-chara-sp.png" alt="">
            </div>
            <div class="main-img">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-img.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-img-sp.jpg" alt="">
            </div>
            <div class="bg"></div>
            <div class="text-box">
                <p class="p1">興味はあるけど<br class="xsp">初めてで、不安・・<br>そんな方でも大丈夫！</p>
                <p class="p2">車のことならなんでもお任せの三谷だから、初めてのキャンピングカーをご利用の方でも安心してご乗車いただけます！</p>
            </div>
        </div>
        <div class="com-point-box com-point-box2 fadeinElem toUp">
            <div class="chara">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-point-chara2.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-point-chara2-sp.png" alt="">
            </div>
            <div class="main-img">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-img2.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-img2-sp.jpg" alt="">
            </div>
            <div class="bg"></div>
            <div class="text-box">
                <p class="p1">広々空間で、<br class="xsp">いつもとはちょっと違う<br>ひとときを。</p>
                <p class="p2">キッチン、ベット、収納など、色んな設備もバッチリ完備！<br>広々スペースで、快適にご利用いただけます。</p>
            </div>
        </div>
        <div class="days-box">
            <div class="inner">
                <div class="left">
                    <p class="p1">詳しい情報はこちらから</p>
                    <p class="p2">トラベリング<br class="xxsp">レンタカーサービス</p>
                    <p class="p3">THE DAYs</p>
                    <p class="p4">にてお申し込みください！</p>
                    <a href="https://msengine-thedays.com" target="_blank" rel="noopener noreferrer" class="more-btn pc">特設サイトへ<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec5-banner.jpg" alt="">
                </div>
                <a href="https://msengine-thedays.com" target="_blank" rel="noopener noreferrer" class="more-btn sp">特設サイトへ<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
            </div>
        </div>
    </div>

    <div class="sale-sec6" id="anker5">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec6-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec6-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>各種自動車保険</p>
        </div>
        <p class="top-text1">例えば、こんなご不安・お悩みは<br class="xsp">ありませんか？</p>
        <div class="img-box fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec6-img.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/sale/sec6-img-sp.png" alt="">
        </div>
        <p class="last-text">「事故車のお引取り」「お車の修理」などお車に関することなど<br>約80名の保険有資格者が全面的にサポートします！</p>
        <a href="<?php echo home_url( '/mainte/' ); ?>#hoken" class="more-btn">もっと詳しく見る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>

    <div class="ss-sec5 sale-sec7 common-sec">
        <?php get_template_part('common-banners'); ?>
    </div>

    <div class="ss-sec6 mainte-last">
        <?php get_template_part('common-banners2'); ?>
    </div>

    <?php get_footer();