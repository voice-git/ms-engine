<?php get_header(); ?>

<a href="https://www.youtube.com/channel/UCMcBdP09hmlJ_saOn8ZUTfg" target="_blank" rel="noopener noreferrer" class="youtube-logo ss-logo anker-logo">
    <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/youtube-logo.png" alt="">
    <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/youtube-logo-sp.png" alt="">
</a>

<!-- <div class="news-sec1 single-sec1 common-sec1">
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo.png" alt="">
        </a>
        <div class="bg"></div>
        <div class="inner">
            <h1>MITA NEWS</h1>
        </div>
    </div> -->

<div class="news-sec2 single-sec2">
    <div class="news-sec2-nav news-sec2-nav2">
        <a href="<?php echo home_url('/news/'); ?>" class="nav">
            <p class="p1">新着</p>
            <p class="p2">ALL NEWS</p>
        </a>
        <a href="<?php echo home_url('/category/news/'); ?>" class="nav">
            <p class="p1">三谷からの<br class="xsp">お知らせ</p>
            <p class="p2">NEWS</p>
        </a>
        <a href="<?php echo home_url('/category/campaign/'); ?>" class="nav">
            <p class="p1">ミタニの<br>キャンペーン</p>
            <p class="p2">CAMPAIGN</p>
        </a>
        <a href="<?php echo home_url('/category/car-sales/'); ?>" class="nav">
            <p class="p1">車両販売日誌</p>
            <p class="p2">CAR SALES</p>
        </a>
        <a href="<?php echo home_url('/category/diary/'); ?>" class="nav">
            <p class="p1">ミタニの<br class="xsp">トリクミ</p>
            <p class="p2">MITANI DIARY</p>
        </a>
        <a href="<?php echo home_url('/archive-shituji/'); ?>" class="nav">
            <p class="p1">執事さんの<br>おしごと記録</p>
            <p class="p2">SHITUJI</p>
        </a>
    </div>
    <div class="inner">
        <div class="content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post();
                    $title = get_the_title();
                    $content = get_the_content();
                    $data = get_the_modified_date('Y.n.j', $post->ID);
                    $thumbnail = (get_the_post_thumbnail_url($post->ID)) ? get_the_post_thumbnail_url($post->ID) : get_template_directory_uri() . $NO_IMAGE_URL;
                ?>
                    <!--<div class="thumbnail">
                    <img src="<?php echo $thumbnail; ?>" alt="">
                </div>-->
                    <p class="date"><?php echo $data; ?></p>
                    <p class="title"><?php echo $title; ?></p>
                    <div class="cont"><?php echo $content; ?></div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>

<div class="single-sec3">
    <div class="news-sec2-nav xsp">
        <a href="<?php echo home_url('/news/'); ?>" class="nav">
            <p class="p1">新着</p>
            <p class="p2">ALL NEWS</p>
        </a>
        <a href="<?php echo home_url('/category/news/'); ?>" class="nav">
            <p class="p1">三谷からの<br class="xsp">お知らせ</p>
            <p class="p2">NEWS</p>
        </a>
        <a href="<?php echo home_url('/category/campaign/'); ?>" class="nav">
            <p class="p1">ミタニの<br>キャンペーン</p>
            <p class="p2">CAMPAIGN</p>
        </a>
        <a href="<?php echo home_url('/category/car-sales/'); ?>" class="nav">
            <p class="p1">車両販売日誌</p>
            <p class="p2">CAR SALES</p>
        </a>
        <a href="<?php echo home_url('/category/diary/'); ?>" class="nav">
            <p class="p1">ミタニの<br class="xsp">トリクミ</p>
            <p class="p2">MITANI DIARY</p>
        </a>
        <a href="<?php echo home_url('/archive-shituji/'); ?>" class="nav">
            <p class="p1">執事さんの<br>おしごと記録</p>
            <p class="p2">SHITUJI</p>
        </a>
    </div>
    <div class="box">
        <?php $args = array(
            'post_status' => 'publish',
            'order' => 'DESC',
            'posts_per_page' => 4,
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
                    <p class="date"><?php echo $data; ?></p>
                    <p class="title"><?php echo $title; ?></p>
                </a>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<div class="go-archive-btn">
    <a href="<?php echo home_url('/news/'); ?>">一覧に戻る</a>
</div>

<div class="houjin-sec4 used-sec4 common-sec">
    <?php get_template_part('common-banners'); ?>
</div>

<div class="ss-sec6 mainte-last">
    <?php get_template_part('common-banners2'); ?>
</div>

<?php get_footer();
