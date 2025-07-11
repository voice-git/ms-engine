<?php get_header(); ?>

<a href="https://www.youtube.com/channel/UCMcBdP09hmlJ_saOn8ZUTfg" target="_blank" rel="noopener noreferrer" class="youtube-logo top-youtube">
    <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/youtube-logo.png" alt="">
    <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/youtube-logo-sp.png" alt="">
</a>

<!--
<div class="loading-bg">
    <div class="loading-inner">
        <img class="text" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load.svg" alt="">
        <img class="xpc load1" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img1.png" alt="">
        <img class="xpc load2" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img2.png" alt="">
        <img class="xpc load3" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img3.png" alt="">
        <img class="xsp load1" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img1_sp.png" alt="">
        <img class="xsp load2" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img2_sp.png" alt="">
        <img class="xsp load3" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img3_sp.png" alt="">
    </div>
</div>
-->

<div class="top-sec1">
    <div class="slide-box">
        <ul class="slide-list">
            <li class="item">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-slide-img1.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-slide-img1-sp.jpg" alt="">
            </li>
            <li class="item">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-slide-img2.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-slide-img2-sp.jpg" alt="">
            </li>
            <li class="item">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-slide-img3.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-slide-img3-sp.jpg" alt="">
            </li>
        </ul>
    </div>
    <div class="inner">
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo.png" alt="">
        </a>
        <div class="title">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-img.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1-img-sp.png" alt="">
        </div>
        <p class="text xpc">PRESENTED BY MITANI SERVICE ENGINE </p>
    </div>
</div>

<div class="top-sec2">
    <div class="inner">
        <div class="left">
            <h2>MITA<br>NEWS</h2>
            <p class="text">くらしのお困りごとに関する<br>ホットな情報をお届け！</p>
            <a href="<?php echo home_url('/news/'); ?>" class="more-btn">一覧へ<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
        </div>
        <div class="right xpc">
            <?php $args = array(
                'post_status' => 'publish',
                'order' => 'DESC',
                'posts_per_page' => 3,
                'paged' => $paged
            );
            $blog_query = new WP_Query($args);
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) :
                    $blog_query->the_post();
                    $title = get_the_title($post->ID);
                    $link = get_permalink($post->ID);
                    $data = get_the_modified_date('Y.n.j', $post->ID);
                    $thumbnail = (get_the_post_thumbnail_url($post->ID, 'midium')) ? get_the_post_thumbnail_url($post->ID, 'midium') : get_template_directory_uri() . $NO_IMAGE_URL;
            ?>
                    <a href="<?php echo $link; ?>" class="item">
                        <div class="thumbnail">
                            <img src="<?php echo $thumbnail; ?>" alt="">
                        </div>
                        <!--<p class="date"><?php echo $data; ?></p>
                    <p class="text"><?php the_field('subtitle'); ?></p>
                    <p class="title"><?php echo $title; ?></p>-->
                    </a>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="right right2 xsp">
            <?php $args = array(
                'post_status' => 'publish',
                'order' => 'DESC',
                'posts_per_page' => 2,
                'paged' => $paged
            );
            $blog_query = new WP_Query($args);
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) :
                    $blog_query->the_post();
                    $title = get_the_title($post->ID);
                    $link = get_permalink($post->ID);
                    $data = get_the_modified_date('Y.n.j', $post->ID);
                    $thumbnail = (get_the_post_thumbnail_url($post->ID, 'midium')) ? get_the_post_thumbnail_url($post->ID, 'midium') : get_template_directory_uri() . $NO_IMAGE_URL;
            ?>
                    <a href="<?php echo $link; ?>" class="item">
                        <div class="thumbnail">
                            <img src="<?php echo $thumbnail; ?>" alt="">
                        </div>
                        <!--<p class="date"><?php echo $data; ?></p>
                    <p class="text"><?php the_field('subtitle'); ?></p>
                    <p class="title"><?php echo $title; ?></p>-->
                    </a>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a href="<?php echo home_url('/news/'); ?>" class="more-btn xsp">一覧へ<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
</div>

<div class="top-sec3">
    <div class="bg xpc">
        <img class="sec3_load1 img" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img1.png" alt="">
        <img class="sec3_load2 img" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img2.png" alt="">
        <img class="sec3_load3 img" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/load_img3.png" alt="">
    </div>
    <div class="top-logo-box fadeinElem toUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-eye-logo.png" alt="">
    </div>
    <p class="top-title fadeinElem toUp">MITANI POLICY</p>
    <p class="text1 fadeinElem toUp">三谷サービスエンジンは</p>
    <p class="text1 fadeinElem toUp xpc">鳥の目、虫の目、魚の目の3つの視点で</p>
    <p class="text1 fadeinElem toUp xpc">みなさまのくらしを支えていきます。</p>
    <p class="text1 fadeinElem toUp xsp">鳥の目、虫の目、魚の</p>
    <p class="text1 fadeinElem toUp xsp">目の3つの視点でみなさまのくらしを</p>
    <p class="text1 fadeinElem toUp xsp">支えていきます。</p>
    <div class="bg-sp xsp">
        <img class="chara1_sp fadeinElem spUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-chara1-sp.png" alt="">
        <img class="chara2_sp fadeinElem" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-chara2-sp.png" alt="">
        <img class="chara3_sp fadeinElem" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-chara3-sp.png" alt="">
    </div>
    <a href="<?php echo home_url('/mitani-policy/'); ?>" class="more-btn fadeinElem toUp">もっと詳しく見る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    <div class="text-box fadeinElem toUp">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/r-b_slash.png" alt="">
        </div>
        <div class="center">
            <p>ミタニーズがあなたをナビゲートします！<br>こんなお困りごとはありませんか？</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/r-slash.png" alt="">
        </div>
    </div>
    <div class="img-box fadeinElem toUp">
        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-img2.png" alt="">
        <img class="xpc chara chara1" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-chara1.png" alt="">
        <img class="xpc chara chara2" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-chara2.png" alt="">
        <img class="xpc chara chara3" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-chara3.png" alt="">
        <img class="xsp chara" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-img2-chara-sp.png" alt="">
        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec3-img2-sp.png" alt="">
    </div>
</div>

