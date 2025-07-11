<?php get_header(); ?>

    <div class="shituji-single-sec1 seibi-sec1">
        <div class="gzone"></div>
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <div class="bg"></div>
        <div class="inner">
            <h2>執事さんのおしごと記録</h2>
            <div class="bd-box">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) :
                the_post();
                $title = get_the_title();
                $content = get_the_content();
                $term = get_the_terms($post->ID,'shitujisan-cat');
                $data = get_the_modified_date( 'Y.n.j', $post->ID );
                $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().$NO_IMAGE_URL;
                ?>
                <div class="chara">
                    <img src="<?php echo z_taxonomy_image_url($term[0]->term_id); ?>" alt="">
                </div>
                <p class="cate">＃<?php echo $term[0]->name;?></p>
                <h2><?php echo $title;?></h2>
                <!--<p class="date"><?php echo $data;?></p>-->
                <div class="content">
                <?php echo $content;?>
                </div>
                <?php
                endwhile;
                endif;
                ?>
            </div>
            <a href="<?php echo home_url( '/archive-shituji/' ); ?>" class="more-btn">一覧へ戻る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
        </div>
    </div>

    <div class="seibi-sec6 used-sec4 common-sec">
    <?php get_template_part('common-banners'); ?>
    </div>

    <div class="ss-sec6 mainte-last used-sec3">
    <?php get_template_part('common-banners2'); ?>
    </div>

    <?php get_footer();