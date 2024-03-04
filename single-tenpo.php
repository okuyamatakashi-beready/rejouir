<?php include("template/meta.php"); ?>
<body>


<?php get_header(); ?>
<?php 
    $salon_mv_left = get_field('salon_mv_left');
    $salon_mv_right = get_field('salon_mv_right');
    $logo = get_field('logo');
    $feature = get_field('feature');
    $feature_detail = get_field('feature_detail');
    $cut = get_field('cut');
    $color = get_field('color');
    $perm = get_field('perm');
    $straight = get_field('straight');
    $treatment = get_field('treatment');
    $others = get_field('others');
    $address = get_field('address');
    $map = get_field('map');
    $tel = get_field('tel');
    $open = get_field('open');
    $close = get_field('close');
    $reserve = get_field('reserve');
    $salon_img = get_field('salon_img');
    $insta_shortcode = get_field('insta_shortcode');
    $gel = get_field('gel');
    $foot = get_field('foot');
    $other_nail = get_field('other_nail');
    $off = get_field('off');
    $only_off = get_field('only_off');
    $matsuge = get_field('matsuge');
    $other_eye = get_field('other_eye');
    $off_eye = get_field('off_eye');
    $only_off_eye = get_field('only_off_eye');
    $insta_link = get_field('insta_link');
    $salon_name = get_field('salon_name');
    ?>

<div id="salon_mv" class="">
    <div class="flex">
        <div class="salon_mv_left" style="background-image: url(<?php echo $salon_mv_left;?>);"></div>
        <div class="salon_mv_right" style="background-image: url(<?php echo $salon_mv_right;?>);"></div>
    </div>
    <h1>
        <img src="<?php echo $logo;?>" alt="" class="">
    </h1>
</div>

<section class="salon_feature">
    <div class="container">
        <h1 class="common_ttl">
            <strong>FEATURE</strong>
            <span>特徴</span>
        </h1>

        <div class="feature_content">
            <strong><?php echo $feature;?></strong>
            <p><?php echo $feature_detail;?></p>
        </div>
    </div>
</section>

