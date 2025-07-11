<?php
/*
Template Name: わたしの執事さん
*/
?>

<?php get_header(); ?>

    <div class="bg-charas">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/bg-charas.png" alt="">
    </div>

    <div class="bg-shituji">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/bg-shituji.png" alt="">
    </div>

    <div class="shituji-sec1 common-sec1">
        <div class="scroll-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mitani-policy/scroll-img.png" alt="">
        </div>
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo.png" alt="">
        </a>
        <div class="bg"></div>
        <div class="inner">
            <h1>わたしの執事さん</h1>
        </div>
    </div>

    <div class="shituji-arc-sec1 front">
        <div class="inner">
            <div class="archive-box">
                <?php $args = array(
                        'post_status'=> 'publish',
                        'post_type'=> 'shitujisan',
                        'order'=>'DESC',
                        'posts_per_page'=>3,
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
            <a href="<?php echo home_url( '/archive-shituji/' ); ?>" class="more-btn">執事さんのおしごと記録をのぞく<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
        </div>
    </div>

    <div class="common-anker-btn shituji-common-anker-btn">
        <a href="#anker1" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>わたしの<br class="sp xpc">執事さん</p>
        </a>
        <a href="#anker2" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>おうちの<br class="sp xpc">お掃除</p>
        </a>
        <a href="#anker3" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>庭まわりの<br class="sp xpc">お手入れ</p>
        </a>
        <a href="#anker4" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>家まわりの<br class="sp xpc">お手入れ</p>
        </a>
        <a href="#anker5" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>その他</p>
        </a>
        <a href="#anker5-2" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>防犯対策</p>
        </a>
        <a href="#anker6" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>ご利用価格一覧</p>
        </a>
        <a href="#anker7" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>よくあるご質問</p>
        </a>
        <a href="#anker8" class="item">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>ホーム<br class="sp xpc">エネルギー</p>
        </a>
    </div>

    <div class="shituji-sec2" id="anker1">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>わたしの執事さん</p>
        </div>
        <p class="first-text1">くらしのお困りごとはライフサポート事業部<br class="sp">「わたしの執事さん」にお任せください！</p>
        <div class="rtext-box fadeinElem toUp">
            <p class="rtext1">「わたしの執事さん」とは？</p>
            <p class="rtext2">些細なことでも頼めるサービスは<br class="xsp">ないのかな？<br class="xpc">困ってるけど、<br class="xsp">誰に頼めばいいのかわからない。</p>
            <p class="rtext3">そんなお悩みに応えます！</p>
        </div>
        <p class="text1">ガソリンスタンドでおなじみの<br class="xsp">三谷サービスエンジンが、<br>「お客様の生活にさらに寄り添いたい」<br>という想いから始めた地域密着型サービスです。<br>日常の小さな困り事から専門技術が必要なご依頼、<br>アフターサービスまで、<br class="xsp">柔軟に対応させていただきます。<br>まずはお気軽にお電話ください。</p>
        <p class="rtext4 fadeinElem toUp">私たちが提供する、<br>もう一つのサービスです。</p>
        <div class="chara-img1 fadeinElem toUp">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec2-img.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec2-img-sp.png" alt="">
        </div>
        <div class="label fadeinElem toUp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec2-label.png" alt="">
        </div>
        <p class="text2">お客様からたくさんの声を<br>いただきました！</p>
        <div class="voice-box fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec2-img2.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec2-img2-sp.png" alt="">
        </div>
        <a href="<?php echo home_url( '/archive-shituji/' ); ?>" class="more-btn">執事さんのおしごと記録をのぞく<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></a>
    </div>

    <div class="common-sec-top-img shituji-sec3-top-img fadeinElem toUp" id="anker2">
        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-top-img.jpg" alt="">
        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-top-img-sp.jpg" alt="">
    </div>

    <div class="shituji-sec3">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>おうちのお掃除</p>
        </div>
        <p class="first-text1">執事さんに頼める<br class="xsp">清掃のお仕事の一例をご紹介します。</p>
        <div class="box box1 fadeinElem toUp">
            <div class="chara-img chara-img3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-chara3.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-img3.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-img3-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <div class="inner">
                    <p class="title">エアコンのお掃除</p>
                    <p class="text">面倒なエアコン掃除、プロに任せてみませんか？三谷なら、エアコンのお掃除はもちろん、購入から取り付けまで全てお任せいただけます！</p>
                    <p class="text2">エアコンの購入・取り付け・清掃　など</p>
                    <p class="kakaku sp"><span>価格</span> </p>
                    <dl class="price mgt">
	                    <dt class="kakaku"><span>価格</span></dt>
	                    <dd class="mw150">家庭用エアコン １台</dd>
	                    <dd>11,000円〜<span>（税込）</span></dd>
                    </dl>
                    <dl class="price">
	                    <dt></dt>
	                    <dd class="mw150">家庭用エアコン １台<br><span>※自動お掃除機能付きエアコン</span></dd>
	                    <dd>23,100円〜<span>（税込）</span></dd>
                    </dl>
                    <dl class="price">
	                    <dt></dt>
	                    <dd class="mw150">業務用エアコン １台</dd>
	                    <dd>33,000円〜<span>（税込）</span></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="box box2 fadeinElem toUp">
            <div class="chara-img chara-img2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-chara2.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-img2.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-img2-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <div class="inner">
                    <p class="title">風呂、トイレなど<br>水回りの掃除</p>
                    <p class="text">毎日使うものだから、やっぱり清潔で綺麗な状態がいいですよね？水回りは特に汚れが気になるもの。水回りのお掃除も弊社にお任せください！</p>
                    <p class="text2" id="aircon-anker2">浴槽、浴室・トイレのお掃除　など</p>
                    <p class="kakaku sp"><span>価格</span> </p>
                    <dl class="price mgt">
	                    <dt class="kakaku"><span>価格</span></dt>
	                    <dd class="mw50">浴槽</dd>
	                    <dd>16,500円〜<span>（税込）</span></dd>
                    </dl>
                    <dl class="price">
	                    <dt></dt>
	                    <dd class="mw50">トイレ</dd>
	                    <dd>&ensp;5,500円〜<span>（税込）</span></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="box box3 fadeinElem toUp">
            <div class="chara-img chara-img1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-chara1.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-img1.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec4-img1-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <div class="inner">
                    <p class="title">キッチンまわりのお掃除</p>
                    <p class="text">年数が経つにつれ、どんどん汚れは溜まっていくもの。しかし自分で綺麗にするには、手間も時間もかかってしまいます。毎日の料理もきれいなキッチンなら快適に！</p>
                    <p class="text2">シンク・換気扇・コンロのお掃除　など</p>
                    <p class="kakaku sp"><span>価格</span> </p>
                    <dl class="price mgt">
	                    <dt class="kakaku"><span>価格</span></dt>
	                    <dd class="mw118">キッチン</dd>
	                    <dd>15,400円〜<span>（税込）</span></dd>
                    </dl>
                    <dl class="price">
	                    <dt></dt>
	                    <dd class="mw118">レンジフード １台</dd>
	                    <dd>16,500円〜<span>（税込）</span></dd>
                    </dl>
                    <dl class="price">
	                    <dt></dt>
	                    <dd class="mw118">換気扇 １台</dd>
	                    <dd>14,300円〜<span>（税込）</span></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="common-sec-top-img fadeinElem toUp">
        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-top-img.jpg" alt="">
        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-top-img-sp.jpg" alt="">
    </div>
    <div class="shituji-sec4" id="anker3">
        <div class="com-top-title-box">
            <div class="img-box">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg2.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>庭まわりのお手入れ</p>
        </div>
        <p class="first-text1">執事さんに頼めるお庭に関する<br class="xsp">お仕事の一例をご紹介します。</p>
        <div class="box box1 fadeinElem toUp">
            <div class="chara chara1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-chara1.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-img.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-img-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <p class="title">庭のお手入れ</p>
                <p class="text" id="josetu-anker">お手入れが面倒なお庭を綺麗にしませんか？邪魔な草木を取り除く作業はもちろん、新しい木や花の植え替えまでお任せください！<br>草刈り、芝刈り・庭木の伐採・除草剤も散布・木や花の植木　など</p>
                <p class="kakaku sp"><span>価格</span> </p>
                <dl class="price mgt">
                    <dt class="kakaku"><span>価格</span></dt>
                    <dd class="ls01">お気軽にお問い合わせください。</dd>
                </dl>
            </div>
        </div>
        <div class="box box2 fadeinElem toUp">
            <div class="chara chara2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-chara2.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-img2.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec5-img2-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <p class="title">除雪作業</p>
                <p class="text">毎日の雪かきの作業は、寒い中、時間も手間もかかり、思った以上に重労働。面倒な雪かき、任せてみませんか？</p>
                <p class="text2">玄関の除雪・駐車場の除雪・<br>ご自宅周辺の除雪　など</p>
                <p class="kakaku sp"><span>価格</span> </p>
                <dl class="price mgt">
                    <dt class="kakaku"><span>価格</span></dt>
                    <dd class="ls01">お気軽にお問い合わせください。</dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="common-sec-top-img shituji-sec5-top-img fadeinElem toUp" id="anker4">
        <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-top-img.jpg" alt="">
        <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-top-img-sp.jpg" alt="">
    </div>

    <div class="shituji-sec5 shituji-sec3">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>家まわりのお手入れ</p>
        </div>
        <p class="first-text1">執事さんに頼める住まいに関する<br class="xsp">仕事の一例をご紹介します。</p>
        <div class="box box1 fadeinElem toUp">
            <div class="chara-img chara-img1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-chara1.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-img.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-img-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <div class="inner">
                    <p class="title">家まわりの修繕</p>
                    <p class="text">家まわりのお困りごとならなんでもご相談ください。スタッフがすぐに駆けつけさせていただきます！</p>
                    <p class="text2">雨戸整理・清掃・ボイラー交換・修理・台風対策・ホームタンクの洗浄　など</p>
	                <p class="kakaku sp"><span>価格</span> </p>
	                <dl class="price mgt">
	                    <dt class="kakaku"><span>価格</span></dt>
	                    <dd class="ls01">お気軽にお問い合わせください。</dd>
	                </dl>
                </div>
            </div>
        </div>
        <div class="box box2 fadeinElem toUp">
            <div class="chara-img chara-img2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-chara2.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-img2.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-img2-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <div class="inner">
                    <p class="title">簡単な電機工事</p>
                    <p class="text">自分でやるのは大変だけど、どこに頼んでいいのかわからないような小さなお困りごとも弊社にお任せください！</p>
                    <p class="text2" id="nimotu-anker">LED照明に交換・コンセント増設・家電の配線接続　など</p>
	                <p class="kakaku sp"><span>価格</span> </p>
	                <dl class="price mgt">
	                    <dt class="kakaku"><span>価格</span></dt>
	                    <dd class="ls01">お気軽にお問い合わせください。</dd>
	                </dl>
                </div>
            </div>
        </div>
        <div class="box box3 fadeinElem toUp">
            <div class="chara-img chara-img3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-chara3.png" alt="">
            </div>
            <div class="img-box">
                <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-img3.jpg" alt="">
                <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec3-img3-sp.jpg" alt="">
            </div>
            <div class="text-box">
                <div class="inner">
                    <p class="title">荷物の運搬・不用品処分</p>
                    <p class="text">引越しの際に人手が足りない、不用品を処分したいけどどうしたらいいか分からないなんてことはありませんか？</p>
                    <p class="text2">部屋の家具や荷物の移動・引越しの荷造り・不用品の処分・家具の解体作業 など</p>
	                <p class="kakaku sp"><span>価格</span> </p>
	                <dl class="price mgt">
	                    <dt class="kakaku"><span>価格</span></dt>
	                    <dd class="ls01">お気軽にお問い合わせください。</dd>
	                </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="shituji-sec6" id="anker5">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>その他</p>
        </div>
        <div class="box fadeinElem2 toUp">
            <div class="bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/used-archive/sec1-inner-bg.png" alt="">
            </div>
            <div class="inner">
                <div class="box">
                    <div class="img-box">
                        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-img1.png" alt="">
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-img1-sp.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="pc">・タイヤ交換代行<br>・洗車代行</p>
                        <p class="sp">・タイヤ交換代行　　・洗車代行</p>
                        <p class="p2">※お車をお預かりして行います</p>
                    </div>
                </div>
                <div class="box box2">
                    <div class="img-box">
                        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-img2.png" alt="">
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-img2-sp.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="pc">・お墓のお手入れ<br>・買い物代行</p>
                        <p class="sp">・お墓のお手入れ　　・買い物代行</p>
                    </div>
                </div>
                <div class="box box3">
                    <div class="img-box">
                        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-img3.png" alt="">
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-img3-sp.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="pc">・ハチの巣駆除<br>・ネズミ駆除</p>
                        <p class="sp">・ハチの巣駆除　　・ネズミ駆除</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="anker5-2" class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>防犯対策</p>
        </div>
        <p class="text1">その他暮らしの様々な困り事について、<br class="xsp">お気軽にお問い合わせ下さい。</p>
<!--         <div class="banner-box mv-popup-anker"> -->
        <div class="banner-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-banner.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec6-banner-sp.jpg" alt="">
        </div>
    </div>

    <div id="overlay" class="overlay overlay2"></div>
    <div class="mv-popup">
        <div class="inner">
            <div class="close-box">×</div>
            <video id="video" playsinline controls autoplay muted src="<?php echo get_template_directory_uri(); ?>/assets/movie/mitanimov04-1.mp4"></video>
        </div>
    </div>

    <div class="shituji-sec7" id="anker6">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>ご利用価格一覧</p>
        </div>
        <div class="price_wrap">
	        <div class="block">
		         <p class="top"><span>おうちのお掃除</span></p>
		         <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7_kakakuhyou.jpg" width="1140" height="274" alt="エアコンのお掃除 家庭用エアコン１台11,000円〜（税込） 家庭用エアコン１台（自動お掃除機能付きエアコン）23,100円〜（税込） 業務用エアコン１台33,000円〜（税込）  風呂、トイレなど水回りの掃除 浴槽16,500円〜（税込） トイレ5,500円〜（税込）  キッチンまわりのお掃除 キッチン15,400円〜（税込） レンジフード１台16,500円〜（税込） 換気扇１台14,300円〜（税込）">
		         <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7_kakakuhyou_sp.jpg" alt="エアコンのお掃除 家庭用エアコン１台11,000円〜（税込） 家庭用エアコン１台（自動お掃除機能付きエアコン）23,100円〜（税込） 業務用エアコン１台33,000円〜（税込）  風呂、トイレなど水回りの掃除 浴槽16,500円〜（税込） トイレ5,500円〜（税込）  キッチンまわりのお掃除 キッチン15,400円〜（税込） レンジフード１台16,500円〜（税込） 換気扇１台14,300円〜（税込）">
	        </div>
	        <div class="block">
		         <p class="top"><span>庭まわりのお手入れ</span></p>
		         <p class="content">庭のお手入れ　/　除雪作業</p>
		         <p class="price">お気軽にお問い合わせください</p>
	        </div>
	        <div class="block">
		         <p class="top"><span>家まわりのお手入れ</span></p>
		         <p class="content xpc">家まわりの修繕　/　簡単な電機工事　/　荷物の運搬・不用品処分</p>
		         <p class="content xsp">家まわりの修繕<br>簡単な電機工事<br>荷物の運搬・不用品処分</p>
		         <p class="price">お気軽にお問い合わせください</p>
	        </div>
        </div>
<!--
        <div class="g-box">
            <div class="chara1">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-charas.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-charas-sp.png" alt="">
            </div>
            <div class="chara2 pc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-charas2.png" alt="">
            </div>
            <p class="p1">基本料金</p>
            <p class="p2">時間<span>5,500</span>円<span class="min">(税込)</span>〜</p>
            <p class="p3">＋以降1分ごとに110円(税込)追加</p>
            <p class="p4">※出張費は別途かかる場合があります。<br>※内容により料金は変動します。 <br>※表示価格はすべて税込価格です。<br>お支払いは作業終了後となります。<br>現金はもちろんクレジットカードもご利用いただけます。本社から半径10Kmを超えた場合は出張費がかかります。</p>
            <p class="p5">※表示価格はすべて税込価格です。</p>
        </div>
        <div class="graph-box">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-img.png" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-img-sp.png" alt="">
        </div>
        <p class="first-rtext">お見積りは無料です。<br class="xsp">まずはご連絡ください!</p>
        <div class="example-box">
            <p class="first-title">例えばこんなご利用の場合なら</p>
            <div class="content-box fadeinElem toUp">
                <div class="title-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-num1.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="p1">庭のお手入れの場合</p>
                        <p class="p2"><span>1</span>時間 <span class="price">5,500</span>円(税込)〜</p>
                    </div>
                </div>
                <p class="text">除草剤などを使用する場合は別途費用がかかります。<br class="xpc">作業時に機械などが必要な場合は別途お見積もりをいたします。</p>
                <div class="ba-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-img1.png" alt="">
                    </div>
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-img2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-box fadeinElem toUp">
                <div class="title-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-num2.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="p1">ハウスクリーニングの場合</p>
                        <p class="p2"><span>1</span>時間 <span class="price">5,500</span>円(税込)〜</p>
                    </div>
                </div>
                <p class="text">材料交換が発生した場合は別途費用が発生いたします。<br class="xpc">産業廃棄物の処理についても別途費用がかかります。</p>
                <div class="ba-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-img3.png" alt="">
                    </div>
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-img4.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-box fadeinElem toUp">
                <div class="title-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-num3.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="p1">エアコン修理・交換</p>
                        <p class="p2"><span class="price">5,500</span>円(税込)〜</p>
                    </div>
                </div>
                <p class="text">エアコン本体の交換が必要な場合は<br class="xpc">別途で費用がかかります。</p>
                <div class="ba-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-img5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-box fadeinElem toUp">
                <div class="title-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-num4.png" alt="">
                    </div>
                    <div class="text-box">
                        <p class="p1">灯油タンク/ボイラー修理・交換</p>
                        <p class="p2"><span class="price">49,500</span>円(税込)〜</p>
                    </div>
                </div>
                <p class="text">灯油タンク・ボイラー本体の交換が必要な場合は<br class="xpc">別途で費用がかかります。</p>
                <div class="ba-box">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-ex-img6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
-->
        <div class="howto-call-box">
            <p class="first-title">執事の呼び出し方</p>
            <div class="item-box fadeinElem toUp">
                <div class="left">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-call-img3.png" alt="">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-call-img3-sp.png" alt="">
                </div>
                <div class="right">
                    <p class="pc">下記の内容をお知らせください<br>１作業内容<br>２お名前<br>３ご住所<br>４ご連絡先（※携帯）</p>
                    <p class="sp">下記の内容をお知らせください<br>１作業内容　２お名前<br>３ご住所　　４ご連絡先（※携帯）</p>
                </div>
            </div>
            <div class="howto-angle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-howto-angle.png" alt="">
            </div>
            <div class="item-box fadeinElem toUp">
                <div class="left">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-call-img2.png" alt="">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-call-img2-sp.png" alt="">
                </div>
                <div class="right">
                    <p>現場を確認させていただき、<br>お見積もりを作成いたします。<br>もちろん無料です。</p>
                </div>
            </div>
            <div class="howto-angle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-howto-angle.png" alt="">
            </div>
            <div class="item-box fadeinElem toUp">
                <div class="left">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-call-img1.png" alt="">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-call-img1-sp.png" alt="">
                </div>
                <div class="right">
                    <p>作業完了後、その場で現金または<br>クレジットカードでお支払いください。</p>
                </div>
            </div>
            <!--<p class="second-title">執事取次店</p>
            <div class="ss-box">
                <div class="chara">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec7-shituji.png" alt="">
                </div>
                <div class="side">
                    <div class="text-box">
                        <p class="p1">ENEOS 東大通SS</p>
                        <p class="p2">TEL.076-252-8665</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS マンサーナ押野SS</p>
                        <p class="p2">TEL.076-245-4500</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS グリーンポート金沢SS</p>
                        <p class="p2">TEL.076-237-3131</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS 金沢西インターSS</p>
                        <p class="p2">TEL.076-249-6315</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS セントラル金石SS</p>
                        <p class="p2">TEL.076-267-4686</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS セレンディピティ大河端SS</p>
                        <p class="p2">TEL.076-238-3812</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS コーディアルののいちSS</p>
                        <p class="p2">TEL.076-248-2105</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS アサンテ宮永SS</p>
                        <p class="p2">TEL.076-275-8588</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS 長町SS</p>
                        <p class="p2">TEL.076-262-1711</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS ライフステージ泉台SS</p>
                        <p class="p2">TEL.076-241-9988</p>
                    </div>
                </div>
                <div class="side">
                    <div class="text-box">
                        <p class="p1">ENEOS 東力町SS</p>
                        <p class="p2">TEL.076-291-6008</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS 西大通SS</p>
                        <p class="p2">TEL.076-265-5880</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS ライヴスクエア近岡SS</p>
                        <p class="p2">TEL.076-237-7101</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS グリーンポート金沢SS</p>
                        <p class="p2">TEL.076-237-3131</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS 加賀産業道SS</p>
                        <p class="p2">TEL.076-248-0068</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS エコウィング御経塚SS</p>
                        <p class="p2">TEL.076-249-5155</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS ツインウェーブ松任SS</p>
                        <p class="p2">TEL.076-274-3688</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">カー・ドック三谷</p>
                        <p class="p2">TEL.076-294-8612</p>
                    </div>
                    <div class="text-box">
                        <p class="p1">ENEOS 城南SS</p>
                        <p class="p2">TEL.076-231-4655</p>
                    </div>
                </div>
            </div>-->
            <!--<div class="more-btn ss-more-btn sp">もっと詳しく見る<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></div>
            <div class="more-btn ss-more-btn sp close-btn">閉じる<img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-angle.png" alt=""><img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/btn-hover-angle.png" alt=""></div>-->

            <div class="shituji_tel">
                <p>お問い合わせ</p>
                <a href="tel:0120-189-422">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/tel.svg" alt="">
                    <span>0120-189-422</span>
                </a>
            </div>
            <div class="btn_area">
                <a href="<?php echo home_url( '/service-station/' ); ?>" class="ss-btn">
                    <div class="bg"></div>
                    <div class="text">
                        サービスステーション
                        <span>ＥＮＥＯＳサービスステーション１６店舗、<br>カー・ドック三谷でも受付中！</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/btn-angle-b.png" alt="">
                </a>
                <a href="<?php echo home_url( '/contact/' ); ?>#anker1" class="flow-btn">
                    <span class="en">FORM</span>
                    お申し込み
                    <span>こちらのフォームからでも<br class="xsp">お申し込みいただけます！</span>
                    <img class="no-hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/btn-angle-b.png" alt="">
                    <img class="hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/btn-hover-angle-b.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="shituji-sec8" id="anker7">
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg2.png" alt="">
            </div>
            <p>よくあるご質問</p>
        </div>
        <div class="qa-box">
            <dl class="qa-drop">
                <dt class="dawn-title" id="dawn">
                    <div class="chara">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-chara.png" alt="">
                    </div>
                    <div class="left">
                        <p class="title"><span>Q</span>土日祝日で料金は<br class="sp">変わりますか？</p>
                    </div>
                    <div class="right angle">
                        <img class="active" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle2.png" alt="">
                    </div>
                </dt>
                <dd class="dawn-answer">
                    <div class="answer-box">
                        <p class="answer">日・祝日は通常料金もしくは時間外料金の２割り増しとなります。</p>
                    </div>
                </dd>
            </dl>
            <dl class="qa-drop">
                <dt class="dawn-title" id="dawn">
                    <div class="chara">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-chara.png" alt="">
                    </div>
                    <div class="left">
                        <p class="title"><span>Q</span>キャンセル料は<br class="sp">発生しますか？</p>
                    </div>
                    <div class="right angle">
                        <img class="active" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle2.png" alt="">
                    </div>
                </dt>
                <dd class="dawn-answer">
                    <div class="answer-box">
                        <p class="answer">キャンセルは原則として2日前までにお申し付けください。<br class="pc">期限を過ぎますとキャンセル料が発生する場合がございます。<br class="pc">ご了承ください。</p>
                    </div>
                </dd>
            </dl>
            <dl class="qa-drop">
                <dt class="dawn-title" id="dawn">
                    <div class="chara">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-chara.png" alt="">
                    </div>
                    <div class="left">
                        <p class="title"><span>Q</span>追加料金は<br class="sp">発生しますか？</p>
                    </div>
                    <div class="right angle">
                        <img class="active" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle2.png" alt="">
                    </div>
                </dt>
                <dd class="dawn-answer">
                    <div class="answer-box">
                        <p class="answer">お申込みいただいた作業内容と相違がある場合、<br class="pc">作業時間を延長する場合、現場で資材が必要になった場合は、<br class="pc">作業担当者からお見積りをさせていただいた上で、追加料金をお支払い頂きます。</p>
                    </div>
                </dd>
            </dl>
            <dl class="qa-drop">
                <dt class="dawn-title" id="dawn">
                    <div class="chara">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-chara.png" alt="">
                    </div>
                    <div class="left">
                        <p class="title"><span>Q</span>依頼は何日前までに<br class="sp">したら良いですか？</p>
                    </div>
                    <div class="right angle">
                        <img class="active" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle2.png" alt="">
                    </div>
                </dt>
                <dd class="dawn-answer">
                    <div class="answer-box">
                        <p class="answer">即日対応も可能です。ただし、ご予約のお客様が優先となりますので、<br class="pc">事前のご予約をおすすめ致します。</p>
                    </div>
                </dd>
            </dl>
            <dl class="qa-drop">
                <dt class="dawn-title" id="dawn">
                    <div class="chara">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-chara.png" alt="">
                    </div>
                    <div class="left">
                        <p class="title"><span>Q</span>定期的に<br class="sp">頼みたいのですが？</p>
                    </div>
                    <div class="right angle">
                        <img class="active" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec8-angle2.png" alt="">
                    </div>
                </dt>
                <dd class="dawn-answer">
                    <div class="answer-box">
                        <p class="answer">お任せください。定期的な作業もお受けいたします。<br class="pc">お客様とご相談のうえ、内容について決めさせていただきます。</p>
                    </div>
                </dd>
            </dl>
        </div>
    </div>

    <div class="shituji-sec9" id="anker8">
        <div class="common-sec-top-img fadeinElem toUp">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec9-top-img.jpg" alt="">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec9-top-img-sp.jpg" alt="">
        </div>
        <div class="com-top-title-box">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/com-btn-bg.png" alt="">
            </div>
            <p>ホームエネルギー</p>
        </div>
        <p class="first-text1">ホームエネルギー機器の販売・修理・交換も承っております</p>
        <h3 class="com-black-title com-black-title2 fadeinElem toUp">エアコンのご相談・設置工事</h3>
        <div class="box fadeinElem toUp">
            <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec9-img2.jpg" alt="">
            </div>
            <div class="right">
                <p class="title">現在使用中のエアコンは<br class="xsp">快適ですか？</p>
                <p class="text">「使用中の古いエアコンを取り替えて、電気代を節約したい！」「電気店に行ってもたくさんありすぎて、どれがよいのかわからない。」そんなお客様のエアコン選びから、取付・設置工事までお手伝いをさせていただきます。また、快適にエアコンを利用いただくために、細部まで忍び込んだ汚れをきれいにする“ルームエアコン洗浄”もお勧めいたします！エアコンのダニやカビの発生を防ぐためにも、是非一度お試しください。</p>
            </div>
        </div>
        <h3 class="com-black-title com-black-title1 fadeinElem toUp">エコフィール（高効率石油給湯器）</h3>
        <div class="box fadeinElem toUp">
            <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/sec9-img.jpg" alt="">
            </div>
            <div class="right">
                <p class="title">省エネ型石油給湯器 <br class="xsp">エコフィール</p>
                <p class="text" id="aircon-anker">省エネ型石油給湯器「エコフィール」は、灯油の使用量を節約し、CO2の排出量を削減する、環境にも家計にも配慮した、新しい石油給湯器です。年間、灯油79リットル節約でき、杉の木14本分のCO2削減に！49dBの低騒音＆灯油のにおいも低減だから、快適にご利用いただけます。</p>
            </div>
        </div>
    </div>
    
    <div class="fixedbtn">
	    <a href="/contact/#panel3">
            <img class="xpc" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/fixedbtn.png" width="160" height="160" alt="お問い合わせはこちらから">
            <img class="xsp" src="<?php echo get_template_directory_uri(); ?>/assets/images/shituji/fixedbtn_sp.png" alt="お問い合わせはこちらから">
	    </a>
    </div>

    <div class="houjin-sec4 used-sec4 common-sec fadeinElem toUp">
        <?php get_template_part('common-banners'); ?>
    </div>

    <div class="ss-sec6 mainte-last">
        <?php get_template_part('common-banners2'); ?>
    </div>

    <?php get_footer();