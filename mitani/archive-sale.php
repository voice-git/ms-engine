<?php
/*
Template Name: 自動車一覧
*/
?>

<?php get_header(); ?>

<?php if (is_paged()) : ?>
    <div class="used-sec1 seibi-sec1">
        <div class="gzone"></div>
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <div class="bg"></div>
        <div class="inner">
        </div>
    </div>

    <div class="used-sec2 archive-used-sec2">
        <div class="cars-box">
            <?php $args = array(
                    'post_status'=> 'publish',
                    'post_type'=> 'sale',
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
            ?>
            <div class="item">
                <img class="main-img" src="<?php the_field('image1'); ?>" alt="">
                <p class="title"><?php echo $title;?></p>
                <p class="text">車両価格　<span><?php the_field('price'); ?></span>万円<br>年式　　　<?php the_field('years'); ?><br>走行距離　<?php the_field('metar'); ?><br>修復歴　<?php the_field('syuhuku'); ?><br>車検　<?php the_field('shaken'); ?></p>
                <a href="<?php echo $link;?>" class="more-btn">詳しく見る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="pagenation-box pagenation-box2 xpc">
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
                'next_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle2.png" alt="">',
                'prev_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle1.png" alt="">',
                'mid_size'     => 2,
            ));
            echo '</div>';
            ?>
            <?php endif; ?>
        </div>
        <div class="pagenation-box pagenation-box2 xsp">
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
                'next_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle2.png" alt="">',
                'prev_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle1.png" alt="">',
                'mid_size'     => 1,
            ));
            echo '</div>';
            ?>
            <?php endif; ?>
        </div>
    </div>
<?php else:  ?>
    <div class="used-sec1 seibi-sec1">
        <div class="gzone"></div>
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <div class="bg"></div>
        <div class="inner">
            <div class="inner-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/used-archive/sec1-inner-bg.png" alt="">
            </div>
            <p class="top-rtitle">今シーズンの<br>オススメカーはこちら！</p>
            <div class="recom-car-box">
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
                        while ( $blog_query->have_posts() ):
                            $blog_query->the_post();
                            $title = get_the_title( $post->ID );
                            $link = get_permalink( $post->ID );
                ?>
                <a href="<?php echo $link;?>" class="item">
                    <img src="<?php the_field('image1'); ?>" alt="">
                    <p class="title"><?php echo $title;?></p>
                    <p class="text">車両価格　<span><?php the_field('price'); ?></span>万円<br>年式　　　<?php the_field('years'); ?><br>走行距離　<?php the_field('metar'); ?></p>
                </a>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div class="used-sec2">
        <div class="cars-box">
            <?php $args = array(
                    'post_status'=> 'publish',
                    'post_type'=> 'sale',
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
            ?>
            <div class="item">
                <img class="main-img" src="<?php the_field('image1'); ?>" alt="">
                <p class="title"><?php echo $title;?></p>
                <p class="text">車両価格　<span><?php the_field('price'); ?></span>万円<br>年式　　　<?php the_field('years'); ?><br>走行距離　<?php the_field('metar'); ?><br>修復歴　<?php the_field('syuhuku'); ?><br>車検　<?php the_field('shaken'); ?></p>
                <a href="<?php echo $link;?>" class="more-btn">詳しく見る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="pagenation-box pagenation-box1 xpc">
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
	            'next_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle2.png" alt="">',
                'prev_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle1.png" alt="">',
                'mid_size'     => 2,
            ));
            echo '</div>';
            ?>
            <?php endif; ?>
        </div>
        <div class="pagenation-box pagenation-box1 xsp">
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
	            'next_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle2.png" alt="">',
                'prev_text' => '<img src="https://www.ms-engine.co.jp/_wp/wp-content/themes/mitani/assets/images/used-archive/pagenation-angle1.png" alt="">',
                'mid_size'     => 1,
            ));
            echo '</div>';
            ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

    <div class="ss-sec6 mainte-last used-sec3">
        <?php get_template_part('common-banners2'); ?>
    </div>

    <div class="seibi-sec6 used-sec4 common-sec">
        <?php get_template_part('common-banners'); ?>
    </div>

    <?php get_footer();