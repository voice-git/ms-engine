<?php get_header(); ?>

    <div class="used-single-sec1 used-sec1 seibi-sec1">
        <div class="gzone"></div>
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <div class="bg"></div>
        <div class="inner">
            <div class="box1">
                <div class="left">
                    <div class="main-img-box">
                        <img src="<?php the_field('image1'); ?>" alt="">
                    </div>
                    <div class="sub-img-box">
                        <div class="img-box">
                            <img src="<?php the_field('image2'); ?>" alt="">
                        </div>
                        <div class="img-box">
                            <img src="<?php the_field('image3'); ?>" alt="">
                        </div>
                        <div class="img-box">
                            <img src="<?php the_field('image4'); ?>" alt="">
                        </div>
                        <div class="img-box">
                            <img src="<?php the_field('image5'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <p class="title"><?php single_post_title(); ?></p>
                    <p class="p1">車両価格　<span><?php the_field('price'); ?></span>万円</p>
                    <div class="text-box">
                        <div class="box">
                            <p>年式　<?php the_field('years'); ?></p>
                            <p>走行距離　<?php the_field('metar'); ?></p>
                        </div>
                        <div class="box">
                            <p>修復歴　<?php the_field('syuhuku'); ?></p>
                            <p>車検　<?php the_field('shaken'); ?></p>
                        </div>
                    </div>
                    <div class="option-box">
                        <p><?php the_field('option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="box2">
                <div class="side">
                    <div class="item">
                        <p class="title">ボディタイプ</p>
                        <p class="content"><?php the_field('body'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">色</p>
                        <p class="content"><?php the_field('color'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">車台末尾番号</p>
                        <p class="content"><?php the_field('number'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">排気量</p>
                        <p class="content"><?php the_field('haikiryou'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">エンジン種別</p>
                        <p class="content"><?php the_field('engine'); ?></p>
                    </div>
                </div>
                <div class="side">
                    <div class="item">
                        <p class="title">駆動方式</p>
                        <p class="content"><?php the_field('kudou'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">ハンドル</p>
                        <p class="content"><?php the_field('handle'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">ミッション</p>
                        <p class="content"><?php the_field('mission'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">乗車定員</p>
                        <p class="content"><?php the_field('teiinn'); ?></p>
                    </div>
                    <div class="item">
                        <p class="title">ドア数</p>
                        <p class="content"><?php the_field('door'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="used-single-sec2">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>お問い合わせ</p>
        </div>
        <div class="contact-box">
            <p class="first-title">下記のフォームに必要事項をご入力のうえ、「入力内容の確認」ボタンをクリックしてください。<br><span>（* 印は入力必須項目です。）</span></p>
            <div class="form-container">
                <?php echo do_shortcode('[contact-form-7 id="254" title="コンタクトフォーム 1"]'); ?>
            </div>
            <div class="tel-box">
                <p class="p1">お電話でお問い合わせの方は</p>
                <p class="p2">TEL.076-214-3311</p>
            </div>
        </div>
    </div>

    <div class="ss-sec6 mainte-last used-sec3">
        <?php get_template_part('common-banners2'); ?>
    </div>

    <div class="seibi-sec6 used-sec4 common-sec">
        <?php get_template_part('common-banners'); ?>
    </div>

    <?php get_footer();