<div class="top-sec4" id="mitanimita-anker">
    <div class="top-img-box fadeinElem toUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-title.png" alt="">
    </div>
    <p class="top-subtext fadeinElem toUp">三谷サービスエンジンが見たお困りごと32選</p>
    <div class="cate-btn-box fadeinElem toUp">
        <p class="cate cate1 cate-current">お困りごと<br class="xsp">全般</p>
        <p class="cate cate2 no-bdl">くるまの<br class="xsp">お困りごと</p>
        <p class="cate cate3">くらしの<br class="xsp">お困りごと</p>
    </div>

    <div class="content-box content-box1 content-current fadeinElem toUp">
        <div class="box">
            <div class="left1 big">
                <div class="item item1">
                    <div class="bg">
                        <img src="<?php the_field('画像1'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num1.png" alt="">
                    <h3><?php the_field('テキスト1'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト1'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp1'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="right1 small">
                <div class="item item2">
                    <div class="bg">
                        <img src="<?php the_field('画像2'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num2.png" alt="">
                    <h3><?php the_field('テキスト2'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item3">
                    <div class="bg">
                        <img src="<?php the_field('画像3'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                    <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item4">
                    <div class="bg">
                        <img src="<?php the_field('画像4'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num4.png" alt="">
                    <h3><?php the_field('テキスト4'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
                <div class="item item5">
                    <div class="bg">
                        <img src="<?php the_field('画像5'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num5.png" alt="">
                    <h3><?php the_field('テキスト5'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
            <div class="center1 med">
                <div class="item item6 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像6'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                    <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item7 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像7'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                    <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2 fadeinElem">
                </div>
                <div class="item item8 sp-l">
                    <div class="bg">
                        <img src="<?php the_field('画像8'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num8.png" alt="">
                    <h3><?php the_field('テキスト8'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label">
                </div>
            </div>
            <div class="left2 small">
                <div class="item item9">
                    <div class="bg">
                        <img src="<?php the_field('画像9'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num9.png" alt="">
                    <h3><?php the_field('テキスト9'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item10">
                    <div class="bg">
                        <img src="<?php the_field('画像10'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num10.png" alt="">
                    <h3><?php the_field('テキスト10'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item11">
                    <div class="bg">
                        <img src="<?php the_field('画像11'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                    <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
                <div class="item item12">
                    <div class="bg">
                        <img src="<?php the_field('画像12'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num12.png" alt="">
                    <h3><?php the_field('テキスト12'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
            <div class="right2 big">
                <div class="item item13">
                    <div class="bg">
                        <img src="<?php the_field('画像13'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num13.png" alt="">
                    <h3><?php the_field('テキスト13'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト13'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp13'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="left3 big">
                <div class="item item14">
                    <div class="bg">
                        <img src="<?php the_field('画像14'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num14.png" alt="">
                    <h3><?php the_field('テキスト14'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト14'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp14'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-bg_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="right3 small">
                <div class="item item15">
                    <div class="bg">
                        <img src="<?php the_field('画像15'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                    <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item16">
                    <div class="bg">
                        <img src="<?php the_field('画像16'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num16.png" alt="">
                    <h3><?php the_field('テキスト16'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item17">
                    <div class="bg">
                        <img src="<?php the_field('画像17'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num17.png" alt="">
                    <h3><?php the_field('テキスト17'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item18">
                    <div class="bg">
                        <img src="<?php the_field('画像18'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                    <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
            </div>
            <div class="center2 med">
                <div class="item item19 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像19'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                    <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item20 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像20'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                    <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2 fadeinElem">
                </div>
                <div class="item item21 sp-l">
                    <div class="bg">
                        <img src="<?php the_field('画像21'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                    <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label">
                </div>
            </div>
            <div class="left4 small">
                <div class="item item22">
                    <div class="bg">
                        <img src="<?php the_field('画像22'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                    <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item23">
                    <div class="bg">
                        <img src="<?php the_field('画像23'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num23.png" alt="">
                    <h3><?php the_field('テキスト23'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item24">
                    <div class="bg">
                        <img src="<?php the_field('画像24'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num24.png" alt="">
                    <h3><?php the_field('テキスト24'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
                <div class="item item25">
                    <div class="bg">
                        <img src="<?php the_field('画像25'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num25.png" alt="">
                    <h3><?php the_field('テキスト25'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
            <div class="right4 big">
                <div class="item item26">
                    <div class="bg">
                        <img src="<?php the_field('画像26'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                    <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト26'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp26'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="center3 small last-small">
                <div class="item item27">
                    <div class="bg">
                        <img src="<?php the_field('画像27'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num27.png" alt="">
                    <h3><?php the_field('テキスト27'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item28">
                    <div class="bg">
                        <img src="<?php the_field('画像28'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num28.png" alt="">
                    <h3><?php the_field('テキスト28'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item29">
                    <div class="bg">
                        <img src="<?php the_field('画像29'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                    <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item30">
                    <div class="bg">
                        <img src="<?php the_field('画像30'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num30.png" alt="">
                    <h3><?php the_field('テキスト30'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
            </div>
            <div class="center3 small last-small">
                <div class="item item31">
                    <div class="bg">
                        <img src="<?php the_field('画像31'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num31.png" alt="">
                    <h3><?php the_field('テキスト31'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/rakuten.png" alt="" class="rakuten_ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item32">
                    <div class="bg">
                        <img src="<?php the_field('画像32'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num32.png" alt="">
                    <h3><?php the_field('テキスト32'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/rakuten.png" alt="" class="rakuten_ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item last xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="content-box content-box2">
        <div class="box">
            <div class="left1 big">
                <div class="item item1">
                    <div class="bg">
                        <img src="<?php the_field('画像1'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num1.png" alt="">
                    <h3><?php the_field('テキスト1'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト1'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp1'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="right1 small">
                <div class="item item2">
                    <div class="bg">
                        <img src="<?php the_field('画像2'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num2.png" alt="">
                    <h3><?php the_field('テキスト2'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item3">
                    <div class="bg">
                        <img src="<?php the_field('画像3'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                    <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item4">
                    <div class="bg">
                        <img src="<?php the_field('画像4'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num4.png" alt="">
                    <h3><?php the_field('テキスト4'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
                <div class="item item5">
                    <div class="bg">
                        <img src="<?php the_field('画像5'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num5.png" alt="">
                    <h3><?php the_field('テキスト5'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
            <div class="center1 med">
                <div class="item item6 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像6'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                    <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item7 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像7'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                    <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2 fadeinElem">
                </div>
                <div class="item item8 sp-l">
                    <div class="bg">
                        <img src="<?php the_field('画像8'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num8.png" alt="">
                    <h3><?php the_field('テキスト8'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label">
                </div>
            </div>
            <div class="left2 small">
                <div class="item item9">
                    <div class="bg">
                        <img src="<?php the_field('画像9'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num9.png" alt="">
                    <h3><?php the_field('テキスト9'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item10">
                    <div class="bg">
                        <img src="<?php the_field('画像10'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num10.png" alt="">
                    <h3><?php the_field('テキスト10'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item11">
                    <div class="bg">
                        <img src="<?php the_field('画像11'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                    <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
                <div class="item item12">
                    <div class="bg">
                        <img src="<?php the_field('画像12'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num12.png" alt="">
                    <h3><?php the_field('テキスト12'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
            <div class="right2 big">
                <div class="item item13">
                    <div class="bg">
                        <img src="<?php the_field('画像13'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num13.png" alt="">
                    <h3><?php the_field('テキスト13'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト13'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp13'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="center3 small last-small">
                <div class="item item29">
                    <div class="bg">
                        <img src="<?php the_field('画像29'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                    <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item30">
                    <div class="bg">
                        <img src="<?php the_field('画像30'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num30.png" alt="">
                    <h3><?php the_field('テキスト30'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
            </div>
        </div>
    </div>
    <div class="content-box content-box3">
        <div class="box">
            <div class="left3 big">
                <div class="item item14">
                    <div class="bg">
                        <img src="<?php the_field('画像14'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num14.png" alt="">
                    <h3><?php the_field('テキスト14'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト14'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp14'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-bg_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="right3 small">
                <div class="item item15">
                    <div class="bg">
                        <img src="<?php the_field('画像15'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                    <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item16">
                    <div class="bg">
                        <img src="<?php the_field('画像16'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num16.png" alt="">
                    <h3><?php the_field('テキスト16'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item17">
                    <div class="bg">
                        <img src="<?php the_field('画像17'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num17.png" alt="">
                    <h3><?php the_field('テキスト17'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item18">
                    <div class="bg">
                        <img src="<?php the_field('画像18'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                    <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
            </div>
            <div class="center2 med">
                <div class="item item19 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像19'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                    <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item20 sp-s">
                    <div class="bg">
                        <img src="<?php the_field('画像20'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                    <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2 fadeinElem">
                </div>
                <div class="item item21 sp-l">
                    <div class="bg">
                        <img src="<?php the_field('画像21'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                    <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label">
                </div>
            </div>
            <div class="left4 small">
                <div class="item item22">
                    <div class="bg">
                        <img src="<?php the_field('画像22'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                    <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item23">
                    <div class="bg">
                        <img src="<?php the_field('画像23'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num23.png" alt="">
                    <h3><?php the_field('テキスト23'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1 fadeinElem">
                </div>
                <div class="item item24">
                    <div class="bg">
                        <img src="<?php the_field('画像24'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num24.png" alt="">
                    <h3><?php the_field('テキスト24'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara fadeinElem">
                </div>
                <div class="item item25">
                    <div class="bg">
                        <img src="<?php the_field('画像25'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num25.png" alt="">
                    <h3><?php the_field('テキスト25'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
            <div class="right4 big">
                <div class="item item26">
                    <div class="bg">
                        <img src="<?php the_field('画像26'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                    <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <p class="xpc"><?php the_field('スモールテキスト26'); ?></p>
                    <p class="xsp"><?php the_field('スモールテキストsp26'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label1.png" alt="" class="label">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
                </div>
            </div>
            <div class="center3 small last-small">
                <div class="item item27">
                    <div class="bg">
                        <img src="<?php the_field('画像27'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num27.png" alt="">
                    <h3><?php the_field('テキスト27'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
                <div class="item item28">
                    <div class="bg">
                        <img src="<?php the_field('画像28'); ?>" alt="">
                    </div>
                    <div class="bg2"></div>
                    <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num28.png" alt="">
                    <h3><?php the_field('テキスト28'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-sec5" id="dekirukoto-anker">
    <div class="chara-bg1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec5-chara.png" alt="">
    </div>
    <div class="com-eye-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-eye-logo.png" alt="">
    </div>
    <p class="com-subtitle">OUR SERVICE</p>
    <p class="com-top-title">できること一覧</p>
    <div class="cate-btn-box">
        <p class="cate cate1 cate-current">サービスステーション</p>
        <p class="cate cate2 no-bdl">燃料油・潤滑油</p>
        <p class="cate cate3">カーメンテナンス</p>
        <p class="cate cate4">自動車販売・レンタル</p>
        <p class="cate cate5">くらしサポート</p>
    </div>
    <div class="content-box content5-box1 content-current">
        <a href="<?php echo home_url('/service-station/'); ?>" class="item">
            <img src="<?php the_field('サービス画像1'); ?>" alt="">
            <p class="title"><?php the_field('サービスタイトル1'); ?></p>
            <p class="text"><?php the_field('サービステキスト1'); ?></p>
        </a>
        <a href="<?php echo home_url('/service-station/'); ?>#seibi-anker" class="item">
            <img src="<?php the_field('サービス画像2'); ?>" alt="">
            <p class="title"><?php the_field('サービスタイトル2'); ?></p>
            <p class="text"><?php the_field('サービステキスト2'); ?></p>
        </a>
        <div class="item">
	        <a href="<?php echo home_url('/service-station/'); ?>#anker3">
	            <img src="<?php the_field('サービス画像3'); ?>" alt="">
	            <p class="title"><?php the_field('サービスタイトル3'); ?></p>
	            <p class="text"><?php the_field('サービステキスト3'); ?></p>
	        </a>
	        <a href="/eneos/" style="font-weight: bold;color: #C51726;">ENEOSアプリ ダウンロードはコチラ！</a>
        </div>
    </div>
    <div class="content-box content5-box2">
        <a href="<?php echo home_url('/service-station/'); ?>#anker2" class="item">
            <img src="<?php the_field('燃料画像1'); ?>" alt="">
            <p class="title"><?php the_field('燃料タイトル1'); ?></p>
            <p class="text"><?php the_field('燃料テキスト1'); ?></p>
        </a>
        <a href="<?php echo home_url('/houjin/'); ?>#anker3" class="item">
            <img src="<?php the_field('燃料画像2'); ?>" alt="">
            <p class="title"><?php the_field('燃料タイトル2'); ?></p>
            <p class="text"><?php the_field('燃料テキスト2'); ?></p>
        </a>
        <a href="<?php echo home_url('/houjin/'); ?>#anker2" class="item">
            <img src="<?php the_field('燃料画像3'); ?>" alt="">
            <p class="title"><?php the_field('燃料タイトル3'); ?></p>
            <p class="text"><?php the_field('燃料テキスト3'); ?></p>
        </a>
    </div>
    <div class="content-box content5-box3">
        <a href="<?php echo home_url('/mainte/'); ?>#anker1" class="item">
            <img src="<?php the_field('メンテナンス画像1'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル1'); ?></p>
            <p class="text"><?php the_field('メンテナンステキスト1'); ?></p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker2" class="item">
            <img src="<?php the_field('メンテナンス画像2'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル2'); ?></p>
            <p class="text"><?php the_field('メンテナンステキスト2'); ?></p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker3" class="item">
            <img src="<?php the_field('メンテナンス画像3'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル3'); ?></p>
            <p class="text"><?php the_field('メンテナンステキスト3'); ?></p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker4" class="item">
            <img src="<?php the_field('メンテナンス画像4'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル4'); ?></p>
            <p class="text"><?php the_field('メンテナンステキスト4'); ?></p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker5" class="item">
            <img src="<?php the_field('メンテナンス画像5'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル5'); ?></p>
            <p class="text"><?php the_field('メンテナンステキスト5'); ?></p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item">
            <img src="<?php the_field('メンテナンス画像6'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル6'); ?></p>
            <p class="text"><?php the_field('メンテナンステキスト6'); ?></p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item">
            <img src="<?php the_field('メンテナンス画像7'); ?>" alt="">
            <p class="title"><?php the_field('メンテナンスタイトル7'); ?></p>
        </a>
        <div class="item big-item">
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像8'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル8'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像9'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル9'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像10'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル10'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像11'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル11'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像12'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル12'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像13'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル13'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像14'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル14'); ?></p>
            </a>
            <a href="<?php echo home_url('/mainte/'); ?>#anker6" class="item2">
                <img src="<?php the_field('メンテナンス画像15'); ?>" alt="">
                <p class="title"><?php the_field('メンテナンスタイトル15'); ?></p>
            </a>
        </div>
    </div>
    <div class="content-box content5-box4">
        <a href="<?php echo home_url('/sales/'); ?>#anker1" class="item">
            <img src="<?php the_field('レンタル画像1'); ?>" alt="">
            <p class="title"><?php the_field('レンタルタイトル1'); ?></p>
            <p class="text"><?php the_field('レンタルテキスト1'); ?></p>
        </a>
        <a href="<?php echo home_url('/sales/'); ?>#anker1" class="item">
            <img src="<?php the_field('レンタル画像2'); ?>" alt="">
            <p class="title"><?php the_field('レンタルタイトル2'); ?></p>
            <p class="text"><?php the_field('レンタルテキスト2'); ?></p>
        </a>
        <a href="<?php echo home_url('/sales/'); ?>#anker2" class="item">
            <img src="<?php the_field('レンタル画像3'); ?>" alt="">
            <p class="title"><?php the_field('レンタルタイトル3'); ?></p>
            <p class="text"><?php the_field('レンタルテキスト3'); ?></p>
        </a>
        <a href="<?php echo home_url('/sales/'); ?>#anker3" class="item">
            <img src="<?php the_field('レンタル画像4'); ?>" alt="">
            <p class="title"><?php the_field('レンタルタイトル4'); ?></p>
            <p class="text"><?php the_field('レンタルテキスト4'); ?></p>
        </a>
        <a href="<?php echo home_url('/sales/'); ?>#anker4" class="item">
            <img src="<?php the_field('レンタル画像5'); ?>" alt="">
            <p class="title"><?php the_field('レンタルタイトル5'); ?></p>
            <p class="text"><?php the_field('レンタルテキスト5'); ?></p>
        </a>
        <a href="<?php echo home_url('/sales/'); ?>#anker5" class="item">
            <img src="<?php the_field('レンタル画像6'); ?>" alt="">
            <p class="title"><?php the_field('レンタルタイトル6'); ?></p>
            <p class="text"><?php the_field('レンタルテキスト6'); ?></p>
        </a>
    </div>
    <div class="content-box content5-box5">
        <a href="<?php echo home_url('/shituji/'); ?>" class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec5-item-img35.jpg" alt="">
            <p class="title">生活支援事業</p>
            <p class="text">・ハウスクリーニング<br>・除草作業、お庭のお手入れ<br>・不用品処分、荷物運搬<br>・エアコンの清掃、修理<br>・家まわりの修理<br>・防犯カメラの販売、取り付けなど</p>
        </a>
        <a href="<?php echo home_url('/shituji/'); ?>#anker8" class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec5-item-img33.jpg" alt="">
            <p class="title">ホームエネルギー</p>
            <p class="text">エアコンの交換・修理や、「エコフィール」の販売設置など、より効率的で経済的なエネルギーライフを提案させていただきます。</p>
        </a>
        <a href="<?php echo home_url('/mainte/'); ?>#anker7" class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec5-item-img34.jpg" alt="">
            <p class="title">火災保険・生命保険</p>
            <p class="text">もしもの時に備え、信頼できるプロの保険有資格者が全面的にサポートさせていただきます。</p>
        </a>
    </div>
</div>

<div class="top-sec6 fadeinElem toUp">
    <div class="inner">
        <div class="com-eye-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-eye-logo.png" alt="">
        </div>
        <p class="com-subtitle">ABOUT MITANI</p>
        <p class="com-top-title">わたしたちについて</p>
        <a href="<?php echo home_url('/about/'); ?>" class="more-btn">詳しく見る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
</div>

<div class="top-sec7" id="saiyou-anker">
    <div class="com-eye-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-eye-logo.png" alt="">
    </div>
    <p class="com-subtitle">RECRUIT</p>
    <p class="com-top-title">採用情報</p>
    <a href="https://team-engine.jp" class="banner1 fadeinElem toUp">
        <p class="p1">仕事をするなら<br>ワクワクする方が<br>いいんじゃない？</p>
        <p class="p2">新卒・経験者採用についてはこちら！</p>
    </a>
    <a href="https://q-mate.jp/msengine/index.html" target="_blank" class="banner2 fadeinElem toUp">
        <p class="p1">アルバイト募集中！!</p>
        <p class="p2">ガソリンスタンドで働いてみませんか？</p>
        <!--<div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec7-img.png" alt="">
        </div>-->
    </a>
</div>

<div class="top-sec8 common-sec fadeinElem toUp">
    <?php get_template_part('common-banners'); ?>
    <div class="bg">
        <img class="text fadeinElem toUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec8-img.svg" alt="">
        <img class="chara fadeinElem sec9_chara1" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec8-chara1.png" alt="">
        <img class="chara fadeinElem sec9_chara2" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec8-chara2.png" alt="">
        <img class="chara fadeinElem sec9_chara3" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec8-chara3.png" alt="">
    </div>
</div>

<div class="top-sec9">
    <div class="img-box">
        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec9-img.jpg" alt="">
        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec9-img-sp.jpg" alt="">
    </div>
</div>

<div id="overlay" class="overlay"></div>
<div class="popup popup1 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum1.png" alt="">
    </div>
    <p class="rtitle xpc">トラベリングカーで素敵な休日を過ごしてミタ！</p>
    <p class="rtitle xsp">トラベリングカーで素敵な</p>
    <p class="rtitle xsp">休日を過ごしてミタ！</p>
    <p class="rsubtitle">キャンピングカーレンタルサービス「THEDAYs」</p>
    <div class="pslide-box">
        <ul>
            <li class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img1.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p2">22,000<span>円(税込)〜</span></p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1" style="padding-top:15px;">お問い合わせ先</p>
                <p class="p2" style="padding-bottom:10px;">カー・ドック三谷</p>
            </div>
        </div>
        <a href="https://msengine-thedays.com/" target="blank" class="right first-right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p1">THE DAYs</p>
            <p class="p2">特設サイトへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item8">
                <div class="bg">
                    <img src="<?php the_field('画像8'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num8.png" alt="">
                <h3><?php the_field('テキスト8'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item7">
                <div class="bg">
                    <img src="<?php the_field('画像7'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item26">
                <div class="bg">
                    <img src="<?php the_field('画像26'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                <h3><?php the_field('テキスト26'); ?>を<img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup2 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum2.png" alt="">
    </div>
    <p class="rtitle xpc">故障の原因を見つけクルマを復活させてミタ!</p>
    <p class="rtitle xsp">故障の原因を見つけ</p>
    <p class="rtitle xsp">クルマを復活させてミタ！</p>
    <p class="rsubtitle">点検整備/バッテリーの交換など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img2.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-3">ENEOSバッテリー(VictoryForce)</p>
                <div class="text-box">
                    <p class="p1-3">工賃込み</p>
                    <p class="p2">12,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">故障内容により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item4">
                <div class="bg">
                    <img src="<?php the_field('画像4'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num4.png" alt="">
                <h3><?php the_field('テキスト4'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item5">
                <div class="bg">
                    <img src="<?php the_field('画像5'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num5.png" alt="">
                <h3><?php the_field('テキスト5'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item30">
                <div class="bg">
                    <img src="<?php the_field('画像30'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num30.png" alt="">
                <h3><?php the_field('テキスト30'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup3 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum3.png" alt="">
    </div>
    <p class="rtitle xpc">当社運営のENEOSガソリンスタンド16店舗へ</p>
    <p class="rtitle xsp">当社運営のENEOS</p>
    <p class="rtitle xsp">ガソリンスタンド16店舗へ</p>
    <p class="rsubtitle">給油(フル・セルフ)</p>
    <div class="pslide-box">
        <ul class="pslide-list">
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img3.png" alt="">
            </li>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img3-2.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">市場相場により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <!--<p class="hituji">くらしのお困りごとは、SS事業部が承っております。</p>-->
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item5">
                <div class="bg">
                    <img src="<?php the_field('画像5'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num5.png" alt="">
                <h3><?php the_field('テキスト5'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item9">
                <div class="bg">
                    <img src="<?php the_field('画像9'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num9.png" alt="">
                <h3><?php the_field('テキスト9'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item10">
                <div class="bg">
                    <img src="<?php the_field('画像10'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num10.png" alt="">
                <h3><?php the_field('テキスト10'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item30">
                <div class="bg">
                    <img src="<?php the_field('画像30'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num30.png" alt="">
                <h3><?php the_field('テキスト30'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup4 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum4.png" alt="">
    </div>
    <p class="rtitle xpc">故障したクルマのエアコンを直してミタ！</p>
    <p class="rtitle xsp">故障したクルマの</p>
    <p class="rtitle xsp">エアコンを直してミタ！</p>
    <p class="rsubtitle">カーメンテナンス（エアコンガス）</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img4.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">エアコンガス補充</p>
                    <p class="p2">2,200</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">故障内容により価格が変動します。<br>※エアコンガス点検無料</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item2">
                <div class="bg">
                    <img src="<?php the_field('画像2'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num2.png" alt="">
                <h3><?php the_field('テキスト2'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item10">
                <div class="bg">
                    <img src="<?php the_field('画像10'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num10.png" alt="">
                <h3><?php the_field('テキスト10'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item30">
                <div class="bg">
                    <img src="<?php the_field('画像30'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num30.png" alt="">
                <h3><?php the_field('テキスト30'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup5 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum5.png" alt="">
    </div>
    <p class="rtitle xpc">新車のような輝きを取り戻してミタ！</p>
    <p class="rtitle xsp">新車のような輝きを</p>
    <p class="rtitle xsp">取り戻してミタ！</p>
    <p class="rsubtitle">Keeperコーティングなど</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img5-2.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p2">5,990</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">お車のサイズ、コーティングメニューにより<br>価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup6 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum6.png" alt="">
    </div>
    <p class="rtitle xpc">手洗い洗車でスッキリきれいにしてミタ！</p>
    <p class="rtitle xsp">手洗い洗車で</p>
    <p class="rtitle xsp">スッキリきれいにしてミタ！</p>
    <p class="rsubtitle">手洗い洗車</p>
    <div class="pslide-box">
        <ul class="pslide-list">
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img6.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p2">2,300</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">お車のサイズ、洗車メニューにより価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item5">
                <div class="bg">
                    <img src="<?php the_field('画像5'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num5.png" alt="">
                <h3><?php the_field('テキスト5'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup7 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum7.png" alt="">
    </div>
    <p class="rtitle xpc">雪用のスタッドレスタイヤを販売＆替えてミタ！</p>
    <p class="rtitle xsp">雪用のスタッドレスタイヤを</p>
    <p class="rtitle xsp">販売＆替えてミタ！</p>
    <p class="rsubtitle">タイヤ販売/タイヤ交換</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img7.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">タイヤ脱着<br>１本</p>
                    <p class="p2">770</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">タイヤサイズにより価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item10">
                <div class="bg">
                    <img src="<?php the_field('画像10'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num10.png" alt="">
                <h3><?php the_field('テキスト10'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item23">
                <div class="bg">
                    <img src="<?php the_field('画像23'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num23.png" alt="">
                <h3><?php the_field('テキスト23'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item25">
                <div class="bg">
                    <img src="<?php the_field('画像25'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num25.png" alt="">
                <h3><?php the_field('テキスト25'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup8 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum8.png" alt="">
    </div>
    <p class="rtitle xpc">お得な価格で中古車を販売してミタ！</p>
    <p class="rtitle xsp">お得な価格で</p>
    <p class="rtitle xsp">中古車を販売してミタ！</p>
    <p class="rsubtitle">中古車販売/カーリース</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img8.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">気になるお車について<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item1">
                <div class="bg">
                    <img src="<?php the_field('画像1'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num1.png" alt="">
                <h3><?php the_field('テキスト1'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup9 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum9.png" alt="">
    </div>
    <p class="rtitle xpc">保険のプロが面談＆ご提案してミタ！</p>
    <p class="rtitle xsp">保険のプロが</p>
    <p class="rtitle xsp">面談＆ご提案してミタ！</p>
    <p class="rsubtitle">保険の相談/事故車引き取り/車の修理など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img9.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">相談無料<br>お気軽にご連絡ください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item7">
                <div class="bg">
                    <img src="<?php the_field('画像7'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item13">
                <div class="bg">
                    <img src="<?php the_field('画像13'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num13.png" alt="">
                <h3><?php the_field('テキスト13'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
            <div class="item item26">
                <div class="bg">
                    <img src="<?php the_field('画像26'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup10 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum10.png" alt="">
    </div>
    <p class="rtitle xpc">すり減ったタイヤを新品に交換してミタ！</p>
    <p class="rtitle xsp">すり減ったタイヤを</p>
    <p class="rtitle xsp">新品に交換してミタ！</p>
    <p class="rsubtitle">タイヤ販売/タイヤ交換</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img10.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">タイヤ脱着<br>１本</p>
                    <p class="p2">770</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">タイヤサイズにより価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item7">
                <div class="bg">
                    <img src="<?php the_field('画像7'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup11 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum11.png" alt="">
    </div>
    <p class="rtitle xpc">置き場所に困るタイヤを預かってミタ！</p>
    <p class="rtitle xsp">置き場所に困るタイヤを</p>
    <p class="rtitle xsp">預かってミタ！</p>
    <p class="rsubtitle">タイヤ保管</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img11.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box text-box2">
                    <p class="p1-3">年間</p>
                    <p class="p2">8,800</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item7">
                <div class="bg">
                    <img src="<?php the_field('画像7'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item10">
                <div class="bg">
                    <img src="<?php the_field('画像10'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num10.png" alt="">
                <h3><?php the_field('テキスト10'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item15">
                <div class="bg">
                    <img src="<?php the_field('画像15'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup12 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum12.png" alt="">
    </div>
    <p class="rtitle">軽油をお届けしてミタ！</p>
    <p class="rsubtitle">軽油販売/軽油配達</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img12.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">市場相場により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/houjin/'); ?>#anker3" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">軽油配達</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item16">
                <div class="bg">
                    <img src="<?php the_field('画像16'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num16.png" alt="">
                <h3><?php the_field('テキスト16'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item25">
                <div class="bg">
                    <img src="<?php the_field('画像25'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num25.png" alt="">
                <h3><?php the_field('テキスト25'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item26">
                <div class="bg">
                    <img src="<?php the_field('画像26'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup13 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum13.png" alt="">
    </div>
    <p class="rtitle xpc">傷ついたクルマをきれいにしてミタ！</p>
    <p class="rtitle xsp">傷ついたクルマを</p>
    <p class="rtitle xsp">きれいにしてミタ！</p>
    <p class="rsubtitle">鈑金/鈑金塗装/自動車保険</p>
    <div class="pslide-box">
        <ul class="pslide-list">
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img13.png" alt="">
            </li>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img13-2.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">損傷内容により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item5">
                <div class="bg">
                    <img src="<?php the_field('画像5'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num5.png" alt="">
                <h3><?php the_field('テキスト5'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item8">
                <div class="bg">
                    <img src="<?php the_field('画像8'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num8.png" alt="">
                <h3><?php the_field('テキスト8'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item9">
                <div class="bg">
                    <img src="<?php the_field('画像9'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num9.png" alt="">
                <h3><?php the_field('テキスト9'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup14 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum14.png" alt="">
    </div>
    <p class="rtitle xpc">草刈りでスッキリ清潔なお庭にしてミタ！</p>
    <p class="rtitle xsp">草刈りでスッキリ</p>
    <p class="rtitle xsp">清潔なお庭にしてミタ！</p>
    <p class="rsubtitle">除草作業 / お庭のお手入れなど</p>
    <div class="pslide-box">
        <ul class="pslide-list">
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img14.png" alt="">
            </li>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img14-2.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item24">
                <div class="bg">
                    <img src="<?php the_field('画像24'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num24.png" alt="">
                <h3><?php the_field('テキスト24'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item12">
                <div class="bg">
                    <img src="<?php the_field('画像12'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num12.png" alt="">
                <h3><?php the_field('テキスト12'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item26">
                <div class="bg">
                    <img src="<?php the_field('画像26'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup15 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum15.png" alt="">
    </div>
    <p class="rtitle xpc">不用品を回収してスッキリ綺麗なお部屋にしミタ！</p>
    <p class="rtitle xsp">不用品を回収して</p>
    <p class="rtitle xsp">スッキリ綺麗なお部屋にしミタ！</p>
    <p class="rsubtitle">不用品処分/荷物運搬など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img15.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item17">
                <div class="bg">
                    <img src="<?php the_field('画像17'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num17.png" alt="">
                <h3><?php the_field('テキスト17'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item16">
                <div class="bg">
                    <img src="<?php the_field('画像16'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num16.png" alt="">
                <h3><?php the_field('テキスト16'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup16 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum16.png" alt="">
    </div>
    <p class="rtitle">灯油をお届けしてミタ！</p>
    <p class="rsubtitle">注文配達/定期配達/灯油タンク交換など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img16.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">市場相場により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>#anker2" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">灯油配達</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item17">
                <div class="bg">
                    <img src="<?php the_field('画像17'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num17.png" alt="">
                <h3><?php the_field('テキスト17'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item27">
                <div class="bg">
                    <img src="<?php the_field('画像27'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num27.png" alt="">
                <h3><?php the_field('テキスト27'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup17 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum17.png" alt="">
    </div>
    <p class="rtitle xpc">持ち運びが大変な荷物を運んでミタ！</p>
    <p class="rtitle xsp">持ち運びが大変な</p>
    <p class="rtitle xsp">荷物を運んでミタ！</p>
    <p class="rsubtitle">手荷物運搬/引越しのお手伝いなど</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img17.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item20">
                <div class="bg">
                    <img src="<?php the_field('画像20'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup18 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum18.png" alt="">
    </div>
    <p class="rtitle xpc">くすんだ窓をピカピカにしてミタ！</p>
    <p class="rtitle xsp">くすんだ窓を</p>
    <p class="rtitle xsp">ピカピカにしてミタ！</p>
    <p class="rsubtitle">窓・サッシ・網戸清掃など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img18.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item20">
                <div class="bg">
                    <img src="<?php the_field('画像20'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item26">
                <div class="bg">
                    <img src="<?php the_field('画像26'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup19 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum19.png" alt="">
    </div>
    <p class="rtitle xpc">シンクの輝きを取り戻してミタ！</p>
    <p class="rtitle xsp">シンクの輝きを</p>
    <p class="rtitle xsp">取り戻してミタ！</p>
    <p class="rsubtitle">ハウスクリーニング</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img19.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item20">
                <div class="bg">
                    <img src="<?php the_field('画像20'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup20 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum20.png" alt="">
    </div>
    <p class="rtitle xpc">浴室の輝きを取り戻してミタ！</p>
    <p class="rtitle xsp">浴室の輝きを</p>
    <p class="rtitle xsp">取り戻してミタ！</p>
    <p class="rsubtitle">ハウスクリーニング</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img20.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item16">
                <div class="bg">
                    <img src="<?php the_field('画像16'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num16.png" alt="">
                <h3><?php the_field('テキスト16'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup21 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum21.png" alt="">
    </div>
    <p class="rtitle xpc">エアコンも空気もきれいにしてミタ！</p>
    <p class="rtitle xsp">エアコンも空気も</p>
    <p class="rtitle xsp">きれいにしてミタ！</p>
    <p class="rsubtitle">エアコン清掃</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img21.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box text-box2">
                    <p class="p1-3">エアコン清掃</p>
                    <p class="p2">11,000<span>円(税込)〜</span></p>
                </div>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item15">
                <div class="bg">
                    <img src="<?php the_field('画像15'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup22 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum22.png" alt="">
    </div>
    <p class="rtitle xpc">壊れたエアコンを直してミタ！</p>
    <p class="rtitle xsp">壊れたエアコンを</p>
    <p class="rtitle xsp">直してミタ！</p>
    <p class="rsubtitle">エアコン修理/エアコン取り付けなど</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img22.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">損傷内容により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item15">
                <div class="bg">
                    <img src="<?php the_field('画像15'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup23 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum23.png" alt="">
    </div>
    <p class="rtitle xpc">原因を見つけてお湯を復活させてミタ！</p>
    <p class="rtitle xsp">原因を見つけて</p>
    <p class="rtitle xsp">お湯を復活させてミタ！</p>
    <p class="rsubtitle">給湯器/お風呂/灯油ボイラー修理など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img23.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">損傷内容により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item15">
                <div class="bg">
                    <img src="<?php the_field('画像15'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup24 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum24.png" alt="">
    </div>
    <p class="rtitle xpc">傷ついたお家を元通りに直してミタ！</p>
    <p class="rtitle xsp">傷ついたお家を</p>
    <p class="rtitle xsp">元通りに直してミタ！</p>
    <p class="rsubtitle">家まわりの修理/簡単な電気工事など</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img24.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">損傷内容により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item20">
                <div class="bg">
                    <img src="<?php the_field('画像20'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup25 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum25.png" alt="">
    </div>
    <p class="rtitle xpc">駐車場など代わりに雪かきしてミタ！</p>
    <p class="rtitle xsp">駐車場など代わりに</p>
    <p class="rtitle xsp">雪かきしてミタ！</p>
    <p class="rsubtitle">除雪作業</p>
    <div class="pslide-box">
        <ul class="pslide-list">
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img25.png" alt="">
            </li>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img25-2.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item7">
                <div class="bg">
                    <img src="<?php the_field('画像7'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num7.png" alt="">
                <h3><?php the_field('テキスト7'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item15">
                <div class="bg">
                    <img src="<?php the_field('画像15'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item24">
                <div class="bg">
                    <img src="<?php the_field('画像24'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num24.png" alt="">
                <h3><?php the_field('テキスト24'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item26">
                <div class="bg">
                    <img src="<?php the_field('画像26'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num26.png" alt="">
                <h3><?php the_field('テキスト26'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-b_chara.png" alt="" class="bchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup26 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum26.png" alt="">
    </div>
    <p class="rtitle xpc">防犯カメラを設置して安心の家にしてミタ！</p>
    <p class="rtitle xsp">防犯カメラを設置して</p>
    <p class="rtitle xsp">安心の家にしてミタ！</p>
    <p class="rsubtitle">防犯カメラ販売・取り付け</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img26.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box text-box2">
                    <p class="p1-3">カメラ+<br>取付工賃</p>
                    <p class="p2">60,000<span>円(税込)〜</span></p>
                </div>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item15">
                <div class="bg">
                    <img src="<?php the_field('画像15'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num15.png" alt="">
                <h3><?php the_field('テキスト15'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item24">
                <div class="bg">
                    <img src="<?php the_field('画像24'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num24.png" alt="">
                <h3><?php the_field('テキスト24'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup27 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum27.png" alt="">
    </div>
    <p class="rtitle xpc">離れて暮らす親御さんと仲良くなってミタ！</p>
    <p class="rtitle xsp">離れて暮らす親御さんと</p>
    <p class="rtitle xsp">仲良くなってミタ！</p>
    <p class="rsubtitle">買い物代行/離れて暮す親御さんのご様子を確認</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img27.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">基本料金<br>１時間</p>
                    <p class="p2">5,500</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2r">＋以降1分ごとに110円(税込)追加</p>
                <p class="p1-2">お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item16">
                <div class="bg">
                    <img src="<?php the_field('画像16'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num16.png" alt="">
                <h3><?php the_field('テキスト16'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item19">
                <div class="bg">
                    <img src="<?php the_field('画像19'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num19.png" alt="">
                <h3><?php the_field('テキスト19'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup28 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum28.png" alt="">
    </div>
    <p class="rtitle xpc">トイレのつまりを解消してミタ！</p>
    <p class="rtitle xsp">トイレのつまりを</p>
    <p class="rtitle xsp">解消してミタ！</p>
    <p class="rsubtitle">水回りの修理</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img28.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <p class="p1-4">損傷内容により価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市、野々市市、白山市<br>およびその近郊</p>
            </div>
        </div>
        <a href="<?php echo home_url('/shituji/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">わたしの執事さんへ</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item18">
                <div class="bg">
                    <img src="<?php the_field('画像18'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num18.png" alt="">
                <h3><?php the_field('テキスト18'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item20">
                <div class="bg">
                    <img src="<?php the_field('画像20'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num20.png" alt="">
                <h3><?php the_field('テキスト20'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara2.png" alt="" class="rchara2">
            </div>
            <div class="item item21">
                <div class="bg">
                    <img src="<?php the_field('画像21'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num21.png" alt="">
                <h3><?php the_field('テキスト21'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item22">
                <div class="bg">
                    <img src="<?php the_field('画像22'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num22.png" alt="">
                <h3><?php the_field('テキスト22'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup29 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum29.png" alt="">
    </div>
    <p class="rtitle xpc">車内の汚れをスッキリ清潔にしてミタ！</p>
    <p class="rtitle xsp"> 車内の汚れを</p>
    <p class="rtitle xsp"> スッキリ清潔にしてミタ！</p>
    <p class="rsubtitle">車内清掃</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img29.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p2">1,700</p>
                    <p class="p1-3">円(税込)〜</p>
                </div>
                <p class="p1-2">お車のサイズ、清掃メニューにより価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup30 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum30.png" alt="">
    </div>
    <p class="rtitle xpc">法定点検・整備付きの車検をしてミタ！</p>
    <p class="rtitle xsp">法定点検・整備付きの</p>
    <p class="rtitle xsp">車検をしてミタ！</p>
    <p class="rsubtitle">三谷車検</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img30.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p1-3">軽自動車<br>(最大値引き額)</p>
                    <p class="p2">39,930</p>
                    <p class="p1-3">円(税込)</p>
                </div>
                <p class="p1-2">お車によって価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">お問い合わせ先</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド16店鋪・<br>カー・ドック三谷</p>
            </div>
        </div>
        <a href="<?php echo home_url('/service-station/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">サービスステーションへ</p>
            <p class="p3">-SS店舗・整備工場マップ-</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup31 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum31.png" alt="">
    </div>
    <p class="rtitle xpc">車検と一緒に楽天ポイントも貯めてミタ！</p>
    <p class="rtitle xsp">車検と一緒に</p>
    <p class="rtitle xsp">楽天ポイントも貯めてミタ！</p>
    <p class="rsubtitle">楽天車検</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img31.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p2">45,740</p>
                    <p class="p1-3">円(税込)</p>
                </div>
                <p class="p1-2">お車によって価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド13店鋪</p>
            </div>
        </div>
        <a href="<?php echo home_url('/rakuten-inspection/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">詳しく見る</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>
<div class="popup popup32 modal-window">
    <div class="close-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-close.png" alt="">
    </div>
    <div class="title-box">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash.png" alt="">
        </div>
        <div class="center">
            <p>そのお困りごと三谷なら解決できます！</p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/popup-slash2.png" alt="">
        </div>
    </div>
    <div class="num-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pnum32.png" alt="">
    </div>
    <p class="rtitle xpc">洗車と一緒に楽天ポイントも貯めてミタ！</p>
    <p class="rtitle xsp">洗車と一緒に</p>
    <p class="rtitle xsp">楽天ポイントも貯めてミタ！</p>
    <p class="rsubtitle">楽天洗車（手洗い洗車・コーティング）</p>
    <div class="pslide-box">
        <ul>
            <li class="item" style="width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pslide-img32.png" alt="">
            </li>
        </ul>
    </div>
    <div class="detail-box">
        <div class="chara">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pred-chara.png" alt="">
        </div>
        <div class="left">
            <div class="price-box">
                <p class="p1">目安料金</p>
                <div class="text-box">
                    <p class="p2">2,300</p>
                    <p class="p1-3">円(税込)</p>
                </div>
                <p class="p1-2">お車のサイズ、コーティングメニューにより価格が変動します。<br>お気軽にお問い合わせください。</p>
            </div>
            <div class="area-box">
                <p class="p1">対応エリア</p>
                <p class="p2">金沢市/野々市市/白山市の<br>ガソリンスタンド6店鋪</p>
            </div>
        </div>
        <a href="<?php echo home_url('/rakuten-wash/'); ?>" class="right more-btn">
            <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-angle.png" alt="">
            <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/black-btn-hover-angle.png" alt="">
            <p class="p2">詳しく見る</p>
        </a>
    </div>
    <div class="contact-box">
        <div class="img-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pcontact-charas-sp.png" alt="">
        </div>
        <a href="<?php echo home_url('/contact/'); ?>" class="more-btn pmore-btn">CONTACT<br><span>お問い合わせフォーム</span><img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>
    <div class="one-more">
        <div class="bg-green">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-green.png" alt="">
        </div>
        <div class="bg-blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pop-bg-blue.png" alt="">
        </div>
        <p class="p1">＋1 MORE</p>
        <div class="title-box2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/one-more-title.png" alt="">
        </div>
        <p class="text">その他にも、くらしの中でこんなお困りごとはありませんか？<br>三谷なら複数あるお悩みも合わせて解決できます。</p>
        <div class="box">
            <div class="item item3">
                <div class="bg">
                    <img src="<?php the_field('画像3'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num3.png" alt="">
                <h3><?php the_field('テキスト3'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
            <div class="item item6">
                <div class="bg">
                    <img src="<?php the_field('画像6'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num6.png" alt="">
                <h3><?php the_field('テキスト6'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
            </div>
            <div class="item item11">
                <div class="bg">
                    <img src="<?php the_field('画像11'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num11.png" alt="">
                <h3><?php the_field('テキスト11'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-g_chara.png" alt="" class="gchara">
            </div>
            <div class="item item29">
                <div class="bg">
                    <img src="<?php the_field('画像29'); ?>" alt="">
                </div>
                <div class="bg2"></div>
                <img class="num" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/num29.png" alt="">
                <h3><?php the_field('テキスト29'); ?><img class="mita" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-mita.png" alt=""></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2.png" alt="" class="label xpc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-label2-sp.png" alt="" class="label xsp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4-r_chara.png" alt="" class="rchara1">
            </div>
        </div>
    </div>
    <div class="close-box more-btn close-box2">
        <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-btn2.png" alt="">
        <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pclose-hover-btn2.png" alt="">
    </div>
</div>

<?php get_footer();
