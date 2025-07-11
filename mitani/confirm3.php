<?php
/*
Template Name: 灯油配達確認画面
*/
?>
    
    <?php get_header(); ?>

    <div class="used-single-sec2" style="margin-top:0; padding-top:120px;">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>灯油配達</p>
        </div>
        <div class="contact-box">
            <p class="first-title">内容がよろしければ送信するボタンを押してください。</p>
            <div class="form-container">
                <?php echo do_shortcode('[contact-form-7 id="789" title="灯油配達確認画面"]'); ?>
            </div>
            <div class="tel-box">
                <p class="p1">お電話でお問い合わせの方は</p>
                <p class="p2">TEL.076-214-3311</p>
            </div>
        </div>
    </div>
	<script>
		var selectValue = document.querySelector('.container .select').textContent;
		console.log(selectValue);
		
		if (selectValue === 'ホームタンク') {
			document.querySelector('[data-id="container01"] .container').style.display = 'block';
		}else if (selectValue === 'ドラム缶'){
			document.querySelector('[data-id="container02"] .container').style.display = 'block';
		}else if (selectValue === 'ポリ缶'){
			document.querySelector('[data-id="container03"] .container').style.display = 'block';
		}else if (selectValue === '一斗缶'){
			document.querySelector('[data-id="container04"] .container').style.display = 'block';
		}
	</script>
    <div class="ss-sec6 mainte-last used-sec3">
        <?php get_template_part('common-banners2'); ?>
    </div>

    <div class="seibi-sec6 used-sec4 common-sec">
        <?php get_template_part('common-banners'); ?>
    </div>

    <?php get_footer();