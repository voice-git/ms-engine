<?php
/*
Template Name: 執事さんのおしごと記録
*/
?>

<?php get_header(); ?>

    <div class="shituji-arc-sec1 seibi-sec1">
        <div class="gzone"></div>
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <div class="bg"></div>
        <div class="inner">
            <div class="inner-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/used-archive/sec1-inner-bg.png" alt="">
            </div>
            <h2>執事さんのおしごと記録</h2>
            <p class="sec1-first-text">執事さんは日々、多種多様なお困りごとを柔軟に対応し、<br class="xpc">多くのお客様に喜んでいただいております。<br class="xpc">そんな執事さんのおしごとの一例をご紹介致します。</p>
            <div class="archive-box">
                <?php $args = array(
                        'post_status'=> 'publish',
                        'post_type'=> 'shitujisan',
                        'order'=>'DESC',
                        'posts_per_page'=>12,
                        'paged'=>$paged
                    );
                    $blog_query = new WP_Query( $args );
                    if ( $blog_query->have_posts() ):
                        while ( $blog_query->have_posts() ):
                            $blog_query->the_post();
                            $title = get_the_title( $post->ID );
                            $link = get_permalink( $post->ID );
                            $term = get_the_terms($post->ID,'shitujisan-cat');
                            $data = get_the_modified_date( 'Y.n.j', $post->ID );
                            $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'midium' )) ? get_the_post_thumbnail_url( $post->ID, 'midium' ) : get_template_directory_uri().$NO_IMAGE_URL;
                ?>
                <a href="<?php echo $link;?>" class="item">
                    <div class="chara">
                        <img src="<?php echo z_taxonomy_image_url($term[0]->term_id); ?>" alt="">
                    </div>
                    <p class="cate"># <?php echo $term[0]->name;?></p>
                    <div class="thumbnail">
                        <img src="<?php echo $thumbnail;?>" alt="">
                    </div>
                    <!--<p class="date"><?php echo $data;?></p>-->
                    <p class="title"><?php echo $title;?></p>
                    <p class="text"><?php the_excerpt(); ?></p>
                </a>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="pagenation-box">
            <?php if ($blog_query->max_num_pages > 1) : ?>
            <?php
            $limitnum = 999999999;
            echo '<div class="p-blog__pager">';
            echo paginate_links(array(
                'base'         => str_replace($limitnum, '%#%', esc_url(get_pagenum_link($limitnum))),
                'format'       => '',
                'current'      => max(1, get_query_var('paged')),
                'total'        => $blog_query->max_num_pages,
                'type'         => 'list',
                'next_text' => '<img src="https://www.ms-engine.co.jp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle3.png" alt="">',
                'prev_text' => '<img src="https://www.ms-engine.co.jp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle3.png" alt="">',
                'mid_size'     => 3,
            ));
            echo '</div>';
            ?>
            <?php endif; ?>
        </div>
        </div>
    </div>

    <div class="shituji-arc-sec2">
        <h2>お客様の声</h2>
        <div class="box">
            <div class="item">
                <div class="bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-bg.png" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-logo1.png" alt="">
                </div>
                <div class="inner">
                    <p class="title">礼儀正しくて感心！<br>またお願いしたいと思いました。</p>
                    <p class="text">毎年自分で草を刈っていましたが、年々足腰への負担を感じてきて、そろそろ業者などを雇えないかと考えていた頃、三谷サービスエンジンさんのサービスを知りました。どんな業者さんがくるのかとても不安に感じていましたが、作業も丁寧で、礼儀正しい方がいらしたので、とても安心しました。またこちらのサービスを利用させていただきたいと思います。（60代 女性）</p>
                </div>
            </div>
            <div class="item">
                <div class="bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-bg.png" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-logo2.png" alt="">
                </div>
                <div class="inner">
                    <p class="title">手早く不用品を処分してくれて<br>とても助かりました。</p>
                    <p class="text">処分の方法がわからず、ずっと放置していた家具について三谷サービスエンジンさんにご相談したところ、うちで処分しますよ！ということなので依頼させていただきました。ただ処分をするだけでなく、手早くパキパキと処分してくれたのでとても気持ちが良かったです。本当に助かりました。（60代 男性）</p>
                </div>
            </div>
            <div class="item">
                <div class="bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-bg.png" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-logo3.png" alt="">
                </div>
                <div class="inner">
                    <p class="title">驚くほどキレイにしてもらい、<br>電気代も安くなりました。</p>
                    <p class="text">エアコンの掃除に困っていたのでこちらにお電話をさせていただきました。ひどく汚れていたのにも関わらず、驚くほどキレイにしてもらい、おかげさまで電気代の方もこれまでより遥かに安く済むようになりました。埃っぽく感じていた部屋の空気も嘘だったかのようで、はやく依頼しておけばよかったと思いました！（60代 男性）</p>
                </div>
            </div>
            <div class="item">
                <div class="bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-bg.png" alt="">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji-archive/sec2-logo4.png" alt="">
                </div>
                <div class="inner">
                    <p class="title">いつも同じ方が<br>対応してくれて安心！</p>
                    <p class="text">重いものが動かせないことがしょっちゅうあるので、よく業者さんにお願いしていたのですが、毎回違う業者さんが来るたびに説明するのが面倒でした。ですが、三谷さんでは、いつも同じ方が説明せずとも慣れた手つきで対応してくれるので、気を使わずとても楽で安心してお任せしています。（70代 女性）</p>
                </div>
            </div>
        </div>
    </div>

    <div class="seibi-sec6 used-sec4 common-sec">
        <?php get_template_part('common-banners'); ?>
    </div>

    <div class="ss-sec6 mainte-last used-sec3">
        <?php get_template_part('common-banners2'); ?>
    </div>

    <?php get_footer();