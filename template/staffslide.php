<?php 
    $mv_left_img = get_field('mv_left_img');
    $mv_right_img = get_field('mv_right_img');
    $catch = get_field('catch');
    $type = get_field('type');
    $job = get_field('job');
    $year = get_field('year');
    $q_01 = get_field('q_01');
    $q_02 = get_field('q_02');
    $q_03 = get_field('q_03');
    $q_04 = get_field('q_04');
    $q_05 = get_field('q_05');
    $staff_slider = get_field('staff_slider');
    ?>

<section id="staff_voice">
    <h1 class="common_ttl">
        <strong>STAFF VOICE</strong>
        <span>スタッフの声</span>
    </h1>

    <div class="staff_voice_container">

        <div class="staff_slider flex">
            
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
                'posts_per_page' => '-1', //表示件数。-1なら全件表示
                'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                'paged' => $paged,
                'post_type' => 'staff_info',
                'order' => 'ASC',
                'meta_query' => [
                    [
                        'key' => 'interview_or',
                        'value' => '1',
                        'compare' => '='
                    ]
                ],
                );
        ?>
        <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

        <?php if ( $my_query->have_posts() ) :

            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

            <?php 
                $catch = get_field('catch');
                $type = get_field('type');
                $job = get_field('job');
                $year = get_field('year');
                $staff_slider = get_field('staff_slider');
                ?>

            <div class="staff_item">
                <a href="<?php the_permalink(); ?>">
                    <figure>
                        <img src="<?php echo $staff_slider;?>" alt="">
                        <figcaption class="<?php echo $type;?>"><?php echo $type;?></figcaption>
                    </figure>
                    <div class="staff_text">
                        <p><?php echo $catch;?></p>
                        <span><?php echo $job;?>/ <?php echo $year;?>年入社</span>
                        <span><?php the_title(); ?></span>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
        <!-- //staff_slider -->
        <a href="/voice" class="all">ALL VIEW</a>
    </div>
</section>