<section class="salon_staff">
    <h1 class="common_ttl">
        <strong>STAFF</strong>
        <span>スタッフ紹介</span>
    </h1>

    <div class="container">
        <ul class="flex">

        <?php
            
            $tenpo = get_the_ID();
            $terms = get_the_terms($tenpo, 'salon');
            if ($terms && !is_wp_error($terms)) {
                // タームIDを取得
                $term_id = $terms[0]->term_id;
}
            $args = array(
                'post_type' => 'staff_info', // スタッフ投稿タイプ
                'posts_per_page' => -1, // 全件取得
                'meta_key' => 'priority', // 追記
                'orderby' => 'meta_value_num', // 追記
                'order' => 'ASC', // 追記

                'meta_query' => array(
                    array(
                        'key' => 'staff_store', // カスタムフィールドで定義したカスタムタクソノミーのフィールド名
                        'value' => $term_id, // 現在表示している店舗ページのID
                        'compare' => '=' // フィールド値と比較する方法
                    )
                )
            );
            ?>

            <?php $staff_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

            <?php if ( $staff_query->have_posts() ) :

                while ( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
                <?php 
                $job = get_field('job');
                $priority = get_field('priority');
                $instagram = get_field('instagram');
                $staff_slider = get_field('staff_slider');
                ?>
                
            <li>
                <figure>
                    <img src="<?php echo $staff_slider; ?>" alt="" class="">
                    <figcaption>
                        <p>
                            <span><?php echo $job; ?></span>
                            <span><?php the_title(); ?></span>

                        </p>
                    </figcaption>
                </figure>
                <?php if($instagram): ?>
                    <a href="<?php echo $instagram; ?>" class="staff_icon" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/salon/staff_insta_icon.svg" alt="" class="">
                    </a>
                <?php endif; ?>
                
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>



        </ul>
    </div>
</section>
<!-- //salon_staff -->
<section id="menu">
    <div class="menu_container">

        <h1 class="common_ttl">
            <strong>MENU</strong>
            <span>メニュー</span>
        </h1>
        <div class="flex">
            <?php if( have_rows('cut') ): ?>
            <dl>
                <dt class="menu_toggle flex">CUT<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('cut') ): the_row();
                        $cut_name = get_sub_field('cut_name');
                        $cut_price = get_sub_field('cut_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $cut_name;?></span>
                        <span><?php echo $cut_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('color') ): ?>
            <dl>
                <dt class="menu_toggle flex">COLOR<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('color') ): the_row();
                        $color_name = get_sub_field('color_name');
                        $color_price = get_sub_field('color_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $color_name;?></span>
                        <span><?php echo $color_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('perm') ): ?>
            <dl>
                <dt class="menu_toggle flex">PERM<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('perm') ): the_row();
                        $perm_name = get_sub_field('perm_name');
                        $perm_price = get_sub_field('perm_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $perm_name;?></span>
                        <span><?php echo $perm_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('straight') ): ?>
            <dl>
                <dt class="menu_toggle flex">STRAIGHT<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('straight') ): the_row();
                        $straight_name = get_sub_field('straight_name');
                        $straight_price = get_sub_field('straight_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $straight_name;?></span>
                        <span><?php echo $straight_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('treatment') ): ?>
            <dl>
                <dt class="menu_toggle flex">TREATMENT<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('treatment') ): the_row();
                        $treatment_name = get_sub_field('treatment_name');
                        $treatment_price = get_sub_field('treatment_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $treatment_name;?></span>
                        <span><?php echo $treatment_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('spa') ): ?>
            <dl>
                <dt class="menu_toggle flex">HEAD SPA<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('spa') ): the_row();
                        $spa_name = get_sub_field('spa_name');
                        $spa_price = get_sub_field('spa_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $spa_name;?></span>
                        <span><?php echo $spa_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('others') ): ?>
            <dl>
                <dt class="menu_toggle flex">OTHERS<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('others') ): the_row();
                        $others_name = get_sub_field('others_name');
                        $others_price = get_sub_field('others_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $others_name;?></span>
                        <span><?php echo $others_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>

            <?php if( have_rows('gel') ): ?>
            <dl>
                <dt class="menu_toggle flex">ジェル<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('gel') ): the_row();
                        $gel_name = get_sub_field('gel_name');
                        $gel_price = get_sub_field('gel_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $gel_name;?></span>
                        <span><?php echo $gel_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('foot') ): ?>
            <dl>
                <dt class="menu_toggle flex">フット<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('foot') ): the_row();
                        $foot_name = get_sub_field('foot_name');
                        $foot_price = get_sub_field('foot_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $foot_name;?></span>
                        <span><?php echo $foot_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('other_nail') ): ?>
            <dl>
                <dt class="menu_toggle flex">その他（NAIL）<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('other_nail') ): the_row();
                        $other_nail_name = get_sub_field('other_nail_name');
                        $other_nail_price = get_sub_field('other_nail_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $other_nail_name;?></span>
                        <span><?php echo $other_nail_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('off') ): ?>
            <dl>
                <dt class="menu_toggle flex">付替オフ<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('off') ): the_row();
                        $off_name = get_sub_field('off_name');
                        $off_price = get_sub_field('off_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $off_name;?></span>
                        <span><?php echo $off_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('only_off') ): ?>
            <dl>
                <dt class="menu_toggle flex">オフのみ<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('only_off') ): the_row();
                        $only_off_name = get_sub_field('only_off_name');
                        $only_off_price = get_sub_field('only_off_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $only_off_name;?></span>
                        <span><?php echo $only_off_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('matsuge') ): ?>
            <dl>
                <dt class="menu_toggle flex">まつげエクステ<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('matsuge') ): the_row();
                        $matsuge_name = get_sub_field('matsuge_name');
                        $matsuge_price = get_sub_field('matsuge_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $matsuge_name;?></span>
                        <span><?php echo $matsuge_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('other_eye') ): ?>
            <dl>
                <dt class="menu_toggle flex">その他（EYE）<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('other_eye') ): the_row();
                        $other_eye_name = get_sub_field('other_eye_name');
                        $other_eye_price = get_sub_field('other_eye_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $other_eye_name;?></span>
                        <span><?php echo $other_eye_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('off_eye') ): ?>
            <dl>
                <dt class="menu_toggle flex">付替オフ<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('off_eye') ): the_row();
                        $off_eye_name = get_sub_field('off_eye_name');
                        $off_eye_price = get_sub_field('off_eye_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $off_eye_name;?></span>
                        <span><?php echo $off_eye_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            <?php if( have_rows('only_off_eye') ): ?>
            <dl>
                <dt class="menu_toggle flex">オフのみ<img src="<?php echo get_template_directory_uri(); ?>/images/salon/menu_arrow.svg" alt="" class=""></dt>
                <dd class="flex">
                    <?php while( have_rows('only_off_eye') ): the_row();
                        $only_off_eye_name = get_sub_field('only_off_eye_name');
                        $only_off_eye_price = get_sub_field('only_off_eye_price');
                    ?>
                    <div class="flex">
                        <span><?php echo $only_off_eye_name;?></span>
                        <span><?php echo $only_off_eye_price;?></span>
                    </div>
                    <?php endwhile;?>
                    
                </dd>
            </dl>
            <?php endif; ?>
            
            
            
        </div>
    </div>
    <!-- //menu_container -->
</section>
<!-- //menu -->

<section id="salon_date">
    <h1 class="common_ttl">
        <strong>SALON DATE</strong>
        <span>サロン情報</span>
    </h1>
    <div class="salon_container flex">
        <div class="salon_info">
            <figure>
                <img src="<?php echo $logo;?>" alt="">
            </figure>

            <p>
                <?php echo $address;?>
                <a href="<?php echo $map;?>">GoogleMap</a>
            </p>

            <p>tel. <?php echo $tel;?></p>

            <p>
                open<br>
                <?php echo $open;?>
            </p>
            
            <p>
                close<br>
                <?php echo $close;?>
            </p>

            <a href="<?php echo $reserve;?>" class="reserve">RESERVE</a>
        </div>
        <div class="salon_date_img date_slider">
            <?php if( have_rows('salon_img') ): ?>
                <?php while( have_rows('salon_img') ): the_row();
                        $slide_img = get_sub_field('slide_img');
                    ?>
                    <div class="date_img" style="background-image: url(<?php echo $slide_img;?>);"></div>
                <?php endwhile;?>
            <?php endif; ?>
        </div>
        
    </div>
    <!-- //salon_container -->
</section>
<!-- //salon_date -->
<?php if($insta_shortcode): ?>
<section id="instagram">
    <div class="container">
        <h2 class="sec_ttl">
            <strong>INSTAGRAM</strong>
            <span>公式インスタグラム</span>
        </h2>
    </div>

    <div class="rejouir_group">
        <div class="right_container">
            <div class="insta_link flex">
                <img src="<?php echo get_template_directory_uri(); ?>/images/insta_rejouir.svg" alt="" class="">
                <a href="<?php echo do_shortcode($insta_link); ?>" target="_blank" class="flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/insta_icon.svg" alt="" class="pc">
                    <span><?php the_title();?></span>
                </a>
            </div>
            <?php $insta_shortcode = get_field('insta_shortcode'); ?>
            <?php echo do_shortcode($insta_shortcode); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- //instagram -->

<?php get_footer(); ?>